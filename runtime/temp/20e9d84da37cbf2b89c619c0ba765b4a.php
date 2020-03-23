<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:109:"/www/wwwroot/qx564.host.flyingsteed.com/20200318fastadmin/public/../application/index/view/user/register.html";i:1584931126;s:99:"/www/wwwroot/qx564.host.flyingsteed.com/20200318fastadmin/application/index/view/public/header.html";i:1584931212;s:100:"/www/wwwroot/qx564.host.flyingsteed.com/20200318fastadmin/application/index/view/public/head_pc.html";i:1584582024;s:96:"/www/wwwroot/qx564.host.flyingsteed.com/20200318fastadmin/application/index/view/public/top.html";i:1584582698;}*/ ?>
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

    <!--插件-->
    <link rel="stylesheet" href="<?php echo PLUGINS_SITE_ROOT; ?>/js/jquery-ui/jquery-ui.min.css">
    <script src="<?php echo PLUGINS_SITE_ROOT; ?>/jquery-2.1.4.min.js"></script>
    <script src="<?php echo PLUGINS_SITE_ROOT; ?>/jquery.cookie.js"></script>
    <script src="<?php echo PLUGINS_SITE_ROOT; ?>/js/jquery-ui/jquery-ui.min.js"></script>
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

        console.log(localStorage.getItem('token'));

        //
        if(parseInt(new Date().getTime()/1000)>localStorage.getItem('expiretime')){
            localStorage.clear();
        }
        //全局页面加载时触发


        $(function () {
        //    获取图书分类
            get_book_class();




        });

        function get_book_class(){

             //图书分类
             var url=domain+'/apipc/home/classification522';

             var data={
                 type:'default',
             };

            $.ajax({
                url: url,
                data: data,
                method: "GET",
                dataType:'json',
                success: function (result) {
                    var res=result.data;

                    console.log(res.length);
                    if (result.code == 1) {

                        var class_list='';

                        var t_class_list='';


                        //循环一级分类
                        for (var i=0;i<res.length;i++){

                            // console.log(res[i]['classification_sub'].length)

                            for(var t=0;t<res[i]['classification_sub'].length;t++){


                                console.log(res[i]['classification_sub'][t]['classification_number'])
                                if(res[i]['classification_sub'][t]['classification_number'].indexOf(res[i]['classification_number'])!=-1){

                                    t_class_list+=`<a href="">`+res[i]['classification_sub'][t]['classification_number_name']+`</a>`

                                }

                            }

                            console.log(t_class_list)

                            // var t_class=res[i]['classification_sub'];
                            class_list+=`<li class="lnav_li">
                            <i class="lnav_li_line"></i>
                            <div class="lnll">

                                <h4>`+res[i]['classification_5']+`</h4>

                                <div class="lnllw ahover">

`+t_class_list+`

                                </div>
                            </div>
                            <div class="lnlr ahover">


                                <div class="lnlrw clearfix">

                                    <h4 class="fl">小说</h4>

                                    <div class="fl lnlrwr clearfix">

                                        <a href="">外国小说</a><i>丨</i>
                                        <a href="">中国当代小说</a><i>丨</i>
                                        <a href="">更多</a>

                                    </div>
                                </div>

                            </div>
                            </li>`;

                        }
                        // console.log(class_list)

                        $('#class_list').html(class_list);

                        console.log(res);
                    }else{
                        return false;
                    }
                },
            })



        }


        /**
         * Layer通用接口
         * @param {type} url 链接地址
         * @returns {undefined}
         */
        function ajax_submit(url,data) {

            $.ajax({
                url: url,
                data: data,
                method: "POST",

                dataType:'json',
                success: function (res) {

                    var date=res.data;
                    layer.msg(res.msg, {time: 1000}, function () {
                        if (res.code == 1) {
                            // console.log(data);
                            localStorage.setItem('token',date.userinfo['token']);
                            localStorage.setItem('user_id',date.userinfo['user_id']);
                            localStorage.setItem('expiretime',date.userinfo['expiretime']);
                            localStorage.setItem('info',date.userinfo);
                            location.href="<?php echo url('index/index/index'); ?>";

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



        // 验证中文名称
        function isChinaName(name) {
            var pattern = /^[\u4E00-\u9FA5]{1,6}$/;
            return pattern.test(name);
        }

        // 验证手机号
        function isPhoneNo(phone) {
            var pattern = /^1[34578]\d{9}$/;
            return pattern.test(phone);
        }

        // 验证身份证
        function isCardNo(card) {
            var pattern = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;
            return pattern.test(card);
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
    <script src="<?php echo INDEX_SITE_ROOT; ?>/js/zyf.js" type="text/javascript" charset="utf-8"></script>
<title><?php echo $site['name']; ?></title>
</head>
<body>
<title><?php echo $site['name']; ?>-注册</title>
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
            <div class="lgtit clearfix">
                <div class="fl lgtitl">
                    <a class="active" href="javascript:;" date-type="1">供货注册</a>
                    <a href="javascript:;" date-type="2">采购注册</a>
                    <a href="javascript:;" date-type="3">加工注册</a>
                </div>
                <script type="text/javascript">

                    $('.lgtitl a').click(function () {

                        $(this).addClass('active').siblings().removeClass('active');

                    })

                </script>
                <a href="<?php echo url('user/login'); ?>" class="fr lgtitr">已有账号？<i>去登录</i></a>
            </div>
            <div class="textcenter">
                <div class="lgw mt_40">
                    <div class="clearfix lgb">
                        <span class="fl">用户名：</span>
                        <div class="fr lgbr lgbrinput">
                            <input type="text" placeholder="请输入用账号" name="" id="username" value="" />
                        </div>
                    </div>

                    <div class="clearfix lgb">
                        <span class="fl">手机号码：</span>
                        <div class="fr lgbr lgbrinput">
                            <input type="text" placeholder="请输入手机号码" name="" id="mobile" value="" />
                        </div>
                    </div>

                    <div class="clearfix lgb">
                        <span class="fl">设置密码：</span>
                        <div class="fr lgbr lgbrinput">
                            <input type="password" placeholder="请输入密码" name="" id="psd" value="" />
                        </div>
                    </div>

                    <div class="clearfix lgb">
                        <span class="fl">确认密码：</span>
                        <div class="fr lgbr lgbrinput">
                            <input type="password" placeholder="请再次输入密码" name="" id="confrm_psd" value="" />
                        </div>
                    </div>

                    <div class="clearfix lgb">
                        <span class="fl">公司名称/个人：</span>
                        <div class="fr lgbr lgbrinput">
                            <input type="text" placeholder="请输入公司/个人名称" name="" id="company" value="" />
                        </div>
                    </div>

                    <div class="clearfix lgb">
                        <span class="fl">联系人姓名：</span>
                        <div class="fr lgbr lgbrinput">
                            <input type="text" placeholder="请输入联系人姓名" name="" id="contact" value="" />
                        </div>
                    </div>

                    <div class="clearfix lgb">
                        <span class="fl">邮箱：</span>
                        <div class="fr lgbr lgbrinput">
                            <input type="text" placeholder="请输入邮箱" name="" id="email" value="" />
                        </div>
                    </div>
                    <!--<div class="clearfix lgb">-->
                        <!--<span class="fl">验证码：</span>-->
                        <!--<div class="fr lgbr lgbrinput lgbrinputcp clearfix">-->
                            <!--<input class="fl" type="text" placeholder="请输入验证码" name="" id="" value="" />-->
                            <!--<div class="code fl"><img src="<?php echo INDEX_SITE_ROOT; ?>/images/code_03.png"/></div>-->
                            <!--<i class="fr">换一个</i>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<div class="clearfix lgb">-->
                        <!--<span class="fl">手机验证码：</span>-->
                        <!--<div class="fr lgbr lgbrinput posrelative">-->
                            <!--<input type="text" placeholder="请输入手机验证码" name="" id="" value="" />-->
                            <!--<i class="hqcode">获取验证码</i>-->
                        <!--</div>-->
                    <!--</div>-->
                    <div class="clearfix lgb">
                        <span class="fl"></span>
                        <div class="fr lgbr lgbrsbm">
                            <input type="submit" class="hoverop" name="" onclick="reg()" value="立即注册" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    function reg(data) {


        var mobile=$('#mobile').val();

        if(isPhoneNo(mobile)==false){
            layer.msg('手机号有误');
            return false;
        }
        var username=$('#username').val();

        var psd=$('#psd').val();
        var confrm_psd=$('#confrm_psd').val();
        if(!psd||psd.length==0||psd!=confrm_psd){
            layer.msg('两次密码不一致');
            return false;
        }



        var email=$('#email').val();

        if(email){
            if(email_rule(email)==false){
                return false;
            }
        }

        //联系人姓名
        var company=$('#company').val();

        var contact=$('#contact').val();
        var web_code=$('#web_code').val();

        //获取账户类型 选中的
        var user_type='供货';
        $('.lgtitl a').each(function () {

            if($(this).hasClass('active')){
                user_type= $(this).attr('date-type');
            }

        });


        var url=domain+'/apipc/user/register';

        var data = {
            "mobile": mobile,
            "email":email,
            "password": confrm_psd,
            "company": company,
            "contact":contact,
            "web_code": '',
            "mobile_code":'',
            "user_type":user_type,
            "username": username,
        };


        $.ajax({
            url: url,
            data: data,
            method: "POST",
            dataType:'json',
            success: function (res) {
                layer.msg(res.msg, {time: 1000}, function () {
                    if (res.code == 1) {
                        // console.log(res)



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

</script>


