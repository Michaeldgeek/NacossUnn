<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nacoss News</title>
        <link href='https://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
        <link href="css/foundation_css.css" rel="stylesheet" media="all" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" media="all" type="text/css"/>
        <style>@media only screen and (max-width:760px),(min-device-width:768px) and (max-device-width:1024px)
            {.no-display-small{
                 display: none;
             }}
            .a-viewmore {
                text-decoration: none !important;
                font-size: 14px;
                line-height: 28px;
                width: auto;
                height: 28px;
                color: #723130;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                background: #FFF none repeat scroll 0% 0%;
                margin: 10px 0px;
                border: 1px solid #723130;
            }
            .news-header {
                margin-top: 50px !important;
            }
        </style>
        <style>
            #cover{ position:fixed; top:0; left:0; background:rgba(0,0,0,0.6); z-index:5; width:100%; height:100%; display:none; }

        </style>
        <?php require_once './feedback_tags_css.php'; ?>
          <!-- <script src="http://code.jquery.com/jquery-latest.min.js"></script>-->
        <script src="<?= HOSTNAME ?>js/jQuery.js" type="text/javascript"></script>
        <?php require_once './feedback_tags_js.php'; ?>
        <script src="<?= HOSTNAME ?>js/libs/spin.js" type="text/javascript"></script>
        <script src="<?= HOSTNAME ?>js/jQuery_Sizzle.js"  type="text/javascript"></script>
        <script src="<?= HOSTNAME ?>js/jQuery_UI.js" type="text/javascript"></script>
        <script src="<?= HOSTNAME ?>js/functions.js" type="text/javascript"></script>
        <script src="<?= HOSTNAME ?>js/helper.js" type="text/javascript"></script>
        <script src="<?= HOSTNAME ?>js/modernizr.js" type="text/javascript"></script>
    </head>
    <body id="body" class="html not-front not-logged-in page-node page-node- page-node-304 node-type-page section-admissions left-sidebar" style="background-attachment: fixed; overflow: hidden">
        <?php
        require_once './feedback/feedback_form.php';
        ?>
        <?php require_once './header.php'; ?>
        <?php require_once './page_info.php'; ?>
        <div class="pageContent" >
            <div class="row">
                <div class="large-3 columns">
                    <!-- REGION: SIDEBAR LEFT -->
                    <div id="sidebar_left">
                        <div id="block-menu-block-1" class="block block-menu-block leftNav">
                            <div class="content">
                                <div class="menu-block-wrapper menu-block-1 menu-name-main-menu parent-mlid-0 menu-level-2">
                                    <nav>
                                        <ul class="menu">
                                            <li class="first leaf collapsed menu-mlid-859"><a href="#deptnews">Departmental News</a></li>
                                            <li class="leaf menu-mlid-862"><a href="#campusnews">Campus News</a></li>
                                            <li class="leaf menu-mlid-863"><a href="#spotlights">Spotlights</a></li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="large-9 columns">
                    <div class="row">
                    </div>
                    <div class="row"  >
                        <div class="large-12 columns">
                            <!-- REGION: CONTENT -->
                            <div id="content">
                                <div id="block-system-main" class="block block-system">
                                    <div class="content">
                                        <div id="node-7" class="node node-page clearfix" typeof="foaf:Document">
                                            <span class="rdf-meta element-hidden"></span>
                                            <div class="content">
                                                <!--This section is divided into three
                                                with each div corresponding to the news section-->
                                                <!-- 1. Departmental News -->
                                                <div id="deptnews" class="block block-views news-reel news-inthenews">
                                                    <div class="row">
                                                        <div class="large-7 columns">
                                                            <h3 >Departmental News</h3>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <div class="view view-news-center view-id-news_center view-display-id-in_the_news view-dom-id-230ca9061c25e11c2825efca9c9009aa">
                                                            <div class="view-content">
                                                                <div class="item-list">
                                                                    <!-- news list -->
                                                                    <ul>
                                                                        <li class="views-row ">
                                                                            <h5><a href="" ><!-- News header --> This is a header </a></h5>
                                                                            <strong class="clr"><span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2015-12-11T00:00:00-06:00"><!--Date and time --> This is a date</span></strong>
                                                                            <p><!--The first lie of the news --> This is the first line of the news<br>
                                                                                &nbsp;
                                                                            </p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="view-footer">
                                                                <span class="btn-readmore"><a href="" class="a-viewmore">View More</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 2. Campus News -->
                                                <div id="campusnews" class="block block-views news-reel news-inthenews">
                                                    <div class="row">
                                                        <div class="large-7 columns">
                                                            <h3  class="news-header">Campus News</h3>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <div class="view view-news-center view-id-news_center view-display-id-in_the_news view-dom-id-230ca9061c25e11c2825efca9c9009aa">
                                                            <div class="view-content">
                                                                <div class="item-list">
                                                                    <!-- news list -->
                                                                    <ul>
                                                                        <li class="views-row ">
                                                                            <h5><a href="" ><!-- News header --> This is a header </a></h5>
                                                                            <strong class="clr"><span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2015-12-11T00:00:00-06:00"><!--Date and time --> This is a date</span></strong>
                                                                            <p><!--The first lie of the news --> This is the first line of the news<br>
                                                                                &nbsp;
                                                                            </p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="view-footer">
                                                                <span class="btn-readmore"><a href="" class="a-viewmore">View More</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 3. Spotlight News -->
                                                <div id="spotlights" class="block block-views news-reel news-spotlights">
                                                    <div class="row">
                                                        <div class="large-7 columns">
                                                            <h3  class="news-header">Spotlights</h3>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <div class="view view-news-center view-id-news_center view-display-id-spotlights view-dom-id-4eee4029af1191fd4b02953b7b876f0c">
                                                            <div class="view-content">
                                                                <div class="item-list">
                                                                    <ul class="row">
                                                                        <li class="views-row views-row-1 views-row-odd views-row-first large-4 columns">
                                                                            <div class="inner-wrap">
                                                                                <img typeof="foaf:Image" src="http://placehold.it/446x296" alt="" height="296" width="446" />
                                                                                <h4><a href="#" style="text-decoration: none;">Caption</a></h4>
                                                                                <p>Heading</p>
                                                                            </div>
                                                                        </li>
                                                                        <li class="views-row views-row-1 views-row-odd views-row-first large-4 columns">
                                                                            <div class="inner-wrap">
                                                                                <img typeof="foaf:Image" src="http://placehold.it/446x296" alt="" height="296" width="446" />
                                                                                <h4><a href="#" style="text-decoration: none;">Caption</a></h4>
                                                                                <p>Heading</p>
                                                                            </div>
                                                                        </li>
                                                                        <li class="views-row views-row-1 views-row-odd views-row-first large-4 columns">
                                                                            <div class="inner-wrap">
                                                                                <img typeof="foaf:Image" src="http://placehold.it/446x296" alt="" height="296" width="446" />
                                                                                <h4><a href="" style="text-decoration: none;">Caption</a></h4>
                                                                                <p>Heading</p>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="view-footer">
                                                                    <span class="btn-readmore"><a href="" class="a-viewmore">View More</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require_once './footer.php';
        require_once './feedback/feedback_script.php';
        ?>

        <div id="cover" > </div>
        <script>
            $(document).ready(function () {
                activeTrail('news');
                pageInfo('News');

            });
        </script>
    </body>
</html>
