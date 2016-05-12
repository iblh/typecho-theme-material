
                <!-- Floating Action Button -->
                <div class="fabs">
                    <a href="#top" class="fab">
                        <i class="material-icons">expand_less</i>
                    </a>

                    <?php if($this->is('index')||$this->is('archive')): ?>
                        <?php $this->pageLink('
                            <i class="material-icons">keyboard_arrow_left</i>
                        '); ?>
                    <?php else: ?>
                        <?php $this->theNext('%s', NULL, array('title' =>
                        '<i class="material-icons">keyboard_arrow_left</i>',
                        'tagClass' => 'prev-content')); ?>
                    <?php endif;?>

                    <?php if($this->is('index')||$this->is('archive')): ?>
                        <?php $this->pageLink('
                            <i class="material-icons">keyboard_arrow_right</i>
                        ','next'); ?>
                    <?php else: ?>
                        <?php $this->thePrev('%s', NULL, array('title' =>
                        '<i class="material-icons">keyboard_arrow_right</i>',
                        'tagClass' => 'prev-content')); ?>
                    <?php endif;?>

                    <a href="#bottom" class="fab">
                        <i class="material-icons">keyboard_arrow_down</i>
                    </a>

                    <a id="prime" class="fab">
                        <i class="material-icons prime-i-add">add</i>
                    </a>
                </div>

                <!--Footer-->
                <footer class="mdl-mini-footer" id="bottom">
                    <!--mdl-mini-footer-left-section-->
                    <div class="mdl-mini-footer--left-section">
                        <?php if ( !empty($this->options->footersns) && in_array('ShowTwitter', $this->options->footersns) ) : ?>
                            <?php if(!empty($this->options->CDNURL)): ?>
                                <a href="<?php $this->options->TwitterURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__twitter" style="background-image: url(<?php $this->options->CDNURL() ?>/MaterialCDN/img/footer/footer-ico-twitter.png);">
                            <?php else: ?>
                               <a href="<?php $this->options->TwitterURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__twitter" style="background-image: url(<?php $this->options->themeUrl('img/footer/footer-ico-twitter.png'); ?>);">
                            <?php endif; ?>
                                <span class="visuallyhidden">Twitter</span>
                            </button></a>
                        <?php endif;?>

                        <?php if ( !empty($this->options->footersns) && in_array('ShowFacebook', $this->options->footersns) ) : ?>
                            <?php if(!empty($this->options->CDNURL)): ?>
                                <a href="<?php $this->options->FacebookURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__twitter" style="background-image: url(<?php $this->options->CDNURL() ?>/MaterialCDN/img/footer/footer-ico-facebook.png);">
                            <?php else: ?>
                               <a href="<?php $this->options->FacebookURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__twitter" style="background-image: url(<?php $this->options->themeUrl('img/footer/footer-ico-facebook.png'); ?>);">
                            <?php endif; ?>
                                <span class="visuallyhidden">Facebook</span>
                            </button></a>
                        <?php endif;?>

                        <?php if ( !empty($this->options->footersns) && in_array('ShowGooglePlus', $this->options->footersns) ) : ?>
                            <?php if(!empty($this->options->CDNURL)): ?>
                                <a href="<?php $this->options->GooglePlusURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__twitter" style="background-image: url(<?php $this->options->CDNURL() ?>/MaterialCDN/img/footer/footer-ico-gplus.png);">
                            <?php else: ?>
                               <a href="<?php $this->options->GooglePlusURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__twitter" style="background-image: url(<?php $this->options->themeUrl('img/footer/footer-ico-gplus.png'); ?>);">
                            <?php endif; ?>
                                <span class="visuallyhidden">Google Plus</span>
                            </button></a>
                        <?php endif;?>

                        <?php if ( !empty($this->options->footersns) && in_array('ShowWeibo', $this->options->footersns) ) : ?>
                            <?php if(!empty($this->options->CDNURL)): ?>
                                <a href="<?php $this->options->WeiboURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__twitter" style="background-image: url(<?php $this->options->CDNURL() ?>/MaterialCDN/img/footer/footer-ico-weibo.png);">
                            <?php else: ?>
                               <a href="<?php $this->options->WeiboURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__twitter" style="background-image: url(<?php $this->options->themeUrl('img/footer/footer-ico-weibo.png'); ?>);">
                            <?php endif; ?>
                                <span class="visuallyhidden">Sina Weibo</span>
                            </button></a>
                        <?php endif;?>
                    </div>
                    <!--copyright-->
                    <div id="copyright">Copyright &copy; <?php echo date("Y"); ?> <?php $this->options->title(); ?></div>

                    <!--mdl-mini-footer-right-section-->
                    <div class="mdl-mini-footer--right-section">
                        <div>
                            <div class="footer-develop-div">Powered by <a href="http://typecho.org" target="_blank" class="footer-develop-a">Typecho</a></div>
                            <div class="footer-develop-div">Theme by <a href="https://viosey.com" target="_blank" class="footer-develop-a">Viosey</a></div>
                        </div>
                    </div>
                </footer>
            </main>
            <div class="mdl-layout__obfuscator"></div>
        </div>

        <!--Analysis code-->
        <?php $this->options->analysis(); ?>
    </body>

    <!-- Material js -->
    <?php if(!empty($this->options->CDNURL)): ?>
        <script src="<?php $this->options->CDNURL() ?>/MaterialCDN/js/bootstrap.min.js" async></script>
        <script src="<?php $this->options->CDNURL() ?>/MaterialCDN/js/material.min.js" async></script>
        <script src="<?php $this->options->CDNURL() ?>/MaterialCDN/js/ripples.min.js" async></script>
        <script src="<?php $this->options->CDNURL() ?>/MaterialCDN/js/js.js" async></script>
    <?php else: ?>
        <script src="<?php $this->options->themeUrl('js/bootstrap.min.js'); ?>" async></script>
        <script src="<?php $this->options->themeUrl('js/material.min.js'); ?>" async></script>
        <script src="<?php $this->options->themeUrl('js/ripples.min.js'); ?>" async></script>
        <script src="<?php $this->options->themeUrl('js/js.js'); ?>" async></script>
    <?php endif; ?>


    <?php if($this->options->langis == '0'): ?>
        <script>
            //Auto fill input placeholder
            $(".search-input").focus(function() {
                this.placeholder = "Press enter to search";
            });
        </script>
    <?php elseif($this->options->langis == '1'): ?>
        <script>
            //Auto fill input placeholder
            $(".search-input").focus(function() {
                this.placeholder = "输入后回车以搜索";
            });
        </script>
    <?php endif; ?>

    <?php if( !empty($this->options->switch) && in_array('ShowLoadingLine',$this->options->switch) ): ?>
        <?php if(!empty($this->options->CDNURL)): ?>
            <link rel="stylesheet" href="<?php $this->options->CDNURL() ?>/MaterialCDN/css/nprogress.css" />
            <script src="<?php $this->options->CDNURL() ?>/MaterialCDN/js/nprogress.js"></script>
        <?php else: ?>
            <link rel="stylesheet" href="<?php $this->options->themeUrl('css/nprogress.css'); ?>" />
            <script src="<?php $this->options->themeUrl('js/nprogress.js'); ?>"></script>
        <?php endif; ?>

        <script type="text/javascript">
            NProgress.configure({ showSpinner: true });
            NProgress.start();
            $('#nprogress .bar').css({'background': '<?php $this->options->loadingcolor(); ?>'});
            $('#nprogress .peg').css({'box-shadow': '0 0 10px <?php $this->options->loadingcolor(); ?>, 0 0 15px <?php $this->options->loadingcolor(); ?>'});
            $('#nprogress .spinner-icon').css({'border-top-color': '<?php $this->options->loadingcolor(); ?>', 'border-left-color': '<?php $this->options->loadingcolor(); ?>'});
            setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, <?php $this->options->loadingbuffer(); ?>);
        </script>
    <?php endif; ?>

    <?php if( !empty($this->options->switch) && in_array('SmoothScroll',$this->options->switch) ): ?>
        <?php if(!empty($this->options->CDNURL)): ?>
            <script src="<?php $this->options->CDNURL() ?>/MaterialCDN/js/smoothscroll.js"></script>
        <?php else: ?>
            <script src="<?php $this->options->themeUrl('js/smoothscroll.js'); ?>"></script>
        <?php endif; ?>
    <?php endif; ?>

    <?php if( !empty($this->options->switch) && in_array('atargetblank',$this->options->switch) ): ?>
        <script>
                //Add target="_blank" to a tags
                $(document).bind('DOMNodeInserted', function(event) {
                  $('a[href^="http"]').each(
                        function(){
                          if (!$(this).attr('target')) {
                              $(this).attr('target', '_blank')
                          }
                        }
                    );
                });
        </script>
    <?php endif; ?>

    <?php $this->footer(); ?>
</html>
