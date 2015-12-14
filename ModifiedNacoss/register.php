<?php
$ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';

function dummyRegFile($email, $reg) {
    //creates a dummy file for completing registration
    $filename = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 32)), 0, 32) . '.php';
    while (file_exists($filename)) {
        $filename = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 32)), 0, 32) . '.php';
        if (file_exists($filename))
            continue;
        else
            break;
    }
    $f = fopen('regHTML.php', 'r');
    $dataToWrite = "";
    while (!feof($f)) {
        $searchthis = '<div class="form-controls">';
        $buffer = fgets($f);
        if (strpos($buffer, $searchthis) !== FALSE) {
            $dataToWrite = $dataToWrite . "<input type='hidden' name='reg' value='$reg' /> <input type='hidden' name='email' value='$email' />";
        }
        $dataToWrite = $dataToWrite . $buffer;
    }
    fclose($f);
    $file = fopen($filename, 'w');
    fwrite($file, $dataToWrite);
    fclose($file);
    return $filename;
}

if ($ajax):
    if (isset($_POST['reg']) && (!is_null($_POST['reg']))):
        require_once './classes/User.php';
        $reg = filter_var((filter_input(INPUT_POST, "reg")), FILTER_SANITIZE_STRING);
        $user = new User($reg);
        $email = $user->getEmail();
        $output;
        if (is_null($email)) {
            $output = 'null';
            echo "$output";
            if (isset($_POST['p_email'])) {
                // proceed email form
                $email = $_POST['p_email'];
                $reg = $_POST['reg'];
                dummyRegFile($email, $reg);
                $output = "proceeded";
                echo "$output";
                // next step: Send to email
                // set up cron job to delete temporary file every 24 hrs
            }
        } else {
            //verify email form
            dummyRegFile($email, $reg);
            // next step: Send to email
            // set up cron job to delete temporary file every 24 hrs
            $output = "verified";
            echo "$output";
        }
    endif;
