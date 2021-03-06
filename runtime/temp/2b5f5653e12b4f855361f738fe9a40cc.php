<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:114:"/www/wwwroot/qx564.host.flyingsteed.com/20200318fastadmin/public/../application/index/view/book/book_gj_seach.html";i:1584924009;s:99:"/www/wwwroot/qx564.host.flyingsteed.com/20200318fastadmin/application/index/view/public/header.html";i:1584931212;s:100:"/www/wwwroot/qx564.host.flyingsteed.com/20200318fastadmin/application/index/view/public/head_pc.html";i:1584582024;s:103:"/www/wwwroot/qx564.host.flyingsteed.com/20200318fastadmin/application/index/view/public/book_seach.html";i:1584924038;s:103:"/www/wwwroot/qx564.host.flyingsteed.com/20200318fastadmin/application/index/view/public/book_class.html";i:1584931346;s:99:"/www/wwwroot/qx564.host.flyingsteed.com/20200318fastadmin/application/index/view/public/footer.html";i:1584580740;}*/ ?>
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
<title>搜索</title>
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



<div class="head">
    <div class="wrap clearfix">
        <!--图书搜索-->
        <div class="headt clearfix">
    <a href="<?php echo url('/'); ?>" class="logo fl"><img src="<?php echo INDEX_SITE_ROOT; ?>/images/logo_03.png"/></a>
    <div class="fl scw clearfix">
        <div class="scw1 clearfix">
            <div class="fl clearfix scw1_l">
                <input class="fl scw1ipt_l" type="text" placeholder="请输入商品名字" name="" id="" value="" />
                <div class="fl scw1select posrelative">
                    <span class="scw1select_span"><em>搜索全部</em><i class="fa fa-caret-down ml5"></i></span>
                    <div class="scw1select_hide">
                        <span>搜索全部</span>
                        <span>书名</span>
                        <span>作者</span>
                        <span>出版社</span>
                        <span>ISBN</span>
                    </div>
                </div>
            </div>
            <input class="fl scw1ipt_r hoverop" type="submit" name="" id="" value="搜索" />
            <a href="<?php echo url('book/book_gj_seach'); ?>" class="fl scwa">高级搜索</a>
        </div>
        <div class="scw2 ahover">
            热门搜索：
        </div>
    </div>
