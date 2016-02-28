<?php

//Homepage thumbnail
function showThumbnail($widget)
{
    //If article no include picture, display random default picture
    $rand = rand(1,5); //Random number
    $random = $widget->widget('Widget_Options')->themeUrl . '/img/random/' . $rand . '.jpg'; //Random picture path

    // If only on random default picture, delete the following "//"
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

//Random article
function theme_random_posts(){
    $defaults = array(
        'number' => 1,
    );
    $db = Typecho_Db::get();

    $sql = $db->select()->from('table.contents')
        ->where('status = ?','publish')
        ->where('type = ?', 'post')
        ->where('created <= unix_timestamp(now())', 'post') //avoid display the article which don't reach the publish time
        ->limit($defaults['number'])
        ->order('RAND()');

    $result = $db->fetchAll($sql);
    foreach($result as $val){
        $val = Typecho_Widget::widget('Widget_Abstract_Contents')->filter($val);
        echo $val['permalink'];
    }
}


// if (!defined('__TYPECHO_ROOT_DIR__')) exit;
//
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
