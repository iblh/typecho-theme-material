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
            <div id="comment__avatar"><?php $comments->gravatar(52); ?></div>

            <!-- Comment author -->
            <div class="comment__author">
                <!--Commenter name -->
                <span class="visitor-name-span" ><?php $comments->author(); ?>&nbsp;</span>
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
            <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                for="comment-share-<?php $comments->theId(); ?>-button">
              <a class="md-menu-list-a" target="view_window" href="<?php $comments->permalink(); ?>"><li class="mdl-menu__item">Open in New Tab</li></a>
              <a class="md-menu-list-a" href="https://twitter.com/intent/tweet?text=<?php $comments->content(); ?>+from&url=<?php $comments->permalink(); ?>"><li class="mdl-menu__item" >Share to Twitter</li></a>
              <a class="md-menu-list-a" href="https://plus.google.com/share?url=<?php $comments->permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><li class="mdl-menu__item">Share to Google+</li></a>
            </ul>
        </nav>

        <!-- Comment answers -->
        <div class="comment__answers">
            <?php if ($comments->children) { ?> <!--是否嵌套评论判断开始-->
            <div class="comment-children">
                <?php $comments->threadedComments($options); ?> <!--嵌套评论所有内容-->
            </div>
            <?php } ?> <!--是否嵌套评论判断结束-->
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

        <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
        <script type="text/javascript">
        var duoshuoQuery = {short_name:"<?php $this->options->DSshortname() ?>"}; //每个用户的独有标签
        	(function() {
        		var ds = document.createElement('script');
        		ds.type = 'text/javascript';ds.async = true;
        		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
        		ds.charset = 'UTF-8';
        		(document.getElementsByTagName('head')[0]
        		 || document.getElementsByTagName('body')[0]).appendChild(ds);
        	})();
    	</script>
        <!-- 多说公共JS代码 end -->

        <?php else: ?>
        <h4><?php _e('评论已关闭'); ?></h4>
        <?php endif; ?>
    </div>

    <style>
        #ds-thread {
            /* clear: both; */
            /* position: relative; */
            /* overflow: visible; */
            background-color: #eee;
            display: flex;
            box-sizing: border-box;
            padding: 2pc;
            flex-direction: column;
            justify-content: flex-start;
            align-items: stretch;
            position: relative;
        }

        #ds-thread #ds-reset .ds-replybox {
            margin: 20px 0 20px 0;
            padding: 0 0 0 40px;
        }

        #ds-reset .ds-avatar,
        #ds-reset .ds-avatar img {
            width:50px;
            height:50px;
            -webkit-border-radius:  50%;
            border-radius: 50%;
            box-shadow:0 0 0;
        }

        #ds-thread #ds-reset ul.ds-children .ds-avatar,
        #ds-thread #ds-reset ul.ds-children .ds-avatar img {
            width: 50px;
            height: 50px;
            border:0px !important;
        }

        #ds-thread #ds-reset .ds-replybox .ds-avatar{
            top: 5px;
        }

        #ds-thread #ds-reset .ds-replybox .ds-avatar img {
            width: 30px !important;
            height: 30px !important;
        }

        #ds-thread #ds-reset .ds-comment-body,
        #ds-thread #ds-reset ul.ds-children .ds-comment-body {
            padding-left: 60px;
        }

        #ds-thread #ds-reset ul.ds-children {
            margin-left: 3pc;
        }

        #ds-reset .ds-highlight {
            color: #000;
        }

        #ds-thread #ds-reset li.ds-post,
        #ds-thread #ds-reset .ds-post-self {
            border-top: 0px;
        }

        #ds-thread #ds-reset .ds-post-toolbar span, #ds-thread #ds-reset .ds-post-toolbar input, #ds-thread #ds-reset .ds-post-toolbar label, #ds-thread #ds-reset .ds-post-toolbar a {
            display:none;
        }

        #ds-thread #ds-reset a.ds-like-thread-button {
            height: 30px;
            line-height: 30px;
            margin: 0;
            min-width: 50px;
            padding: 0 14px;
            display: inline-block;
            font-family: "Roboto","Helvetica","Arial",sans-serif;
            font-size: 14px;
            font-weight: 400;
            text-transform: uppercase;
            letter-spacing: 0;
            overflow: hidden;
            will-change: box-shadow;
            transition: box-shadow .2s cubic-bezier(.4,0,1,1),background-color .2s cubic-bezier(.4,0,.2,1),color .2s cubic-bezier(.4,0,.2,1);
            outline: none;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            vertical-align: middle;
            border: none;
            background: rgba(158,158,158,.2);
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            color: #fff;
            background-color: #ff4081;
            text-shadow: 0 0 0;
        }

        #ds-thread #ds-reset li.ds-tab,
        #ds-wrapper #ds-reset button {
            height: 30px;
            line-height: 30px;
            margin: 0;
            min-width: 50px;
            padding: 0 14px;
            display: inline-block;
            font-family: "Roboto","Helvetica","Arial",sans-serif;
            font-size: 14px;
            font-weight: 400;
            text-transform: uppercase;
            letter-spacing: 0;
            overflow: hidden;
            will-change: box-shadow;
            transition: box-shadow .2s cubic-bezier(.4,0,1,1),background-color .2s cubic-bezier(.4,0,.2,1),color .2s cubic-bezier(.4,0,.2,1);
            outline: none;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            vertical-align: middle;
            border: none;
            background: 0 0;
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            text-shadow: 0 0 0;
        }

        #ds-thread #ds-reset li.ds-tab:hover,
        #ds-wrapper #ds-reset button:hover {
            background-color: rgba(102, 102, 102, 0.1);
        }

        #ds-thread #ds-reset li.ds-tab:active,
        #ds-wrapper #ds-reset button:active {
            background-color: rgba(102, 102, 102, 0.1);
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        #ds-thread #ds-reset li.ds-tab a.ds-current {
            border: none;
            background-color: rgba(255, 255, 255, 0);
        }

        #ds-thread #ds-reset a.ds-like-thread-button span {
            font-family: "Roboto","Helvetica","Arial",sans-serif;
            font-size: 14px;
            color: #fff;
            font-weight: 400;
        }

        #ds-thread #ds-reset li.ds-tab a {
            -webkit-border-radius: 0px;
            border-radius: 0px;
            text-shadow: 0 0 0;
        }

        #ds-thread #ds-reset .ds-textarea-wrapper {
            background: none;
            border: none;
            border-bottom: 1px solid rgba(0,0,0,.12);
            width: 90%;
            margin: 0;
            padding: 0;
            float:left;
        }

        #ds-thread #ds-reset .ds-post-toolbar {
            width: 10%;
            padding: 0;
            margin: 0;
            box-shadow: 0 0 0;
            float:left;
        }

        #ds-thread #ds-reset .ds-post-options {
            border: none;
            -webkit-border-bottom-left-radius: 0px;
            background: none;
        }

        #ds-thread #ds-reset .ds-post-button {
            height: 30px;
            width: 100%;
            min-width: 64px;
            line-height: 30px;
            margin: 0;
            padding: 0 16px;
            display: inline-block;
            font-family: "Roboto","Helvetica","Arial",sans-serif;
            font-size: 14px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0;
            overflow: hidden;
            will-change: box-shadow;
            transition: box-shadow .2s cubic-bezier(.4,0,1,1),background-color .2s cubic-bezier(.4,0,.2,1),color .2s cubic-bezier(.4,0,.2,1);
            outline: none;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            vertical-align: middle;
            border: none;
            background: rgba(158,158,158,.2);
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            color: #fff;
            background-color: <?php $this->options->ThemeColor() ?> !important;
        }

        #ds-thread #ds-reset .ds-post-button:hover {
            box-shadow: 0 5px 5px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 3px 7px 0 rgba(0,0,0,.12);
            color: #fff;
        }

        #ds-thread #ds-reset .ds-meta {
            border-bottom: none;
        }

        #ds-thread #ds-reset #ds-bubble {
            border: none;
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            background-color: rgba(255,255,255,.9);
            border-radius: 3px;
        }

        #ds-thread #ds-reset .ds-textarea-wrapper textarea {
            height: 16px !important;
            font-size: 16px !important;
            line-height: 16px !important;
        }

        #ds-thread #ds-reset .ds-textarea-wrapper textarea, #ds-thread #ds-reset .ds-textarea-wrapper .ds-hidden-text {
        }

        #ds-thread #ds-reset .ds-like-tooltip {
            box-shadow: 0 2px 24px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 55px 0 rgba(0,0,0,.12);
            border-radius: 2px;
            background: #FFF;
            border: none;
        }

        #ds-wrapper #ds-reset .ds-dialog-inner {
            box-shadow: 0px 10px 10px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),1px 3px 7px 0 rgba(0,0,0,.12),0px 0px 20px 5px rgba(0,0,0,.12);
            border: 0px;
            background: #fff;
        }

        #ds-wrapper #ds-reset .ds-dialog-body {
            padding: 0px 30px 25px;
        }

        #ds-thread #ds-reset .ds-powered-by {
            display: none;
        }

        #ds-thread #ds-reset .ds-comments, #ds-thread #ds-reset .ds-paginator {
            border-bottom: none;
        }

        #ds-wrapper #ds-reset .ds-dialog-footer {
            border-top: 1px solid rgba(0,0,0,.1);
        }

        #ds-wrapper #ds-reset .ds-control-group input{
            border: none;
            box-shadow: none;
            border-bottom: 1px solid rgba(0,0,0,.12);
            display: block;
            font-size: 16px;
            font-family: "Helvetica","Arial",sans-serif;
            margin: 0;
            padding: 4px 0;
            width: 100%;
            background: 0 0;
            text-align: left;
            color: inherit;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('.ds-comment-footer').children().remove();
        });
    </script>

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
                                <input type="url" name="url" id="visitor-url" class="mdl-textfield__input login-input-info" />  <!--  placeholder="http://"-->
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
                        <textarea name="text" rows="1" id="comment" class="mdl-textfield__input" ></textarea>
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
