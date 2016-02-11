<?php $this->need('header.php'); ?>

        <div class="demo-blog demo-blog--blogpost mdl-layout mdl-js-layout has-drawer is-upgraded">
            <main class="mdl-layout__content">

            <div class="demo-back">
              <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" href="<?php $this->options->siteUrl(); ?>" title="go back" role="button">
                <i class="material-icons" role="presentation">arrow_back</i>
              </a>
            </div>

            <div class="demo-blog__posts mdl-grid">
                <div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--12-col">
                    <div class="mdl-card__media mdl-color-text--grey-50">
                        <h3><?php $this->title() ?></h3>        <!-- 文章 标题 -->
                    </div>

                    <div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
                        <div class="minilogo"></div>
                        <div>
                            <strong><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></strong>      <!-- 文章 作者 -->
                            <span><?php $this->date('F j, Y'); ?></span>        <!-- 文章 日期 -->
                        </div>
                        <div class="section-spacer"></div>
                        <div class="meta__favorites">
                            425 <i class="material-icons" role="presentation">favorite</i>
                            <span class="visuallyhidden">favorites</span>
                        </div>
                        <div>
                            <i class="material-icons" role="presentation">bookmark</i>
                            <span class="visuallyhidden">bookmark</span>
                        </div>
                        <div>
                            <i class="material-icons" role="presentation">share</i>
                            <span class="visuallyhidden">share</span>
                        </div>
                    </div>

                    <div class="mdl-color-text--grey-700 mdl-card__supporting-text">
                        <?php $this->content('Continue Reading...'); ?>
                    </div>
                </div>

                <!-- theNext thePrev button -->
                <nav class="demo-nav mdl-color-text--grey-50 mdl-cell mdl-cell--12-col">
                    <!-- <a href="" class="demo-nav__button">
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
                            <i class="material-icons">arrow_back</i>
                        </button>
                        Newer
                    </a> -->

                    <?php $this->theNext('%s', NULL, array('title' => '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
                        <i class="material-icons">arrow_back</i>
                    </button>&nbsp; Newer', 'tagClass' => 'prev-content')); ?>
                    <div class="section-spacer"></div>
                    <?php $this->thePrev('%s', NULL, array('title' => 'Older &nbsp;<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
                        <i class="material-icons">arrow_forward</i>
                    </button>', 'tagClass' => 'prev-content')); ?>

                    <!-- <a href="" class="demo-nav__button">
                        Older
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
                            <i class="material-icons">arrow_forward</i>
                        </button>
                    </a> -->
                </nav>
            </div>

        <?php $this->need('footer.php'); ?>
