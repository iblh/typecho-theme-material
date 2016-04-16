<!DOCTYPE HTML>
<html >
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" />
        <meta name="description" content=" " />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="theme-color" content="<?php $this->options->ThemeColor() ?>" />
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
        <script src="<?php $this->options->themeUrl('js/jquery-2.2.0.min.js'); ?>"></script>

        <!--[if lte IE 9]>
           <link rel="stylesheet" href="<?php $this->options->themeUrl('css/ie-blocker.css'); ?>">
           <?php if($this->options->langis == '0'): ?>
               <script src="<?php $this->options->themeUrl('js/ie-blocker.en.js'); ?>" img-path="../img/"></script>
           <?php elseif($this->options->langis == '1'): ?>
               <script src="<?php $this->options->themeUrl('js/ie-blocker.zhCN.js'); ?>" img-path="../img/"></script>
           <?php endif; ?>
       <![endif]-->

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

            a{
                color: <?php $this->options->alinkcolor(); ?>;
            }
        </style>

        <?php if( !empty($this->options->switch) && in_array('ShowLoadingLine',$this->options->switch) ): ?>
            <style>
                .fade {
                  transition: all <?php $this->options->loadingbuffer(); ?>ms linear;
                  -webkit-transform: translate3d(0,0,0);
                  -moz-transform: translate3d(0,0,0);
                  -ms-transform: translate3d(0,0,0);
                  -o-transform: translate3d(0,0,0);
                  transform: translate3d(0,0,0);
                  opacity: 1;
                }

                .fade.out {
                  opacity: 0;
                }
            </style>
        <?php endif; ?>

        <?php if ( !empty($this->options->appearance) && in_array('CenterArticle', $this->options->appearance) ) : ?>
            <style>
                .demo-blog--blogpost .meta+.mdl-card__supporting-text {
                    display: flex;
                }
                .demo-blog--blogpost .meta+.mdl-card__supporting-text p {
                    max-width: 32pc;
                }
                pre {
                    max-width: 32pc;
                }
                h1, h2, h3, h4, h5, h6 {
                    margin-left: 0px !important;
                }
                hr{
                    width: 200px;
                    margin: 2em auto;
                }
            </style>
        <?php endif; ?>


        <?php if ( $this->options->BGtype =='0' ) : ?>
            <style>
                body{
                    <?php if (!empty($this->options->bgcolor)): ?>
                        background-color: <?php $this->options->bgcolor() ?>;
                    <?php else: ?>
                        background-color: #F5F5F5;
                    <?php endif; ?>
                }
                .demo-blog .something-else .mdl-card__supporting-text{
                    background-color: #fff;
                }
                .MD-burger-layer{
                    background-color: #666;
                }
                .demo-blog .demo-blog__posts>.demo-nav,
                .demo-nav a,
                .demo-blog--blogpost .demo-back{
                    color: #666;
                }
            </style>
        <?php elseif ( $this->options->BGtype == '2'): ?>
            <style>
                body{
                    <?php if($this->options->GradientType == '0'): ?>
                        background-image:
                            -moz-radial-gradient(0% 100%, ellipse cover, #A68584 10%,rgba(255,255,227,0) 40%),
                            -moz-linear-gradient(-45deg,  #6B8799 0%,#6CA69D 100%)
                            ;
                        background-image:
                            -o-radial-gradient(0% 100%, ellipse cover, #A68584 10%,rgba(255,255,227,0) 40%),
                            -o-linear-gradient(-45deg,  #6B8799 0%,#6CA69D 100%)
                            ;
                        background-image:
                            -ms-radial-gradient(0% 100%, ellipse cover, #A68584 10%,rgba(255,255,227,0) 40%),
                            -ms-linear-gradient(-45deg,  #6B8799 0%,#6CA69D 100%)
                            ;
                        background-image:
    						-webkit-radial-gradient(0% 100%, ellipse cover, #A68584 10%,rgba(255,255,227,0) 40%),
    						-webkit-linear-gradient(-45deg,  #6B8799 0%,#6CA69D 100%)
        					;
                    <?php elseif($this->options->GradientType == '1'): ?>
                        background-image:
                            -moz-radial-gradient(-20% 140%, ellipse ,  rgba(255,144,187,.6) 30%,rgba(255,255,227,0) 50%),
                            -moz-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%),
                            -moz-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                            -moz-linear-gradient(-45deg,  rgba(18,101,101,.8) -10%,#d9e3e5 80% )
                            ;
                        background-image:
                            -o-radial-gradient(-20% 140%, ellipse ,  rgba(255,144,187,.6) 30%,rgba(255,255,227,0) 50%),
                            -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%),
                            -o-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                            -o-linear-gradient(-45deg,  rgba(18,101,101,.8) -10%,#d9e3e5 80% )
                            ;
                        background-image:
                            -ms-radial-gradient(-20% 140%, ellipse ,  rgba(255,144,187,.6) 30%,rgba(255,255,227,0) 50%),
                            -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%),
                            -ms-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                            -ms-linear-gradient(-45deg,  rgba(18,101,101,.8) -10%,#d9e3e5 80% )
                            ;
                        background-image:
                            -webkit-radial-gradient(-20% 140%, ellipse ,  rgba(255,144,187,.6) 30%,rgba(255,255,227,0) 50%),
                            -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%),
                            -webkit-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                            -webkit-linear-gradient(-45deg,  rgba(18,101,101,.8) -10%,#d9e3e5 80% )
                            ;
                    <?php elseif($this->options->GradientType == '2'): ?>
                        background-image:
                            -moz-radial-gradient(-20% 140%, ellipse ,  rgba(235,167,171,.6) 30%,rgba(255,255,227,0) 50%),
                            -moz-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                            -moz-linear-gradient(-45deg,  rgba(62,70,92,.8) -10%,rgba(220,230,200,.8) 80% )
                            ;
                        background-image:
                            -o-radial-gradient(-20% 140%, ellipse ,  rgba(235,167,171,.6) 30%,rgba(255,255,227,0) 50%),
                            -o-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                            -o-linear-gradient(-45deg,  rgba(62,70,92,.8) -10%,rgba(220,230,200,.8) 80% )
                            ;
                        background-image:
                            -ms-radial-gradient(-20% 140%, ellipse ,  rgba(235,167,171,.6) 30%,rgba(255,255,227,0) 50%),
                            -ms-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                            -ms-linear-gradient(-45deg,  rgba(62,70,92,.8) -10%,rgba(220,230,200,.8) 80% )
                            ;
                        background-image:
                            -webkit-radial-gradient(-20% 140%, ellipse ,  rgba(235,167,171,.6) 30%,rgba(255,255,227,0) 50%),
                            -webkit-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                            -webkit-linear-gradient(-45deg,  rgba(62,70,92,.8) -10%,rgba(220,230,200,.8) 80% )
                            ;
                    <?php elseif($this->options->GradientType =='3'): ?>
                        background-image:
                            -moz-radial-gradient(-20% 140%, ellipse ,  rgba(143,192,193,.6) 30%,rgba(255,255,227,0) 50%),
                            -moz-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                            -moz-linear-gradient(-45deg,  rgba(143,181,158,.8) -10%,rgba(213,232,211,.8) 80% )
                        ;
                        background-image:
                            -o-radial-gradient(-20% 140%, ellipse ,  rgba(143,192,193,.6) 30%,rgba(255,255,227,0) 50%),
                            -o-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                            -o-linear-gradient(-45deg,  rgba(143,181,158,.8) -10%,rgba(213,232,211,.8) 80% )
                        ;
                        background-image:
                            -ms-radial-gradient(-20% 140%, ellipse ,  rgba(143,192,193,.6) 30%,rgba(255,255,227,0) 50%),
                            -ms-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                            -ms-linear-gradient(-45deg,  rgba(143,181,158,.8) -10%,rgba(213,232,211,.8) 80% )
                        ;
                        background-image:
                            -webkit-radial-gradient(-20% 140%, ellipse ,  rgba(143,192,193,.6) 30%,rgba(255,255,227,0) 50%),
                            -webkit-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                            -webkit-linear-gradient(-45deg,  rgba(143,181,158,.8) -10%,rgba(213,232,211,.8) 80% )
                            ;
                    <?php elseif($this->options->GradientType =='4'): ?>
                        background-image:
                            -moz-radial-gradient(-20% 140%, ellipse ,  rgba(214,195,224,.6) 30%,rgba(255,255,227,0) 50%),
                            -moz-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                            -moz-linear-gradient(-45deg, rgba(97,102,158,.8) -10%,rgba(237,187,204,.8) 80% )
                            ;
                        background-image:
                            -o-radial-gradient(-20% 140%, ellipse ,  rgba(214,195,224,.6) 30%,rgba(255,255,227,0) 50%),
                            -o-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                            -o-linear-gradient(-45deg, rgba(97,102,158,.8) -10%,rgba(237,187,204,.8) 80% )
                            ;
                        background-image:
                            -ms-radial-gradient(-20% 140%, ellipse ,  rgba(214,195,224,.6) 30%,rgba(255,255,227,0) 50%),
                            -ms-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                            -ms-linear-gradient(-45deg, rgba(97,102,158,.8) -10%,rgba(237,187,204,.8) 80% )
                            ;
                        background-image:
                            -webkit-radial-gradient(-20% 140%, ellipse ,  rgba(214,195,224,.6) 30%,rgba(255,255,227,0) 50%),
                            -webkit-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                            -webkit-linear-gradient(-45deg, rgba(97,102,158,.8) -10%,rgba(237,187,204,.8) 80% )
                            ;
                    <?php endif; ?>
                }
            </style>
        <?php elseif ( $this->options->BGtype == '1'): ?>
            <style>
                body{
                    <?php if (!empty($this->options->bgcolor)): ?>
                        background-image: url(<?php $this->options->bgcolor() ?>);
                    <?php else: ?>
                        background-image: url(<?php $this->options->themeUrl('img/bg.jpg'); ?>);
                    <?php endif; ?>
                }
            </style>
        <?php endif; ?>

    </head>

    <body>
