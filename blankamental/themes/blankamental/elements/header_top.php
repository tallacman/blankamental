<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php  echo Localization::activeLanguage()?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css"> <!--   because I care.  -->

    <?php  echo $html->css($view->getStylesheet('main.less'))?>
    <?php  Loader::element('header_required', array('pageTitle' => isset($pageTitle) ? $pageTitle : '', 'pageDescription' => isset($pageDescription) ? $pageDescription : '')); ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--   original script removed per best practices: https://stackoverflow.com/questions/661213/why-is-browser-sniffing-not-a-recommended-practice  -->
    
</head>
<body>

<div class="<?php  echo $c->getPageWrapperClass()?>">
