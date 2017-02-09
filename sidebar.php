<!-- Overlay for fixed sidebar -->
<div class="sidebar-overlay "></div>

<!-- Material sidebar -->
<aside id="sidebar" class="sidebar sidebar-colored  sidebar-fixed-left" role="navigation">

    <!-- Sidebar header -->
    <?php if (!empty($this->options->CDNURL)): ?>
    <div class="sidebar-header header-cover" style="background-image: url(<?php $this->options->CDNURL() ?>/MaterialCDN/img/sidebarheader.jpg); ?>);">
        <?php else: ?>
        <div class="sidebar-header header-cover" style="background-image: url(<?php $this->options->themeUrl('img/sidebarheader.jpg'); ?>);">
            <?php endif; ?>
            <!-- Top bar -->
            <div class="top-bar"></div>
            <!-- Sidebar toggle button -->
            <button type="button" class="sidebar-toggle mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
            <i class="material-icons">clear_all</i>
        </button>
            <!-- Sidebar brand image -->
            <div class="sidebar-image">
                <?php if (!empty($this->options->avatarURL)): ?>
                <img src="<?php $this->options->avatarURL() ?>">
                <?php else: ?>
                <?php if (!empty($this->options->logo)): ?>
                <img src="<?php $this->options->logo() ?>">
                <?php else: ?>
                <?php if (!empty($this->options->CDNURL)): ?>
                <img src="<?php $this->options->CDNURL() ?>/MaterialCDN/img/MaterialLOGO.png">
                <?php else: ?>
                <img src="<?php $this->options->themeUrl('img/MaterialLOGO.png') ?>">
                <?php endif; ?>
                <?php endif; ?>
                <?php endif; ?>
            </div>

            <!-- Sidebar brand name -->
            <a data-toggle="dropdown" class="sidebar-brand" href="#settings-dropdown">
                <?php $this->user->mail(); ?>
                <b class="caret"></b>
            </a>
        </div>

        <!-- Sidebar navigation  -->
        <ul class="nav sidebar-nav">
            <!-- User dropdown  -->
            <li class="dropdown">
                <ul id="settings-dropdown" class="dropdown-menu">
                    <?php if ($this->user->hasLogin()): ?>
                    <li>
                        <a href="<?php $this->options->adminUrl(); ?>" tabindex="-1">
                            <i class="material-icons sidebar-material-icons sidebar-indent-left1pc-element">account_circle</i>
                            <?php if ($this->options->langis == '0'): ?> Profile
                            <?php elseif ($this->options->langis == '1'): ?> 用户概要
                            <?php elseif ($this->options->langis == '2'): ?> 使用者概要
                            <?php endif; ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php $this->options->adminUrl('options-theme.php'); ?>" tabindex="-1">
                            <i class="material-icons sidebar-material-icons sidebar-indent-left1pc-element">settings</i>
                            <?php if ($this->options->langis == '0'): ?> Settings
                            <?php elseif ($this->options->langis == '1'): ?> 设置外观
                            <?php elseif ($this->options->langis == '2'): ?> 設置外觀
                            <?php endif; ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php $this->options->logoutUrl(); ?>" class="md-menu-list-a" tabindex="-1">
                            <i class="material-icons sidebar-material-icons sidebar-indent-left1pc-element">exit_to_app</i>
                            <?php if ($this->options->langis == '0'): ?> Exit
                            <?php elseif ($this->options->langis == '1'): ?> 退出登录
                            <?php elseif ($this->options->langis == '2'): ?> 退出登錄
                            <?php endif; ?>
                        </a>
                    </li>
                    <?php else: ?>
                    <li>
                        <a href="<?php $this->options->loginUrl(); ?>" class="md-menu-list-a" tabindex="-1">
                            <i class="material-icons sidebar-material-icons sidebar-indent-left1pc-element">fingerprint</i>
                            <?php if ($this->options->langis == '0'): ?> Login
                            <?php elseif ($this->options->langis == '1'): ?> 用户登录
                            <?php elseif ($this->options->langis == '2'): ?> 使用者登錄
                            <?php endif; ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php $this->options->adminUrl('register.php'); ?>" class="md-menu-list-a" tabindex="-1">
                            <i class="material-icons sidebar-material-icons sidebar-indent-left1pc-element">person_add</i>
                            <?php if ($this->options->langis == '0'): ?> Register
                            <?php elseif ($this->options->langis == '1'): ?> 用户注册
                            <?php elseif ($this->options->langis == '2'): ?> 使用者註冊
                            <?php endif; ?>
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </li>

            <!-- Homepage -->
            <li id="sidebar-first-li">
                <a href="<?php $this->options->siteUrl(); ?>" target="_self">
                    <i class="material-icons sidebar-material-icons">home</i>
                    <?php if ($this->options->langis == '0'): ?> Homepage
                    <?php elseif ($this->options->langis == '1'): ?> 主页
                    <?php elseif ($this->options->langis == '2'): ?> 首頁
                    <?php endif; ?>
                </a>
            </li>

            <!-- 使用多说评论 -->
            <?php if ($this->options->commentis == '1'): ?>
            <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
            <script type="text/javascript">
              var duoshuoQuery = {
              short_name: "<?php $this->options->DSshortname() ?>"
              }; //每个用户的独有标签
              (function() {
                var ds = document.createElement('script');
                ds.type = 'text/javascript';
                ds.async = true;
                // ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
                <?php if (!empty($this->options->CDNURL)): ?>
                ds.src = '<?php $this->options->CDNURL() ?>/MaterialCDN/js/dsembed.js';
                <?php else: ?>
                ds.src = '<?php $this->options->themeUrl('js/dsembed.js') ?>';
                <?php endif; ?>
                ds.charset = 'UTF-8';
                (document.getElementsByTagName('head')[0] ||
                document.getElementsByTagName('body')[0]).appendChild(ds);
                })();
                </script>
                <!-- 多说公共JS代码 end -->

                <style>
                  .ds-recent-comments {
                    padding: 0;
                  }

                  .ds-recent-comments .ds-meta {
                    display: none;
                  }

                  #ds-recent-comments li.ds-comment {
                    padding: 0 !important;
                    height: 48px;
                    line-height: 48px;
                  }

                  #ds-recent-comments li.ds-comment a {
                    padding-top: 16px;
                    padding-bottom: 16px;
                    padding-right: 70px;
                    background: rgba(0, 0, 0, 0);
                  }

                  #ds-recent-comments li.ds-comment:hover {
                    background-color: #cecece;
                  }
                </style>
            <?php endif; ?>

            <!-- Archives  -->
            <li class="dropdown">
                <a href="#" class="ripple-effect dropdown-toggle" data-toggle="dropdown">
                    <i class="material-icons sidebar-material-icons">inbox</i>
                    <?php if ($this->options->langis == '0'): ?> Archives
                    <?php elseif ($this->options->langis == '1'): ?> 归档
                    <?php elseif ($this->options->langis == '2'): ?> 過往
                    <?php endif; ?>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
                ->parse('
                <li>
                    <a href="{permalink}" tabindex="-1">
                        {date}
                    </a>
                </li>
                '); ?>
                </ul>
            </li>
            
            <!-- categories -->
            <li class="dropdown">
                <a href="#" class="ripple-effect dropdown-toggle" data-toggle="dropdown">
                    <i class="material-icons sidebar-material-icons">apps</i>
                    <?php if ($this->options->langis == '0'): ?> Categories
                    <?php elseif ($this->options->langis == '1'): ?> 分类
                    <?php endif; ?>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" for="show-category-button">
                    <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
                    <?php while ($category->next()): ?>
                    <li>
                        <a href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>">
                            <?php $category->name(); ?>
                        </a>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </li>
            
            <!-- divider -->
            <li class="divider"></li>
            <!-- Pages  -->
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while ($pages->next()): ?>
                <li>
                    <a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>" tabindex="-1">
                        <?php $pages->title(); ?>
                    </a>
                </li>
            <?php endwhile; ?>

            <?php if (!defined('__TYPECHO_ROOT_DIR__')) {
                    exit;
                }
              Typecho_Widget::widget('Widget_Stat')->to($stat);
            ?>

            <!-- Article Numebr  -->
            <li>
                <a href="#">
                    <?php if ($this->options->langis == '0'): ?> Article Number
                    <?php elseif ($this->options->langis == '1'): ?> 文章总数
                    <?php elseif ($this->options->langis == '2'): ?> 文章總數
                    <?php endif; ?>
                    <span class="sidebar-badge"><?php echo $stat->publishedPostsNum;?></span>
                </a>
            </li>
        </ul>        
        
        <!-- Sidebar divider -->
        <div class="sidebar-divider"></div>

        <!-- Sidebar bottom text -->
        <a href="https://github.com/viosey/typecho-theme-material" target="_blank" class="sidebar-footer-text-a">
            <div class="sidebar-text mdl-button mdl-js-button mdl-js-ripple-effect sidebar-footer-text-div">
                <?php if ($this->options->langis == '0'): ?> Theme - Material
                <?php elseif ($this->options->langis == '1'): ?> 主题 - Material
                <?php endif; ?>
                <span class="sidebar-badge badge-circle">i</span>
            </div>
        </a>

        <?php if (!empty($this->options->switch) && in_array('ShowUpyun', $this->options->switch)) : ?>
        <div id="upyun-logo">
            <a href="https://www.upyun.com/" target="_blank">
                <?php if (!empty($this->options->CDNURL)): ?>
                <img src="<?php $this->options->CDNURL() ?>/MaterialCDN/img/upyun_logo_90x45.png" />
                <?php else: ?>
                <img src="<?php $this->options->themeUrl('img/upyun_logo_90x45.png'); ?>" />
                <?php endif; ?>
            </a>
        </div>
        <?php endif; ?>


</aside>
