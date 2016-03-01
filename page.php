<?php $this->need('header.php'); ?>

        <div class="demo-blog demo-blog--blogpost mdl-layout mdl-js-layout has-drawer is-upgraded">

            <main class="mdl-layout__content">
                <div id="top"></div>
                <!-- Sidebar hamburger button -->
                <button class="MD-burger-icon sidebar-toggle">
                  <span class="MD-burger-layer"></span>
                </button>
                <!-- Top-left-corner home button -->
                <div class="demo-back" id="backhome-div">
                    <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" href="<?php $this->options->siteUrl(); ?>" role="button">
                        <!-- For modern browsers. -->
                        <i class="material-icons" role="presentation">arrow_back</i>
                        <!-- For IE9 or below. -->
                        <i class="material-icons">&#xE5C4;</i>
                    </a>
                </div>
                <div class="mdl-tooltip" for="backhome-div">Home</div>

                <!-- Article module -->
                <div class="demo-blog__posts mdl-grid">
                    <div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--12-col">

                        <!-- Article title -->
                        <div class="mdl-card__media mdl-color-text--grey-50" style="background-image: url(<?php showThumbnail($this); ?>);">
                            <p class="article-headline-p"><?php $this->title() ?></p>
                        </div>

                        <!-- Articli info -->
                        <div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
                            <!-- Author avatar -->
                            <div id="author-avatar"><?php $this->author->gravatar(44); ?></div>
                            <div>
                                <!-- Author name -->
                                <span class="author-name-span"><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>
                                <!-- Articel date -->
                                <span><?php $this->date('F j, Y'); ?></span>
                            </div>
                            <div class="section-spacer"></div>
                            <!-- favorite -->
                            <button id="article-functions-like-button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                                <!-- For modern browsers. -->
                                <i class="material-icons" role="presentation">favorite</i>
                                <!-- For IE9 or below. -->
                                <i class="material-icons">&#xE87D;</i>
                                <span class="visuallyhidden">favorites</span>
                            </button>
                            <div class="mdl-tooltip" for="article-functions-like-button">Like</div>
                            <!-- share -->
                            <button id="article-fuctions-share-button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                                <!-- For modern browsers. -->
                                <i class="material-icons" role="presentation">share</i>
                                <!-- For IE9 or below. -->
                                <i class="material-icons">&#xE80D;</i>
                                <span class="visuallyhidden">share</span>
                            </button>
                            <div class="mdl-tooltip" for="article-fuctions-share-button">Share</div>
                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                for="article-fuctions-share-button">
                                <?php if (class_exists("Stat_Plugin")): ?>
                                    <a class="md-menu-list-a" href="#"><li class="mdl-menu__item"><?php $this->views(); ?> 浏览</li></a>
                                <?php endif; ?>
                                <a class="md-menu-list-a" target="_blank" href="<?php $this->permalink(); ?>"><li class="mdl-menu__item">Open in New Tab</li></a>
                                <a class="md-menu-list-a" href="https://twitter.com/intent/tweet?text=<?php $this->title(); ?>&url=<?php $this->permalink() ?>&via=<?php $this->user->screenName(); ?>"><li class="mdl-menu__item" >Share to Twitter</li></a>
                                <a class="md-menu-list-a" href="https://plus.google.com/share?url=<?php $this->permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><li class="mdl-menu__item">Share to Google+</li></a>
                            </ul>
                        </div>

                        <!-- Articel content -->
                        <div id="article-content-div" class="mdl-color-text--grey-700 mdl-card__supporting-text post-article-content">
                            <?php $this->content(); ?>
                        </div>

                        <!-- Article comments -->
                        <?php include('comments.php'); ?>
                    </div>

                    <!-- theNext thePrev button -->
                    <nav class="demo-nav mdl-color-text--grey-50 mdl-cell mdl-cell--12-col">
                        <?php $this->theNext('%s', NULL, array('title' => '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
                            <!-- For modern browsers. -->
                            <i class="material-icons">arrow_back</i>
                            <!-- For IE9 or below. -->
                            <i class="material-icons">&#xE5C4;</i>
                        </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Newer', 'tagClass' => 'prev-content')); ?>
                        <div class="section-spacer"></div>
                        <?php $this->thePrev('%s', NULL, array('title' => 'Older&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
                            <!-- For modern browsers. -->
                            <i class="material-icons">arrow_forward</i>
                            <!-- For IE9 or below. -->
                            <i class="material-icons">&#xE5C8;</i>
                        </button>', 'tagClass' => 'prev-content')); ?>
                    </nav>
                </div>

                <?php include('sidebar.php'); ?>
                <?php include('footer.php'); ?>
