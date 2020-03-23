<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:94:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\public/../application/index\view\user\login.html";i:1584581172;s:88:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\application\index\view\layout\default.html";i:1584581565;s:85:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\application\index\view\common\meta.html";i:1583049507;s:87:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\application\index\view\public\header.html";i:1584580791;s:88:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\application\index\view\public\head_pc.html";i:1584580684;s:87:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\application\index\view\public\footer.html";i:1584580738;s:87:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\application\index\view\common\script.html";i:1583049507;}*/ ?>
<!--<!DOCTYPE html>-->
<!--<html>-->
    <!--<head>-->
        <!--<meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?> – <?php echo $site['name']; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<?php if(isset($keywords)): ?>
<meta name="keywords" content="<?php echo $keywords; ?>">
<?php endif; if(isset($description)): ?>
<meta name="description" content="<?php echo $description; ?>">
<?php endif; ?>

<link rel="shortcut icon" href="/assets/img/favicon.ico" />

<link href="/assets/css/frontend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config: <?php echo json_encode($config); ?>
    };
</script>-->
        <!--<link href="/assets/css/user.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">-->
    <!--</head>-->

    <!--<body>-->

        <!--<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">-->
            <!--<div class="container">-->
                <!--<div class="navbar-header">-->
                    <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#header-navbar">-->
                        <!--<span class="sr-only">Toggle navigation</span>-->
                        <!--<span class="icon-bar"></span>-->
                        <!--<span class="icon-bar"></span>-->
                        <!--<span class="icon-bar"></span>-->
                    <!--</button>-->
                    <!--<a class="navbar-brand" href="<?php echo url('/'); ?>"><?php echo $site['name']; ?></a>-->
                <!--</div>-->
                <!--<div class="collapse navbar-collapse" id="header-navbar">-->
                    <!--<ul class="nav navbar-nav navbar-right">-->
                        <!--<li><a href="<?php echo url('/'); ?>" target="_blank"><?php echo __('Home'); ?></a></li>-->
                        <!--<li class="dropdown">-->
                            <!--<?php if($user): ?>-->
                            <!--<a href="<?php echo url('user/index'); ?>" class="dropdown-toggle" data-toggle="dropdown" style="padding-top: 10px;height: 50px;">-->
                                <!--<span class="avatar-img"><img src="<?php echo cdnurl($user['avatar']); ?>" alt=""></span>-->
                            <!--</a>-->
                            <!--<?php else: ?>-->
                            <!--<a href="<?php echo url('user/index'); ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo __('User center'); ?> <b class="caret"></b></a>-->
                            <!--<?php endif; ?>-->
                            <!--<ul class="dropdown-menu">-->
                                <!--<?php if($user): ?>-->
                                <!--<li><a href="<?php echo url('user/index'); ?>"><i class="fa fa-user-circle fa-fw"></i><?php echo __('User center'); ?></a></li>-->
                                <!--<li><a href="<?php echo url('user/profile'); ?>"><i class="fa fa-user-o fa-fw"></i><?php echo __('Profile'); ?></a></li>-->
                                <!--<li><a href="<?php echo url('user/changepwd'); ?>"><i class="fa fa-key fa-fw"></i><?php echo __('Change password'); ?></a></li>-->
                                <!--<li><a href="<?php echo url('user/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i><?php echo __('Sign out'); ?></a></li>-->
                                <!--<?php else: ?>-->
                                <!--<li><a href="<?php echo url('user/login'); ?>"><i class="fa fa-sign-in fa-fw"></i> <?php echo __('Sign in'); ?></a></li>-->
                                <!--<li><a href="<?php echo url('user/register'); ?>"><i class="fa fa-user-o fa-fw"></i> <?php echo __('Sign up'); ?></a></li>-->
                                <!--<?php endif; ?>-->

                            <!--</ul>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</div>-->
            <!--</div>-->
        <!--</nav>-->

        <!--<main class="content">-->
            <!--<!--样式header-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo INDEX_SITE_ROOT; ?>/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo INDEX_SITE_ROOT; ?>/css/sanren.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo INDEX_SITE_ROOT; ?>/css/style.css"/>
    <script src="<?php echo INDEX_SITE_ROOT; ?>/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo INDEX_SITE_ROOT; ?>/js/swiper.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo INDEX_SITE_ROOT; ?>/js/public.js" type="text/javascript" charset="utf-8"></script>
    <title><?php echo $site['name']; ?></title>
</head>
<body>
<!--<title>登录</title>-->
<!--头部-->
<div class="hd1">
    <div class="wrap clearfix">
        <div class="fl hd1l">
            欢迎光临云图购网站&nbsp;&nbsp;请<a href="<?php echo url('index/user/login'); ?>">登录</a><i>丨</i><a href="reg.html">注册</a>
        </div>
        <div class="fr hd1r">
            <span><a href="">商家后台</a></span>
            <span><a href="">买家后台</a></span>
            <span><a href="">帮助中心</a></span>
            <span>
					<a href="<?php echo url('wap/user/login'); ?>">手机端<i class="fa fa-caret-down ml5"></i></a>
					<div class="hdrewm">
						<img src="<?php echo INDEX_SITE_ROOT; ?>/images/ewm_03.jpg"/>
					</div>
				</span>
        </div>
    </div>
</div>