</div>

        <!--图书分类-->
        <div class="hdb clearfix">
    <div class="fl posrelative hdbl">
        <span class="hdblsp clearfix"><img class="middle mr5" src="<?php echo INDEX_SITE_ROOT; ?>/images/navs_03.png"/>图书分类<i class="fa fa-angle-down fr"></i></span>
        <div class="lnav <?php if(\think\Request::instance()->controller()!='Index'): ?> lnavlist <?php endif; ?>">
            <ul>
                <li class="lnav_li">
                    <i class="lnav_li_line"></i>
                    <div class="lnll">
                        <h4>文学</h4>
                        <div class="lnllw ahover">
                            <a href="">小说</a>
                            <a href="">青春文学</a>
                            <a href="">中国散文</a>
                            <a href="">外国散文</a>
                            <a href="">悬疑推理</a>
                            <a href="">文学理论</a>
                            <a href="">文学</a>
                            <a href="">世界理论</a>
                        </div>
                    </div>
                    <div class="lnlr ahover">
                        <div class="lnlrw clearfix">
                            <h4 class="fl">小说</h4>
                            <div class="fl lnlrwr clearfix">
                                <a href="">外国小说</a><i>丨</i>
                                <a href="">中国当代小说</a><i>丨</i>
                                <a href="">中国近现代小说</a><i>丨</i>
                                <a href="">悬疑推理</a><i>丨</i>
                                <a href="">科幻小说</a><i>丨</i>
                                <a href="">世界名著</a><i>丨</i>
                                <a href="">四大名著</a><i>丨</i>
                                <a href="">作品集</a><i>丨</i>
                                <a href="">更多</a>
                            </div>
                        </div>
                        <div class="lnlrw clearfix">
                            <h4 class="fl">文学</h4>
                            <div class="fl lnlrwr clearfix">
                                <a href="">外国小说</a><i>丨</i>
                                <a href="">中国当代小说</a><i>丨</i>
                                <a href="">中国近现代小说</a><i>丨</i>
                                <a href="">悬疑推理</a><i>丨</i>
                                <a href="">科幻小说</a><i>丨</i>
                                <a href="">世界名著</a><i>丨</i>
                                <a href="">四大名著</a><i>丨</i>
                                <a href="">作品集</a><i>丨</i>
                                <a href="">更多</a>
                            </div>
                        </div>
                        <div class="lnlrw clearfix">
                            <h4 class="fl">青春文学</h4>
                            <div class="fl lnlrwr clearfix">
                                <a href="">玄幻/科幻</a><i>丨</i>
                                <a href="">悬疑/惊悚</a><i>丨</i>
                                <a href="">叛逆/成长</a><i>丨</i>
                                <a href="">爆笑/无厘头</a><i>丨</i>
                                <a href="">校园</a><i>丨</i>
                                <a href="">港台青春文学</a><i>丨</i>
                                <a href="">外国青春文学</a><i>丨</i>
                                <a href="">更多</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="lnav_li">
                    <i class="lnav_li_line"></i>
                    <div class="lnll">
                        <h4>社科</h4>
                        <div class="lnllw ahover">
                            <a href="">历史</a>
                            <a href="">宗教/哲学</a>
                            <a href="">社会科学</a>
                            <a href="">政治军事</a>
                            <a href="">传记</a>
                            <a href="">文化</a>
                            <a href="">古籍</a>
                            <a href="">管理</a>
                            <a href="">经济</a>
                            <a href="">成功励志</a>
                            <a href="">法律</a>
                            <a href="">语言文学</a>
                        </div>
                    </div>
                    <div class="lnlr ahover">
                        <div class="lnlrw clearfix">
                            <h4 class="fl">小说</h4>
                            <div class="fl lnlrwr clearfix">
                                <a href="">外国小说</a><i>丨</i>
                                <a href="">中国当代小说</a><i>丨</i>
                                <a href="">中国近现代小说</a><i>丨</i>
                                <a href="">悬疑推理</a><i>丨</i>
                                <a href="">科幻小说</a><i>丨</i>
                                <a href="">世界名著</a><i>丨</i>
                                <a href="">四大名著</a><i>丨</i>
                                <a href="">作品集</a><i>丨</i>
                                <a href="">更多</a>
                            </div>
                        </div>
                        <div class="lnlrw clearfix">
                            <h4 class="fl">文学</h4>
                            <div class="fl lnlrwr clearfix">
                                <a href="">外国小说</a><i>丨</i>
                                <a href="">中国当代小说</a><i>丨</i>
                                <a href="">中国近现代小说</a><i>丨</i>
                                <a href="">悬疑推理</a><i>丨</i>
                                <a href="">科幻小说</a><i>丨</i>
                                <a href="">世界名著</a><i>丨</i>
                                <a href="">四大名著</a><i>丨</i>
                                <a href="">作品集</a><i>丨</i>
                                <a href="">更多</a>
                            </div>
                        </div>
                        <div class="lnlrw clearfix">
                            <h4 class="fl">青春文学</h4>
                            <div class="fl lnlrwr clearfix">
                                <a href="">玄幻/科幻</a><i>丨</i>
                                <a href="">悬疑/惊悚</a><i>丨</i>
                                <a href="">叛逆/成长</a><i>丨</i>
                                <a href="">爆笑/无厘头</a><i>丨</i>
                                <a href="">校园</a><i>丨</i>
                                <a href="">港台青春文学</a><i>丨</i>
                                <a href="">外国青春文学</a><i>丨</i>
                                <a href="">更多</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="lnav_li">
                    <i class="lnav_li_line"></i>
                    <div class="lnll">
                        <h4>少儿</h4>
                        <div class="lnllw ahover">
                            <a href="">历史</a>
                            <a href="">宗教/哲学</a>
                            <a href="">社会科学</a>
                            <a href="">政治军事</a>
                            <a href="">传记</a>
                            <a href="">文化</a>
                            <a href="">古籍</a>
                            <a href="">管理</a>
                        </div>
                    </div>
                    <div class="lnlr ahover" style="height: 300px;">
                        测试
                    </div>
                </li>
                <li class="lnav_li">
                    <i class="lnav_li_line"></i>
                    <div class="lnll">
                        <h4>艺术</h4>
                        <div class="lnllw ahover">
                            <a href="">历史</a>
                            <a href="">宗教/哲学</a>
                            <a href="">社会科学</a>
                            <a href="">政治军事</a>
                            <a href="">传记</a>
                            <a href="">文化</a>
                        </div>
                    </div>
                    <div class="lnlr ahover" style="height: 300px;">
                        测试
                    </div>
                </li>
                <li class="lnav_li">
                    <i class="lnav_li_line"></i>
                    <div class="lnll">
                        <h4>生活</h4>
                        <div class="lnllw ahover">
                            <a href="">历史</a>
                            <a href="">宗教/哲学</a>
                            <a href="">社会科学</a>
                            <a href="">政治军事</a>
                            <a href="">传记</a>
                            <a href="">文化</a>
                        </div>
                    </div>
                    <div class="lnlr ahover" style="height: 300px;">
                        测试
                    </div>
                </li>
                <li class="lnav_li">
                    <i class="lnav_li_line"></i>
                    <div class="lnll">
                        <h4>文教</h4>
                        <div class="lnllw ahover">
                            <a href="">历史</a>
                            <a href="">宗教/哲学</a>
                            <a href="">社会科学</a>
                            <a href="">政治军事</a>
                            <a href="">传记</a>
                            <a href="">文化</a>
                        </div>
                    </div>
                    <div class="lnlr ahover" style="height: 300px;">
                        测试
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <a href="<?php echo url('/'); ?>" class="fl nava <?php if(\think\Request::instance()->action()=='index'): ?> active <?php endif; ?>">首页</a>
    <a href="<?php echo url('Book/tj_book_list'); ?>" class="fl nava <?php if(\think\Request::instance()->action()=='tj_book_list'): ?> active <?php endif; ?>">新书推荐</a>
    <a href="<?php echo url('Book/special_book_list'); ?>" class="fl nava <?php if(\think\Request::instance()->action()=='special_book_list'): ?> active <?php endif; ?>">特价图书</a>
    <a href="<?php echo url('Book/book_rank_list'); ?>" class="fl nava <?php if(\think\Request::instance()->action()=='book_rank_list'): ?> active <?php endif; ?>">畅销书排行榜</a>
    <a href="<?php echo url('Help/dg_question'); ?>" class="fl nava <?php if(\think\Request::instance()->action()=='dg_question'): ?> active <?php endif; ?>">订购问题</a>

