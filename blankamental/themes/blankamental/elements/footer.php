<?php  defined('C5_EXECUTE') or die("Access Denied.");?>

    <?php
    $a = new GlobalArea('Footer Site Title');
    $a->display();
    ?>

    <?php
    $a = new GlobalArea('Footer Social');
    $a->display();
    ?>

    <?php
    $a = new GlobalArea('Footer Legal');
    $a->display();
    ?>

    <?php
    $a = new GlobalArea('Footer Navigation');
    $a->display();
    ?>

    <?php
    $a = new GlobalArea('Footer Contact');
    $a->display();
    ?>

    <?php  echo Core::make('helper/navigation')->getLogInOutLink()?>

<?php  $this->inc('elements/footer_bottom.php');?>
