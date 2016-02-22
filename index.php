<?php
/**
 * 这是 Viosey 基于 Google Material Design 开发的Typecho模版
 *
 * @package MaterialDesign-TypechoTheme
 * @author viosey
 * @version Beta 3.1
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
                    <div class="mdl-card daily-pic mdl-cell mdl-cell--8-col">
                        <div class="mdl-card__media mdl-color-text--grey-50">
                            <p class="article-headline-p"><a href="#">Daily Pic</a></p>
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

                    <!-- Blog info -->
                    <div class="mdl-card something-else mdl-cell mdl-cell--8-col mdl-cell--4-col-desktop">
                        <!-- Search -->
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable" method="post" action="">
                            <label id="search-label" class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--fab mdl-color--accent mdl-shadow--4dp" for="search">
                                <i class="material-icons mdl-color-text--white" role="presentation">search</i>
                            </label>
                            <form id="search-form" method="post" action="" class="mdl-textfield__expandable-holder">
                                <input class="mdl-textfield__input" type="text" name="s" id="search">
                                <label id="search-form-label" class="mdl-textfield__label" for="search">Enter your query...</label>
                            </form>
                        </div>
                        <!-- LOGO -->
                        <div class="mdl-card__media mdl-color--white mdl-color-text--grey-600">
                            <img src="<?php $this->options->themeUrl('img/logo.png'); ?>">
                        </div>
                        <!-- Infomation -->
                        <div class="mdl-card__supporting-text meta meta--fill mdl-color-text--grey-600">
                            <div>
                                <strong><?php $this->options->title();  ?></strong>
                            </div>
                            <div class="section-spacer"></div>
                            <!-- Category button -->
                            <button id="show-category-button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                                <i class="material-icons" role="presentation">apps</i>
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
                                <i class="material-icons" role="presentation">more_vert</i>
                                <span class="visuallyhidden">show menu</span>
                            </button>
                            <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="menubtn">
                                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                                <?php while($pages->next()): ?>
                                    <a href="<?php $pages->permalink(); ?>" class="md-menu-list-a" title="<?php $pages->title(); ?>"><li class="mdl-menu__item mdl-js-ripple-effect"><?php $pages->title(); ?></li></a>
                                <?php endwhile; ?>
                                <a href="<?php $this->options->feedUrl(); ?>" class="md-menu-list-a" ><li class="mdl-menu__item mdl-js-ripple-effect">Article RSS</li></a> <!-- 文章的RSS地址连接 -->
                                <a href="<?php $this->options->commentsFeedUrl(); ?>" class="md-menu-list-a" ><li class="mdl-menu__item mdl-js-ripple-effect">Comment RSS</li></a> <!-- 评论的RSS地址连接 -->
                                <a href="<?php $this->options->siteUrl(); ?>" target="window" class="md-menu-list-a" ><li class="mdl-menu__item mdl-js-ripple-effect">Open in New Tab</li></a>
                            </ul>
                        </div>
                    </div>

                    <?php while($this->next()): ?>

                    <!-- Article fragment -->
                    <div class="mdl-card mdl-cell mdl-cell--12-col">

                        <!-- 文章链接和标题 -->
                        <div class="mdl-card__media mdl-color-text--grey-50" style="background-image:url(<?php showThumbnail($this); ?>)">
                            <p class="article-headline-p"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></p>
                        </div>

                        <!-- 文章内容 -->
                        <div class="mdl-color-text--grey-600 mdl-card__supporting-text index-article-content">
                            <?php $this->content('Continue Reading...'); ?>
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

                <?php include('sidebar.php'); ?>
                <?php include('footer.php'); ?>
