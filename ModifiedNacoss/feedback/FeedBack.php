<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FeedBack
 *
 * @author Michael
 */
require_once '../classes/Browser.php';
require_once '../classes/constants.php';
require_once '../classes/UserUtility.php';

class FeedBack {

    private $ip;
    private $message;
    private $seen;
    private $img = null;
    private $browser;
    private $url;
    private $time;
    private $isBrowserMobile;

    /**
     *
     * @param string Json encoded string
     */
    function __construct($data, $noCavas) {
        if ($noCavas == FALSE)
            $this->initNoCanvas($data);
        else
            $this->initCanvas($data);
    }

    private function initNoCanvas($data) {
        $this->message = filter_var($data, FILTER_SANITIZE_STRING);
        $this->ip = $this->validateInput($_SERVER['REMOTE_ADDR']);
        $browser = new Browser();
        $this->browser = "Name of browser " . $browser->getBrowser() . " Version " . $browser->getVersion();
        $this->isBrowserMobile = $browser->isMobile();
        $this->url = is_null($_SERVER['HTTP_REFERER']) ? null : $_SERVER['HTTP_REFERER'];
    }

    private function initCanvas($data) {
        $data = json_decode($data);
        $this->ip = $this->validateInput($_SERVER['REMOTE_ADDR']);
        $this->message = filter_var($data->note, FILTER_SANITIZE_STRING);
        $browser = new Browser();
        $this->browser = "Name of browser " . $browser->getBrowser() . " Version " . $browser->getVersion();
        $this->isBrowserMobile = $browser->isMobile();
        $this->url = is_null($data->url) ? null : $data->url;
        if (!is_null($data->img)) {
            $this->img = $data->img;
        }
    }

    function getIp() {
        return $this->ip;
    }

    function getMessage() {
        return $this->message;
    }

    function getSeen() {
        return $this->seen;
    }

    function getImg() {
        return $this->img;
    }

    function getBrowser() {
        return $this->browser;
    }

    function getUrl() {
        return $this->url;
    }

    function getTime() {
        return $this->time;
    }

    function setImg($img) {
        $this->img = $img;
    }

    private function validateInput($param) {
        $param = filter_var($param, FILTER_VALIDATE_IP);
        if (is_null($param) || is_bool($param)) {
            return "Not Set";
        } else {
            return $param;
        }
    }

    function storeFeedBack() {
        $link = UserUtility::getDefaultDBConnection();
        $query = "insert INTO feedbacks(ip,message,img,browser,page,is_mobile_browser) VALUES('$this->ip','$this->message','$this->img','$this->browser','$this->url','$this->isBrowserMobile')";
        $result = mysqli_query($link, $query);
        if ($result) {
            return 1;
        } else {
            return 0;
        }
    }

}
