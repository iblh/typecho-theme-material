<?php
/**
 * 这是 Viosey 基于 Google Material Design 开发的 Typecho 主题
 *
 * @package Theme.Material
 * @author viosey
 * @version 1.2.5
 * @link https://viosey.com
 */

$this->need('header.php');?>

        <div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">

            <main class="mdl-layout__content" id="main">
                <div id="top"></div>
                <!-- Sidebar hamburger button -->
                <button class="MD-burger-icon sidebar-toggle">
                  <span class="MD-burger-layer"></span>
                </button>

                <div class="demo-blog__posts mdl-grid">

                    <!-- Daily Pic -->
                    <div class="mdl-card daily-pic mdl-cell mdl-cell--8-col index-top-block">
                        <div class="mdl-card__media mdl-color-text--grey-50" style="background-image:url(<?php $this->options->dailypic() ?>)">
                            <p class="article-headline-p"><a href="#"><?php $this->options->slogan() ?></a></p>
                        </div>
                        <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
                            <!-- Author avatar -->
                            <div id="author-avatar"><?php $this->author->gravatar(44); ?></div>
                            <div>
                                <span class="author-name-span"><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>
                                <span><?php $this->date('F j, Y'); ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Blog info -->
                    <div class="mdl-card something-else mdl-cell mdl-cell--8-col mdl-cell--4-col-desktop index-top-block">
                        <!-- Search -->
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable" method="post" action="">
                            <label id="search-label" class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--fab mdl-color--accent mdl-shadow--4dp" for="search">
                                <!-- For modern browsers. -->
                                <i class="material-icons mdl-color-text--white" role="presentation">search</i>
                                <!-- For IE9 or below. -->
                                <i class="material-icons mdl-color-text--white">&#xE8B6;</i>
                            </label>
                            <form id="search-form" method="post" action="" class="mdl-textfield__expandable-holder">
                                <input class="mdl-textfield__input" type="text" name="s" id="search">
                                <label id="search-form-label" class="mdl-textfield__label" for="search">Enter your query...</label>
                            </form>
                        </div>
                        <!-- LOGO -->
                        <div class="mdl-card__media mdl-color--white mdl-color-text--grey-600">
                            <img src="<?php $this->options->logo() ?>">
                        </div>
                        <!-- Infomation -->
                        <div class="mdl-card__supporting-text meta meta--fill mdl-color-text--grey-600">
                            <div>
                                <strong><?php $this->options->title();  ?></strong>
                            </div>
                            <div class="section-spacer"></div>
                            <!-- Category button -->
                            <button id="show-category-button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                                <!-- For modern browsers. -->
                                <i class="material-icons" role="presentation">apps</i>
                                <!-- For IE9 or below. -->
                                <i class="material-icons">&#xE5C3;</i>
                                <span class="visuallyhidden">Category</span>
                            </button>
                            <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="show-category-button">
                                <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
        				      	<?php while($category->next()): ?>
        							<a href="<?php $category->permalink(); ?>" class="md-menu-list-a" title="<?php $category->name(); ?>"><li class="mdl-menu__item mdl-js-ripple-effect"><?php $category->name(); ?></li></a>
        				      	<?php endwhile; ?>
                            </ul>
                            <!--  Menu button-->
                            <button id="menubtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                                <!-- For modern browsers. -->
                                <i class="material-icons" role="presentation">more_vert</i>
                                <!-- For IE9 or below. -->
                                <i class="material-icons">&#xE5D4;</i>
                                <span class="visuallyhidden">show menu</span>
                            </button>
                            <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="menubtn">
                                <a href="<?php $this->options->feedUrl(); ?>" class="md-menu-list-a" ><li class="mdl-menu__item mdl-js-ripple-effect">Article RSS</li></a> <!-- 文章的RSS地址连接 -->
                                <a href="<?php $this->options->commentsFeedUrl(); ?>" class="md-menu-list-a" ><li class="mdl-menu__item mdl-js-ripple-effect">Comment RSS</li></a> <!-- 评论的RSS地址连接 -->
                                <a class="md-menu-list-a" href="https://twitter.com/intent/tweet?text=<?php $this->options->title(); ?>&url=<?php $this->options->siteUrl(); ?>&via=<?php $this->author->screenName(); ?>"><li class="mdl-menu__item" >Share to Twitter</li></a>
                                <a class="md-menu-list-a" href="https://plus.google.com/share?url=<?php $this->options->siteUrl(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><li class="mdl-menu__item">Share to Google+</li></a>
                                <a href="<?php $this->options->siteUrl(); ?>" target="_blank" class="md-menu-list-a" ><li class="mdl-menu__item mdl-js-ripple-effect">Open in New Tab</li></a>
                            </ul>
                        </div>
                    </div>

                    <?php while($this->next()): ?>

                    <!-- Article module -->
                    <div class="mdl-card mdl-cell mdl-cell--12-col article-module">

                        <!-- Article link & title -->
                        <?php if ( !empty($this->options->appearance) && in_array('ThumbnailOption', $this->options->appearance) ) : ?>
                            <div class="mdl-card__media mdl-color-text--grey-50" style="background-image:url(<?php showThumbnail($this); ?>)">
                                <p class="article-headline-p"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></p>
                            </div>
                        <?php else: ?>
                            <div class="mdl-card__media mdl-color-text--grey-50" style="background-color:<?php $this->options->TitleColor()?>;color:#757575 !important;">
                                <p class="article-headline-p-nopic">
                                    <a href="<?php $this->permalink() ?>">
                                        “</br><?php $this->title() ?></br>”
                                    </a>
                                </p>
                            </div>
                        <?php endif; ?>

                        <!-- Article content -->
                        <div class="mdl-color-text--grey-600 mdl-card__supporting-text index-article-content">
                            <!--  $this->content('Continue Reading...');  -->
                            <?php $this->excerpt(80, '...'); ?>
                        </div>

                        <!-- Article info-->
                        <div>
                            <div class="mdl-card__supporting-text meta mdl-color-text--grey-600 " id="article-author-date">
                                <!-- Author avatar -->
                                <div id="author-avatar"><?php $this->author->gravatar(44); ?></div>
                                <div>
                                    <span class="author-name-span"><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>
                                    <span><?php $this->date('F j, Y'); ?></span>
                                </div>
                            </div>
                            <div id="article-category-comment" style="color:#0097a7">
                                <?php $this->category(', '); ?> | <a href="<?php $this->permalink() ?>"><?php $this->commentsNum('%d 评论'); ?></a>
                                <?php if (class_exists("Stat_Plugin")): ?>
                                    |&nbsp;<?php $this->views(); ?> <?php $this->sticky(); ?>浏览
                                <?php endif; ?>
                            </div>

                        </div>

                    </div>

                    <?php endwhile; ?>

                    <nav class="demo-nav mdl-cell mdl-cell--12-col">
                        <?php $this->pageLink('
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <!-- For modern browsers. -->
                            <i class="material-icons" role="presentation">arrow_back</i>
                            <!-- For IE9 or below. -->
                            <i class="material-icons">&#xE5C4;</i>
                        </button>
                        '); ?>
                        <div class="section-spacer"></div>
                        page <?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?>
                        of <?php echo   ceil($this->getTotal() / $this->parameter->pageSize); ?>
                        <div class="section-spacer"></div>
                        <?php $this->pageLink('
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <!-- For modern browsers. -->
                            <i class="material-icons" role="presentation">arrow_forward</i>
                            <!-- For IE9 or below. -->
                            <i class="material-icons">&#xE5C8;</i>
                        </button>','next'); ?>
                    </nav>

                </div>

                <?php include('sidebar.php'); ?>
                <?php include('footer.php'); ?>
