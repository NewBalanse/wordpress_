<!DOCTYPE html>
<html lang="en" style="margin-top: 0!important;">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width initial-scale=1, maximum-scale=1">

    <?php wp_head() ?>
</head>
<body>
<div class="container-fluid" style="background-color: #eae1d2">
    <div class="row">
        <div class="container">
            <div class="col d-flex justify-content-end">
                <div class="col d-flex justify-content-end mr-5">
                    <img class="h-50 pt-1"
                         src="<?php echo get_template_directory_uri() . '/image/icons/Layer-115-copy.png' ?>">
                    <p class="text-dark font-weight-bold mr-2">+792 567 8745</p>
                    <img class="h-50 pt-1"
                         src="<?php echo get_template_directory_uri() . '/image/icons/email-copy-2.png' ?>">
                    <p class="text-dark font-weight-bold">contact@blueowlcreative.com</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="background-color: #af461a">
        <div class="container">
            <div class="col d-flex flex-md-nowrap flex-sm-column flex-lg-row flex-column">
                <div class="col-5">
                    <h6 class="h2 w-50 mr-0 text-uppercase" style="color: #7e2f0c;"><?php echo bloginfo(); ?></h6>
                </div>
                <div class="col">
                    <?php wp_nav_menu("menu=menu1"); ?>
                </div>

            </div>
        </div>
    </div>