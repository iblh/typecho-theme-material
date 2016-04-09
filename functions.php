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
    echo '<p style="font-size:14px;">
    <span style="    display: block;
    margin-bottom: .5em;
    font-weight: bold;">感谢您使用Material主题</span>
    请关注Github以获得最新版本支持 <a href="https://github.com/viosey/typecho-theme-material" target="_blank">Github-Material</a> <br />
    <a href="mailto:viosey@outlook.com" >帮助&支持</a> &nbsp;
    <a href="https://github.com/viosey/typecho-theme-material/issues" target="_blank">建议&反馈</a>
    </p>';

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
            'CenterArticle' => _t('文章内容居中'),
            'ThumbnailOption' => _t('首页显示文章缩略图'),
        ),

        //Default choose
        array('ThumbnailOption'), _t('外观选项')
    );
    $form->addInput($appearance->multiMode());

    $BGtype = new Typecho_Widget_Helper_Form_Element_Radio('BGtype',
        array(
            '0' => _t('纯色背景'),
            '1' => _t('图片背景'),
            '2' => _t('渐变背景')
        ),

        '1',_t('背景设置'),_t("选择背景方案，对应填写下方的‘背景图or色’，这里默认是使用图片.<br />
        美观: 图片 > 渐变 > 纯色<br />性能: 渐变 = 纯色 > 图片")
    );
    $form->addInput($BGtype);

    $bgcolor = new Typecho_Widget_Helper_Form_Element_Text('bgcolor', NULL, NULL, _t('背景颜色/图片'), _t('背景设置如果选择图片背景, 这里就填写图片地址;<br />背景设置如果选择纯色背景, 这里就填写颜色代码; <br />
    这里如果不填写则默认显示主题文件夹下的/img/bg.jpg或者颜色#F5F5F5'));
    $form->addInput($bgcolor);

    $GradientType = new Typecho_Widget_Helper_Form_Element_Radio('GradientType',
        array(
            '0' => _t('渐变样式1'),
            '1' => _t('渐变样式2'),
            '2' => _t('渐变样式3'),
            '3' => _t('渐变样式4'),
            '4' => _t('渐变样式5'),
        ),

        '0',_t('渐变样式'),_t("背景设置如果选择渐变背景, 在这里选择想要的渐变样式.")
    );
    $form->addInput($GradientType);


    $langis = new Typecho_Widget_Helper_Form_Element_Radio('langis',
        array(
            '0' => _t('English'),
            '1' => _t('中文')
        ),

        '0',_t('界面语言设置'),_t("默认使用英文, 中文总感觉有些违和_(:3」∠)_")
    );
    $form->addInput($langis);

    $themecolor = new Typecho_Widget_Helper_Form_Element_Text('ThemeColor', NULL, _t('#FFF'), _t('主题颜色'), _t('设置Android Chrome选项卡颜色'));
    $themecolor->input->setAttribute('class', 'mini');
    $form->addInput($themecolor);

    $TitleColor = new Typecho_Widget_Helper_Form_Element_Text('TitleColor', NULL, _t('#F5F5F5'), _t('首页标题部分背景色'), _t('如果不显示文章缩略图, 则以该颜色替代'));
    $TitleColor->input->setAttribute('class', 'mini');
    $form->addInput($TitleColor);

    // <?php $this->options->favicon()
    //$form->addInput($favicon)---show in setting.
    $favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', NULL, NULL, _t('favicon地址'), _t('填入博客favicon的地址, 默认则不显示'));
    $form->addInput($favicon);

    $analysis = new Typecho_Widget_Helper_Form_Element_Textarea('analysis', NULL, NULL, _t('网站统计代码'), _t('填入如Google Analysis的第三方统计代码'));
    $form->addInput($analysis);

    $dailypic = new Typecho_Widget_Helper_Form_Element_Text('dailypic', NULL, _t('https://viosey.com/img/hiyou.jpg'), _t('首页左上角图片地址'), _t('填入图片地址, 图片显示在首页左上角'));
    $form->addInput($dailypic);

    $slogan = new Typecho_Widget_Helper_Form_Element_Text('slogan', NULL, _t('Nice to meet you'), _t('首页左上角图片标语'), _t('填入自定义文字, 显示于首页左上角图片上'));
    $form->addInput($slogan);

    $logo = new Typecho_Widget_Helper_Form_Element_Text('logo', NULL, _t('https://viosey.com/img/logo.png'), _t('首页右上角LOGO图片地址'), _t('填入LOGO地址, 图片将显示于首页右上角板块'));
    $form->addInput($logo);

    $TwitterURL = new Typecho_Widget_Helper_Form_Element_Text('TwitterURL', NULL, _t('https://twitter.com/viosey'), _t('Twitter地址'), _t('填入你的Twitter地址, 按钮位于博客页脚'));
    $form->addInput($TwitterURL);

    $FacebookURL = new Typecho_Widget_Helper_Form_Element_Text('FacebookURL', NULL, _t('https://www.facebook.com/viosey'), _t('Facebook地址'), _t('填入你的Facebookr地址, 按钮位于博客页脚'));
    $form->addInput($FacebookURL);

    $GooglePlusURL = new Typecho_Widget_Helper_Form_Element_Text('GooglePlusURL', NULL, _t('https://plus.google.com/116465253856896614917'), _t('Google Plus地址'), _t('填入你的GooglePlus地址, 按钮位于博客页脚'));
    $form->addInput($GooglePlusURL);

}
