<?php

//Appearance setup
function themeConfig($form) {

    echo "
    <style>
        body{
            background-color:#F5F5F5;
        }
        @media screen and (min-device-width: 1024px) {
            ::-webkit-scrollbar-track {
            	background-color: rgba(255,255,255,0);
            }

            ::-webkit-scrollbar {
            	width: 6px;
            	background-color: rgba(255,255,255,0);
            }

            ::-webkit-scrollbar-thumb {
                border-radius: 3px;
            	background-color: rgba(193,193,193,1);
            }
        }
        .typecho-head-nav{
            background-color:#673AB7;
        }
        #typecho-nav-list .parent a:hover, #typecho-nav-list .focus .parent a, #typecho-nav-list .root:hover .parent a{
            background: RGBA(255, 255, 255, 0);
        }
        #typecho-nav-list{
            display: none;
        }
        .typecho-head-nav .operate a{
            border:0;
            color:rgba(255,255,255,.6);
        }
        .typecho-head-nav .operate a:hover{
            color:rgba(255,255,255,.8);
            background-color:#673AB7;
        }
        .body.container{
            min-width: 100% !important;
            padding:0px;
        }
        .row {
            margin:0px;
        }
        .col-mb-12{
            padding:0 !important;
        }
        .typecho-page-title{
            height:100px;
            padding: 10px 40px 20px 40px;
            background-color:#673AB7;
            color:#FFF;
            font-size: 24px;
        }
        .typecho-option-tabs{
            padding: 0;
            margin: 0;
            height: 60px;
            background-color: #512DA8;
            margin-bottom: 40px !important;
            padding-left:25px;
        }
        .typecho-option-tabs li{
            margin: 0;
            border: none;
            float: left;
            position: relative;
            display: block;
            text-align: center;
            font-weight: 500;
            font-size: 14px;
            text-transform: uppercase;
        }
        .typecho-option-tabs a{
            height:auto;
            border:0;
            color: rgba(255,255,255,.6);
            background-color:rgba(255,255,255,0) !important;
            padding: 17px 24px;
        }
        .typecho-option-tabs a:hover{
            color:rgba(255,255,255,.8);
        }
        .message{
            background-color:#673AB7 !important;
            color:#fff;
        }
        .success{
            background-color:#673AB7;
            color:#fff;
        }
        .current{
            background-color: #FFF;
            height: 4px;
            padding:0 !important;
            bottom:0px;
        }
        .current a{
            color:#FFF;
        }
        input[type=text],
        textarea{
            border: none;
            border-bottom: 1px solid rgba(0,0,0,.60);
            outline:none;
            border-radius:0;
        }
        .typecho-option{
            float:left;
        }
        .typecho-option span{
            margin-right:0;
        }
        .typecho-option-submit{
            position: fixed;
            right: 32px;
            bottom: 32px;
        }
        .typecho-option-submit button{
            float:right;
            background: #00BCD4;
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            color: #FFF;
        }
        .typecho-page-main .typecho-option textarea{
            height:76px;
        }
        .typecho-option label.typecho-label{
            font-weight: 400;
            margin-bottom: 20px;
            margin-top: 10px;
            font-size: 16px;
            padding-bottom: 5px;
            border-bottom: 1px solid rgba(0,0,0,0.2);
        }
        #use-intro{
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            background-color: #fff;
            margin: 8px;
            padding: 8px;
            padding-left:20px;
            margin-bottom: 40px;
        }
        #typecho-option-item-loadingcolor-2 label,
        #typecho-option-item-loadingbuffer-3 label,
        #typecho-option-item-bgcolor-5 label,
        #typecho-option-item-GradientType-6 label,
        #typecho-option-item-TitleColor-8 label,
        #typecho-option-item-DSshortname-10 label,
        #typecho-option-item-CDNURL-11 label,
        #typecho-option-item-langis-12 label,
        #typecho-option-item-sticky_1-13 label,
        #typecho-option-item-sticky_2-14 label,
        #typecho-option-item-ThemeColor-15 label,
        #typecho-option-item-alinkcolor-16 label,
        #typecho-option-item-ChromeThemeColor-17 label,
        #typecho-option-item-avatarURL-18 label,
        #typecho-option-item-favicon-19 label,
        #typecho-option-item-dailypic-20 label,
        #typecho-option-item-logo-21 label,
        #typecho-option-item-dailypicLink-22 label,
        #typecho-option-item-logoLink-23 label,
        #typecho-option-item-slogan-24 label,
        #typecho-option-item-TwitterURL-26 label,
        #typecho-option-item-FacebookURL-27 label,
        #typecho-option-item-GooglePlusURL-28 label,
        #typecho-option-item-WeiboURL-29 label{
            font-size:14px;
            border-bottom:none;
            padding-bottom:0;
            font-weight:300;
            margin-bottom: 10px;
        }
        #typecho-option-item-switch-0{
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            background-color: #fff;
            margin: 8px 1%;
            padding: 8px 2%;
            width: 29%;
        }
        #typecho-option-item-analysis-1{
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            background-color: #fff;
            margin: 8px 1%;
            padding: 8px 2%;
            width: 59%;
        }
        #typecho-option-item-loadingcolor-2,
        #typecho-option-item-loadingbuffer-3{
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            background-color: #fff;
            margin: 8px 1%;
            padding: 8px 2%;
            width:44%;
            margin-bottom:40px;
        }
        #typecho-option-item-BGtype-4{
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            background-color: #fff;
            margin: 8px 1%;
            padding: 8px 2%;
            width:94%;
        }
        #typecho-option-item-bgcolor-5,
        #typecho-option-item-GradientType-6{
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            background-color: #fff;
            margin: 8px 1%;
            padding: 8px 2%;
            width:44%;
            margin-bottom:40px;
        }
        #typecho-option-item-ThumbnailOption-7{
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            background-color: #fff;
            margin: 8px 1%;
            padding: 8px 2%;
            width: 59%;
            margin-bottom:40px;
        }
        #typecho-option-item-TitleColor-8{
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            background-color: #fff;
            margin: 8px 1%;
            padding: 8px 2%;
            width: 29%;
            margin-bottom:40px;
        }
        #typecho-option-item-commentis-9{
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            background-color: #fff;
            margin: 8px 1%;
            padding: 8px 2%;
            width: 59%;
            margin-bottom:40px;
        }
        #typecho-option-item-DSshortname-10{
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            background-color: #fff;
            margin: 8px 1%;
            padding: 8px 2%;
            width: 29%;
            margin-bottom:40px;
        }
        #typecho-option-item-CDNURL-11{
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            background-color: #fff;
            margin: 8px 1%;
            padding: 8px 2%;
            width:94%;
            margin-bottom:40px;
        }
        #typecho-option-item-langis-12{
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            background-color: #fff;
            margin: 8px 1%;
            padding: 8px 2%;
            width:44%;
            margin-bottom:40px;
        }
        #typecho-option-item-sticky_1-13,
        #typecho-option-item-sticky_2-14{
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            background-color: #fff;
            margin: 0 1%;
            padding: 8px 2%;
            width:44%;
        }
        #typecho-option-item-sticky_1-13{
            margin-top:8px;
        }
        #typecho-option-item-sticky_2-14{
            margin-bottom:40px;
        }
        #typecho-option-item-ThemeColor-15,
        #typecho-option-item-alinkcolor-16,
        #typecho-option-item-ChromeThemeColor-17{
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            background-color: #fff;
            margin: 8px 1%;
            padding: 8px 2%;
            width:27.333%;
            margin-bottom:40px;
        }
        #typecho-option-item-avatarURL-18,
        #typecho-option-item-favicon-19{
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            background-color: #fff;
            margin: 8px 1%;
            padding: 8px 2%;
            width:44%;
            margin-bottom:40px;
        }
        #typecho-option-item-dailypic-20,
        #typecho-option-item-logo-21{
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            background-color: #fff;
            margin: 8px 1%;
            padding: 8px 2%;
            width:44%;
        }
        #typecho-option-item-dailypicLink-22,
        #typecho-option-item-logoLink-23{
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            background-color: #fff;
            margin: 8px 1%;
            padding: 8px 2%;
            width:44%;
        }
        #typecho-option-item-slogan-24{
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            background-color: #fff;
            margin: 8px 1%;
            padding: 8px 2%;
            width:94%;
            margin-bottom:40px;
        }
        #typecho-option-item-footersns-25{
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            background-color: #fff;
            margin: 8px 1%;
            padding: 8px 2%;
            width:94%;
        }
        #typecho-option-item-TwitterURL-26,
        #typecho-option-item-FacebookURL-27,
        #typecho-option-item-GooglePlusURL-28,
        #typecho-option-item-WeiboURL-29{
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            background-color: #fff;
            margin: 8px 1%;
            padding: 8px 2%;
            width:44%;
        }
        @media screen and (max-width:480px){
            .typecho-option{
                width:94% !important;
                margin-bottom: 20px !important;
            }
            .typecho-option-tabs li{
                width:33%;
            }
            .typecho-option-tabs{
                padding-left:0;
            }
            .typecho-option-tabs a{
                padding:17px 10px;
            }
        }
        @media screen and (min-width: 480px) and (max-width: 700px){
            #typecho-option-item-loadingcolor-2, #typecho-option-item-loadingbuffer-3{
                width:26.5%;
            }
            #typecho-option-item-avatarURL-18{
                margin-bottom:8px;
            }
        }
        @media screen and (min-width: 768px) and (max-width: 1042px) {
            #typecho-option-item-loadingcolor-2, #typecho-option-item-loadingbuffer-3{
                width:26.5%;
            }
        }
        .typecho-foot{
            padding: 16px 40px;
            color: rgb(158, 158, 158);
            background-color: rgb(66, 66, 66);
            margin-top: 80px;
        }
    </style>
    ";

    echo '<p style="font-size:14px;" id="use-intro">
    <span style="display: block;
    margin-bottom: 10px;
    margin-top: 10px;
    font-size: 16px;">感谢您使用 Material 主题</span>
    <span style="margin-bottom:10px;display:block">请关注 <a href="https://github.com/viosey/typecho-theme-material" target="_blank" style="color:#3384da;font-weight:bold;text-decoration:underline">Github-Material</a> 以获得<span style="color:#df3827;font-weight:bold;">最新版本支持</span></span>
    <a href="mailto:viosey@outlook.com" >帮助&支持</a> &nbsp;
    <a href="https://github.com/viosey/typecho-theme-material/issues" target="_blank">建议&反馈</a>
    </p>';

    $switch = new Typecho_Widget_Helper_Form_Element_Checkbox('switch',
        array(
            'ShowUpyun' => _t('侧边栏显示 upyun 联盟 logo'),
            'SmoothScroll' => _t('平滑滚动效果'),
            'ShowLoadingLine' => _t('顶部 loading 加载进度条效果'),
            'atargetblank' => _t('链接以新标签页形式打开'),
        ),

        //Default choose
        array('ShowUpyun','SmoothScroll','ShowLoadingLine'), _t('功能开关')
    );
    $form->addInput($switch->multiMode());

    $analysis = new Typecho_Widget_Helper_Form_Element_Textarea('analysis', NULL, NULL, _t('网站统计代码'), _t('填入如 Google Analysis 的第三方统计代码'));
    $form->addInput($analysis);

    $loadingcolor = new Typecho_Widget_Helper_Form_Element_Text('loadingcolor', NULL, NULL, _t('loading 加载进度条颜色'),_t('打开 "功能开关" 中的 loading 加载进度条后, 在这里设置进度条的颜色, 默认为蓝色'));
    $form->addInput($loadingcolor);

    $loadingbuffer = new Typecho_Widget_Helper_Form_Element_Text('loadingbuffer', NULL, _t('800'), _t('loading 加载缓冲时间'),_t('loading 加载进度条的缓冲时间, 单位为毫秒 ms, 默认为 800ms'));
    $form->addInput($loadingbuffer);

    $BGtype = new Typecho_Widget_Helper_Form_Element_Radio('BGtype',
        array(
            '0' => _t('纯色背景 &emsp;'),
            '1' => _t('图片背景 &emsp;'),
            '2' => _t('渐变背景 &emsp;')
        ),

        //Default choose
        '1',_t('背景设置'),_t("选择背景方案, 对应填写下方的 '<b>背景颜色 / 图片</b>' 或选择 '<b>渐变样式</b>', 这里默认使用图片背景.")
    );
    $form->addInput($BGtype);

    $bgcolor = new Typecho_Widget_Helper_Form_Element_Text('bgcolor', NULL, NULL, _t('背景颜色 / 图片'), _t('背景设置如果选择纯色背景, 这里就填写颜色代码; <br />背景设置如果选择图片背景, 这里就填写图片地址;<br />
    不填写则默认显示 #F5F5F5 或主题文件夹下的 /img/bg.jpg'));
    $form->addInput($bgcolor);

    $GradientType = new Typecho_Widget_Helper_Form_Element_Radio('GradientType',
        array(
            '0' => _t('渐变样式 1<br />'),
            '1' => _t('渐变样式 2<br />'),
            '2' => _t('渐变样式 3<br />'),
            '3' => _t('渐变样式 4<br />'),
            '4' => _t('渐变样式 5'),
        ),

        '0', _t('渐变样式'), _t("背景设置如果选择渐变背景, 在这里选择想要的渐变样式.")
    );
    $form->addInput($GradientType);

    $ThumbnailOption = new Typecho_Widget_Helper_Form_Element_Radio('ThumbnailOption',
        array(
            '1' => _t('显示文章内第一张图片 (若无图片则显示随机图片)<br />'),
            '2' => _t('只显示纯色 &emsp;'),
            '3' => _t('只显示随机图片'),
        ),

        //Default choose
        '1', _t('缩略图显示效果')
    );
    $form->addInput($ThumbnailOption);

    $TitleColor = new Typecho_Widget_Helper_Form_Element_Text('TitleColor', NULL, _t('#FFF'), _t('缩略图显示纯色时的颜色'), _t('填入颜色代码'));
    $form->addInput($TitleColor);

    $commentis = new Typecho_Widget_Helper_Form_Element_Radio('commentis',
        array(
            '0' => _t('使用原生评论 &emsp;'),
            '1' => _t('使用多说评论 &emsp;')
        ),

        '0', _t('文章评论'), _t("默认使用原生评论, 如果使用多说评论, 在 <b>'多说二级域名 (short_name)'</b> 中填入多说 short_name")
    );
    $form->addInput($commentis);

    $DSshortname = new Typecho_Widget_Helper_Form_Element_Text('DSshortname', NULL, NULL, '多说二级域名 (short_name)', '要使用多说评论, 在这里填入多说的 short_name, 即二级域名.');
    $form->addInput($DSshortname);

    $CDNURL = new Typecho_Widget_Helper_Form_Element_Text('CDNURL', NULL, NULL, _t('CDN 地址'), _t("
    新建一个'MaterialCDN' 文件夹, 把'css, fonts, img, js' 文件夹放进去, 然后把'MaterialCDN' 上传到到你的 CDN 储存空间根目录下<br />
    填入你的 CDN 地址, 如 <b>http://bucket.b0.upaiyun.com</b>"));
    $form->addInput($CDNURL);

    $langis = new Typecho_Widget_Helper_Form_Element_Radio('langis',
        array(
            '0' => _t('English <br />'),
            '1' => _t('简体中文 <br />'),
            '2' => _t('繁体中文 (未完工, 勿選) <br />')
        ),

        '0', _t('界面语言设置'), _t("默认使用英文, 中文总感觉有些违和 _(:3」∠)_")
    );
    $form->addInput($langis);

    $sticky_1 = new Typecho_Widget_Helper_Form_Element_Text('sticky_1', NULL, NULL,'置顶文章 1 ID', '填写对应主题的 id 即可使文章标题在首页置顶显示');
    $form->addInput($sticky_1->addRule('isInteger', '请填入数字'));

    $sticky_2 = new Typecho_Widget_Helper_Form_Element_Text('sticky_2', NULL, NULL,'置顶文章 2 ID', '填写对应主题的 id 即可使文章标题在首页置顶显示');
    $form->addInput($sticky_2->addRule('isInteger', '请填入数字'));

    $ThemeColor = new Typecho_Widget_Helper_Form_Element_Text('ThemeColor', NULL, _t('#039BE5'), _t('主题颜色'), NULL);
    $form->addInput($ThemeColor);

    $alinkcolor = new Typecho_Widget_Helper_Form_Element_Text('alinkcolor', NULL, _t('#039BE5'), _t('超链接颜色'), NULL);
    $form->addInput($alinkcolor);

    $ChromeThemeColor = new Typecho_Widget_Helper_Form_Element_Text('ChromeThemeColor', NULL, _t('#039BE5'), _t('Android Chrome 地址栏颜色'), NULL);
    $form->addInput($ChromeThemeColor);

    $avatarURL = new Typecho_Widget_Helper_Form_Element_Text('avatarURL', NULL, NULL, '个人头像地址', '填入头像的地址, 如不填写则使用默认头像');
    $form->addInput($avatarURL);

    $favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', NULL, NULL, _t('favicon 地址'), _t('填入博客 favicon 的地址, 默认则不显示'));
    $form->addInput($favicon);

    $dailypic = new Typecho_Widget_Helper_Form_Element_Text('dailypic', NULL, NULL, _t('首页顶部左边的图片地址'), _t('填入图片地址, 图片显示在首页顶部左边位置'));
    $form->addInput($dailypic);

    $logo = new Typecho_Widget_Helper_Form_Element_Text('logo', NULL, NULL, _t('首页顶部右边 LOGO 图片地址'), _t('填入 LOGO 地址, 图片将显示于首页右上角板块'));
    $form->addInput($logo);

    $dailypicLink = new Typecho_Widget_Helper_Form_Element_Text('dailypicLink', NULL, _t('#'), _t('首页顶部左边图片的点击跳转地址'), _t('点击图片后, 想要跳转网页的地址'));
    $form->addInput($dailypicLink);

    $logoLink = new Typecho_Widget_Helper_Form_Element_Text('logoLink', NULL, NULL, _t('首页顶部右边 LOGO 的点击跳转地址'), _t('点击 LOGO 后, 想要跳转网页的地址'));
    $form->addInput($logoLink);

    $slogan = new Typecho_Widget_Helper_Form_Element_Text('slogan', NULL, _t('Nice to meet you'), _t('首页顶部左边的标语'), _t('填入自定义文字, 显示于首页顶部左边的图片上'));
    $form->addInput($slogan);

    $footersns = new Typecho_Widget_Helper_Form_Element_Checkbox('footersns',
        array(
            'ShowTwitter' => _t('显示 Twitter 图标 &emsp;'),
            'ShowFacebook' => _t('显示 Facebook 图标 &emsp;'),
            'ShowGooglePlus' => _t('显示 Google+ 图标 &emsp;'),
            'ShowWeibo' => _t('显示新浪微博图标 &emsp;'),
        ),

        array('ShowTwitter','ShowFacebook','ShowGooglePlus'), _t('页脚 SNS 图标按钮显示设置'),_t('开启后, 按钮显示于博客页脚位置')
    );
    $form->addInput($footersns);

    $TwitterURL = new Typecho_Widget_Helper_Form_Element_Text('TwitterURL', NULL, _t('https://twitter.com/viosey'), _t('Twitter 地址'), NULL);
    $form->addInput($TwitterURL);

    $FacebookURL = new Typecho_Widget_Helper_Form_Element_Text('FacebookURL', NULL, _t('https://www.facebook.com/viosey'), _t('Facebook 地址'), NULL);
    $form->addInput($FacebookURL);

    $GooglePlusURL = new Typecho_Widget_Helper_Form_Element_Text('GooglePlusURL', NULL, _t('https://plus.google.com/116465253856896614917'), _t('Google+ 地址'), NULL);
    $form->addInput($GooglePlusURL);

    $WeiboURL = new Typecho_Widget_Helper_Form_Element_Text('WeiboURL', NULL, NULL, _t('新浪微博地址'), NULL);
    $form->addInput($WeiboURL);
}

//Homepage thumbnail
function showThumbnail($widget){
    //If article no include picture, display random default picture
    $rand = rand(1,5); //Random number

    if(!empty($widget->widget('Widget_Options')->CDNURL)){
		$random = $widget->widget('Widget_Options')->CDNURL. '/MaterialCDN/img/random/' . $rand . '.jpg';
	}else{
        $random = $widget->widget('Widget_Options')->themeUrl . '/img/random/' . $rand . '.jpg';
	}//Random picture path


    // If only one random default picture, delete the following "//"
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

//Random thumbnail
function randomThumbnail($widget){
    //If article no include picture, display random default picture
    $rand = rand(1,5); //Random number

    if(!empty($widget->widget('Widget_Options')->CDNURL)){
		$random = $widget->widget('Widget_Options')->CDNURL. '/MaterialCDN/img/random/' . $rand . '.jpg';
	}else{
        $random = $widget->widget('Widget_Options')->themeUrl . '/img/random/' . $rand . '.jpg';
	}//Random picture path

    echo $random;
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
