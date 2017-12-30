<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>


    <?php
    $a = new Area('Page Header');
    $a->enableGridContainer();
    $a->display($c);
    ?>

    <?php
    $a = new Area('Main');
    $a->setAreaGridMaximumColumns(12);
    $a->display($c);
    ?>

    <?php
    $a = new Area('Sidebar');
    $a->display($c);
    $a = new Area('Sidebar Footer');
    $a->display($c);
    ?>

    <?php
    $a = new Area('Page Footer');
    $a->enableGridContainer();
    $a->display($c);
    ?>



<?php   $this->inc('elements/footer.php'); ?>
