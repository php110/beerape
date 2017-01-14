<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if (is_singular() && pings_open(get_queried_object())): ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <?php wp_head();?>
    <style>
        .head{ background-color: #3C3F41;}
        <?php if(get_header_image()):?>
        .head2 {background: url("<?php header_image();?>") no-repeat 0 0;padding-top:30px;}
        <?php endif;?>
        .title {color: #FFF;}
        .title2 {color: #79D546;}
    </style>
</head>
<body>
<div class="head">
    <div class="head2 container">
        <h1 class="title"><?php bloginfo('name');?></h1>
        <h4 class="title2"><?php bloginfo('description');?></h4>
    </div>
</div>

