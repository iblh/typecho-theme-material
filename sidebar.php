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

    <!-- Sidebar navigation / 侧边栏导航 -->
    <ul class="nav sidebar-nav">
        <!-- User dropdown / 用户下拉选项 -->
        <li class="dropdown">
            <ul id="settings-dropdown" class="dropdown-menu">
                <li>
                    <a href="<?php $this->options->adminUrl(); ?>" tabindex="-1">
                        <i class="material-icons sidebar-material-icons" style="margin-left: 1pc;">account_circle</i>
                        Profile
                    </a>
                </li>
                <li>
                    <a href="<?php $this->options->profileUrl(); ?>" tabindex="-1">
                        <i class="material-icons sidebar-material-icons" style="margin-left: 1pc;">settings</i>
                        Settings
                    </a>
                </li>
                <?php if($this->user->hasLogin()): ?>
                    <li>
                        <a href="<?php $this->options->logoutUrl(); ?>" class="md-menu-list-a" tabindex="-1">
                            <i class="material-icons sidebar-material-icons" style="margin-left: 1pc;">exit_to_app</i>
                            Exit
                        </a>
                    </li>
                <?php else: ?>
                    <li>
                        <a href="<?php $this->options->loginUrl(); ?>" class="md-menu-list-a" tabindex="-1">
                            <i class="material-icons sidebar-material-icons" style="margin-left: 1pc;">fingerprint</i>
                            Login
                        </a>
                    </li>
                    <li>
                        <a href="<?php $this->options->adminUrl('register.php'); ?>" class="md-menu-list-a" tabindex="-1">
                            <i class="material-icons sidebar-material-icons" style="margin-left: 1pc;">person_add</i>
                            Register
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </li>

        <!-- First -->
        <li id="sidebar-first-li">
            <a href="#">
                <i class="material-icons sidebar-material-icons">move_to_inbox</i>
                Inbox
            </a>
        </li>
        <!-- Newest Article / 最新文章 -->
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
        <!-- Newest Comments / 最新评论 -->
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
        <!-- Archives / 归档 -->
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

        <li class="divider"></li>
        <li class="dropdown">
            <a class="ripple-effect dropdown-toggle" href="#" data-toggle="dropdown">
                All Mail
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">

                <li>
                    <a href="#" tabindex="-1">
                        Social
                        <span class="sidebar-badge">12</span>
                    </a>
                </li>
                <li>
                    <a href="#" tabindex="-1">
                        Promo
                        <span class="sidebar-badge">0</span>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#">
                Trash
                <span class="sidebar-badge">3</span>
            </a>
        </li>
        <li>
            <a href="#">
                Spam
                <span class="sidebar-badge">456</span>
            </a>
        </li>
        <li>
            <a href="#">
                Follow Up
                <span class="sidebar-badge badge-circle">i</span>
            </a>
        </li>
    </ul>
    <!-- Sidebar divider -->
     <div class="sidebar-divider"></div>

    <!-- Sidebar bottom text -->
    <a href="#" class="sidebar-footer-text-a"><div class="sidebar-text mdl-button mdl-js-button mdl-js-ripple-effect sidebar-footer-text-div">Help & Support</div></a>
    <a href="#" class="sidebar-footer-text-a"><div class="sidebar-text mdl-button mdl-js-button mdl-js-ripple-effect sidebar-footer-text-div">Feedback</div></a>
    <a href="#" class="sidebar-footer-text-a"><div class="sidebar-text mdl-button mdl-js-button mdl-js-ripple-effect sidebar-footer-text-div">About Theme</div></a>
</aside>
