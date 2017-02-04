        <!-- Floating Action Button -->
        <div class="fabs">
            <a href="#top" class="fab">
                <i class="material-icons">expand_less</i>
            </a>
            <?php if ($this->is('index')||$this->is('archive')): ?>
            <?php $this->pageLink('
                                    <i class="material-icons">keyboard_arrow_left</i>
                                '); ?>
            <?php else: ?>
            <?php $this->theNext('%s', null, array('title' =>
                                '<i class="material-icons">keyboard_arrow_left</i>',
                                'tagClass' => 'prev-content')); ?>
            <?php endif;?>
            <?php if ($this->is('index')||$this->is('archive')): ?>
            <?php $this->pageLink('
                                    <i class="material-icons">keyboard_arrow_right</i>
                                ', 'next'); ?>
            <?php else: ?>
            <?php $this->thePrev('%s', null, array('title' =>
                                '<i class="material-icons">keyboard_arrow_right</i>',
                                'tagClass' => 'prev-content')); ?>
            <?php endif;?>
            <a id="prime" class="fab">
                <i class="material-icons prime-i-add">add</i>
            </a>
        </div>
        
        <!--Footer-->
        <footer class="mdl-mini-footer" id="bottom">
            <!--mdl-mini-footer-left-section-->
            <div class="mdl-mini-footer--left-section">
                <?php if (!empty($this->options->footersns) && in_array('ShowTwitter', $this->options->footersns)) : ?>
                <?php if (!empty($this->options->CDNURL)): ?>
                <a href="<?php $this->options->TwitterURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__twitter" style="background-image: url(<?php $this->options->CDNURL() ?>/MaterialCDN/img/footer/footer_ico-twitter.png);">
                    <?php else: ?>
                        <a href="<?php $this->options->TwitterURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__twitter" style="background-image: url(<?php $this->options->themeUrl('img/footer/footer_ico-twitter.png'); ?>);">                                            
                            <?php endif; ?>
                            <span class="visuallyhidden">Twitter</span>
                        </button></a>
                    <?php endif;?>
                    <?php if (!empty($this->options->footersns) && in_array('ShowFacebook', $this->options->footersns)) : ?>
                <?php if (!empty($this->options->CDNURL)): ?>
                <a href="<?php $this->options->FacebookURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__facebook" style="background-image: url(<?php $this->options->CDNURL() ?>/MaterialCDN/img/footer/footer_ico-facebook.png);">
                                    <?php else: ?>
                                       <a href="<?php $this->options->FacebookURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__facebook" style="background-image: url(<?php $this->options->themeUrl('img/footer/footer_ico-facebook.png'); ?>);">
                                    <?php endif; ?>
                                        <span class="visuallyhidden">Facebook</span>
                                    </button></a>
                <?php endif;?>

                <?php if (!empty($this->options->footersns) && in_array('ShowGooglePlus', $this->options->footersns)) : ?>
                <?php if (!empty($this->options->CDNURL)): ?>
                <a href="<?php $this->options->GooglePlusURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__gplus" style="background-image: url(<?php $this->options->CDNURL() ?>/MaterialCDN/img/footer/footer_ico-gplus.png);">
                                    <?php else: ?>
                                       <a href="<?php $this->options->GooglePlusURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__gplus" style="background-image: url(<?php $this->options->themeUrl('img/footer/footer_ico-gplus.png'); ?>);">
                                    <?php endif; ?>
                                        <span class="visuallyhidden">Google Plus</span>
                                    </button></a>
                <?php endif;?>

                <?php if (!empty($this->options->footersns) && in_array('ShowWeibo', $this->options->footersns)) : ?>
                <?php if (!empty($this->options->CDNURL)): ?>
                <a href="<?php $this->options->WeiboURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__weibo" style="background-image: url(<?php $this->options->CDNURL() ?>/MaterialCDN/img/footer/footer_ico-weibo.png);">
                                    <?php else: ?>
                                       <a href="<?php $this->options->WeiboURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__weibo" style="background-image: url(<?php $this->options->themeUrl('img/footer/footer_ico-weibo.png'); ?>);">
                                    <?php endif; ?>
                                        <span class="visuallyhidden">Sina Weibo</span>
                                    </button></a>
                <?php endif;?>
                                                        <?php if (!empty($this->options->footersns) && in_array('ShowInstagram', $this->options->footersns)) : ?>
                <?php if (!empty($this->options->CDNURL)): ?>
                <a href="<?php $this->options->InstagramURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__weibo" style="background-image: url(<?php $this->options->CDNURL() ?>/MaterialCDN/img/footer/footer_ico-instagram.png);">
                                    <?php else: ?>
                                       <a href="<?php $this->options->InstagramURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__weibo" style="background-image: url(<?php $this->options->themeUrl('img/footer/footer_ico-instagram.png'); ?>);">
                                    <?php endif; ?>
                                        <span class="visuallyhidden">Instagram</span>
                                    </button></a>
                <?php endif;?>
                                                        <?php if (!empty($this->options->footersns) && in_array('ShowGithub', $this->options->footersns)) : ?>
                <?php if (!empty($this->options->CDNURL)): ?>
                <a href="<?php $this->options->GithubURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__weibo" style="background-image: url(<?php $this->options->CDNURL() ?>/MaterialCDN/img/footer/footer_ico-github.png);">
                                    <?php else: ?>
                                       <a href="<?php $this->options->GithubURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__weibo" style="background-image: url(<?php $this->options->themeUrl('img/footer/footer_ico-github.png'); ?>);">
                                    <?php endif; ?>
                                        <span class="visuallyhidden">Github</span>
                                    </button></a>
                <?php endif;?>
                                                        <?php if (!empty($this->options->footersns) && in_array('ShowTumblr', $this->options->footersns)) : ?>
                <?php if (!empty($this->options->CDNURL)): ?>
                <a href="<?php $this->options->TumblrURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__weibo" style="background-image: url(<?php $this->options->CDNURL() ?>/MaterialCDN/img/footer/footer_ico-tumblr.png);">
                                    <?php else: ?>
                                       <a href="<?php $this->options->TumblrURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__weibo" style="background-image: url(<?php $this->options->themeUrl('img/footer/footer_ico-tumblr.png'); ?>);">
                                    <?php endif; ?>
                                        <span class="visuallyhidden">Tumblr</span>
                                    </button></a>
                <?php endif;?>
                
                <?php if (!empty($this->options->footersns) && in_array('ShowBilibili', $this->options->footersns)) : ?>
                    <?php if (!empty($this->options->CDNURL)): ?>
                        <a href="<?php $this->options->BilibiliURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__weibo" style="background-image: url(<?php $this->options->CDNURL() ?>/MaterialCDN/img/footer/footer_ico-bilibili.png);">
                    <?php else: ?>
                            <a href="<?php $this->options->BilibiliURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__weibo" style="background-image: url(<?php $this->options->themeUrl('img/footer/footer_ico-bilibili.png'); ?>);">
                    <?php endif; ?>
                <span class="visuallyhidden">Bilibili</span>
                            </button></a>
                <?php endif;?>
                
                <?php if (!empty($this->options->footersns) && in_array('ShowTelegram', $this->options->footersns)) : ?>
                    <?php if (!empty($this->options->CDNURL)): ?>
                        <a href="<?php $this->options->TelegramURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__weibo" style="background-image: url(<?php $this->options->CDNURL() ?>/MaterialCDN/img/footer/footer_ico-telegram.png);">
                    <?php else: ?>
                            <a href="<?php $this->options->TelegramURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__weibo" style="background-image: url(<?php $this->options->themeUrl('img/footer/footer_ico-telegram.png'); ?>);">
                    <?php endif; ?>
                <span class="visuallyhidden">Telegram</span>
                            </button></a>
                <?php endif;?>
                
                <?php if (!empty($this->options->footersns) && in_array('ShowZhihu', $this->options->footersns)) : ?>
                    <?php if (!empty($this->options->CDNURL)): ?>
                        <a href="<?php $this->options->ZhihuURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__weibo" style="background-image: url(<?php $this->options->CDNURL() ?>/MaterialCDN/img/footer/footer_ico-zhihu.png);">
                    <?php else: ?>
                            <a href="<?php $this->options->ZhihuURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__weibo" style="background-image: url(<?php $this->options->themeUrl('img/footer/footer_ico-zhihu.png'); ?>);">
                    <?php endif; ?>
                <span class="visuallyhidden">Zhihu</span>
                            </button></a>
                <?php endif;?>
                
                <?php if (!empty($this->options->footersns) && in_array('ShowLinkedin', $this->options->footersns)) : ?>
                    <?php if (!empty($this->options->CDNURL)): ?>
                        <a href="<?php $this->options->LinkedinURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__weibo" style="background-image: url(<?php $this->options->CDNURL() ?>/MaterialCDN/img/footer/footer_ico-linkedin.png);">
                    <?php else: ?>
                            <a href="<?php $this->options->LinkedinURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__weibo" style="background-image: url(<?php $this->options->themeUrl('img/footer/footer_ico-linkedin.png'); ?>);">
                    <?php endif; ?>
                <span class="visuallyhidden">Linkedin</span>
                            </button></a>
                <?php endif;?>
                
            </div>
            
            <!--copyright-->
            <div id="copyright">Copyright &copy;
                <?php echo date("Y"); ?>
                <?php $this->options->title(); ?>
            </div>
            
            <?php if (class_exists("Uptime_Plugin")): ?>
                <div id="copyright">
                    <?php Uptime_Plugin::show(); ?>
                </div>
            <?php endif; ?>

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
<?php if (!empty($this->options->CDNURL)): ?>
<script src="<?php $this->options->CDNURL() ?>/MaterialCDN/js/jquery.min.js"></script>
<script src="<?php $this->options->CDNURL() ?>/MaterialCDN/js/js.min.js"></script>
<script src="<?php $this->options->CDNURL() ?>/MaterialCDN/js/jquery.pjax.js"></script>
<?php else: ?>
<script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/js.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/jquery.pjax.js'); ?>"></script>
<?php endif; ?>


<?php if (!empty($this->options->switch) && in_array('ShowLoadingLine', $this->options->switch)): ?>
<?php if (!empty($this->options->CDNURL)): ?>
<script src="<?php $this->options->CDNURL() ?>/MaterialCDN/js/nprogress.js"></script>
<?php else: ?>
<script src="<?php $this->options->themeUrl('js/nprogress.js'); ?>"></script>
<?php endif; ?>

<script type="text/javascript">
    NProgress.configure({
        showSpinner: true
    });
    NProgress.start();
    $('#nprogress .bar').css({
        'background': '<?php $this->options->loadingcolor(); ?>'
    });
    $('#nprogress .peg').css({
        'box-shadow': '0 0 10px <?php $this->options->loadingcolor(); ?>, 0 0 15px <?php $this->options->loadingcolor(); ?>'
    });
    $('#nprogress .spinner-icon').css({
        'border-top-color': '<?php $this->options->loadingcolor(); ?>',
        'border-left-color': '<?php $this->options->loadingcolor(); ?>'
    });
    setTimeout(function() {
        NProgress.done();
        $('.fade').removeClass('out');
    }, <?php $this->options->loadingbuffer(); ?>);
</script>
<?php endif; ?>

<?php if (!empty($this->options->switch) && in_array('SmoothScroll', $this->options->switch)): ?>
<?php if (!empty($this->options->CDNURL)): ?>
<script src="<?php $this->options->CDNURL() ?>/MaterialCDN/js/smoothscroll.js" async></script>
<?php else: ?>
<script src="<?php $this->options->themeUrl('js/smoothscroll.js'); ?>" async></script>
<?php endif; ?>
<?php endif; ?>

<?php if (!empty($this->options->switch) && in_array('atargetblank', $this->options->switch)): ?>
<script>
    //Add target="_blank" to a tags
    $(document).bind('DOMNodeInserted', function(event) {
        $('a[href^="http"]').each(
            function() {
                if (!$(this).attr('target')) {
                    $(this).attr('target', '_blank')
                }
            }
        );
    });
</script>
<?php endif; ?>

<?php if (!empty($this->options->switch) && in_array('PJAX', $this->options->switch)) : ?>
<script>
    jQuery(document).ready(function() {
        var $ = jQuery;
        //绑定链接
        $.pjax({
            selector: "a[href^='<?php $this->options->siteUrl(); ?>'][href$='.html']",
            container: '.demo-blog__posts', //内容替换的容器
            show: 'slide', //展现的动画，支持默认和fade, 可以自定义动画方式，这里为自定义的function即可。
            cache: true, //是否使用缓存
            storage: true, //是否使用本地存储
            // titleSuffix: ' | Ray', //标题后缀
            filter: function() {},
            callback: function(status) {
                $("#nav-menu").addClass("animated fadeInUp");
            }
        });
        //绑定跳转开始事件
        $(".demo-blog__posts").bind("pjax.start",
            function() {
                $(".demo-blog__posts").css("opacity", "0.6");
                // $(".spinner").css("opacity","1");
                // $(".spinner").show();

            });
        //绑定跳转结束事件
        $(".demo-blog__posts").bind("pjax.end",
            function() {
                // $(".spinner").hide();
                $(".demo-blog__posts").css("opacity", "1");
                // Main
                initHeader();
                addListeners();
                if (navigator.userAgent.indexOf('Firefox') >= 0) {
                    document.documentElement.scrollTop = 120;
                } else {
                    $('body').animate({
                        scrollTop: 120
                    });
                }

            });

    });
</script>
<?php endif; ?>

<!-- Pangu js -->
<?php if (!empty($this->options->switch) && in_array('Pangu', $this->options->switch)): ?>
  <?php if (!empty($this->options->CDNURL)): ?>
      <script src="<?php $this->options->CDNURL() ?>/MaterialCDN/js/pangu.min.js"></script>
  <?php else: ?>
      <script src="<?php $this->options->themeUrl('js/pangu.min.js'); ?>"></script>
  <?php endif; ?>
  <script> pangu.spacingPage(); </script>
<?php endif; ?>

<?php $this->footer(); ?>

</html>
