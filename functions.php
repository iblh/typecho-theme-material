<?php

//Appearance setup
function themeConfig($form) {
    echo '<p style="font-size:14px;">
    <span style="    display: block;
    margin-bottom: .5em;
    font-weight: bold;">感谢您使用 Material 主题</span>
    请关注 <a href="https://github.com/viosey/typecho-theme-material" target="_blank" style="color:#3384da;font-weight:bold;">Github-Material</a> 以获得<span style="color:#df3827;font-weight:bold;">最新版本支持</span>  <br />
    <a href="mailto:viosey@outlook.com" >帮助&支持</a> &nbsp;
    <a href="https://github.com/viosey/typecho-theme-material/issues" target="_blank">建议&反馈</a>
    </p>';

    $misc = new Typecho_Widget_Helper_Form_Element_Checkbox('misc',
        array(

        ),

        //Default choose
        array(), _t('杂项')
    );
    //Output
    // $form->addInput($misc->multiMode());

    $appearance = new Typecho_Widget_Helper_Form_Element_Checkbox('appearance',
        array(
            'CenterArticle' => _t('文章内容居中'),
            'ThumbnailOption' => _t('首页显示文章缩略图'),
        ),

        //Default choose
        array('ThumbnailOption'), _t('外观选项')
    );
    $form->addInput($appearance->multiMode());

    $switch = new Typecho_Widget_Helper_Form_Element_Checkbox('switch',
        array(
            'ShowUpyun' => _t('侧边栏显示 upyun 联盟 logo'),
            'SmoothScroll' => _t('平滑滚动效果'),
            'ShowLoadingLine' => _t('页面顶部 loading 加载进度条效果'),
            'atargetblank' => _t('链接以新标签页形式打开'),
        ),

        //Default choose
        array('ShowUpyun','SmoothScroll','ShowLoadingLine'), _t('功能开关')
    );
    $form->addInput($switch->multiMode());

    $loadingcolor = new Typecho_Widget_Helper_Form_Element_Text('loadingcolor', NULL, NULL, _t('loading 加载进度条颜色'),_t('打开 "功能开关" 中的 loading 加载进度条后, 在这里设置进度条的颜色, 默认为蓝色'));
    $loadingcolor->input->setAttribute('class','mini');
    $form->addInput($loadingcolor);

    $loadingbuffer = new Typecho_Widget_Helper_Form_Element_Text('loadingbuffer', NULL, _t('800'), _t('loading 加载缓冲时间'),_t('loading 加载进度条的缓冲时间, 单位为毫秒 ms, 默认为 800ms'));
    $loadingbuffer->input->setAttribute('class','mini');
    $form->addInput($loadingbuffer);

    $BGtype = new Typecho_Widget_Helper_Form_Element_Radio('BGtype',
        array(
            '0' => _t('纯色背景'),
            '1' => _t('图片背景'),
            '2' => _t('渐变背景')
        ),

        //Default choose
        '0',_t('背景设置'),_t("选择背景方案，对应填写下方的 '背景颜色 / 图片' ，这里默认使用纯色背景.<br />
        美观: 图片 > 渐变 > 纯色<br />性能: 渐变 = 纯色 > 图片")
    );
    $form->addInput($BGtype);

    $bgcolor = new Typecho_Widget_Helper_Form_Element_Text('bgcolor', NULL, NULL, _t('背景颜色 / 图片'), _t('背景设置如果选择图片背景, 这里就填写图片地址;<br />背景设置如果选择纯色背景, 这里就填写颜色代码; <br />
    这里如果不填写则默认显示主题文件夹下的 /img/bg.jpg 或者颜色 #F5F5F5'));
    $form->addInput($bgcolor);

    $GradientType = new Typecho_Widget_Helper_Form_Element_Radio('GradientType',
        array(
            '0' => _t('渐变样式 1'),
            '1' => _t('渐变样式 2'),
            '2' => _t('渐变样式 3'),
            '3' => _t('渐变样式 4'),
            '4' => _t('渐变样式 5'),
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

    $sticky_1 = new Typecho_Widget_Helper_Form_Element_Text('sticky_1', NULL, NULL,'置顶文章 1 ID', '填写对应主题的 id 即可使文章标题在首页置顶显示');
    $sticky_1->input->setAttribute('class', 'mini');
    $form->addInput($sticky_1->addRule('isInteger', '请填入数字'));

    $sticky_2 = new Typecho_Widget_Helper_Form_Element_Text('sticky_2', NULL, NULL,'置顶文章 2 ID', '填写对应主题的 id 即可使文章标题在首页置顶显示');
    $sticky_2->input->setAttribute('class', 'mini');
    $form->addInput($sticky_2->addRule('isInteger', '请填入数字'));

    $ThemeColor = new Typecho_Widget_Helper_Form_Element_Text('ThemeColor', NULL, _t('#FFF'), _t('Android Chrome 地址栏颜色'), _t('设置 Android Chrome 地址栏颜色'));
    $ThemeColor->input->setAttribute('class', 'mini');
    $form->addInput($ThemeColor);

    $alinkcolor = new Typecho_Widget_Helper_Form_Element_Text('alinkcolor', NULL, _t('#3697D5'), _t('超链接颜色'), _t('设置博客的超链接字体颜色, 默认为蓝色'));
    $alinkcolor->input->setAttribute('class','mini');
    $form->addInput($alinkcolor);

    $TitleColor = new Typecho_Widget_Helper_Form_Element_Text('TitleColor', NULL, _t('#F5F5F5'), _t('首页标题部分背景色'), _t('如果不显示文章缩略图, 则以该颜色替代'));
    $TitleColor->input->setAttribute('class', 'mini');
    $form->addInput($TitleColor);

    $avatarURL = new Typecho_Widget_Helper_Form_Element_Text('avatarURL', NULL, NULL, '个人头像地址', '填入头像的地址, 如不填写则使用默认头像');
    $form->addInput($avatarURL);

    $favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', NULL, NULL, _t('favicon 地址'), _t('填入博客 favicon 的地址, 默认则不显示'));
    $form->addInput($favicon);

    $dailypic = new Typecho_Widget_Helper_Form_Element_Text('dailypic', NULL, NULL, _t('首页顶部左边的图片地址'), _t('填入图片地址, 图片显示在首页顶部左边位置, 不填则显示默认图片'));
    $form->addInput($dailypic);

    $slogan = new Typecho_Widget_Helper_Form_Element_Text('slogan', NULL, _t('Nice to meet you'), _t('首页顶部左边的标语'), _t('填入自定义文字, 显示于首页顶部左边的图片上'));
    $form->addInput($slogan);

    $dailypicLink = new Typecho_Widget_Helper_Form_Element_Text('dailypicLink', NULL, _t('#'), _t('首页顶部左边图片的点击跳转地址'), _t('点击图片后, 想要跳转网页的地址'));
    $form->addInput($dailypicLink);

    $logo = new Typecho_Widget_Helper_Form_Element_Text('logo', NULL, NULL, _t('首页顶部右边 LOGO 图片地址'), _t('填入 LOGO 地址, 图片将显示于首页右上角板块'));
    $form->addInput($logo);

    $logoLink = new Typecho_Widget_Helper_Form_Element_Text('logoLink', NULL, NULL, _t('首页顶部右边 LOGO 的点击跳转地址'), _t('点击 LOGO 后, 想要跳转网页的地址'));
    $form->addInput($logoLink);

    $CDNURL = new Typecho_Widget_Helper_Form_Element_Text('CDNURL', NULL, NULL, _t('CDN 地址'), _t("
    新建一个'MaterialCDN' 文件夹, 把'css, fonts, img, js' 文件夹放进去, 然后把'MaterialCDN' 上传到到你的 CDN 储存空间根目录下<br />
    填入你的 CDN 地址, 如 <b>http://bucket.b0.upaiyun.com</b><br />
    目前 CDN 地址对随机默认缩略图不生效, 所以请勿删除主题文件夹下的 img/random 文件夹 (css, js, fonts 文件夹则可删除)"));
    $form->addInput($CDNURL);

    $footersns = new Typecho_Widget_Helper_Form_Element_Checkbox('footersns',
        array(
            'ShowTwitter' => _t('显示 Twitter 图标'),
            'ShowFacebook' => _t('显示 Facebook 图标'),
            'ShowGooglePlus' => _t('显示 Google+ 图标'),
            'ShowWeibo' => _t('显示新浪微博图标'),
        ),

        array('ShowTwitter','ShowFacebook','ShowGooglePlus'), _t('页脚 SNS 图标按钮显示设置'),_t('开启后, 按钮显示于博客页脚位置')
    );
    $form->addInput($footersns);

    $TwitterURL = new Typecho_Widget_Helper_Form_Element_Text('TwitterURL', NULL, _t('https://twitter.com/viosey'), _t('Twitter 地址'), _t('开启上方选项后, 填入你的 Twitter 地址'));
    $form->addInput($TwitterURL);

    $FacebookURL = new Typecho_Widget_Helper_Form_Element_Text('FacebookURL', NULL, _t('https://www.facebook.com/viosey'), _t('Facebook 地址'), _t('开启上方选项后, 填入你的 Facebookr 地址'));
    $form->addInput($FacebookURL);

    $GooglePlusURL = new Typecho_Widget_Helper_Form_Element_Text('GooglePlusURL', NULL, _t('https://plus.google.com/116465253856896614917'), _t('Google+ 地址'), _t('开启上方选项后, 填入你的 Google+ 地址'));
    $form->addInput($GooglePlusURL);

    $WeiboURL = new Typecho_Widget_Helper_Form_Element_Text('WeiboURL', NULL, NULL, _t('新浪微博地址'), _t('开启上方选项后, 填入你的新浪微博地址'));
    $form->addInput($WeiboURL);

    $analysis = new Typecho_Widget_Helper_Form_Element_Textarea('analysis', NULL, NULL, _t('网站统计代码'), _t('填入如 Google Analysis 的第三方统计代码'));
    $form->addInput($analysis);
}

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
