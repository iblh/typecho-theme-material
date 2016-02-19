<?php

// 首页缩略图
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

// function themeConfig($form) {
//     $Twitter_URL = new Typecho_Widget_Helper_Form_Element_Text('Twitter_URL', NULL, _t('https://twitter.com/viosey'), _t('Your Twitter URL'), NULL);
//     $form->addInput($Twitter_URL);
//
//     $Facebook_URL = new Typecho_Widget_Helper_Form_Element_Text('Facebook_URL', NULL, _t('https://www.facebook.com/viosey'), _t('Your Facebook URL'), NULL);
//     $form->addInput($Facebook_URL);
//
//     $GooglePlus_URL = new Typecho_Widget_Helper_Form_Element_Text('GooglePlus_URL', NULL, _t('https://plus.google.com/116465253856896614917'), _t('Your GooglePlus URL'), NULL);
//     $form->addInput($GooglePlus_URL);
// }
