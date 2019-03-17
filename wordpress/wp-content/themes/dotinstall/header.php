<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php wp_title('|', true, 'right');
            bloginfo('name'); ?> </title>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>

<body>
    <div id="header" class="container">
        <h1><a href="<?php home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
        <?php wp_nav_menu(); ?>
    </div> 