else:
    ?>
    <!DOCTYPE html>

    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title></title>
            <link href="css/css_rEI_5cK_B9hB4So2yZUtr5weuEV3heuAllCDE6XsIkI.css" rel="stylesheet" media="all" type="text/css"/>
            <link href="css/css_lmDZkgr1Bf7jOQBGzORKU2ZJFxgtmzMynW5rPLkmKAI.css" rel="stylesheet" media="all" type="text/css"/>
            <link href="css/css_g_UneL04I_By-JV5ryZJJWsDW1p5XeBj7jW6RhipZ48.css" rel="stylesheet" media="all" type="text/css"/>
            <link href="css/css_uaAL8iu_p1NRUMm3Ppq2QnDtVW6dbuMSDciX5kXLRCc.css" rel="stylesheet" media="all" type="text/css"/>
            <link href="css/css_oXVoRH6hbtd_cn2ic4F1tvsbs_wE8s3XYYghS8ll3Rs.css" rel="stylesheet" media="print" type="text/css"/>
            <link href="css/styles.css" rel="stylesheet" media="all" type="text/css"/>
            <link href='https://fonts.googleapis.com/css?family=Titillium+Web|Roboto:100' rel='stylesheet' type='text/css'>
            <style>
                #cover{ position:fixed; top:0; left:0; background:rgba(0,0,0,0.6); z-index:5; width:100%; height:100%; display:none; }

            </style>
            <?php require_once './feedback_tags_css.php'; ?>
               <!-- <script src="http://code.jquery.com/jquery-latest.min.js"></script>-->
            <!--<script src="js/temp.js" type="text/javascript"></script>-->
            <script src="<?= HOSTNAME ?>js/jQuery.js" type="text/javascript"></script>
            <?php require_once './feedback_tags_js.php'; ?>
            <script src="<?= HOSTNAME ?>js/libs/spin.js" type="text/javascript"></script>
            <script src="js/js_7-QUBm7UNKxGysSRvvU8NUXK0dgit5hMewfryG8U0M8.js" type="text/javascript"></script>
            <script src="js/js_Fd1sqrmVeFwAxsDoQwj3eZJ9TlMBe551cVBF2RRTom8.js" type="text/javascript"></script>
            <script src="js/js_DtHTCEvWc9hbSc50tVjIg4AVAl5qhZMr4bIT4MXQV-E.js" type="text/javascript"></script>
            <script src="js/js_E3I8bhPisPOfL1hCSapvvPOG5yuCVZmOWMvMUSyUlXk.js" type="text/javascript"></script>
            <script src="js/helper.js" type="text/javascript"></script>
            <script src="js/libs/jquery.placeholder.js" type="text/javascript"></script>
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
                    <div class="large-12 columns">
                        <div id="above_content">
                            <div id="block-block-30" class="block block-block large-12 columns">


                                <div class="content">
                                    <p></p>
                                </div>
                            </div>
                            <div id="block-block-22" class="block block-block large-12 columns apply-now-block">


                                <div class="content">
                                    <form id="f_register" class="clr" action="<?php html_entity_decode($_SERVER['PHP_SELF']) ?>" method="post">
                                        <div class="row collapse">
                                            <div class="large-4 columns" id="enrollType">
                                                <h3 class="clr orm"><span style="color: black;">1.</span> Select Your Type:</h3>
                                                <input name="enrolltype" id="radio1" value="Undergraduate" class="ui-helper-hidden-accessible" type="radio"><label aria-pressed="false" for="radio1" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false"><span class="ui-button-text"><span class="ui-button-text">From the Department</span></span></label><br>
                                                <input name="enrolltype" id="radio2" value="Graduate" class="ui-helper-hidden-accessible" type="radio"><label for="radio2" aria-pressed="false" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false"><span class="ui-button-text"><span class="ui-button-text">Outside the Department</span></span></label>
                                            </div>
                                            <div class="large-4 columns" id="statusSelect">
                                                <h3 class="inactive"><span style="color: black;">2.</span> Provide more Information:</h3>
                                                <div class="default">Select your type to continue.</div>
                                                <div style="display: none;" class="ugrad">
                                                    <input name="reg" value="" style="width: 90%; background-color: white; color: #843130;" type="text" placeholder="Registration Number" /><br>
                                                    <input name="btn" id="verify" style="background-color: white; color: #843130; border: #D2D2D2; border-style: solid; border-width: 1px;" type="submit" value="Verify" /><br>
                                                </div>
                                                <div style="display: none;" class="grad">
                                                    <input value="" id="n_reg" name="n_reg" style="width: 90%; background-color: white; color: #843130;" type="text" placeholder="Enter Reg No" /><br>
                                                    <input value="" name="n_fn" style="width: 90%; background-color: white; color: #843130;" type="text" placeholder="Enter First Name" /><br>
                                                    <input value="" name="n_ln" style="width: 90%; background-color: white; color: #843130;" type="text" placeholder="Enter Last Name" /><br>
                                                    <input value="" name="n_p" style="width: 90%; background-color: white; color: #843130;" type="text" placeholder="Enter Password" /><br>
                                                    <input value="" name="n_cp" style="width: 90%; background-color: white; color: #843130;" type="text" placeholder="Confirm Password" /><br>
                                                    <input value="" name="n_d" style="width: 90%; background-color: white; color: #843130;" type="text" placeholder="Enter Department" /><br>
                                                    <input value="" name="n_l" style="width: 90%; background-color: white; color: #843130;" type="text" placeholder="Enter Level" /><br>
                                                    <input value="" style="width: 90%; background-color: white; color: #843130;" type="text" placeholder="Choose Gender" /><br>
                                                    <input value="" style="width: 90%; background-color: white; color: #843130;" type="text" placeholder="Enter Phone" /><br>
                                                    <input value="" style="width: 90%; background-color: white; color: #843130;" type="text" placeholder="Enter Email" /><br>
                                                </div>
                                            </div>
                                            <div class="large-4 columns" id="applyStep">
                                                <h3 class="inactive"><span style="color: black;">3.</span>Verification Step </h3>
                                                <div class="default verification-step" ></div>
                                                <p class="hide" style="font: inherit; color: #843130;">A link has been to sent your mail.</p>
                                                <input class="hide fd" name="p_email" value="" style="width: 90%; background-color: white; color: #843130;" type="text" placeholder="Provide Email" /><br>
                                                <input class="hide fd" name="proceed" style="background-color: white; color: #843130; border: #D2D2D2; border-style: solid; border-width: 1px;" type="submit" value="Proceed" /><br>
                                            </div>
                                        </div>
                                        <input type="hidden" name="type" value="" />
                                    </form>
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

            <script>
                $(document).ready(function () {
                    pageInfo('Register');

                    $('#enrollType').change(function () {
                        _step1selection = $('input:checked', $step1).val();
                        $('h3', $step2).removeClass('inactive');
                        $('.default', $step2).hide();
                        // reset step 3
                        $('.default', $step3).show();
                        $('h3', $step3).addClass('inactive');
                        $applysteplinks.hide();
                        $('input', $step2).attr("checked", false).button("refresh");
                        // show undergrad or grad links
                        if (_step1selection == "Undergraduate") {
                            $graditems.hide();
                            $ugraditems.show();
                        } else if (_step1selection == "Graduate") {
                            $ugraditems.hide();
                            $graditems.show();
                        }
                        $('#verify').click(function (e) {
                            // verify email using ajax.
                            var opts = {
                                lines: 13 // The number of lines to draw
                                , length: 28 // The length of each line
                                , width: 7 // The line thickness
                                , radius: 42 // The radius of the inner circle
                                , scale: 0.25 // Scales overall size of the spinner
                                , corners: 1 // Corner roundness (0..1)
                                , color: '#843130' // #rgb or #rrggbb or array of colors
                                , opacity: 0.15 // Opacity of the lines
                                , rotate: 0 // The rotation offset
                                , direction: 1 // 1: clockwise, -1: counterclockwise
                                , speed: 1 // Rounds per second
                                , trail: 60 // Afterglow percentage
                                , fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
                                , zIndex: 2e9 // The z-index (defaults to 2000000000)
                                , className: 'spinner' // The CSS class to assign to the spinner
                                , top: '80%' // Top position relative to parent
                                , left: '50%' // Left position relative to parent
                                , shadow: false // Whether to render a shadow
                                , hwaccel: false // Whether to use hardware acceleration
                                , position: 'absolute' // Element positioning
                            };
                            e.preventDefault();

                            $("input[name^='type']").attr('value', 'verify');
                            data = {reg: $("input[name^='reg']").val()};
                            var target = document.getElementById('verify');
                            var spinner = new Spinner(opts).spin();
                            $(target).after(spinner.el);
                            e.stopPropagation();
                            $('#verify').load('register.php', data, function (response, status, xhr) {
                                if (status == "success") {
                                    spinner.stop();
                                    if (response == "verified") {
                                        $('p.hide').removeClass('hide');
                                        $('.ugrad').children().attr('disabled', 'disabled');
                                    }
                                    else if (response == "null") {
                                        $('.ugrad').children().attr('disabled', 'disabled');
                                        $("input[class^='hide']").removeClass('hide');
                                        $("input[name^='proceed']").click(function (e) {
                                            e.preventDefault();
                                            var dt = {p_email: $("input[name^='p_email']").val(), reg: $("input[name^='reg']").val()};
                                            $("input[name^='proceed']").load('register.php', dt, function (response, status, xhr) {
                                                if (status == "success") {
                                                    if (response == "nullproceeded") {
                                                        $("input[class^='fd']").fadeOut('slow', function () {
                                                            $('p.hide').removeClass('hide');
                                                            $("input[class^='fd']").remove();
                                                        });
                                                    }
                                                }
                                            });
                                            e.stopPropagation();
                                        });
                                    }

                                }
                                else {
                                    // server error occured
                                    console.log('not ok');
                                }
                            });
                        });
                    });
                    $('#statusSelect').change(function () {
                        _step2selection = $('input:checked', $step2).val();
                        $('h3', $step3).removeClass('inactive');
                        $('.default', $step3).hide();
                        // show applyl now links
                        $applysteplinks.show();
                        // show selected discover links
                        $discoveritems.hide();
                        $('.' + _step2selection).show();
                        // show proper apply buttons
                        if (_step2selection == 'FirstYear') {
                            $('.apply-commonapp, .apply-applytx').show();
                            $('.apply-other').hide();
                        } else if (_step2selection == 'TransferStudent') {
                            $('.apply-commonapp').show();
                            $('.apply-applytx, .apply-other').hide();
                        } else if (_step2selection == 'InternationalStudent') {
                            $('.apply-commonapp').show();
                            $('.apply-applytx, .apply-other').hide();
                        } else if (_step2selection == 'Non-DegreeStudent') {
                            $('.apply-other').show();
                            $('.apply-commonapp, .apply-applytx').hide();
                        }
                    });
                    $('#n_reg').placeholder();
                });

            </script>
        </body>
    </html>
<?php endif; ?>