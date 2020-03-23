<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:94:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\public/../application/index\view\user\login.html";i:1584672695;s:87:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\application\index\view\public\header.html";i:1584673190;s:88:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\application\index\view\public\head_pc.html";i:1584582023;s:84:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\application\index\view\public\top.html";i:1584582697;s:87:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\application\index\view\public\footer.html";i:1584580738;}*/ ?>
<!--样式header-->
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

    <script src="<?php echo INDEX_SITE_ROOT; ?>/js/jquery.js" type="text/javascript" charset="utf-8"></script>


    <!--插件-->
    <link rel="stylesheet" href="<?php echo PLUGINS_SITE_ROOT; ?>/js/jquery-ui/jquery-ui.min.css">
    <script src="<?php echo PLUGINS_SITE_ROOT; ?>/jquery-2.1.4.min.js"></script>
    <script src="<?php echo PLUGINS_SITE_ROOT; ?>/jquery.cookie.js"></script>
    <script src="<?php echo PLUGINS_SITE_ROOT; ?>/common.js"></script>
    <script src="<?php echo PLUGINS_SITE_ROOT; ?>/js/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo PLUGINS_SITE_ROOT; ?>/perfect-scrollbar.min.js"></script>
    <script src="<?php echo PLUGINS_SITE_ROOT; ?>/layer/layer.js"></script>

    <!-- Plugin CSS -->
    <link href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.staticfile.org/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]-->

        <script src="https://cdn.staticfile.org/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>

    <!-- jQuery -->
    <script src=https://cdn.staticfile.org/jquery/2.1.4/jquery.min.js></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>

        var domain='http://yun.cdznkj.com/public';

        /**
         * Layer通用接口
         * @param {type} url 链接地址
         * @returns {undefined}
         */
        function ajax_submit(url,data) {

            console.log(url);
            console.log(data);

            $.ajax({
                url: url,
                data: data,
                async: true,
                crossDomain: true,
                method: "POST",
                headers: {
                    "cache-control": "no-cache",
                    "content-type": "application/json"
                },
                success: function (data) {
                    layer.msg(data.message, {time: 1000}, function () {
                        if (data.code == 200) {
                            console.log(data)
                        }else{
                            return false;
                        }
                    });
                },
                error:function (data) {
                    layer.msg('网络错误');
                    return false;
                }
            })
        }


        function email_rule(email) {

            var myreg = /^([\.a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/;
            if(!myreg.test(email)){
                layer.msg('请输入正确邮箱地址');
                return false;
            }else{
                return true;
            }
        }

    </script>

<title><?php echo $site['name']; ?></title>
</head>
<body>
<title><?php echo $site['name']; ?>-登录</title>
<!--头部-->
<div class="hd1">
    <div class="wrap clearfix">
        <div class="fl hd1l">
            欢迎光临云图购网站&nbsp;&nbsp;请<a href="<?php echo url('user/login'); ?>">登录</a><i>丨</i><a href="<?php echo url('user/register'); ?>">注册</a>
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


<!--顶部广告-->
<div class="lghead">
    <div class="wrap clearfix">
        <a href="<?php echo url('/'); ?>" class="logo fl"><img src="<?php echo INDEX_SITE_ROOT; ?>/images/logo_03.png"/></a>
        <div class="fr lghr">
            <span><img src="<?php echo INDEX_SITE_ROOT; ?>/images/lh1_03.png"/>正版图书</span>
            <span><img src="<?php echo INDEX_SITE_ROOT; ?>/images/lh2_03.png"/>精品团购</span>
            <span><img src="<?php echo INDEX_SITE_ROOT; ?>/images/lh3_03.png"/>全国速达</span>
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
                            <input type="text" placeholder="用户名/邮箱/手机号" name="" id="account" value="" />
                        </div>
                    </div>
                    <div class="clearfix lgb">
                        <span class="fl">密码：</span>
                        <div class="fr lgbr lgbrinput">
                            <input type="password" placeholder="请输入密码" name="" id="password" value="" />
                        </div>
                    </div>
                    <!--<div class="clearfix lgb">-->
                        <!--<span class="fl">验证码：</span>-->
                        <!--<div class="fr lgbr lgbrinput lgbrinputcp clearfix">-->
                            <!--<input class="fl" type="text" placeholder="请输入验证码" name="" id="code" value="" />-->
                            <!--<div class="code fl"><img src="<?php echo INDEX_SITE_ROOT; ?>/images/code_03.png"/></div>-->
                            <!--<i class="fr">换一个</i>-->
                        <!--</div>-->
                    <!--</div>-->
                    <div class="clearfix lgb">
                        <span class="fl"></span>
                        <div class="fr lgbr lgbrsbm">
                            <input type="submit" class="hoverop" name="" onclick="login()" value="登录" />
                        </div>
                    </div>
                    <div class="clearfix lgb">
                        <span class="fl"></span>
                        <div class="fr lgbr lgbra clearfix">
                            <a href="" class="fl">忘记密码？</a>
                            <a href="<?php echo url('user/register'); ?>" class="fr">新用户注册</a>
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
<script type="text/javascript">
    function login(){

        var account=$('#account').val();
        var password=$('#password').val();
        if(account==''||account.length==0){
            layer.msg('请输入用户名');
            return false;
        }

        if(password==''||password.length==0){
            layer.msg('请输入密码');
            return false;
        }

        var data = JSON.stringify({
            "account": account,
            "password": password
        });

        var url=domain+'/apipc/user/login';

        ajax_submit(url,data);


        
    }
</script>

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


