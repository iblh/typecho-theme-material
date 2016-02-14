<?php $this->need('header.php'); ?>

        <div class="demo-blog demo-blog--blogpost mdl-layout mdl-js-layout has-drawer is-upgraded">
            <main class="mdl-layout__content">

                <!-- 左上角返回按钮 -->
                <div class="demo-back">
                  <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" href="<?php $this->options->siteUrl(); ?>" title="go back" role="button">
                    <i class="material-icons" role="presentation">arrow_back</i>
                  </a>
                </div>

                <!-- 文章模块 -->
                <div class="demo-blog__posts mdl-grid">
                    <div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--12-col">

                        <!-- 文章标题 -->
                        <div class="mdl-card__media mdl-color-text--grey-50">
                            <h3><?php $this->title() ?></h3>
                        </div>

                        <!-- 文章相关信息 -->
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

                        <!-- 文章内容 -->
                        <div class="mdl-color-text--grey-700 mdl-card__supporting-text post-article-content">
                            <?php $this->content('Continue Reading...'); ?>
                        </div>

                        <!-- 文章评论 -->
                        <?php include('comments.php'); ?>
                    </div>

                    <!-- theNext thePrev button -->
                    <nav class="demo-nav mdl-color-text--grey-50 mdl-cell mdl-cell--12-col">
                        <?php $this->theNext('%s', NULL, array('title' => '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
                            <i class="material-icons">arrow_back</i>
                        </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Newer', 'tagClass' => 'prev-content')); ?>
                        <div class="section-spacer"></div>
                        <?php $this->thePrev('%s', NULL, array('title' => 'Older&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
                            <i class="material-icons">arrow_forward</i>
                        </button>', 'tagClass' => 'prev-content')); ?>
                    </nav>
                </div>


                <?php include('footer.php'); ?>
