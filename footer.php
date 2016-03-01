
                <!-- Back to Top -->
                <a href="#top"><button id="back_to_top" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-shadow--6dp">
                    <!-- For modern browsers. -->
                    <i class="material-icons">expand_less</i>
                    <!-- For IE9 or below. -->
                    <i class="material-icons">&#xE5CE;</i>
                </button></a>

                <!--Footer-->
                <footer class="mdl-mini-footer">
                    <!--mdl-mini-footer-left-section-->
                    <div class="mdl-mini-footer--left-section">
                        <a href="<?php $this->options->TwitterURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__twitter" style="background-image: url(<?php $this->options->themeUrl('img/footer-ico-twitter.png'); ?>);">
                            <span class="visuallyhidden">Twitter</span>
                        </button></a>
                        <a href="<?php $this->options->FacebookURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__facebook" style="background-image: url(<?php $this->options->themeUrl('img/footer-ico-facebook.png'); ?>);">
                            <span class="visuallyhidden">Facebook</span>
                        </button></a>
                        <a href="<?php $this->options->GooglePlusURL() ?>" target="view_window"><button class="mdl-mini-footer--social-btn social-btn social-btn__gplus" style="background-image: url(<?php $this->options->themeUrl('img/footer-ico-gplus.png'); ?>);">
                            <span class="visuallyhidden">Google Plus</span>
                        </button></a>
                    </div>
                    <!--copyright-->
                    <div id="copyright">Copyright &copy; 2016 <?php $this->options->title(); ?></div>

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
    </body>


    <script src="<?php $this->options->themeUrl('js/jquery-2.2.0.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/ripples.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/material.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/js.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/bootstrap.min.js'); ?>"></script>
    <?php $this->footer(); ?>
</html>
