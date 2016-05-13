<?php
/**
 * 友情链接页面
 *
 * @package custom
 */
$this->need('header.php'); ?>

<style>
    .md-links{
        min-height: calc(100% - 120px - 5pc);
    }
</style>

<div class="md-links">
    <?php if (class_exists("Links_Plugin")): ?>
        <?php Links_Plugin::output('
        <li>
            <a href="{url}" title="{title}" target="_blank"><img src="{image}" alt="{name}" />
                <span>{name}</span>
                <span>{description}</span>
            </a>
        </li>
        '); ?>
    <?php endif; ?>
</div>


<?php include('sidebar.php'); ?>
<?php include('footer.php'); ?>
