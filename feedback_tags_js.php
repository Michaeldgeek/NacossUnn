<?php require_once './classes/constants.php'; ?>
<script src="<?= HOSTNAME ?>feedback/feedback.js" type="text/javascript"></script>
<script src="<?= HOSTNAME ?>feedback/jquery.magnific-popup.js" type="text/javascript"></script>
<script src="<?= HOSTNAME ?>js/libs/eldarion-ajax-core.js" type="text/javascript"></script>
<script src="<?= HOSTNAME ?>js/libs/spin.js" type="text/javascript"></script>
<script type="text/javascript">

    $(document).ready(function () {
        $.feedback({
            ajaxURL: '<?= HOSTNAME; ?>feedback/feedback-listener.php',
            html2canvasURL: '<?= HOSTNAME; ?>feedback/html2canvas.js'
        });
    });
</script>

