<?php
require_once './classes/class_lib.php';
$news = new NewsFeeds();
$slides = NewsFeeds::getLargeHomePageImages(); // holds an array references that points to the database resource.
$links = NewsFeeds::getSmallHomePageImages(); // holds an array references that points to the database resource.
$allNews = $news->getAllNews();
?>

<!DOCTYPE html>

<html  lang="en">
    <head>
        <title>National Association of Computer Science, University of Nigeria Chapter</title>
        <?php require_once './default_head_tags.php'; ?>
        <style>
            .card {
                border: 1px solid #EDEDED;
                height: 164px;
                width: 245px;
                margin-bottom: 0.5rem;
                background: #FFF none repeat scroll 0% 0%;
                color: #000;
                border-radius: 4px;
                box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
                overflow: hidden;
                margin-left: auto;
                margin-right: auto;
                position: relative;
            }
            .card-section {
                padding: 1rem;
            }
        </style>
    </head>
    <body style="overflow-x: hidden" data-stellar-background-ratio="0.5"><!-- data-stellar-background-ratio="0.5" creates a parallax background -->

        <?php
        require_once './feedback/feedback_form.php';
        require_once './header.php';
        ?>
        <div class="tabs"></div>
        <div id="block-system-main" class="block block-system">
            <div class="content">
                <div class="panel-pane pane-views pane-feature-slideshow feature">
                    <div class="pane-content">
                        <div style="height: 635px;" class="view view-feature-slideshow view-id-feature_slideshow view-display-id-block featureSlideshow ">
                            <div class="view-content" >
                                <!-- home screen slides -->
                                <div class="featureSlide active" style="background-image: url('images/img1.jpg'); display: block; height: 635px;">
                                    <div class="featureBox">
                                        <div class="row">
                                            <p class="title">Great Minds</p>
                                            <p>We do not settle for life's second best. We challenge ourselves with our brilliant ideas that transforms our community.
                                                <a href="news.php" style="text-decoration:underline;">Read More.</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="featureSlide" style="background-image: url('img link'); display: block; height: 635px;">
                                    <div class="featureBox">
                                        <div class="row">
                                            <p class="title">Another title</p>
                                             <p>Another caption
                                                 <a href="#" style="text-decoration:underline;">Read More.</a>
                                             </p>
                                        </div>
                                     </div>
                                </div>-->
                                <!--<div class="featureSlide" style="background-image: url('img link'); display: block; height: 635px;">
                                    <div class="featureBox">
                                        <div class="row">
                                            <p class="title">Another title</p>
                                             <p>Another caption
                                                 <a href="#" style="text-decoration:underline;">Read More.</a>
                                             </p>
                                        </div>
                                     </div>
                                </div>-->
                                <div class="featureSlide " style="background-image: url('images/img7.jpg'); display: block; height: 635px;">
                                    <div class="featureBox">
                                        <div class="row">
                                            <p class="title">Proud of Ourselves</p>
                                            <p>Android students club winners 2015/2016 finally emerge and guess what- we steal the top three positions from our rivals.
                                                <a href="news.php" style="text-decoration:underline;">Read More.</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="featureSlide" style="background-image: url('img link'); display: block; height: 635px;">
                                    <div class="featureBox">
                                        <div class="row">
                                            <p class="title">Another title</p>
                                             <p>Another caption
                                                 <a href="#" style="text-decoration:underline;">Read More.</a>
                                             </p>
                                        </div>
                                     </div>
                                </div>-->
                                <div class="navContainer">
                                    <div class="featureNav row">
                                        <a class="prev" href="#">Previous</a>
                                        <a class="next" href="#">Next</a>
                                        <nav>
                                            <ul>
                                                <li class="active"><a href="#">0</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <!-- home screen slides ends -->
                            </div>
                        </div>
                    </div>
                </div>
                <section class="panel-pane pane-panels-mini pane-news-events news">
                    <div class="row">
                        <div class="large-12 columns">
                            <nav class="newsNav"></nav>
                        </div>
                    </div>
                    <div class="row" >
                        <h1 class="pane-title">News</h1>
                        <div class="panel-pane pane-views pane-news newsList">
                            <div id="news" class="view view-news view-id-news view-display-id-block ">
                                <!-- news section -->
                                <div class="view-content row-width" >
                                    <!-- news column -->
                                    <div class="views-row views-row-1 views-row-odd views-row-first large-3 columns">
                                        <a href="#">
                                            <img typeof="foaf:Image" src="http://placehold.it/162x245" alt="" height="162" width="245">
                                            <p>News Caption</p>
                                        </a>
                                    </div>
                                    <!-- news column ends -->
                                    <!-- news column -->
                                    <div class="views-row views-row-2 views-row-even large-3 columns">
                                        <a href="#">
                                            <img typeof="foaf:Image" src="http://placehold.it/162x245" alt="" height="162" width="245">
                                            <p>News Caption</p>
                                        </a>
                                    </div>
                                    <!-- news column ends -->
                                    <!-- news column -->
                                    <div class="views-row views-row-3 views-row-odd large-3 columns">
                                        <a href="#">
                                            <img typeof="foaf:Image" src="http://placehold.it/162x245" alt="" height="162" width="245">
                                            <p>News Caption</p>
                                        </a>
                                    </div><!-- news column ends -->
                                    <!-- news column --><!-- When the news has no picture this is displayed -->
                                    <div class="views-row views-row-4 views-row-even views-row-last large-3 columns">
                                        <div class="card">
                                            <div class="card-section">
                                                <a href="#">
                                                    <h3 style="position: absolute; top: 0px;"><small>News Title goes here</small></h3>
                                                    <p style="position: absolute; bottom: 0px;"><small>I appear when there is no image attached to the news</small></p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- news column ends -->
                                </div>
                                <!-- news section ends-->
                                <div class="view-footer">
                                    <!-- more news -->
                                    <div class="view-footer">
                                        <p class="more">
                                            <a href="news.php">More News</a>
                                            <a href="events.php" style="background:#723130 !important;"><span class="events">Events Calendar</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php
        require_once './footer.php';
        require_once './feedback/feedback_script.php';
        ?>

    </body>
</html>
