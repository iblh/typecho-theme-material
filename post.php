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
            <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" href="#" onClick="window.history.back();return false;" target="_self" role="button">
                <!-- For modern browsers. -->
                <i class="material-icons" role="presentation">arrow_back</i>
            </a>
        </div>
        <div class="mdl-tooltip" for="backhome-div">Back</div>

        <!-- Article module -->
        <div class="demo-blog__posts mdl-grid">
            <div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--12-col">

                <!-- Article title -->
                <div class="mdl-card__media mdl-color-text--grey-50" style="background-image: url(<?php showThumbnail($this); ?>);">
                    <p class="article-headline-p">
                        <?php $this->title() ?>
                    </p>
                </div>

                <!-- Articli info -->
                <div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
                    <!-- Author avatar -->
                    <div id="author-avatar">
                        <?php if(!empty($this->options->avatarURL)): ?>
                        <img src="<?php $this->options->avatarURL() ?>" width="44px" height="44px" />
                        <?php else: ?>
                        <?php $this->author->gravatar(44); ?>
                        <?php endif; ?>
                    </div>

                    <div>
                        <!-- Author name -->
                        <span class="author-name-span"><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>
                        <!-- Articel date -->
                        <span>
                                    <?php if($this->options->langis == '0'): ?>
                                        <?php $this->date('F j, Y'); ?>
                                    <?php else: ?>
                                        <?php $this->dateWord(); ?>
                                    <?php endif; ?>
                                </span>
                    </div>
                    <div class="section-spacer"></div>
                    <!-- favorite -->
                    <button id="article-functions-like-button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon btn-like" data-cid="<?php $this->cid();?>" data-num="<?php $this->likesNum();?>">
                                <i class="material-icons mdl-badge mdl-badge--overlap" role="presentation" data-badge="<?php $this->likesNum();?>">favorite</i>
                                <span class="visuallyhidden">favorites</span>
                            </button>
                    <!-- view tags -->
                    <button id="article-functions-viewtags-button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                                <!-- For modern browsers. -->
                                <i class="material-icons">view_carousel</i>
                                <span class="visuallyhidden">tags</span>
                            </button>
                    <ul id="article-functions-viewtags-ul" class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="article-functions-viewtags-button">
                        <li class="mdl-menu__item">
                            <?php $this->tags('<li class="mdl-menu__item"> ', true, ''); ?></li>
                    </ul>
                    <!-- share -->
                    <button id="article-fuctions-share-button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                                <!-- For modern browsers. -->
                                <i class="material-icons" role="presentation">share</i>
                                <span class="visuallyhidden">share</span>
                            </button>
                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="article-fuctions-share-button">
                        <?php if (class_exists("Stat_Plugin")): ?>
                        <a class="md-menu-list-a" href="#">
                            <li class="mdl-menu__item">
                                <?php $this->views(); ?> 浏览</li>
                        </a>
                        <?php endif; ?>
                        <a class="md-menu-list-a" target="_blank" href="<?php $this->permalink(); ?>">
                            <li class="mdl-menu__item">
                                <?php if($this->options->langis == '0'): ?> Open in New Tab
                                <?php elseif($this->options->langis == '1'): ?> 新标签页打开
                                <?php elseif($this->options->langis == '2'): ?> 新標籤頁打開
                                <?php endif; ?>
                            </li>
                        </a>
                        <a class="md-menu-list-a" href="https://twitter.com/intent/tweet?text=<?php $this->title(); ?>&url=<?php $this->permalink() ?>&via=<?php $this->user->screenName(); ?>">
                            <li class="mdl-menu__item">
                                <?php if($this->options->langis == '0'): ?> Share to Twitter
                                <?php else: ?> 分享到 Twitter
                                <?php endif; ?>
                            </li>
                        </a>
                        <a class="md-menu-list-a" href="https://plus.google.com/share?url=<?php $this->permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                            <li class="mdl-menu__item">
                                <?php if($this->options->langis == '0'): ?> Share to Google+
                                <?php else: ?> 分享到 Google+
                                <?php endif; ?>
                            </li>
                        </a>
                    </ul>
                </div>

                <!-- Articel content -->
                <div id="article-content-div" class="mdl-color-text--grey-700 mdl-card__supporting-text post-article-content <?php if( !empty($this->options->switch) && in_array('ShowLoadingLine',$this->options->switch) ): ?>fade out<?php endif; ?>">
                    <?php $this->content(); ?>
                </div>

                <!-- Article comments -->
                <?php include('comments.php'); ?>
            </div>

            <!-- theNext thePrev button -->
            <nav class="demo-nav mdl-color-text--grey-50 mdl-cell mdl-cell--12-col">
                <?php $this->theNext('%s', NULL, array('title' => '
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
                            <i class="material-icons">arrow_back</i>
                        </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Newer', 'tagClass' => 'prev-content')); ?>
                <div class="section-spacer"></div>
                <?php $this->thePrev('%s', NULL, array('title' => 'Older&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
                            <i class="material-icons">arrow_forward</i>
                        </button>', 'tagClass' => 'prev-content')); ?>
            </nav>
        </div>

        <?php include('sidebar.php'); ?>
        <?php include('footer.php'); ?>