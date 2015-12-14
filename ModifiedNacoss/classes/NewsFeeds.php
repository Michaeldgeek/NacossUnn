<?php

require_once 'UserUtility.php';
/*
 * The news variable is
 * actually a multi-dimensional array that points
 * to the news table in the database.
 * The first index of the news array
 * points to the database row.
 * The second index of the news array points to the
 * individual column values of the row referenced by the first index.
 */

class NewsFeeds {

    private $title;
    private $img;
    private $link;
    private $contents;
    private $id;
    private $news = null;

    public function __construct() {
        $this->initialize();
    }

    private function initialize() {
        $link = UserUtility::getDefaultDBConnection();
        $this->fetchNews($link);
    }

    private function fetchNews($connection) {
        $array = array();
        $query = "select * from news where is_deleted = 0 and expire_time >= now() order by time_of_post DESC limit 30";
        $result = mysqli_query($connection, $query);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    array_push($array, $row);
                }
                $this->news = $array;
            }
        }
    }

    public function getNews($id) {

    }

    public function getAllNews() {
        /*
         * Returns the result set as
         * a multi-dimensional array
         */
        return $this->news;
    }

    public function getNewsTile() {
        /*
         * Returns a reference to the news array
         * which has a maximum of four elements.
         */
        $newsTile = array();
        if (is_null($this->news)) {
            echo "No post";
        } else {
            for ($i = 0; $i < count($this->news); $i++) {
                array_push($newsTile, $this->news[$i]);
                if (count($i) == 4)
                    break;
            }
            return $newsTile;
        }
    }

}
