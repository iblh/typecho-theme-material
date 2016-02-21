
                <!-- Back to Top -->
                <a href="#top"><button id="back_to_top" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-shadow--6dp">
                  <i class="material-icons">expand_less</i>
                </button></a>

                <!--Footer-->
                <footer class="mdl-mini-footer">
                    <!--mdl-mini-footer-left-section-->
                    <div class="mdl-mini-footer--left-section">
                        <a href="https://twitter.com/viosey" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__twitter" style="background-image: url(<?php $this->options->themeUrl('img/footer-ico-twitter.png'); ?>);">
                            <span class="visuallyhidden">Twitter</span>
                        </button></a>
                        <a href="https://www.facebook.com/viosey" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__facebook" style="background-image: url(<?php $this->options->themeUrl('img/footer-ico-facebook.png'); ?>);">
                            <span class="visuallyhidden">Facebook</span>
                        </button></a>
                        <a href="https://plus.google.com/116465253856896614917" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__gplus" style="background-image: url(<?php $this->options->themeUrl('img/footer-ico-gplus.png'); ?>);">
                            <span class="visuallyhidden">Google Plus</span>
                        </button></a>

                        <button id="mdl-mini-footer--share-btn" class="mdl-mini-footer--social-btn social-btn__share">
                            <i class="material-icons" role="presentation">share</i>
                            <span class="visuallyhidden">share</span>
                        </button>
                    </div>
                    <!--copyright-->
                    <div id="copyright">Copyright &copy; 2016&nbsp;<?php $this->options->title(); ?></div>

                    <!--mdl-mini-footer-right-section-->
                    <div class="mdl-mini-footer--right-section">
                        <div>
                            <div class="footer-develop-div">Powered by <a href="http://typecho.org" class="footer-develop-a">Typecho</a></div>
                            <div class="footer-develop-div">Theme by <a href="https://viosey.com" class="footer-develop-a">Viosey</a></div>
                        </div>
                    </div>
                </footer>
            </main>
            <div class="mdl-layout__obfuscator"></div>
        </div>
    </body>


    <script src="<?php $this->options->themeUrl('js/jquery-2.2.0.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/ripples.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/material.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/burger.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/sidebar.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/bootstrap.min.js'); ?>"></script>
    <script>
        Array.prototype.forEach.call(document.querySelectorAll('.mdl-card__media'), function(el) {
            var link = el.querySelector('a');
            if(!link) {
            return;
            }
            var target = link.getAttribute('href');
            if(!target) {
            return;
            }
            el.addEventListener('click', function() {
            location.href = target;
            });
        });

        //Auto fill visitor-url "http://"
        $("#visitor-url").focus(function(){
            this.value="http://";
        });
        $("#visitor-url").blur(function(){
            this.value="";
        });

    </script>
    <?php $this->footer(); ?>
</html>
