<?php

/*
 * Copyright 2015 NACOSS UNN Developers Group (NDG).
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

class Admin {

    const WEBMASTER = "WEBMASTER";
    const TREASURER = "TREASURER";
    const PRO = "PRO";
    const LIBRARIAN = "LIBRARIAN";
    const CLASS_REP = "CLASS_REP";

    private $adminInfo;

    function Admin() {
        $this->adminInfo = $this->getAdminData();
    }

    protected function getAdminInfo() {
        return $this->adminInfo;
    }

    /**
     * Validates admin cookies against admin details in database
     * @return boolean true if admin cookies match admin details in database, else false
     */
    public function isLoggedIn() {
        if (isset($this->adminInfo)) {
            $match = strcasecmp($this->adminInfo['password'], $this->getAdminCookiesPassword());
            return empty($this->adminInfo['password']) ? false : $match === 0;
        }
        return false;
    }

    public function getAdminType() {
        if (isset($this->adminInfo)) {
            return $this->adminInfo['type'];
        }
        return ""; //Restrict access if record does not exist
    }

    public function getAdminID() {
        if (isset($this->adminInfo)) {
            return $this->adminInfo['username'];
        }
        return ""; //Restrict access if record does not exist
    }

    public function getAdminPassword() {
        if (isset($this->adminInfo)) {
            return $this->adminInfo['password'];
        }
        return ""; //Restrict access if record does not exist
    }

    public function getAdminEmail() {
        if (isset($this->adminInfo)) {
            return $this->adminInfo['email'];
        }
        return ""; //Restrict access if record does not exist
    }

    public function activateLogin() {
        if ($this->isLoggedIn()) {
            return $this->setAdminCookies($this->getAdminCookiesID(), $this->getAdminCookiesPassword());
        }
        return false;
    }

    public function getAdminData() {
        $query = "select * from admins where username = '" . $this->getAdminCookiesID() . "'";
        $link = AdminUtility::getDefaultDBConnection();
        $result = mysqli_query($link, $query);
        if ($result) {
            $array = mysqli_fetch_array($result);
            return $array;
        }
        //Log error
        AdminUtility::logMySQLError($link);

        return array();
    }

    /**
     * @returns Admin display name
     */
    public function getDisplayName() {
        return $this->getAdminCookiesID();
    }

    /**
     * Validates admin details and set cookies
     * @param type $ID admin's username
     * @param type $password admin's password
     * @return boolean true if admin was successfully validated and cookies was sucessfully set, false otherwise
     */
    public function loginAdmin($ID, $password) {
        if (!(empty($ID) | empty($password))) {
            $query = "select * from admins where username = '$ID'";
            $link = AdminUtility::getDefaultDBConnection();
            $result = mysqli_query($link, $query);
            if ($result) {
                $row = mysqli_fetch_array($result);
                $hash = $row['password'];
                if ($this->verifyPassword($password, $hash)) {
                    $this->adminInfo = $row;
                    $ok = $this->setAdminCookies($ID, $hash);
                    return $ok;
                }
            }
            //Log error
            AdminUtility::logMySQLError($link);

            //Not found or no match
            throw new Exception("Wrong username or password");
        } else {
            throw new Exception("Some fields are empty");
        }
    }

    private function validatePassword($password) {
        if (strlen($password) >= 8) {
            $regex = "#(\w*[\s\S]*[A-Z]+)+#";
            if (!preg_match($regex, $password)) {
                throw new Exception("Invalid password: try switching letter cases");
            }
        } else {
            throw new Exception("Password should be up to 8 characters long");
        }
    }

    public function changePassword($oldPassword, $newPassword1, $newPassword2) {
        if ($this->verifyPassword($oldPassword, $this->getAdminPassword())) {
            //Check password
            $this->validatePassword($newPassword1);
            $ok = strcmp($newPassword1, $newPassword2) === 0;
            if ($ok) {
                $link = AdminUtility::getDefaultDBConnection();
                $pwd = crypt($newPassword1);
                $query = "update admins set password='" . $pwd . "' where username='" . $this->getAdminID() . "'";
                mysqli_query($link, $query);
                //Log error
                AdminUtility::logMySQLError($link);
                //Reload data
                $this->adminInfo = $this->getAdminData();
            } else {
                throw new Exception("Passwords do not match");
            }
        } else {
            throw new Exception("Wrong password");
        }
    }

    public function changeEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $link = AdminUtility::getDefaultDBConnection();
            $query = "update admins set email='" . $email . "' where username='" . $this->getAdminID() . "'";
            mysqli_query($link, $query);
            //Log error
            AdminUtility::logMySQLError($link);
            //Reload data
            $this->adminInfo = $this->getAdminData();
        } else {
            throw new Exception("Invalid mail");
        }
    }

    public function logoutAdmin() {
        return $this->clearAdminCookies();
    }

    /**
     * @returns admins username from cookies
     */
    private function getAdminCookiesID() {
        return filter_input(INPUT_COOKIE, "admin_id");
    }

    /**
     * @returns admins password from cookies
     */
    private function getAdminCookiesPassword() {
        return filter_input(INPUT_COOKIE, "admin_pwd");
    }

    /**
     * Sets cookies
     * @param type $id
     * @param type $password
     * @return type
     */
    private function setAdminCookies($id, $password) {
        $expire = time() + (60 * 60 * 1); //1 hour i.e 60secs * 60mins * 1hr
        $ok = setcookie("admin_id", $id, $expire);
        if ($ok) {
            $ok = setcookie("admin_pwd", $password, $expire);
        }
        return $ok;
    }

    /**
     * Clears all cookies
     * @return type true if all cookies were removed, false otherwise
     */
    private function clearAdminCookies() {
        $clearIDOk = setcookie("admin_id", "", time() - 3600);
        $clearPwdOk = setcookie("admin_pwd", "", time() - 3600);
        return $clearIDOk && $clearPwdOk;
    }

    public function verifyPassword($password, $hash) {
        return crypt($password, $hash) === $hash;
    }

}
