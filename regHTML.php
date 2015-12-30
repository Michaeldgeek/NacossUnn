<!DOCTYPE html>
<!--[if IE 9 ]><html class="no-js ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="js localstorage geolocation canvas audio video texttrackapi track flexbox mediaqueries cssanimations formdata no-saveblob formvalidation fieldsetdisabled csstrackrange cssrangeinput styleableinputrange no-details"><!--<![endif]-->
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Complete Registration</title>
        <link href='https://fonts.googleapis.com/css?family=Titillium+Web|Roboto:100' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <link rel="stylesheet" href="css/login.css" media="screen,projection" charset="utf-8">
        <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->
        <script src="<?= HOSTNAME ?>js/jQuery.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="site-wrapper">
            <header id="header" class="header">
                <div id="header-global" class="header-main">
                    <div class="wrapper header-global-wrapper">
                        <a href="index.php" class="logo-header logo center">Nacoss Unn</a>
                    </div>
                </div>
            </header>

            <div class="no-login-wrapper">
                <div style="" id="main" class="wrapper">
                    <section class="center login-form" data-cid="view48">
                        <div class="login-container">
                            <form class="form" name="login_form" id="login_form" method="POST" action="">
                                <legend>
                                    <h3 class="form-title">Log in to Nacoss</h3>

                                </legend>
                                <div class="form-controls">
                                    <div class="control-group" data-cid="view58">
                                        <label class="assistive-text">Username</label>

                                        <div class="controls">
                                            <input class="width-full user-success" required placeholder="Username" name="username" autofocus="true" autocapitalize="none" type="text">
                                        </div>
                                    </div><div class="control-group" data-cid="view61">
                                        <label class="assistive-text">Password</label>

                                        <div class="controls">
                                            <input class="width-full" required placeholder="Password" name="password" type="password">
                                        </div>
                                    </div><div class="control-group" data-cid="view64">
                                        <div class="controls">
                                            <label class="checkbox"><input class="width-full" name="remember_me" type="checkbox"> Remember me</label>
                                        </div>
                                    </div><div class="control-group" data-cid="view67">
                                        <div class="form-actions">
                                            <button type="submit" name="submit" value="<?php echo md5(SUBMIT, FALSE); ?>" class="btn btn-success btn-large width-full">Log in</button>
                                        </div>
                                    </div><div class="control-group" data-cid="view70">
                                        <div class="row">
                                            <a class="pull-left" href="register.php" data-page="sign-up" data-module="onboarding">Sign up</a>
                                            <a class="pull-right" href="resetpassword.php" data-page="forgot-password" data-module="login">Forgot your password?</a>
                                        </div>
                                    </div><div class="hide" data-cid="view73">
                                        <div class="controls">
                                            <input name="url" autocomplete="false" value="<?php echo md5(URL, FALSE); ?>" type="hidden">
                                        </div>
                                    </div></div>
                            </form>
                            <div>                            </div>

                        </div>

                    </section>

                </div>
            </div>


        </div>
        <?php
        require_once './footer.php';
        ?>
        <script>
            $(document).ready(function () {
                $('.close').click(function (e) {
                    $('div[role ^= "alert"]').remove();
                    e.stopPropagation();
                });
            });
        </script>
    </body>
</html>