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


function themeConfig($form) {
    $favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', NULL, NULL, _t('favicon链接'), _t('填写自定义favicon的链接, 默认不显示'));
    $form->addInput($favicon);

    $dailypic = new Typecho_Widget_Helper_Form_Element_Text('dailypic', NULL, _t('https://viosey.com/img/hiyou.jpg'), _t('首页左上角图片链接'), _t('填写自定义图片的链接, 图片显示在首页左上角'));
    $form->addInput($dailypic);

    $slogan = new Typecho_Widget_Helper_Form_Element_Text('slogan', NULL, _t('Daily Pic'), _t('首页左上角图片标语'), _t('填写自定义的文字, 文字显示在首页左上角图片上'));
    $form->addInput($slogan);

    $logo = new Typecho_Widget_Helper_Form_Element_Text('logo', NULL, _t('https://viosey.com/img/logo.png'), _t('首页右上角LOGO图片链接'), _t('填写自定义LOGO的链接, 图片显示在首页右上角'));
    $form->addInput($logo);

    $TwitterURL = new Typecho_Widget_Helper_Form_Element_Text('TwitterURL', NULL, _t('https://twitter.com/viosey'), _t('页脚Twitter链接'), _t('填入你的Twitter链接'));
    $form->addInput($TwitterURL);

    $FacebookURL = new Typecho_Widget_Helper_Form_Element_Text('FacebookURL', NULL, _t('https://www.facebook.com/viosey'), _t('页脚Facebook链接'), _t('填入你的Facebookr链接'));
    $form->addInput($FacebookURL);

    $GooglePlusURL = new Typecho_Widget_Helper_Form_Element_Text('GooglePlusURL', NULL, _t('https://plus.google.com/116465253856896614917'), _t('页脚GooglePlus链接'), _t('填入你的GooglePlus链接'));
    $form->addInput($GooglePlusURL);

    $misc = new Typecho_Widget_Helper_Form_Element_Checkbox('misc',
    array(
        'ShowUpyun' => _t('显示upyun联盟LOGO'),
    ),
    array('ShowUpyun'), _t('杂项'));
    $form->addInput($misc->multiMode());
}
