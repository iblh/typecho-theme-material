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

    //<?php if ( !empty($this->options->misc) && in_array('ShowUpyun', $this->options->misc) ) :
    $misc = new Typecho_Widget_Helper_Form_Element_Checkbox('misc',
        array(

        ),

        //Default choose
        array(), _t('杂项')
    );
    //Output
    // $form->addInput($misc->multiMode());

    $switch = new Typecho_Widget_Helper_Form_Element_Checkbox('switch',
        array(
            'ShowUpyun' => _t('启用upyun联盟Logo'),
            'SmoothScroll' => _t('启用平滑滚动效果'),
        ),

        //Default choose
        array('ShowUpyun','SmoothScroll'), _t('功能开关')
    );
    $form->addInput($switch->multiMode());

    $appearance = new Typecho_Widget_Helper_Form_Element_Checkbox('appearance',
        array(
            'colorBG' => _t('使用纯色背景'),
            'CenterArticle' => _t('文章内容居中'),
            'ThumbnailOption' => _t('首页显示文章缩略图'),
        ),

        //Default choose
        array('ThumbnailOption'), _t('外观选项')
    );
    $form->addInput($appearance->multiMode());

    // <?php $this->options->favicon()
    //$form->addInput($favicon)---show in setting.
    $favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', NULL, NULL, _t('favicon地址'), _t('填入博客favicon的地址, 默认则不显示'));
    $form->addInput($favicon);

    $analysis = new Typecho_Widget_Helper_Form_Element_Textarea('analysis', NULL, NULL, _t('网站统计代码'), _t('填入如Google Analysis的第三方统计代码'));
    $form->addInput($analysis);

    $themecolor = new Typecho_Widget_Helper_Form_Element_Text('ThemeColor', NULL, _t('#FFF'), _t('主题颜色'), _t('e.g. 使用手机版Chrome时, 博客标签显示的颜色'));
    $form->addInput($themecolor);

    $bgcolor = new Typecho_Widget_Helper_Form_Element_Text('bgcolor', NULL, _t('#F5F5F5'), _t('背景颜色'), _t('取代背景图片的颜色'));
    $form->addInput($bgcolor);

    $TitleColor = new Typecho_Widget_Helper_Form_Element_Text('TitleColor', NULL, _t('#F5F5F5'), _t('首页标题部分背景色'), _t('取代文章缩略图的颜色'));
    $form->addInput($TitleColor);

    $dailypic = new Typecho_Widget_Helper_Form_Element_Text('dailypic', NULL, _t('https://viosey.com/img/hiyou.jpg'), _t('首页左上角图片地址'), _t('填入图片地址, 图片显示在首页左上角'));
    $form->addInput($dailypic);

    $slogan = new Typecho_Widget_Helper_Form_Element_Text('slogan', NULL, _t('Nice to meet you'), _t('首页左上角图片标语'), _t('填入自定义文字, 显示于首页左上角图片上'));
    $form->addInput($slogan);

    $logo = new Typecho_Widget_Helper_Form_Element_Text('logo', NULL, _t('https://viosey.com/img/logo.png'), _t('首页右上角LOGO图片地址'), _t('填入LOGO地址, 图片将显示于首页右上角板块'));
    $form->addInput($logo);

    $TwitterURL = new Typecho_Widget_Helper_Form_Element_Text('TwitterURL', NULL, _t('https://twitter.com/viosey'), _t('Twitter地址'), _t('填入你的Twitter地址, 显示于博客页脚'));
    $form->addInput($TwitterURL);

    $FacebookURL = new Typecho_Widget_Helper_Form_Element_Text('FacebookURL', NULL, _t('https://www.facebook.com/viosey'), _t('Facebook地址'), _t('填入你的Facebookr地址, 显示于博客页脚'));
    $form->addInput($FacebookURL);

    $GooglePlusURL = new Typecho_Widget_Helper_Form_Element_Text('GooglePlusURL', NULL, _t('https://plus.google.com/116465253856896614917'), _t('Google Plus地址'), _t('填入你的GooglePlus地址, 显示于博客页脚'));
    $form->addInput($GooglePlusURL);

}
