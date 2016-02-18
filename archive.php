<?php $this->need('header.php'); ?>

        <div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded demo-blog--blogpost">

            <!-- 左上角返回按钮 -->
            <div class="demo-back" id="backhome-div">
                <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" href="<?php $this->options->siteUrl(); ?>" title="go back" role="button">
                    <i class="material-icons" role="presentation">arrow_back</i>
                </a>
            </div>
            <div class="mdl-tooltip" for="backhome-div">Home</div>

            <main class="mdl-layout__content">

                <div class="demo-blog__posts mdl-grid">

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
                                <?php $this->category(','); ?> | <a href="<?php $this->permalink() ?>"><?php $this->commentsNum('%d 评论'); ?></a>
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

                <?php include('footer.php'); ?>
