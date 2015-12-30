<script type="text/javascript">
//auto expand textarea
    function adjust_textarea(h) {
        h.style.height = "20px";
        h.style.height = (h.scrollHeight) + "px";
    }
</script>
<script>
    $().ready(function () {
        $('.open-popup-link').magnificPopup({
            type: 'inline',
            midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
        });
        $('#submit_feedback').click(function () {
            $('#feedback_form').submit();
        });
        /*
         * A third party that performs ajax
         */
        $(document).on("eldarion-ajax:begin", function (evt, $el) {
            $el.html("");
            $('#form_header').hide();
            var target = document.getElementById('feedback_form');
            var spinner = new Spinner().spin(target);
        });
        $(document).on("eldarion-ajax:success", function (evt, $el, data, textStatus, jqXHR) {
            $el.html("<p style='color: black; clear: both; position: relative; display: block; top: 0px; margin-right: auto; margin-left: 25%;' class='form_response'>Your Feedback has been recorded</p><input type='button' style='position: relative; display: block; clear: both; bottom: 0px; margin-right: auto; margin-left: auto; margin-top: 5%;' onclick='cancelForm();' value='Dismiss' />");
        });
        $(document).on("eldarion-ajax:error", function (evt, $el, data, textStatus, jqXHR) {
            $el.html("<p style='color: black; clear: both; position: relative; display: block; top: 0px; margin-right: auto; margin-left: 25%;'>An error was encountered!</p><input type='button' style='position: relative; display: block; clear: both; bottom: 0px; margin-right: auto; margin-left: auto; margin-top: 5%;' onclick='cancelForm();' value='Dismiss' />");
        });
    });
    function cancelForm() {
        $('.mfp-close').trigger('click');
    }
    function center() {
        var fw = $('#test-popup').width();
        var rw = $('.form_response').width();
        var cntr = (fw - rw) / 2;
        $('.form_response').css('margin-left', cntr);
        jQuery(window).resize(function () {
            height = jQuery(window).height();
            width = jQuery(window).width();

        });
    }
    var height = jQuery(window).height();
    var width = jQuery(window).width();
    // minimum width needed is 540px; minimum height is 315px
    if ((!Modernizr.canvas) || (width < 540 || height < 315)) {
        $('body').append('<a class="open-popup-link display_as_tab display_on_right" id="bugmuncher_button"  href="#test-popup" >Feedback</a>');
        $('#test-popup').width(width - 10);
    }
</script>