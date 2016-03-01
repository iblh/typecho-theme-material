<!DOCTYPE HTML>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" />
        <meta name="description" content=" " />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="theme-color" content="#FFFFFF" />
        <title>
            <?php $this->archiveTitle('','',' - '); ?>
            <?php $this->options->title(); ?>
        </title>
        <link rel="icon" type="image/ico" href="<?php $this->options->favicon() ?>">

        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes" />
        <!-- <link rel="icon" sizes="192x192" href="favicon-highres.png" /> -->

        <!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="apple-mobile-web-app-title" content="Material Design Lite" />
        <!-- <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png" /> -->

        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <!-- <meta name="msapplication-TileImage" content="img/touch/ms-touch-icon-144x144-precomposed.png" /> -->
        <meta name="msapplication-TileColor" content="#FFFFFF" />

        <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
        <!--
        <link rel="canonical" href="http://www.example.com/">
        -->

        <meta property="og:url"           content="<?php $this->permalink(); ?>" />
    	<meta property="og:type"          content="website" />
    	<meta property="og:title"         content="<?php $this->archiveTitle(); ?>" />
        <meta property="og:description"   content="Your description" />

        <?php $this->header(); ?>

        <!-- Material style -->
        <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/material.font.css'); ?>" />


        <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/material.min.css'); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/style.css'); ?>" />

        <style>
            #view-source {
                position: fixed;
                display: block;
                right: 0;
                bottom: 0;
                margin-right: 40px;
                margin-bottom: 40px;
                z-index: 900;
            }
        </style>

    </head>

    <body>
