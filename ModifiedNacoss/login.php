<?php
require_once './classes/class_lib.php';
$user = new User();
define("URL", "index.php");
define("SUBMIT", "submit");
$error_message = "";

if ($user->isLoggedIn()) {
    $user->logoutUser();
    // header("location: profile.php");
} else {
    $isFormRequest = filter_input(INPUT_POST, "submit");
    if (md5(SUBMIT) == $isFormRequest) {

        //Handle a post request from form
        $isRegister = filter_input(INPUT_POST, "type") === "2";
        //$url = html_entity_decode(filter_input(INPUT_POST, "url"));
        if ($isRegister) {
            //handle request from registration form
            $showLoginPage = false;

            $array = filter_input_array(INPUT_POST);
            if ($array !== FALSE && $array !== null) {
                foreach ($array as $key => $value) {
                    $array[$key] = html_entity_decode($array[$key]);
                }
                $ok = true;
            } else {
                $ok = false;
                $error_message = "Oops! Something went wrong, parameters are invalid.";
            }
            //register user
            if ($ok) {
                try {
                    $success = $user->
                            registerUser($array['regno'], $array['password1'], $array['password2'], $array['email'], $array['first_name'], $array['last_name'], $array['phone']);
                    if ($success and $user->loginUser($array['regno'], $array['password1'])) {
                        header("location: profile.php");
                    } else {
                        $success = FALSE;
                        $error_message = "Oops! Something went wrong, please try again.";
                    }
                } catch (Exception $exc) {
                    //login unsuccessful
                    $success = FALSE;
                    $error_message = $exc->getMessage();
                }
            } else {
                $success = false;
                $error_message = "No request recieved";
            }
        } else {
            //handle request from login form
            $showLoginPage = true;
            $error_message = "";
            $id = html_entity_decode(filter_input(INPUT_POST, "username"));
            $password = html_entity_decode(filter_input(INPUT_POST, "password"));
            $url = filter_input(INPUT_POST, "url");
            $success = $user->loginUser($id, $password);
            if ($success) {
                if (!empty($url)) {
                    if (md5(URL) == $url)
                        header("location: " . URL);
                } else {
                    header("location: profile.php");
                }
            } else {
                //login unsuccessful
                $error_message = TRUE;
            }
        }
    }
}
?>

<!DOCTYPE html>
<!--[if IE 9 ]><html class="no-js ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="js localstorage geolocation canvas audio video texttrackapi track flexbox mediaqueries cssanimations formdata no-saveblob formvalidation fieldsetdisabled csstrackrange cssrangeinput styleableinputrange no-details"><!--<![endif]-->
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login -Page</title>
        <link href='https://fonts.googleapis.com/css?family=Titillium+Web|Roboto:100' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <link rel="stylesheet" href="css/login.css" media="screen,projection" charset="utf-8">
        <?php require_once './feedback_tags_css.php'; ?>
        <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->
        <script src="<?= HOSTNAME ?>js/jQuery.js" type="text/javascript"></script>
        <?php require_once './feedback_tags_js.php'; ?>
        <script src="<?= HOSTNAME ?>js/modernizr.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        require_once './feedback/feedback_form.php';
        ?>
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
                            <form class="form" name="login_form" id="login_form" method="POST" action="<?php html_entity_decode($_SERVER['PHP_SELF']) ?>">
                                <legend>
                                    <h3 class="form-title">Log in to Nacoss</h3>

                                </legend>

                                <div class="form-controls"><div class="control-group" data-cid="view58">
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
                            <div ><?php
                                if (is_bool($error_message) && ($error_message == TRUE)) {
                                    echo '
                                    <div class="alert error" role="alert">
                                        <span class="close"></span>
                                        <span  class="message" title=""><p>Invalid username or password.</p>
                                        </span>
                                    </div>'
                                    ;
                                }
                                ?>
                            </div>

                        </div>

                    </section>

                </div>
            </div>


        </div>
        <?php
        require_once './footer.php';
        require_once './feedback/feedback_script.php';
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