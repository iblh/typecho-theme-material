<!-- Overlay for fixed sidebar -->
<div class="sidebar-overlay "></div>

<!-- Material sidebar -->
<aside id="sidebar" class="sidebar sidebar-colored  sidebar-fixed-left" role="navigation">

    <!-- Sidebar header -->
    <div class="sidebar-header header-cover" style="background-image: url(<?php $this->options->themeUrl('img/sidebarheader.jpg'); ?>);">
        <!-- Top bar -->
        <div class="top-bar"></div>
        <!-- Sidebar toggle button -->
        <button type="button" class="sidebar-toggle mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
            <i class="material-icons">clear_all</i>
        </button>
        <!-- Sidebar brand image -->
        <div class="sidebar-image">
            <?php $this->author->gravatar(); ?>
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
                <li>
                    <a href="<?php $this->options->adminUrl(); ?>" tabindex="-1">
                        <i class="material-icons sidebar-material-icons sidebar-indent-left1pc-element" >account_circle</i>
                        Profile
                    </a>
                </li>
                <li>
                    <a href="<?php $this->options->profileUrl(); ?>" tabindex="-1">
                        <i class="material-icons sidebar-material-icons sidebar-indent-left1pc-element" >settings</i>
                        Settings
                    </a>
                </li>
                <?php if($this->user->hasLogin()): ?>
                    <li>
                        <a href="<?php $this->options->logoutUrl(); ?>" class="md-menu-list-a" tabindex="-1">
                            <i class="material-icons sidebar-material-icons sidebar-indent-left1pc-element" >exit_to_app</i>
                            Exit
                        </a>
                    </li>
                <?php else: ?>
                    <li>
                        <a href="<?php $this->options->loginUrl(); ?>" class="md-menu-list-a" tabindex="-1">
                            <i class="material-icons sidebar-material-icons sidebar-indent-left1pc-element" >fingerprint</i>
                            Login
                        </a>
                    </li>
                    <li>
                        <a href="<?php $this->options->adminUrl('register.php'); ?>" class="md-menu-list-a" tabindex="-1">
                            <i class="material-icons sidebar-material-icons sidebar-indent-left1pc-element" >person_add</i>
                            Register
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </li>

        <!-- I'm Feeling Lucky -->
        <li id="sidebar-first-li">
            <a href="<?php theme_random_posts();?>" target="_blank">
                <i class="material-icons sidebar-material-icons">explore</i>
                I'm Feeling Lucky
            </a>
        </li>

        <!-- Newest Article  -->
        <li class="dropdown">
            <a href="#" class="ripple-effect dropdown-toggle" data-toggle="dropdown">
                <i class="material-icons sidebar-material-icons">library_books</i>
                Newest Article
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <?php $this->widget('Widget_Contents_Post_Recent','pageSize=5')
                ->parse('
                <li>
                    <a href="{permalink}" tabindex="-1">
                        {title}
                    </a>
                </li>
                '); ?>
            </ul>
        </li>
        <!-- Newest Comments  -->
        <li class="dropdown">
            <a href="#" class="ripple-effect dropdown-toggle" data-toggle="dropdown">
                <i class="material-icons sidebar-material-icons">forum</i>
                Newest Comments
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <?php $this->widget('Widget_Comments_Recent','pageSize=5')
                ->parse('
                <li>
                    <a href="{permalink}" tabindex="-1">
                        {text}
                    </a>
                </li>
                '); ?>
            </ul>
        </li>
        <!-- Archives  -->
        <li class="dropdown">
            <a href="#" class="ripple-effect dropdown-toggle" data-toggle="dropdown">
                <i class="material-icons sidebar-material-icons">inbox</i>
                Archives
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
        <!-- divider -->
        <li class="divider"></li>
        <!-- Hot tags  -->
        <?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=count&ignoreZeroCount=1&desc=1&limit=5')->to($tags); ?>
        <li class="dropdown">
            <a class="ripple-effect dropdown-toggle" href="#" data-toggle="dropdown">
                Hot Tags
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <?php if($tags->have()): ?>
                    <?php while ($tags->next()): ?>
                        <li>
                            <a href="<?php $tags->permalink(); ?>" tabindex="-1">
                                <?php $tags->name(); ?>
                                <span class="sidebar-badge"><?php $tags->count(); ?></span>
                            </a>
                        </li>
                    <?php endwhile; ?>
                    <?php else: ?>
                        <li><?php _e('None Tag'); ?></li>
                <?php endif; ?>
            </ul>
        </li>
        <!-- Pages  -->
        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
        <li class="dropdown">
            <a class="ripple-effect dropdown-toggle" href="#" data-toggle="dropdown">
                Pages
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <?php while ($pages->next()): ?>
                    <li>
                        <a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>" tabindex="-1">
                            <?php $pages->title(); ?>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        </li>
        <li class="dropdown">
            <a class="ripple-effect dropdown-toggle" href="#" data-toggle="dropdown">
                Links
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <?php if (class_exists("Links_Plugin")): ?>
                    <?php Links_Plugin::output('
                    <li>
                        <a href="{url}" target="_blank" itle="{title}">
                            {name}
                        </a>
                    </li>
                    '); ?>
                <?php endif; ?>
            </ul>
        </li>

        <?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
        Typecho_Widget::widget('Widget_Stat')->to($stat);
        ?>
        <!-- Article Numebr  -->
        <li>
            <a href="#">
                Article Number
                <span class="sidebar-badge"><?php echo $stat->publishedPostsNum;?></span>
            </a>
        </li>
        <li>
            <a href="https://github.com/viosey/MaterialDesign-TypechoTheme" target="_blank">
                Follow in Github
                <span class="sidebar-badge badge-circle">i</span>
            </a>
        </li>
    </ul>
    <!-- Sidebar divider -->
     <div class="sidebar-divider"></div>

    <!-- Sidebar bottom text -->
    <a href="mailto:viosey@outlook.com" class="sidebar-footer-text-a"><div class="sidebar-text mdl-button mdl-js-button mdl-js-ripple-effect sidebar-footer-text-div">Help & Support</div></a>
    <a href="https://github.com/viosey/MaterialDesign_TypechoTheme/issues" target="_blank" class="sidebar-footer-text-a"><div class="sidebar-text mdl-button mdl-js-button mdl-js-ripple-effect sidebar-footer-text-div">Feedback</div></a>
    <a href="https://blog.viosey.com/index.php/MD_TT.html" target="_blank" class="sidebar-footer-text-a"><div class="sidebar-text mdl-button mdl-js-button mdl-js-ripple-effect sidebar-footer-text-div">About Theme</div></a>

    <?php if ( !empty($this->options->switch) && in_array('ShowUpyun', $this->options->switch) ) : ?>
        <div id="upyun-logo">
            <a href="https://www.upyun.com/" target="_blank"><img src="https://o27z61k07.qnssl.com/upyun_logo_90x45.png" /></a>
        </div>
    <?php endif; ?>


</aside>
