<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

    <?php  View::element('system_errors', array('format' => 'block', 'error' => isset($error) ? $error : null, 'success' => isset($success) ? $success : null, 'message' => isset($message) ? $message : null)); ?>

    <?php  print $innerContent; ?>

<?php   $this->inc('elements/footer.php'); ?>