</div>
    </div>
</div>

<div class="lmd">
    <div class="wrap clearfix">
        <div class="lgwidth scwidth">
            <div class="scwb clearfix">
                <div class="fl scwbl">
                    基本条件
                </div>
                <div class="fr scwbr">
                    <div class="scwbr1 clearfix">
                        <span class="fl">书名</span>
                        <div class="fr scwbr1r">
                            <input class="scwbr1ript" type="text" name="book_name" id="book_name" value="" />
                        </div>
                    </div>
                    <div class="scwbr1 clearfix">
                        <span class="fl">作者/译者</span>
                        <div class="fr scwbr1r">
                            <input class="scwbr1ript" type="text" name="book_author" id="book_author" value="" />
                        </div>
                    </div>
                    <div class="scwbr1 clearfix">
                        <span class="fl">关键词</span>
                        <div class="fr scwbr1r">
                            <input class="scwbr1ript" type="text" name="book_subject" id="book_subject" value="" />
                        </div>
                    </div>
                    <div class="scwbr1 clearfix">
                        <span class="fl">出版社</span>
                        <div class="fr scwbr1r">
                            <input class="scwbr1ript" type="text" name="book_press" id="book_press" value="" />
                        </div>
                    </div>
                    <div class="scwbr1 clearfix">
                        <span class="fl">ISBN</span>
                        <div class="fr scwbr1r">
                            <input class="scwbr1ript" type="text" name="book_isbn" id="book_isbn" value="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="scwb clearfix">
                <div class="fl scwbl">
                    基本条件
                </div>
                <div class="fr scwbr">
                    <div class="scwbr1 clearfix">
                        <span class="fl">包装</span>
                        <div class="fr scwbr1r scwbr1r_check clearfix" id="book_pack">
                            <label data-val="精装">
                                <i></i>精装
                                <!--<input type="checkbox" name="bookpack" id="bookpack" value="" />-->
                            </label>
                            <label data-val="平装">
                                <i></i>平装
                                <!--<input type="checkbox" name="" id="" value="" />-->
                            </label>
                            <label data-val="线装">
                                <i></i>线装
                                <!--<input type="checkbox" name="" id="" value="" />-->
                            </label>
                            <label data-val="挂图">
                                <i></i>挂图
                                <!--<input type="checkbox" name="" id="" value="" />-->
                            </label>
                            <label data-val="盒装">
                                <i></i>盒装
                                <!--<input type="checkbox" name="" id="" value="" />-->
                            </label>
                            <label data-val="袋装">
                                <i></i>袋装
                                <!--<input type="checkbox" name="" id="" value="" />-->
                            </label>
                            <label data-val="软精装">
                                <i></i>软精装
                                <!--<input type="checkbox" name="" id="" value="" />-->
                            </label>
                        </div>
                    </div>
                    <div class="scwbr1 clearfix">
                        <span class="fl">分类</span>
                        <div class="fr scwbr1r scwbr1r_select scwbr1r_select1 clearfix">
                            <select name="book_classify" id="book_classify">
                                <option>22大分类筛选</option>
                                <option>分类一</option>
                                <option>分类一</option>
                                <option>分类一</option>
                                <option>分类一</option>
                            </select>
                        </div>
                    </div>
                    <div class="scwbr1 clearfix">
                        <span class="fl">价格区间</span>
                        <div class="fr scwbr1r scwbr1r_radio clearfix">
                            <div class="scradio clearfix">
                                <i class="fl active"><input type="radio" name="jg" value="1" checked="checked" /></i>
                                <div class="fl scradior">
                                    原价&nbsp;&nbsp;<input type="text" name="book_price_1" id="book_price_1" value="" />
                                    &nbsp;&nbsp;至&nbsp;&nbsp;<input type="text" name="book_price_2" id="book_price_2" value="" />
                                </div>
                            </div>
                            <div class="scradio clearfix">
                                <i class="fl"><input type="radio" name="jg" value="2" /></i>
                                <div class="fl scradior">
                                    现价&nbsp;&nbsp;<input type="text" name="book_present_1" id="book_present_1" value="" />
                                    &nbsp;&nbsp;至&nbsp;&nbsp;<input type="text" name="book_present_2" id="book_present_2" value="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="scwbr1 clearfix">
                        <span class="fl">折扣</span>
                        <div class="fr scwbr1r scwbr1r_select clearfix">
                            <select name="book_discount_1">
                                <option value="0.1">1折</option>
                                <option value="0.2">2折</option>
                                <option value="0.3">3折</option>
                                <option value="0.4">4折</option>
                                <option value="0.5">5折</option>
                                <option value="0.6">6折</option>
                                <option value="0.7">7折</option>
                                <option value="0.8">8折</option>
                                <option value="0.9">9折</option>
                            </select>
                            <span>--</span>
                            <select name="book_discount_2">
                                <option value="0.1">1折</option>
                                <option value="0.2">2折</option>
                                <option value="0.3">3折</option>
                                <option value="0.4">4折</option>
                                <option value="0.5">5折</option>
                                <option value="0.6">6折</option>
                                <option value="0.7">7折</option>
                                <option value="0.8">8折</option>
                                <option value="0.9">9折</option>
                            </select>
                            <span>(格式：1折－9折)</span>
                        </div>
                    </div>
                    <div class="scwbr1 clearfix">
                        <span class="fl">出版时间区间</span>
                        <div class="fr scwbr1r scwbr1r_select clearfix">
                            <select name="book_press_date_1_year" id="book_press_date_1_year"></select>
                            <span>年</span>
                            <select name="book_press_date_1_month" id="book_press_date_1_month"></select>
                            <span>月</span>
                            <span>--</span>
                            <select name="book_press_date_2_year" id="book_press_date_2_year"></select>
                            <span>年</span>
                            <select name="book_press_date_2_month" id="book_press_date_2_month"></select>
                            <span>月</span>
                        </div>
                    </div>
                    <div class="scwbr1 clearfix">
                        <span class="fl">包装</span>
                        <div class="fr scwbr1r scwbr1r_check clearfix">
                            <label>
                                <i></i>仅显示有货
                                <input type="checkbox" name="" id="" value="" />
                            </label>
                        </div>
                    </div>
                    <div class="scwbrsbm textcenter">
                        <input class="hoverop" type="submit" name="" id="" value="搜索" /><a href="">清空搜索条件</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(".scwbr1r_check label").click(function(e){
        $(this).toggleClass("active");
        e.stopPropagation();
    })
    $(".scradio i").click(function(e){
        $(".scradio i").removeClass("active");
        $(this).addClass("active");
        e.stopPropagation();
    })
</script>

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
