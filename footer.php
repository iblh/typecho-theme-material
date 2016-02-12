                <!--footer-->
                
                <footer class="mdl-mini-footer">
                    <!--mdl-mini-footer-left-section-->
                    <div class="mdl-mini-footer--left-section">
                        <button class="mdl-mini-footer--social-btn social-btn social-btn__twitter">
                            <span class="visuallyhidden">Twitter</span>
                        </button>
                        <button class="mdl-mini-footer--social-btn social-btn social-btn__blogger">
                            <span class="visuallyhidden">Facebook</span>
                        </button>
                        <button class="mdl-mini-footer--social-btn social-btn social-btn__gplus">
                            <span class="visuallyhidden">Google Plus</span>
                        </button>
                        <button class="mdl-mini-footer--social-btn social-btn__share">
                            <i class="material-icons" role="presentation">share</i>
                            <span class="visuallyhidden">share</span>
                        </button>
                    </div>

                    <!--copyright-->
                    <div id="copyright">Copyright &copy; 2016&nbsp;<?php $this->options->title(); ?></div>

                    <!--mdl-mini-footer-right-section-->
                    <div class="mdl-mini-footer--right-section">
                        <div>Powered by <a href="http://typecho.org" class="footer-develop-a">Typecho</a><br/>
                            Theme by <a href="https://viosey.com" class="footer-develop-a">Viosey</a>
                        </div>
                    </div>
                </footer>
            </main>
            <div class="mdl-layout__obfuscator"></div>
        </div>
    </body>


    <script src="<?php $this->options->themeUrl('js/ripples.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/material.min.js'); ?>"></script>
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
    </script>
</html>
