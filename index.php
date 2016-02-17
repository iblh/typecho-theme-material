<?php

/**
 * 这是 Viosey 基于 Google Material Design 开发的Typecho模版
 *
 * @package Typecho Material Design Theme
 * @author viosey
 * @version Alpha 2.3
 * @link https://viosey.com
 */

$this->need('header.php');
?>

        <div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">

            <main class="mdl-layout__content">

                <div class="demo-blog__posts mdl-grid">

                    <!-- Daily Pic -->
                    <div class="mdl-card daily-pic mdl-cell mdl-cell--8-col">
                        <div class="mdl-card__media mdl-color-text--grey-50">
                            <h3><a href="entry.html">Daily Pic</a></h3>
                        </div>
                        <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
                            <!-- 作者头像 -->
                            <div id="author-avatar"><?php $this->author->gravatar(44); ?></div>
                            <div>
                                <span class="author-name-span"><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>
                                <span><?php $this->date('F j, Y'); ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- The Newist -->
                    <div class="mdl-card something-else mdl-cell mdl-cell--8-col mdl-cell--4-col-desktop">
                        <button class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--fab mdl-color--accent">
                            <i class="material-icons mdl-color-text--white" role="presentation">add</i>
                            <span class="visuallyhidden">add</span>
                        </button>
                        <div class="mdl-card__media mdl-color--white mdl-color-text--grey-600">
                            <img src="<?php $this->options->themeUrl('img/logo.png'); ?>">
                            +1,337
                        </div>
                        <div class="mdl-card__supporting-text meta meta--fill mdl-color-text--grey-600">
                            <div>
                                <strong>The Newist</strong>
                            </div>
                            <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="menubtn">
                                <li class="mdl-menu__item mdl-js-ripple-effect">About</li>
                                <li class="mdl-menu__item mdl-js-ripple-effect">Message</li>
                                <li class="mdl-menu__item mdl-js-ripple-effect">Favorite</li>
                                <li class="mdl-menu__item mdl-js-ripple-effect">Search</li>
                            </ul>
                            <button id="menubtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                                <i class="material-icons" role="presentation">more_vert</i>
                                <span class="visuallyhidden">show menu</span>
                            </button>
                        </div>
                    </div>

                    <?php while($this->next()): ?>

                    <!-- Article fragment -->
                    <div class="mdl-card on-the-road-again mdl-cell mdl-cell--12-col">

                        <!-- 文章链接和标题 -->
                        <div class="mdl-card__media mdl-color-text--grey-50">
                            <h3><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
                        </div>

                        <!-- 文章内容 -->
                        <div class="mdl-color-text--grey-600 mdl-card__supporting-text index-article-content">
                            <?php $this->content(' &nbsp;Continue &nbsp;Reading...'); ?>
                        </div>

                        <!-- 文章相关信息-->
                        <div>
                            <div class="mdl-card__supporting-text meta mdl-color-text--grey-600 " id="article-author-date">
                                <!-- 作者头像 -->
                                <div id="author-avatar"><?php $this->author->gravatar(44); ?></div>
                                <div>
                                    <span class="author-name-span"><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>
                                    <span><?php $this->date('F j, Y'); ?></span>
                                </div>
                            </div>
                            <div id="article-category-comment">
                                <?php $this->category(', '); ?> | <a href="<?php $this->permalink() ?>"><?php $this->commentsNum('%d 评论'); ?></a>
                            </div>
                        </div>

                    </div>

                    <?php endwhile; ?>

                    <nav class="demo-nav mdl-cell mdl-cell--12-col">
                        <?php $this->pageLink('<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon"><i class="material-icons" role="presentation">arrow_back</i></button>'); ?>
                        <div class="section-spacer"></div>
                        page <?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?>
                        of <?php echo   ceil($this->getTotal() / $this->parameter->pageSize); ?>
                        <div class="section-spacer"></div>
                        <?php $this->pageLink('<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon"><i class="material-icons" role="presentation">arrow_forward</i></button>','next'); ?>
                    </nav>


                </div>

                <?php $this->need('footer.php'); ?>
