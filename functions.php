<?php

function showThumbnail($widget)
{
    // 当文章无图片时的默认缩略图
    $rand = rand(1,5); // 随机 1-5 张缩略图
    $random = $widget->widget('Widget_Options')->themeUrl . '/img/random/' . $rand . '.jpg'; // 随机缩略图路径
    
    // 若只想要一张默认缩略图请删除下一行开头的"//"
    //$random = $widget->widget('Widget_Options')->themeUrl . '/img/random.jpg';

    $attach = $widget->attachments(1)->attachment;
    $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i';


    if (preg_match_all($pattern, $widget->content, $thumbUrl)) {
             echo $thumbUrl[1][0];
    }
    else if ($attach->isImage) {
        echo $attach->url;
    }
    else {
        echo $random;
    }
}
