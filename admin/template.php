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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="NACOSS UNN official website">
        <meta name="author" content="NACOSS UNN Developers">
        <meta name="keywords" content=" metro ui, NDG, NACOSS UNN">
        <link rel="icon" href="<?= HOSTNAME ?>favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="<?= HOSTNAME ?>favicon.ico" type="image/x-icon" />

        <link href="<?= HOSTNAME ?>css/metro-bootstrap.css" rel="stylesheet">
        <link href="<?= HOSTNAME ?>css/metro-bootstrap-responsive.css" rel="stylesheet">
        <link href="<?= HOSTNAME ?>css/iconFont.css" rel="stylesheet">
        <link href="<?= HOSTNAME ?>js/prettify/prettify.css" rel="stylesheet">

        <script src="<?= HOSTNAME ?>js/metro/metro.min.js"></script>

        <!-- Load JavaScript Libraries -->
        <script src="<?= HOSTNAME ?>js/jquery/jquery.min.js"></script>
        <script src="<?= HOSTNAME ?>js/jquery/jquery.widget.min.js"></script>
        <script src="<?= HOSTNAME ?>js/jquery/jquery.mousewheel.js"></script>
        <script src="<?= HOSTNAME ?>js/prettify/prettify.js"></script>

        <!-- Metro UI CSS JavaScript plugins -->
        <script src="<?= HOSTNAME ?>js/metro.min.js"></script>

        <!-- Local JavaScript -->
        <script src="<?= HOSTNAME ?>js/docs.js"></script>
        <script src="<?= HOSTNAME ?>js/github.info.js"></script>

        <!-- Page Title -->
        <title>NACOSS UNN : Title</title>        
    </head>
    <body class="metro">
        <div class="bg-white">            
            <?php require_once './header.php'; ?>
            <br/>
            <div class="padding20">

                <!--Your code goes here-->

            </div>
            <br/>
            <?php require_once './footer.php'; ?>
        </div>
    </body>
</html>
