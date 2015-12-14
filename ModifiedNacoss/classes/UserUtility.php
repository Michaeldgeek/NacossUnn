<?php

require_once 'constants.php';

class UserUtility {

    public static function getContactEmail() {
        $query = "select value from settings where name = 'email'";
        $link = UserUtility::getDefaultDBConnection();
        $result = mysqli_query($link, $query);
        if ($result) {
            $row = mysqli_fetch_array($result);
            return $row['value'];
        }
        //Log error
        UserUtility::logMySQLError($link);

        return "";
    }

    public static function getContactNumbers() {
        $query = "select value from settings where name = 'help_lines'";
        $link = UserUtility::getDefaultDBConnection();
        $result = mysqli_query($link, $query);
        if ($result) {
            $row = mysqli_fetch_array($result);
            return empty($row['value']) ? array() : explode(",", $row['value']);
        }
        //Log error
        UserUtility::logMySQLError($link);

        return array();
    }

    public static function getNews() {
        $array = array();
        $query = "select * from news limit 30";
        $link = UserUtility::getDefaultDBConnection();
        $result = mysqli_query($link, $query);
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                array_push($array, $row);
            }
        }
        //Log error
        UserUtility::logMySQLError($link);

        return $array;
    }

    public static function getFAQs() {
        $array = array();
        $query = "select * from faq limit 20";
        $link = UserUtility::getDefaultDBConnection();
        $result = mysqli_query($link, $query);
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                array_push($array, $row);
            }
        }
        //Log error
        UserUtility::logMySQLError($link);

        return $array;
    }

    public static function getPayments($ID) {
        $array = array();
        $query = "select * from payments where user_id='" . $ID . "'";
        $link = UserUtility::getDefaultDBConnection();
        $result = mysqli_query($link, $query);
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                array_push($array, $row);
            }
        }
        //Log error
        UserUtility::logMySQLError($link);

        return $array;
    }

    public static function getErrorReports($ID) {
        $array = array();
        $query = "select * from error_reports where user_id='" . $ID . "' order by time_of_report DESC";
        $link = UserUtility::getDefaultDBConnection();
        $result = mysqli_query($link, $query);
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                array_push($array, $row);
            }
        }
        //Log error
        UserUtility::logMySQLError($link);

        return $array;
    }

    public static function getResults($ID) {
        $array = array();
        $query = "select entry_year from users where regno='" . $ID . "'";
        $link = UserUtility::getDefaultDBConnection();
        $result = mysqli_query($link, $query);
        if ($result) {
            $row = mysqli_fetch_array($result);
            $entry_year = $row['entry_year'];
        }
        //Log error
        UserUtility::logMySQLError($link);


        if (isset($entry_year)) {
            $query = "select * from results where entry_year='$entry_year' order by year,semester,course_code DESC";
            $result = mysqli_query($link, $query);
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    array_push($array, $row);
                }
            }
            //Log error
            UserUtility::logMySQLError($link);
        }
        return $array;
    }

    public static function getVerificationMessage($ID, $password) {
        $message = '<h2>Welcome to the network!</h2>'
                . '<p>Find your login details below:</p>'
                . '<strong>Username/ID:</strong> ' . $ID . '<br/>'
                . '<strong>Password:</strong> ' . $password . '<br/>';
        return $message;
    }

    /**
     *
     * @return connection to default database
     */
    public static function getDefaultDBConnection() {
        $link = UserUtility::getConnection();
        if ($link) {
            $successful = mysqli_select_db($link, DEFAULT_DB_NAME);
            if (!$successful) {
                die('Unable to select database: ' . mysql_error());
            }
        } else {
            die('Could not connect to database: ' . mysql_error());
        }
        return $link;
    }

    /**
     * creates a connection to the default database
     * @return connection
     */
    private static function getConnection() {
        $link = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD);
        return $link;
    }

    /**
     * Writes exception to log file
     * @param type $exc exception
     */
    public static function writeToLog(Exception $exc) {
        $link = UserUtility::getDefaultDBConnection();
        $line = $exc->getLine();
        $file = mysqli_escape_string($link, $exc->getFile());
        $message = mysqli_escape_string($link, $exc->getMessage());
        $trace = mysqli_escape_string($link, $exc->getTraceAsString());
        //Check if error has been logged previously
        $query = "select * from error_log where message = '$message' and file='$file' and line='$line'";
        $result = mysqli_query($link, $query);
        if ($result) {
            $row = mysqli_fetch_array($result);
        }
        //If previously logged, update time and set is-fixed = 0 else insert new log
        if ($result && $row) {
            $query = "update error_log set time_of_error = now(), is_fixed = 0 where id = '" . $row['id'] . "'";
        } else {
            $query = "insert into error_log set message = '$message', "
                    . "file='$file', "
                    . "trace='$trace', line='$line', time_of_error = now()";
        }
        return mysqli_query($link, $query);
    }

    public static function getHashCost() {
        $query = "select value from settings where name = 'hash_algo_cost'";
        $link = UserUtility::getDefaultDBConnection();
        $result = mysqli_query($link, $query);
        if ($result) {
            $row = mysqli_fetch_array($result);
            return $row['value'];
        }
        //Log error
        UserUtility::logMySQLError($link);

        return 10;
    }

    public static function getUserInfo($id) {
        $query = "select * from users where regno = '$id'";
        $link = UserUtility::getDefaultDBConnection();
        $result = mysqli_query($link, $query);
        if ($result) {
            $row = mysqli_fetch_array($result);
            return $row;
        }
        //Log error
        UserUtility::logMySQLError($link);
        return array();
    }

    /**
     * Log database error
     * @param type $link
     */
    public static function logMySQLError($link) {
        $error = mysqli_error($link);
        if (!empty($error)) {
            UserUtility::writeToLog(new Exception($error));
        }
    }

    public static function getExecutives($session = "") {
        $executives = array();
        $query = "select e.id, u.regno, u.first_name, u.last_name, u.other_names, u.department, u.pic_url, e.post, e.session "
                . "from users u join executives e "
                . "on (u.regno = e.user_id) ";
        if (!empty($session)) {
            $query .= "where e.session = '$session' ";
        }
        $query .= "order by session desc";
        $link = UserUtility::getDefaultDBConnection();
        $result = mysqli_query($link, $query);
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                $executives[] = $row;
            }
        }
        //Log error
        UserUtility::logMySQLError($link);

        return $executives;
    }

}
