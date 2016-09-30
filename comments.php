<?php $this->comments()->to($comments); ?>
<?php function threadedComments($comments, $options) {
    $commentClass = '';
    $commentLevelClass = $comments->_levels > 0 ? ' comment-child' : ' comment-parent';  //评论层数大于0为子级，否则是父级
?>
<div id="li-<?php $comments->theId(); ?>" class="comment mdl-color-text--grey-700 comment-body<?php
    if ($comments->_levels > 0) {
        echo ' comment-child';
        $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
    } else {
        echo ' comment-parent';
    }
    $comments->alt(' comment-odd', ' comment-even');
    echo $commentClass;
    ?>">

    <!-- Comment info -->
    <header class="comment header">

        <!-- Comment avatar -->
        <div id="comment__avatar">
            <?php $comments->gravatar(52); ?>
        </div>

        <!-- Comment author -->
        <div class="comment__author">
            <!--Commenter name -->
            <span class="visitor-name-span"><?php $comments->author(); ?>&nbsp;</span>
            <!--Comment date -->
            <span><?php $comments->date('Y-m-d, H:i'); ?></span>
        </div>
    </header>

    <!-- Comment content -->
    <div class="comment__text">
        <?php $comments->content(); ?>
    </div>

    <!-- Comment actions -->
    <nav class="comment__actions">
        <!-- like -->
        <button id="comment-like-button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                <i class="material-icons" role="presentation">thumb_up</i>
                <span class="visuallyhidden">like comment</span>
            </button>
        <!-- dislike -->
        <button id="comment-dislike-button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                <i class="material-icons" role="presentation">thumb_down</i>
                <span class="visuallyhidden">dislike comment</span>
            </button>
        <!-- reply -->
        <?php $comments->reply('<button id="comment-reply-button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
            <i class="material-icons" role="presentation">forum</i>
            <span class="visuallyhidden">reply comment</span>
            </button>'); ?>
        <!-- share -->
        <button id="comment-share-<?php $comments->theId(); ?>-button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                <i class="material-icons" role="presentation">share</i>
                <span class="visuallyhidden">share comment</span>
            </button>
        <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="comment-share-<?php $comments->theId(); ?>-button">
            <a class="md-menu-list-a" target="view_window" href="<?php $comments->permalink(); ?>">
                <li class="mdl-menu__item">Open in New Tab</li>
            </a>
            <a class="md-menu-list-a" href="https://twitter.com/intent/tweet?text=<?php $comments->content(); ?>+from&url=<?php $comments->permalink(); ?>">
                <li class="mdl-menu__item">Share to Twitter</li>
            </a>
            <a class="md-menu-list-a" href="https://plus.google.com/share?url=<?php $comments->permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                <li class="mdl-menu__item">Share to Google+</li>
            </a>
        </ul>
    </nav>

    <!-- Comment answers -->
    <div class="comment__answers">
        <?php if ($comments->children) { ?>
        <!--是否嵌套评论判断开始-->
        <div class="comment-children">
            <?php $comments->threadedComments($options); ?>
            <!--嵌套评论所有内容-->
        </div>
        <?php } ?>
        <!--是否嵌套评论判断结束-->
    </div>

</div>

<?php } ?>

<!-- 使用多说评论 -->
<?php if($this->options->commentis == '1'): ?>

<div id="comments">
    <?php if($this->allow('comment')): ?>
    <!-- 多说评论框 start -->
    <div class="ds-thread" data-thread-key="<?php echo $this->cid;?>" data-title="<?php echo $this->title;?>" data-author-key="<?php echo $this->authorId;?>" data-url=""></div>
    <!-- 多说评论框 end -->

    <?php else: ?>
    <h4><?php _e('评论已关闭'); ?></h4>
    <?php endif; ?>
</div>

<style>
   #comments{background-color:#eee;padding:2pc}#comments h4{font-size:13px;line-height:18px;color:#8a8a8a;margin:0}#ds-thread{background-color:#eee;display:flex;box-sizing:border-box;padding:2pc;flex-direction:column;justify-content:flex-start;align-items:stretch;position:relative}@media screen and (max-width:480px){#ds-thread{padding:0}}#ds-thread #ds-reset .ds-comment-body p{padding-bottom:5px}#ds-thread #ds-reset .ds-replybox{margin:20px 0 20px 0;padding:0 0 0 40px}#ds-reset .ds-avatar,#ds-reset .ds-avatar img{background:0;width:30px;height:30px;-webkit-border-radius:50%;border-radius:50%;box-shadow:0;border:none}@media screen and (max-width:480px){width:auto;height:auto}#ds-thread #ds-reset ul.ds-children .ds-avatar,#ds-thread #ds-reset ul.ds-children .ds-avatar img{width:30px;height:30px;border:none!important}#ds-thread #ds-reset .ds-replybox .ds-avatar{top:5px width:30px;height:30px;border:none}#ds-thread #ds-reset .ds-replybox .ds-avatar img{width:30px!important;height:30px!important;border:none}#ds-thread #ds-reset .ds-user-name{font-size:13px}#ds-thread #ds-reset .ds-comment-body,#ds-thread #ds-reset ul.ds-children .ds-comment-body{padding-left:60px}#ds-thread #ds-reset ul.ds-children{margin-left:3pc}#ds-reset .ds-highlight{color:#000}#ds-thread #ds-reset li.ds-post,#ds-thread #ds-reset .ds-post-self{border-top:0}#ds-thread #ds-reset .ds-post-toolbar span,#ds-thread #ds-reset .ds-post-toolbar input,#ds-thread #ds-reset .ds-post-toolbar label,#ds-thread #ds-reset .ds-post-toolbar a{display:none}#ds-thread #ds-reset .ds-account-control ul{border:0;box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12)}#ds-thread #ds-reset a.ds-like-thread-button{height:30px;line-height:30px;margin:0;min-width:50px;padding:0 14px;display:inline-block;font-family:"Roboto","Helvetica","Arial",sans-serif;font-size:14px;font-weight:400;text-transform:uppercase;letter-spacing:0;overflow:hidden;will-change:box-shadow;transition:box-shadow .2s cubic-bezier(.4,0,1,1),background-color .2s cubic-bezier(.4,0,.2,1),color .2s cubic-bezier(.4,0,.2,1);outline:0;cursor:pointer;text-decoration:none;text-align:center;vertical-align:middle;border:0;background:rgba(158,158,158,.2);box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);color:#fff;background-color:#ff4081;text-shadow:0}#ds-thread #ds-reset li.ds-tab,#ds-wrapper #ds-reset button{height:30px;line-height:30px;margin:0;min-width:50px;padding:0 14px;display:inline-block;font-family:"Roboto","Helvetica","Arial",sans-serif;font-size:14px;font-weight:400;text-transform:uppercase;letter-spacing:0;overflow:hidden;will-change:box-shadow;transition:box-shadow .2s cubic-bezier(.4,0,1,1),background-color .2s cubic-bezier(.4,0,.2,1),color .2s cubic-bezier(.4,0,.2,1);outline:0;cursor:pointer;text-decoration:none;text-align:center;vertical-align:middle;border:0;background:0;box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);text-shadow:0}#ds-thread #ds-reset li.ds-tab:hover,#ds-wrapper #ds-reset button:hover{background-color:rgba(102,102,102,0.1)}#ds-thread #ds-reset li.ds-tab:active,#ds-wrapper #ds-reset button:active{background-color:rgba(102,102,102,0.1);-webkit-box-shadow:none;box-shadow:none}#ds-thread #ds-reset li.ds-tab a.ds-current{border:0;background-color:rgba(255,255,255,0)}#ds-thread #ds-reset a.ds-like-thread-button span{font-family:"Roboto","Helvetica","Arial",sans-serif;font-size:14px;color:#fff;font-weight:400}#ds-thread #ds-reset li.ds-tab a{-webkit-border-radius:0;border-radius:0;text-shadow:0}#ds-thread #ds-reset .ds-textarea-wrapper{background:0;border:0;border-bottom:1px solid rgba(0,0,0,.12);width:95%;margin:0;padding:0;float:left}#ds-thread #ds-reset .ds-post-toolbar{width:5%;padding:0;margin:0;box-shadow:0;float:left}#ds-thread #ds-reset .ds-post-options{border:0;-webkit-border-bottom-left-radius:0;background:0}#ds-thread #ds-reset .ds-post-button{height:35px;width:35px;line-height:36px;margin:0;padding:0;border-radius:50%;display:inline-block;font-family:"Roboto","Helvetica","Arial",sans-serif;font-size:0;font-weight:500;text-transform:uppercase;letter-spacing:0;overflow:hidden;will-change:box-shadow;transition:box-shadow .2s cubic-bezier(.4,0,1,1),background-color .2s cubic-bezier(.4,0,.2,1),color .2s cubic-bezier(.4,0,.2,1);outline:0;cursor:pointer;text-decoration:none;text-align:center;vertical-align:middle;border:0;background:rgba(158,158,158,.2);box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);color:#fff;background-color:<?php $this->options->ThemeColor() ?>!important}#ds-thread #ds-reset .ds-post-button:hover{box-shadow:0 5px 5px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 3px 7px 0 rgba(0,0,0,.12);color:#fff}#ds-thread #ds-reset .ds-meta{border-bottom:0}#ds-thread #ds-reset #ds-bubble{border:0;box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);background-color:rgba(255,255,255,.9);border-radius:3px}#ds-thread #ds-reset .ds-textarea-wrapper textarea{height:16px!important;font-size:16px!important;line-height:16px!important}#ds-thread #ds-reset .ds-like-tooltip{box-shadow:0 2px 24px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 55px 0 rgba(0,0,0,.12);border-radius:2px;background:#FFF;border:0}#ds-wrapper #ds-reset .ds-dialog-inner{box-shadow:0 10px 10px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),1px 3px 7px 0 rgba(0,0,0,.12),0px 0 20px 5px rgba(0,0,0,.12);border:0;background:#fff}#ds-wrapper #ds-reset .ds-dialog-body{padding:0}#ds-thread #ds-reset .ds-powered-by{display:none}#ds-thread #ds-reset .ds-comments,#ds-thread #ds-reset .ds-paginator{border-bottom:0}#ds-wrapper #ds-reset .ds-icons-32{background-color:<?php $this->options->ThemeColor() ?>;height:100px}#ds-wrapper #ds-reset .ds-icons-32::before{content:'Welcome';font-family:'Roboto';font-size:24px;color:#fff;text-shadow:none;position:relative;float:left;top:60px;left:40px}#ds-wrapper #ds-reset .ds-service-list{margin:10px 0 10px 0;text-align:center}#ds-wrapper #ds-reset .ds-actions{padding-bottom:30px;padding-top:12px;margin:10px 10px 20px 10px;color:rgba(0,0,0,.5);font-size:13px}#ds-wrapper #ds-reset .ds-actions label{margin-right:12px}#ds-wrapper #ds-reset .ds-quote{margin:0;padding:20px 20px}#ds-reset .ds-service-icon,#ds-reset .ds-service-icon-grey{background:0;width:5px!important}#ds-reset input[type='checkbox']{width:12px}#ds-wrapper #ds-reset .ds-textarea-wrapper{border:0;margin:0}#ds-wrapper #ds-reset .ds-dialog-footer{border-top:1px solid rgba(0,0,0,.1);display:none}#ds-wrapper #ds-reset .ds-control-group{margin-left:40px}#ds-thread #ds-reset .ds-post-liked a.ds-post-likes{font-size:12px}#ds-wrapper #ds-reset .ds-control-group input{border:0;box-shadow:none;border-bottom:1px solid rgba(0,0,0,.12);display:block;font-size:16px;font-family:"Helvetica","Arial",sans-serif;margin:0;padding:4px 0;width:100%;background:0;text-align:left;color:inherit}#ds-wrapper #ds-reset .ds-dialog-body button{margin:10px 0 20px 40px}#ds-thread #ds-reset .ds-login-buttons .ds-service-list li{margin:0;margin-left:5px;text-align:center}#ds-thread #ds-reset .ds-login-buttons .ds-service-list li a{color:rgba(0,0,0,.6)!important}#ds-reset .ds-service-link{background:0;padding-left:0}#ds-reset .ds-icon{background:0;display:none}#ds-thread #ds-reset .ds-comment-actions a{font-size:0;color:rgba(0,0,0,.24)!important}#ds-thread #ds-reset .ds-comment-actions a:hover{color:rgba(0,0,0,.4)!important}#ds-thread #ds-reset .ds-comment-footer{line-height:normal}#ds-thread #ds-reset .ds-time{font-size:13px;position:relative;top:-8px}.ds-post-reply{left:-20px}.ds-post-likes::before{content:"\E8DC";font-family:'Material Icons';font-size:24px}.ds-post-reply::before{content:"\E0BF";font-family:'Material Icons';font-size:24px}.ds-post-repost::before{content:"\E80D";font-family:'Material Icons';font-size:24px}.ds-post-report{color:rgba(0,0,0,.14)!important}.ds-post-report::before{content:"\E8B2";font-family:'Material Icons';font-size:24px}.ds-weixin::before{content:"\f1d7";font-family:'FontAwesome';margin-right:3px}.ds-weibo::before{content:"\f18a";font-family:'FontAwesome';margin-right:3px}.ds-qq::before{content:"\f1d6";font-family:'FontAwesome';margin-right:3px}.ds-renren::before{content:"\f18b";font-family:'FontAwesome';margin-right:3px}.ds-douban::before{content:"\f10e";font-family:'FontAwesome';margin-right:3px}.ds-kaixin::before{content:"\f004";font-family:'FontAwesome';margin-right:3px}.ds-baidu::before{content:"\f1b0";font-family:'FontAwesome';margin-right:3px}.ds-google::before{content:"\f1a0";font-family:'FontAwesome';margin-right:3px}.ds-qzone::before{content:"\f005";font-family:'FontAwesome';margin-right:3px}.ds-meta .ds-like-panel{margin-left:10px!important}#ds-reset .ds-highlight{color:<?php $this->options->ThemeColor() ?>!important}#ds-thread #ds-reset .ds-post-button::before{content:'\E5CA';font-family:'Material Icons';font-weight:100;font-size:20px}.ds-icons-32 a{background:none!important}.ds-dialog-body h2{display:none!important}#ds-thread.ds-narrow #ds-reset .ds-post-button{width:35px}.ds-comments-info .ds-sort{display:none!important}@media screen and (max-width:480px){.ds-comments-tabs,.ds-comments-info{display:none!important}}#ds-reset #ds-ctx{max-width:none}#ds-reset #ds-ctx .ds-ctx-entry .ds-ctx-content{margin:5px 0;line-height:20px}#ds-reset #ds-ctx .ds-comment-actions{margin-top:10px;position:relative}#ds-reset #ds-ctx .ds-ctx-entry:hover .ds-comment-actions{display:none}#ds-reset #ds-ctx .ds-ctx-entry .ds-ctx-head a{top:0}#ds-thread.ds-narrow #ds-reset .ds-avatar img{border:none}
</style>

<!-- 使用原生评论 -->
<?php else: ?>

<div class="mdl-color-text--primary-contrast mdl-card__supporting-text comments">

    <?php if($this->allow('comment')): ?>

    <div id="<?php $this->respondId(); ?>" class="respond">

        <!-- Input form start -->
        <form method="post" action="<?php $this->commentUrl() ?>">

            <!-- If user has login -->
            <?php if($this->user->hasLogin()): ?>

            <!-- Display user name & logout -->
            <p style="color:#8A8A8A;" class="visitor-name-span">Logged in as
                <a href="<?php $this->options->adminUrl(); ?>" style="font-weight:400"><?php $this->user->screenName(); ?></a>.
                <a href="<?php $this->options->logoutUrl(); ?>" title="Logout" style="font-weight:400">Logout &raquo;</a>
            </p>

            <!-- If user didn't login -->
            <?php else: ?>

            <!-- Input name -->
            <div class="login-form-group">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input type="text" name="author" class="mdl-textfield__input login-input-info" />
                    <label for="author" class="mdl-textfield__label">
                                    <?php if($this->options->langis == '0'): ?>
                                        Name*
                                    <?php elseif($this->options->langis == '1'): ?>
                                        昵称*
                                    <?php endif; ?>
                                </label>
                </div>
            </div>

            <!-- Input email -->
            <div class="login-form-group">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input type="email" name="mail" class="mdl-textfield__input login-input-info" />
                    <label for="mail" class="mdl-textfield__label">
                                    <?php if($this->options->langis == '0'): ?>
                                        Email*
                                    <?php elseif($this->options->langis == '1'): ?>
                                        邮箱*
                                    <?php endif; ?>
                                </label>
                </div>
            </div>

            <!-- Input website -->
            <div class="login-form-group">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input type="url" name="url" id="visitor-url" class="mdl-textfield__input login-input-info" />
                    <!--  placeholder="http://"-->
                    <label for="url" class="mdl-textfield__label">
                                    <?php if($this->options->langis == '0'): ?>
                                        Website
                                    <?php elseif($this->options->langis == '1'): ?>
                                        网站
                                    <?php endif; ?>
                                </label>
                </div>
            </div>
            <?php endif; ?>

            <!-- Input comment content -->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="comment-input-div">
                <textarea name="text" rows="1" id="comment" class="mdl-textfield__input"></textarea>
                <label for="comment" class="mdl-textfield__label">
                            <?php if($this->options->langis == '0'): ?>
                                Join the discussion
                            <?php elseif($this->options->langis == '1'): ?>
                                加入讨论吧...
                            <?php endif; ?>
                        </label>
            </div>

            <!-- Submit comment content button -->
            <?php $comments->reply('
                    <button id="comment-button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                        <i class="material-icons" role="presentation">check</i><span class="visuallyhidden">add comment</span>
                    </button>'); ?>
            <div class="mdl-tooltip" for="comment-button">Submit</div>

        </form>
    </div>

    <?php $comments->listComments(); ?>
    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>

    <?php else: ?>

    <div class="comments__closed">
        <span id="commentCount">Comment has been closed</span>
    </div>

    <?php endif; ?>
</div>
<?php endif; ?>
