<?php

require_once './FeedBack.php';
$data = $_POST['feedback'];
if (isset($_POST['no_canvas']))
    $feedback = new FeedBack($data, FALSE);
else
    $feedback = new FeedBack($data, TRUE);
$is_successful = $feedback->storeFeedBack();
echo "$is_successful";
?>
