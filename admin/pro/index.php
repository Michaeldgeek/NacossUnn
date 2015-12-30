<?php
require_once '../class_lib.php';
require_once 'functions.php';
require_once 'NewsAdmin.php';

$admin = new NewsAdmin();
if ($admin->activateLogin()) {
    //Redirect to appropriate page if not PRO or webmaster
    switch ($admin->getAdminType()) {
        case Admin::WEBMASTER:
        case Admin::PRO:
            //Do not
            break;
        case Admin::LIBRARIAN:
            header("location: ../librarian");
            break;
        case Admin::TREASURER:
            header("location: ../treasurer");
            break;
        case Admin::CLASS_REP:
            header("location: ../class_rep");
            break;
        default:
            $admin->logoutAdmin();
            break;
    }

    //Set page number
    $page = filter_input(INPUT_GET, "p");
    if (empty($page)) {
        $page = 1;
    }

    //Check for post request
    $array = filter_input_array(INPUT_POST);
    if ($array !== FALSE && $array !== null) {
        foreach ($array as $key => $value) {
            if (is_array($array[$key])) {
                foreach ($array[$key] as $subkey => $subvalue) {
                    $array[$key][$subkey] = html_entity_decode($array[$key][$subkey]);
                }
            } else {
                $array[$key] = html_entity_decode($array[$key]);
            }
        }
        //Further processing is done in the page to which the request was directed to
    }
} else {
    //Set page number
    $page = filter_input(INPUT_GET, "p");
    if (empty($page)) {
        $page = 1;
    }
    $url = urlencode(CPANEL_URL . "pro/?p=" . $page);
    header("location: ../index.php?url=" . $url);   
}
?>
<!DOCTYPE html>
<!--
Copyright 2015 NACOSS UNN Developers Group (NDG).

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

     http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
-->

<html>
    <head>
        <?php require_once '../default_head_tags.php'; ?>

        <!--Text Editor-->
        <script src="../ckeditor/ckeditor.js"></script>

        <!-- Page Title -->
        <title>CPanel</title>        
    </head>

    <body class="metro">
        <div class="">
            <div class="bg-white">            
                <?php require_once '../header.php'; ?>
                <div class="padding20">
                    <h2>PRO</h2>
                    <div class="grid fluid">
                        <div class="row">
                            <div class="span3">
                                <nav class="sidebar light">
                                    <ul class="">
                                        <li class="<?= $page == 1 || $page == 11 ? "stick bg-darkBlue " : "" ?>">
                                            <a class="dropdown-toggle" href="#"><i class="icon-broadcast"></i>News</a>
                                            <ul class="dropdown-menu" data-role="dropdown">
                                                <li><a href="index.php?p=1">View All</a></li>
                                                <li><a href="index.php?p=11">Add New</a></li>
                                            </ul>
                                        </li>
                                        <li class="<?= $page == 2 ? "stick bg-darkBlue" : "" ?>">
                                            <a href="index.php?p=2"><i class="icon-image"></i>Home Page Images</a>
                                        </li>
                                        <li class="<?= $page == 3 || $page == 31 || $page == 32 ? "stick bg-darkBlue" : "" ?>">
                                            <a class="dropdown-toggle" href="#"><i class="icon-user-3"></i>Executives</a>
                                            <ul class="dropdown-menu" data-role="dropdown">
                                                <li><a href="index.php?p=3">View All</a></li>
                                                <li><a href="index.php?p=31">Add New</a></li>
                                            </ul>
                                        </li>
                                        <li class="<?= $page == 4 || $page == 41 || $page == 42 ? "stick bg-darkBlue" : "" ?>">
                                            <a class="dropdown-toggle" href="#"><i class="icon-help"></i>FAQs</a>
                                            <ul class="dropdown-menu" data-role="dropdown">
                                                <li><a href="index.php?p=4">View All</a></li>
                                                <li><a href="index.php?p=41">Add New</a></li>
                                            </ul>
                                        </li>
                                        <li class="<?= $page == 5 ? "stick bg-darkBlue" : "" ?>">
                                            <a href="index.php?p=5"><i class="icon-tools"></i>Settings</a>
                                        </li>
                                    </ul>
                                    <br/>
                                    <div class="panel no-border">
                                        <div class="panel-header">Statistics</div>
                                        <div class="panel-content">
                                            <p>Total Posts</p>
                                            <p><?= getTotalPosts() ?></p>
                                            <p>Total headlines</p>
                                            <p><?= getTotalHeadlines() ?></p>
                                            <p>Total Hits</p>
                                            <p><?= getTotalHits() ?></p>
                                        </div>
                                    </div>
                                </nav>
                            </div>

                            <div class="span9">
                                <?php
                                switch ($page) {
                                    case 1: require_once 'all_posts.php';
                                        break;
                                    case 11: require_once 'new_post.php';
                                        break;
                                    case 12: require_once 'edit_post.php';
                                        break;
                                    case 2: require_once 'home_page_images.php';
                                        break;
                                    case 21: require_once 'select_post.php';
                                        break;
                                    case 3: require_once 'executives.php';
                                        break;
                                    case 31: require_once 'new_executive.php';
                                        break;
                                    case 32: require_once 'edit_executive.php';
                                        break;
                                    case 4: require_once 'all_faqs.php';
                                        break;
                                    case 41: require_once 'new_faq.php';
                                        break;
                                    case 42: require_once 'edit_faq.php';
                                        break;
                                    case 5: require_once 'settings.php';
                                        break;
                                    case 6: require_once 'select_user.php';
                                        break;
                                    default : require_once 'all_posts.php';
                                        break;
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
                <br/>
                <?php require_once '../footer.php'; ?>
            </div>
        </div>
    </body>
</html>
