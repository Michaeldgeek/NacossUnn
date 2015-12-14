<div id="test-popup" class="form-style-8 mfp-hide">
    <h2 id="form_header" style="color: #ffffff">Send your Feedback</h2>
    <form method="post" class="form ajax" id="feedback_form" action="<?php
    $url = "feedback/feedback-listener.php";
    echo htmlspecialchars($url);
    ?>">
        <textarea placeholder="Message" autofocus="true" required="true" name="feedback" onkeyup="adjust_textarea(this)"></textarea>
        <input type="button" id="submit_feedback" name="feedback_btn" value="Send Message" />
        <input type="button" onclick="cancelForm();"  value="Cancel" />
        <input type="hidden" name="no_canvas" />
    </form>
</div>