<div class="lmd">
    <div class="wrap clearfix">
        <div class="lgwidth">
            <div class="lgtit">
                <span></span>用户登录
            </div>
            <div class="textcenter">
                <div class="lgw mt_40">
                    <div class="clearfix lgb">
                        <span class="fl">用户名：</span>
                        <div class="fr lgbr lgbrinput">
                            <input type="password" placeholder="用户名/邮箱/手机号" name="" id="" value="" />
                        </div>
                    </div>
                    <div class="clearfix lgb">
                        <span class="fl">密码：</span>
                        <div class="fr lgbr lgbrinput">
                            <input type="text" placeholder="请输入密码" name="" id="" value="" />
                        </div>
                    </div>
                    <div class="clearfix lgb">
                        <span class="fl">验证码：</span>
                        <div class="fr lgbr lgbrinput lgbrinputcp clearfix">
                            <input class="fl" type="text" placeholder="请输入验证码" name="" id="" value="" />
                            <div class="code fl"><img src="<?php echo INDEX_SITE_ROOT; ?>/images/code_03.png"/></div>
                            <i class="fr">换一个</i>
                        </div>
                    </div>
                    <div class="clearfix lgb">
                        <span class="fl"></span>
                        <div class="fr lgbr lgbrsbm">
                            <input type="submit" class="hoverop" name="" id="" value="登录" />
                        </div>
                    </div>
                    <div class="clearfix lgb">
                        <span class="fl"></span>
                        <div class="fr lgbr lgbra clearfix">
                            <a href="" class="fl">忘记密码？</a>
                            <a href="reg.html" class="fr">新用户注册</a>
                        </div>
                    </div>
                    <div class="clearfix lgb">
                        <span class="fl"></span>
                        <div class="fr lgbr lgbrline posrelative textcenter mt_10">
                            <span>使用第三方登录</span>
                        </div>
                    </div>
                    <div class="clearfix lgb">
                        <span class="fl"></span>
                        <div class="fr lgbr lgbrb textcenter mt_20">
                            <a href="">
                                <img class="middle" src="<?php echo INDEX_SITE_ROOT; ?>/images/lgico1_03.png"/>微信
                            </a>
                            <i></i>
                            <a href="">
                                <img class="middle" src="<?php echo INDEX_SITE_ROOT; ?>/images/lgico2_03.png"/>QQ
                            </a>
                            <i></i>
                            <a href="">
                                <img class="middle" src="<?php echo INDEX_SITE_ROOT; ?>/images/lgico3_03.png"/>微博
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--底部-->
<div class="foot">
    <div class="wrap">
        <div class="ft1 textcenter">
            <div class="ft1w clearfix">
                <img class="fl" src="<?php echo INDEX_SITE_ROOT; ?>/images/ft1ico1_03.png"/>
                <div class="fl ft1wtxt">
                    <p>正版保证</p>
                    <p>放心购买</p>
                </div>
            </div>
            <div class="ft1w clearfix">
                <img class="fl" src="<?php echo INDEX_SITE_ROOT; ?>/images/ft1ico2_03.png"/>
                <div class="fl ft1wtxt">
                    <p>精品团购</p>
                    <p>10点上新</p>
                </div>
            </div>
            <div class="ft1w clearfix">
                <img class="fl" src="<?php echo INDEX_SITE_ROOT; ?>/images/ft1ico3_03.png"/>
                <div class="fl ft1wtxt">
                    <p>尾货图书</p>
                    <p>超低折扣</p>
                </div>
            </div>
            <div class="ft1w clearfix">
                <img class="fl" src="<?php echo INDEX_SITE_ROOT; ?>/images/ft1ico4_03.png"/>
                <div class="fl ft1wtxt">
                    <p>全国快递</p>
                    <p>快马加鞭</p>
                </div>
            </div>
        </div>
        <p class="ft2">Copyright ©2019斑马悦读 广西弘轩文化投资有限公司  桂ICP备18005599号</p>
        <div class="ft3 textcenter">
            <div class="ft3bw clearfix">
                <a href="" class="ft3b clearfix">
                    <img class="fl" src="<?php echo INDEX_SITE_ROOT; ?>/images/ftbico1_03.png"/>
                    <p class="fl">经营性网站<br />备案信息</p>
                </a>
                <a href="" class="ft3b clearfix">
                    <img class="fl" src="<?php echo INDEX_SITE_ROOT; ?>/images/ftbico2_03.png"/>
                    <p class="fl">可信网站<br />信用评价</p>
                </a>
                <a href="" class="ft3b clearfix">
                    <img class="fl" src="<?php echo INDEX_SITE_ROOT; ?>/images/ftbico3_03.png"/>
                    <p class="fl">网络警察<br />提醒您</p>
                </a>
                <a href="" class="ft3b ft3b1 clearfix">
                    <img class="fl mt0" src="<?php echo INDEX_SITE_ROOT; ?>/images/ftbico4_03.png"/>
                    <p class="fl">诚信网站</p>
                </a>
                <a href="" class="ft3b clearfix">
                    <img class="fl" src="<?php echo INDEX_SITE_ROOT; ?>/images/ftbico5_03.png"/>
                    <p class="fl">中国互联网<br />举报中兴</p>
                </a>
                <a href="" class="ft3b clearfix">
                    <img class="fl" src="<?php echo INDEX_SITE_ROOT; ?>/images/ftbico1_03.png"/>
                    <p class="fl">网络举报<br />APP下载</p>
                </a>
            </div>
        </div>
    </div>
</div>

</body>
</html>


-->
        <!--</main>-->

        <!--<footer class="footer" style="clear:both">-->
            <!--<p class="copyright">Copyright&nbsp;©&nbsp;2017-2020 <?php echo $site['name']; ?> All Rights Reserved <a href="http://www.beian.miit.gov.cn" target="_blank"><?php echo htmlentities($site['beian']); ?></a></p>-->
        <!--</footer>-->

        <!--<script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-frontend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>-->

    <!--</body>-->

<!--</html>-->