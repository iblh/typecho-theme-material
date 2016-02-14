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

        <!-- comment__text 该评论的相关信息-->
        <header class="comment__header">

            <!-- comment__avatar 该评论者的头像-->
            <div id="comment__avatar"><?php $comments->gravatar(48); ?></div>

            <!-- comment__author 该评论者的相关信息-->
            <div class="comment__author">
                <!--评论者的名字-->
                <span><?php $comments->author(); ?></span>
                <!--评论日期-->
                <span><?php $comments->date('F jS, Y'); ?></span>
            </div>
        </header>

        <!-- comment__text 评论内容-->
        <div class="comment__text">
            <?php $comments->content(); ?>
        </div>

        <!-- comment__actions 对该评论的行为-->
        <nav class="comment__actions">
            <!-- like -->
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                <i class="material-icons" role="presentation">thumb_up</i>
                <span class="visuallyhidden">like comment</span>
            </button>
            <!-- dislike -->
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                <i class="material-icons" role="presentation">thumb_down</i>
                <span class="visuallyhidden">dislike comment</span>
            </button>
            <!-- reply -->
            <?php $comments->reply('<button id="comment-reply-button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
            <i class="material-icons" role="presentation">forum</i>
            <span class="visuallyhidden">reply comment</span>
            </button>'); ?>
            <!-- share -->
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                <i class="material-icons" role="presentation">share</i>
                <span class="visuallyhidden">share comment</span>
            </button>
        </nav>

        <!-- comment__answers 对该评论的回复-->
        <div class="comment__answers">
            <?php if ($comments->children) { ?> <!--是否嵌套评论判断开始-->
            <div class="comment-children">
                <?php $comments->threadedComments($options); ?> <!--嵌套评论所有内容-->
            </div>
            <?php } ?> <!--是否嵌套评论判断结束-->
        </div>

    </div>

<?php } ?>

    <div class="mdl-color-text--primary-contrast mdl-card__supporting-text comments">

        <?php if($this->allow('comment')): ?>

        <div id="<?php $this->respondId(); ?>" class="respond">

		    <!-- 输入表单开始 -->
		    <form method="post" action="<?php $this->commentUrl() ?>">

		        <!-- 如果当前用户已经登录 -->
		        <?php if($this->user->hasLogin()): ?>
		            <!-- 显示当前登录用户的用户名以及登出连接 -->
		            <p style="color:#8A8A8A">Logged in as <a href="<?php $this->options->adminUrl(); ?>" style="font-weight:400"><?php $this->user->screenName(); ?></a>.
		            <a href="<?php $this->options->logoutUrl(); ?>" title="Logout" style="font-weight:400">Logout &raquo;</a></p>

		        <!-- 若当前用户未登录 -->
		        <?php else: ?>

                    <!-- 用户昵称 -->
    		    	<div class="login-form-group">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input type="text" name="author" class="mdl-textfield__input login-input-info" />
                            <label for="author" class="mdl-textfield__label">Name</label>
                        </div>
    		    	</div>

                    <!-- 用户邮箱 -->
                    <div class="login-form-group">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input type="email" name="mail" class="mdl-textfield__input login-input-info" />
                            <label for="mail" class="mdl-textfield__label">Email</label>
                        </div>
    		    	</div>

                    <!-- 用户网站 -->
    		    	<div class="login-form-group">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input type="url" name="url" id="visitor-url" class="mdl-textfield__input login-input-info" />  <!--  placeholder="http://"-->
                            <label for="url" class="mdl-textfield__label">Website</label>
                        </div>
    		    	</div>
		        <?php endif; ?>

                <!-- 评论输入框 -->
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="comment-input-div">
                    <textarea name="text" rows="1" id="comment" class="mdl-textfield__input" ></textarea>
                    <label for="comment" class="mdl-textfield__label">Join the discussion</label>
                </div>

                <!-- 评论回复按钮 -->
                <?php $comments->reply('
                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="comment-button">
                <i class="material-icons" role="presentation">check</i><span class="visuallyhidden">add comment</span>
                </button>'); ?>

		    </form>
        </div>

        <?php $comments->listComments(); ?>
        <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>

        <?php else: ?>

    	<div class="comments__closed">
    	    <span id="commentCount">评论已关闭</span>
    	</div>

        <?php endif; ?>
    </div>
