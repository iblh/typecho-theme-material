<?php
/**
 * 这是 Viosey 基于 Google Material Design 开发的 Typecho 主题
 *
 * @package Theme.Material
 * @author viosey
 * @version 2.1.0
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
                    <?php if(!empty($this->options->dailypic)): ?>
                    <div class="mdl-card__media mdl-color-text--grey-50" style="background-image:url(<?php $this->options->dailypic() ?>)">
                        <?php else: ?>
                        <?php if(!empty($this->options->CDNURL)): ?>
                        <div class="mdl-card__media mdl-color-text--grey-50" style="background-image:url(<?php $this->options->CDNURL() ?>/MaterialCDN/img/hiyou.jpg)">
                            <?php else: ?>
                            <div class="mdl-card__media mdl-color-text--grey-50" style="background-image:url(<?php $this->options->themeUrl('img/hiyou.jpg') ?>)">
                                <?php endif; ?>
                                <?php endif; ?>
                                <p class="index-top-block-slogan"><a href="<?php $this->options->dailypicLink() ?>"><?php $this->options->slogan() ?></a></p>
                            </div>

                            <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
                                <!-- Author avatar -->
                                <div id="author-avatar">
                                    <?php if(!empty($this->options->avatarURL)): ?>
                                    <img src="<?php $this->options->avatarURL() ?>" width="32px" height="32px" />
                                    <?php else: ?>
                                    <?php $this->author->gravatar(32); ?>
                                    <?php endif; ?>
                                </div>
                                <div>
                                    <span class="author-name-span"><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>
                                    <span class="index-top-block-date"></span>
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
                            </label>
                                <form id="search-form" method="post" action="" class="mdl-textfield__expandable-holder">
                                    <input class="mdl-textfield__input search-input" type="text" name="s" id="search">
                                    <label id="search-form-label" class="mdl-textfield__label" for="search">Enter your query...</label>
                                </form>
                            </div>
                            <!-- LOGO -->
                            <div class="something-else-logo mdl-color--white mdl-color-text--grey-600">
                                <?php if(!empty($this->options->logoLink)): ?>
                                <a href="<?php $this->options->logoLink() ?>">
                                    <?php endif; ?>
                                    <?php if(!empty($this->options->logo)): ?>
                                    <img src="<?php $this->options->logo() ?>">
                                    <?php else: ?>
                                    <?php if(!empty($this->options->CDNURL)): ?>
                                    <img src="<?php $this->options->CDNURL() ?>/MaterialCDN/img/MaterialLOGO.png">
                                    <?php else: ?>
                                    <img src="<?php $this->options->themeUrl('img/MaterialLOGO.png') ?>">
                                    <?php endif; ?>
                                    <?php endif; ?>
                                </a>
                            </div>
                            <!-- Infomation -->
                            <div class="mdl-card__supporting-text meta meta--fill mdl-color-text--grey-600">
                                <div>
                                    <strong><?php $this->options->title();  ?></strong>
                                </div>
                                <div class="section-spacer"></div>
                                <!-- Pages button -->
                                <button id="show-pages-button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                                <i class="material-icons" role="presentation">view_carousel</i>
                                <span class="visuallyhidden">Pages</span>
                            </button>
                                <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="show-pages-button">
                                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                                    <?php while($pages->next()): ?>
                                    <a href="<?php $pages->permalink(); ?>" class="md-menu-list-a" title="<?php $pages->title(); ?>">
                                        <li class="mdl-menu__item mdl-js-ripple-effect">
                                            <?php $pages->title(); ?>
                                        </li>
                                    </a>
                                    <?php endwhile; ?>
                                </ul>
                                <!-- Category button -->
                                <button id="show-category-button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                                <i class="material-icons" role="presentation">apps</i>
                                <span class="visuallyhidden">Category</span>
                            </button>
                                <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="show-category-button">
                                    <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
                                    <?php while($category->next()): ?>
                                    <a href="<?php $category->permalink(); ?>" class="md-menu-list-a" title="<?php $category->name(); ?>">
                                        <li class="mdl-menu__item mdl-js-ripple-effect">
                                            <?php $category->name(); ?>
                                        </li>
                                    </a>
                                    <?php endwhile; ?>
                                </ul>
                                <!--  Menu button-->
                                <button id="menubtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                                <i class="material-icons" role="presentation">more_vert</i>
                                <span class="visuallyhidden">show menu</span>
                            </button>
                                <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="menubtn">

                                    <a href="<?php $this->options->feedUrl(); ?>" class="md-menu-list-a">
                                        <li class="mdl-menu__item mdl-js-ripple-effect">
                                            <?php if($this->options->langis == '0'): ?> Article RSS
                                            <?php else: ?> 文章 RSS
                                            <?php endif; ?>
                                        </li>
                                    </a>
                                    <!-- 文章的RSS地址连接 -->
                                    <a href="<?php $this->options->commentsFeedUrl(); ?>" class="md-menu-list-a">
                                        <li class="mdl-menu__item mdl-js-ripple-effect">
                                            <?php if($this->options->langis == '0'): ?> Comment RSS
                                            <?php elseif($this->options->langis == '1'): ?> 评论 RSS
                                            <?php elseif($this->options->langis == '2'): ?> 評論 RSS
                                            <?php endif; ?>
                                        </li>
                                    </a>
                                    <!-- 评论的RSS地址连接 -->
                                    <a class="md-menu-list-a" href="https://twitter.com/intent/tweet?text=<?php $this->options->title(); ?>&url=<?php $this->options->siteUrl(); ?>&via=<?php $this->author->screenName(); ?>">
                                        <li class="mdl-menu__item">
                                            <?php if($this->options->langis == '0'): ?> Share to Twitter
                                            <?php else: ?> 分享到 Twitter
                                            <?php endif; ?>
                                        </li>
                                    </a>
                                    <a class="md-menu-list-a" href="https://plus.google.com/share?url=<?php $this->options->siteUrl(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                        <li class="mdl-menu__item">
                                            <?php if($this->options->langis == '0'): ?> Share to Google+
                                            <?php else: ?> 分享到 Google+
                                            <?php endif; ?>
                                        </li>
                                    </a>
                                    <a href="<?php $this->options->siteUrl(); ?>" target="_blank" class="md-menu-list-a">
                                        <li class="mdl-menu__item mdl-js-ripple-effect">
                                            <?php if($this->options->langis == '0'): ?> Open in New Tab
                                            <?php elseif($this->options->langis == '1'): ?> 新标签页打开
                                            <?php elseif($this->options->langis == '2'): ?> 新標籤頁打開
                                            <?php endif; ?>
                                        </li>
                                    </a>

                                </ul>
                            </div>
                        </div>
                        <?php if($this->is('index')): ?>
                        <?php
                    $db = Typecho_Db::get();
                    $prefix = $db->getPrefix();
                    $sticky_posts = $db->fetchAll($this->db
                    	->select()->from($prefix.'contents')
                    	->orWhere('cid = ?',$this->options->sticky_1)
                    	->orWhere('cid = ?',$this->options->sticky_2)
                    	->where('type = ? AND status = ? AND password IS NULL', 'post', 'publish'));
                    	rsort( $sticky_posts );//对数组逆向排序，即大ID在前
                    	foreach ($sticky_posts as $sticky_posts) {
                    		$result = Typecho_Widget::widget('Widget_Abstract_Contents')->push($sticky_posts);
                    		$post_views = number_format($result['views']);
                    		$post_title = htmlspecialchars($result['title']);
                    		$post_date = date('M d,Y', $result['created']);
                    		$permalink = $result['permalink'];
                    		/*if($post_views > $this->options->view_num){echo 'HOT';} else {echo ''.$post_views.''' VIEW';};*/
                    		echo '
                            <!-- Article module -->
                            <div class="mdl-article-top mdl-cell mdl-cell--12-col '.((!empty($this->options->switch) && in_array('ShowLoadingLine',$this->options->switch))?"fade out":"").' ">
                                <p class="article-headline-p-top"><a href="'.$permalink.'" target="_self"><span style="color:">[置顶]&nbsp;</span><span style="color:#757575">'.$post_title .'</span></a></p>
                            </div>
                            '."\n\r";}
                    ?>
                            <?php endif; ?>

                            <?php while($this->next()): ?>

                            <!-- Article module -->
                            <div class="mdl-card mdl-cell mdl-cell--12-col article-module <?php if( !empty($this->options->switch) && in_array('ShowLoadingLine',$this->options->switch)): ?>fade out<?php endif; ?>">

                                <!-- Article link & title -->
                                <?php if( $this->options->ThumbnailOption == '1' ): ?>
                                <div class="mdl-card__media mdl-color-text--grey-50 " style="background-image:url(<?php showThumbnail($this); ?>)">
                                    <p class="article-headline-p"><a href="<?php $this->permalink() ?>" target="_self"><?php $this->title() ?></a></p>
                                </div>
                                <?php elseif( $this->options->ThumbnailOption == '2'): ?>
                                <div class="mdl-card__media mdl-color-text--grey-50" style="background-color:<?php $this->options->TitleColor()?> !important;color:#757575 !important;">
                                    <p class="article-headline-p-nopic">
                                        <a href="<?php $this->permalink() ?>" target="_self">
                                        “</br><?php $this->title() ?></br>”
                                    </a>
                                    </p>
                                </div>
                                <?php elseif( $this->options->ThumbnailOption == '3'): ?>
                                <div class="mdl-card__media mdl-color-text--grey-50 " style="background-image:url(<?php randomThumbnail($this); ?>)">
                                    <p class="article-headline-p"><a href="<?php $this->permalink() ?>" target="_self"><?php $this->title() ?></a></p>
                                </div>
                                <?php endif; ?>

                                <!-- Article content -->
                                <div class="mdl-color-text--grey-600 mdl-card__supporting-text index-article-content">
                                    <!--  $this->content('Continue Reading...');  -->
                                    <?php $this->excerpt(80, '...'); ?> &nbsp;&nbsp;&nbsp;
                                    <span>
                                <a href="<?php $this->permalink(); ?>" target="_self">
                                    <?php if($this->options->langis == '0'): ?>
                                        Continue Reading
                                    <?php elseif($this->options->langis == '1'): ?>
                                        继续阅读
                                    <?php elseif($this->options->langis == '2'): ?>
                                        繼續閱讀
                                    <?php endif; ?>
                                </a>
                            </span>
                                </div>

                                <!-- Article info-->
                                <div>
                                    <div class="mdl-card__supporting-text meta mdl-color-text--grey-600 " id="article-author-date">
                                        <!-- Author avatar -->
                                        <div id="author-avatar">
                                            <?php if(!empty($this->options->avatarURL)): ?>
                                            <img src="<?php $this->options->avatarURL() ?>" width="44px" height="44px" />
                                            <?php else: ?>
                                            <?php $this->author->gravatar(44); ?>
                                            <?php endif; ?>
                                        </div>
                                        <div>
                                            <span class="author-name-span"><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>
                                            <span>
                                        <?php if($this->options->langis == '0'): ?>
                                            <?php $this->date('F j, Y'); ?>
                                        <?php else: ?>
                                            <?php $this->dateWord(); ?>
                                        <?php endif; ?>
                                    </span>
                                        </div>
                                    </div>
                                    <div id="article-category-comment" style="color:<?php $this->options->alinkcolor(); ?>">
                                        <?php $this->category(', '); ?> |
                                        <a href="<?php $this->permalink() ?>">
                                            <!-- 使用多说评论 -->
                                            <?php if($this->options->commentis == '1'): ?><span class="ds-thread-count" data-thread-key="<?php echo $this->cid;?>" data-count-type="comments"></span>
                                            <!-- 使用原生评论 -->
                                            <?php else: ?>
                                            <?php $this->commentsNum('%d 评论'); ?>
                                            <?php endif; ?>
                                        </a>
                                        <?php if (class_exists("Stat_Plugin")): ?> |&nbsp;
                                        <?php $this->views(); ?>
                                        <?php $this->sticky(); ?>
                                        <?php if($this->options->langis == '0'): ?>Views
                                        <?php elseif($this->options->langis == '1'): ?>浏览
                                        <?php elseif($this->options->langis == '2'): ?>流覽
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </div>

                                </div>

                            </div>

                            <?php endwhile; ?>

                            <nav class="demo-nav mdl-cell mdl-cell--12-col">
                                <?php $this->pageLink(
                        '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <i class="material-icons" role="presentation">arrow_back</i>
                        </button>'); ?>
                                <div class="section-spacer"></div>
                                page
                                <?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?> of
                                <?php echo   ceil($this->getTotal() / $this->parameter->pageSize); ?>
                                <div class="section-spacer"></div>
                                <?php $this->pageLink(
                        '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <i class="material-icons" role="presentation">arrow_forward</i>
                        </button>','next'); ?>
                            </nav>

                    </div>

                    <?php include('sidebar.php'); ?>
                    <?php include('footer.php'); ?>