<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:95:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\public/../application/index\view\index\index.html";i:1584583053;s:87:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\application\index\view\public\header.html";i:1584668031;s:88:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\application\index\view\public\head_pc.html";i:1584582023;s:91:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\application\index\view\public\book_seach.html";i:1584586636;s:91:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\application\index\view\public\book_class.html";i:1584585432;s:87:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\application\index\view\public\footer.html";i:1584580738;}*/ ?>
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

<title><?php echo $site['name']; ?></title>
</head>
<body>

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
            热门搜索：	<a href="">宇宙超度指南</a><a href="">潜能者们</a><a href="">十八岁给我一个姑娘</a>
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
<div class="wrap clearfix">
    <div class="fr mbr">
        <div class="posrelative bnbox">
            <div class="swiper-container swiper-container-bn">
                <div class="swiper-wrapper swiper-wrapper-bn">
                    <div class="swiper-slide">
                        <a class="bnimg" data-background="<?php echo INDEX_SITE_ROOT; ?>/images//bn_03.jpg" href=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a class="bnimg" data-background="<?php echo INDEX_SITE_ROOT; ?>/images//bn_03.jpg" href=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a class="bnimg" data-background="<?php echo INDEX_SITE_ROOT; ?>/images//bn_03.jpg" href=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a class="bnimg" data-background="<?php echo INDEX_SITE_ROOT; ?>/images//bn_03.jpg" href=""></a>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="clearfix mt_15">
            <div class="tab_head mbrtop">
                <ul class="clearfix">
                    <li class="active">新品特惠</li>
                    <li>本周精选</li>
                    <li>新书速递</li>
                    <li>读者热评</li>
                </ul>
            </div>
            <div class="tab_content mbrbot mt_15">
                <ul>
                    <li class="tab_content_li active">
                        <div class="clearfix mbrbw">
                            <a href="" class="mbrbwa fl disblock">
                                <div class="mbrbwaimg">
                                    <img src="<?php echo INDEX_SITE_ROOT; ?>/images//mbrbook_03.png"/>
                                </div>
                                <p>留白:秋水堂论中西文学(田晓菲)</p>
                                <div><i>￥19.5</i><em>￥32.0</em></div>
                            </a>
                            <a href="" class="mbrbwa fl disblock">
                                <div class="mbrbwaimg">
                                    <img src="<?php echo INDEX_SITE_ROOT; ?>/images//mbrbook_03.png"/>
                                </div>
                                <p>留白:秋水堂论中西文学(田晓菲)</p>
                                <div><i>￥19.5</i><em>￥32.0</em></div>
                            </a>
                            <a href="" class="mbrbwa fl disblock">
                                <div class="mbrbwaimg">
                                    <img src="<?php echo INDEX_SITE_ROOT; ?>/images//mbrbook_03.png"/>
                                </div>
                                <p>留白:秋水堂论中西文学(田晓菲)</p>
                                <div><i>￥19.5</i><em>￥32.0</em></div>
                            </a>
                            <a href="" class="mbrbwa fl disblock">
                                <div class="mbrbwaimg">
                                    <img src="<?php echo INDEX_SITE_ROOT; ?>/images//mbrbook_03.png"/>
                                </div>
                                <p>留白:秋水堂论中西文学(田晓菲)</p>
                                <div><i>￥19.5</i><em>￥32.0</em></div>
                            </a>
                            <a href="" class="mbrbwa fl disblock">
                                <div class="mbrbwaimg">
                                    <img src="<?php echo INDEX_SITE_ROOT; ?>/images//mbrbook_03.png"/>
                                </div>
                                <p>留白:秋水堂论中西文学(田晓菲)</p>
                                <div><i>￥19.5</i><em>￥32.0</em></div>
                            </a>
                        </div>
                    </li>
                    <li class="tab_content_li">2</li>
                    <li class="tab_content_li">3</li>
                    <li class="tab_content_li">4</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="wrap mdft">
    <div class="mt_30 m1 clearfix">
        <div class="mdl m1l fl">
            <h4 class="mdltit">文学图书<i class="fa fa-angle-right ml5"></i></h4>
            <a href="" class="m1lbg textcenter" style="background: url(<?php echo INDEX_SITE_ROOT; ?>/images//m1l_03.jpg) no-repeat center;">
                <p>第七届茅盾文学奖<br />-挑担茶叶上北京</p>
                <img src="<?php echo INDEX_SITE_ROOT; ?>/images//m1lpic_03.png"/>
            </a>
            <div class="m1ltxt ahover">
                <h4>小说排行榜</h4>
                <a href=""><i class="fa fa-angle-right mr5"></i>绞河镇的最后一夜</a>
                <a href=""><i class="fa fa-angle-right mr5"></i>此岸天堂-菲茨杰拉德文萃</a>
                <a href=""><i class="fa fa-angle-right mr5"></i>奇妙的云</a>
                <a href=""><i class="fa fa-angle-right mr5"></i>赶马的老三</a>
                <a href=""><i class="fa fa-angle-right mr5"></i>情-德国情话-关愚谦人生三部曲</a>
            </div>
        </div>
        <div class="mdr m1r fr">
            <div class="tab_head mdrtop">
                <ul class="clearfix">
                    <li class="active">小说<i></i></li>
                    <li>诗歌散文<i></i></li>
                    <li>悬疑推理<i></i></li>
                    <li>青春文学<i></i></li>
                </ul>
            </div>
            <div class="tab_content">
                <ul>
                    <li class="tab_content_li active">
                        <div class="clearfix m1rw">
                            <div class="fl m1rwl textcenter">
                                <a href="" class="m1rwa disblock">
                                    <div class="m1rwaimg">
                                        <img src="<?php echo INDEX_SITE_ROOT; ?>/images//mr_03.jpg"/>
                                    </div>
                                    <h4>说魂儿-扪虱谈鬼录之二</h4>
                                    <p>栾保群 著</p>
                                    <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                                </a>
                            </div>
                            <div class="fl m1rwl textcenter">
                                <a href="" class="m1rwa disblock">
                                    <div class="m1rwaimg">
                                        <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                    </div>
                                    <h4>说魂儿-扪虱谈鬼录之二</h4>
                                    <p>栾保群 著</p>
                                    <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                                </a>
                            </div>
                            <div class="fl m1rwl textcenter">
                                <a href="" class="m1rwa disblock">
                                    <div class="m1rwaimg">
                                        <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                    </div>
                                    <h4>说魂儿-扪虱谈鬼录之二</h4>
                                    <p>栾保群 著</p>
                                    <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                                </a>
                            </div>
                            <div class="fl m1rwl textcenter">
                                <a href="" class="m1rwa disblock">
                                    <div class="m1rwaimg">
                                        <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                    </div>
                                    <h4>说魂儿-扪虱谈鬼录之二</h4>
                                    <p>栾保群 著</p>
                                    <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                                </a>
                            </div>
                            <div class="fl m1rwl textcenter">
                                <a href="" class="m1rwa disblock">
                                    <div class="m1rwaimg">
                                        <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                    </div>
                                    <h4>说魂儿-扪虱谈鬼录之二</h4>
                                    <p>栾保群 著</p>
                                    <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                                </a>
                            </div>
                            <div class="fl m1rwl textcenter">
                                <a href="" class="m1rwa disblock">
                                    <div class="m1rwaimg">
                                        <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                    </div>
                                    <h4>说魂儿-扪虱谈鬼录之二</h4>
                                    <p>栾保群 著</p>
                                    <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                                </a>
                            </div>
                            <div class="fl m1rwl textcenter">
                                <a href="" class="m1rwa disblock">
                                    <div class="m1rwaimg">
                                        <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                    </div>
                                    <h4>说魂儿-扪虱谈鬼录之二</h4>
                                    <p>栾保群 著</p>
                                    <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                                </a>
                            </div>
                            <div class="fl m1rwl textcenter">
                                <a href="" class="m1rwa disblock">
                                    <div class="m1rwaimg">
                                        <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                    </div>
                                    <h4>说魂儿-扪虱谈鬼录之二</h4>
                                    <p>栾保群 著</p>
                                    <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="tab_content_li">2</li>
                    <li class="tab_content_li">3</li>
                    <li class="tab_content_li">4</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mt_30 m1 clearfix">
        <div class="mdl m2l fl">
            <h4 class="mdltit">社科图书<i class="fa fa-angle-right ml5"></i></h4>
            <a href="" class="m1lbg textcenter" style="background: url(<?php echo INDEX_SITE_ROOT; ?>/images//m2l_03.jpg) no-repeat center;">
                <p>中国近代史：<br />1840-1919(第4版)</p>
                <img src="<?php echo INDEX_SITE_ROOT; ?>/images//m2lpic_03.png"/>
            </a>
            <div class="m1ltxt ahover">
                <h4>小说排行榜</h4>
                <a href=""><i class="fa fa-angle-right mr5"></i>绞河镇的最后一夜</a>
                <a href=""><i class="fa fa-angle-right mr5"></i>此岸天堂-菲茨杰拉德文萃</a>
                <a href=""><i class="fa fa-angle-right mr5"></i>奇妙的云</a>
                <a href=""><i class="fa fa-angle-right mr5"></i>赶马的老三</a>
                <a href=""><i class="fa fa-angle-right mr5"></i>情-德国情话-关愚谦人生三部曲</a>
            </div>
        </div>
        <div class="mdr m2r fr">
            <div class="tab_head mdrtop">
                <ul class="clearfix">
                    <li class="active">历史<i></i></li>
                    <li>传记<i></i></li>
                    <li>哲学宗教<i></i></li>
                    <li>政治军事<i></i></li>
                </ul>
            </div>
            <div class="tab_content">
                <ul>
                    <li class="tab_content_li active">
                        <div class="clearfix m1rw">
                            <div class="fl m1rwl textcenter">
                                <a href="" class="m1rwa disblock">
                                    <div class="m1rwaimg">
                                        <img src="<?php echo INDEX_SITE_ROOT; ?>/images//mr_03.jpg"/>
                                    </div>
                                    <h4>说魂儿-扪虱谈鬼录之二</h4>
                                    <p>栾保群 著</p>
                                    <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                                </a>
                            </div>
                            <div class="fl m1rwl textcenter">
                                <a href="" class="m1rwa disblock">
                                    <div class="m1rwaimg">
                                        <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                    </div>
                                    <h4>说魂儿-扪虱谈鬼录之二</h4>
                                    <p>栾保群 著</p>
                                    <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                                </a>
                            </div>
                            <div class="fl m1rwl textcenter">
                                <a href="" class="m1rwa disblock">
                                    <div class="m1rwaimg">
                                        <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                    </div>
                                    <h4>说魂儿-扪虱谈鬼录之二</h4>
                                    <p>栾保群 著</p>
                                    <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                                </a>
                            </div>
                            <div class="fl m1rwl textcenter">
                                <a href="" class="m1rwa disblock">
                                    <div class="m1rwaimg">
                                        <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                    </div>
                                    <h4>说魂儿-扪虱谈鬼录之二</h4>
                                    <p>栾保群 著</p>
                                    <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                                </a>
                            </div>
                            <div class="fl m1rwl textcenter">
                                <a href="" class="m1rwa disblock">
                                    <div class="m1rwaimg">
                                        <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                    </div>
                                    <h4>说魂儿-扪虱谈鬼录之二</h4>
                                    <p>栾保群 著</p>
                                    <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                                </a>
                            </div>
                            <div class="fl m1rwl textcenter">
                                <a href="" class="m1rwa disblock">
                                    <div class="m1rwaimg">
                                        <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                    </div>
                                    <h4>说魂儿-扪虱谈鬼录之二</h4>
                                    <p>栾保群 著</p>
                                    <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                                </a>
                            </div>
                            <div class="fl m1rwl textcenter">
                                <a href="" class="m1rwa disblock">
                                    <div class="m1rwaimg">
                                        <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                    </div>
                                    <h4>说魂儿-扪虱谈鬼录之二</h4>
                                    <p>栾保群 著</p>
                                    <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                                </a>
                            </div>
                            <div class="fl m1rwl textcenter">
                                <a href="" class="m1rwa disblock">
                                    <div class="m1rwaimg">
                                        <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                    </div>
                                    <h4>说魂儿-扪虱谈鬼录之二</h4>
                                    <p>栾保群 著</p>
                                    <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="tab_content_li">2</li>
                    <li class="tab_content_li">3</li>
                    <li class="tab_content_li">4</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mt_30 m1 clearfix">
        <div class="mdl m3l fl">
            <h4 class="mdltit">社科图书<i class="fa fa-angle-right ml5"></i></h4>
            <a href="" class="m1lbg textcenter" style="background: url(<?php echo INDEX_SITE_ROOT; ?>/images//m2l_03.jpg) no-repeat center;">
                <p>彩书坊-读故事<br />学汉字(轻型)</p>
                <img src="<?php echo INDEX_SITE_ROOT; ?>/images//m3lpic_03.png"/>
            </a>
            <div class="m1ltxt ahover">
                <h4>小说排行榜</h4>
                <a href=""><i class="fa fa-angle-right mr5"></i>绞河镇的最后一夜</a>
                <a href=""><i class="fa fa-angle-right mr5"></i>此岸天堂-菲茨杰拉德文萃</a>
                <a href=""><i class="fa fa-angle-right mr5"></i>奇妙的云</a>
                <a href=""><i class="fa fa-angle-right mr5"></i>赶马的老三</a>
                <a href=""><i class="fa fa-angle-right mr5"></i>情-德国情话-关愚谦人生三部曲</a>
            </div>
        </div>
        <div class="mdr m3r fr">
            <div class="tab_head mdrtop">
                <ul class="clearfix">
                    <li class="active">益智启蒙<i></i></li>
                    <li>儿童文学<i></i></li>
                    <li>精品绘本<i></i></li>
                </ul>
            </div>
            <div class="tab_content">
                <ul>
                    <li class="tab_content_li active">
                        <div class="clearfix m1rw">
                            <div class="fl m1rwl textcenter">
                                <a href="" class="m1rwa disblock">
                                    <div class="m1rwaimg">
                                        <img src="<?php echo INDEX_SITE_ROOT; ?>/images//mr_03.jpg"/>
                                    </div>
                                    <h4>说魂儿-扪虱谈鬼录之二</h4>
                                    <p>栾保群 著</p>
                                    <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                                </a>
                            </div>
                            <div class="fl m1rwl textcenter">
                                <a href="" class="m1rwa disblock">
                                    <div class="m1rwaimg">
                                        <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                    </div>
                                    <h4>说魂儿-扪虱谈鬼录之二</h4>
                                    <p>栾保群 著</p>
                                    <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                                </a>
                            </div>
                            <div class="fl m1rwl textcenter">
                                <a href="" class="m1rwa disblock">
                                    <div class="m1rwaimg">
                                        <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                    </div>
                                    <h4>说魂儿-扪虱谈鬼录之二</h4>
                                    <p>栾保群 著</p>
                                    <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                                </a>
                            </div>
                            <div class="fl m1rwl textcenter">
                                <a href="" class="m1rwa disblock">
                                    <div class="m1rwaimg">
                                        <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                    </div>
                                    <h4>说魂儿-扪虱谈鬼录之二</h4>
                                    <p>栾保群 著</p>
                                    <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                                </a>
                            </div>
                            <div class="fl m1rwl textcenter">
                                <a href="" class="m1rwa disblock">
                                    <div class="m1rwaimg">
                                        <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                    </div>
                                    <h4>说魂儿-扪虱谈鬼录之二</h4>
                                    <p>栾保群 著</p>
                                    <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                                </a>
                            </div>
                            <div class="fl m1rwl textcenter">
                                <a href="" class="m1rwa disblock">
                                    <div class="m1rwaimg">
                                        <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                    </div>
                                    <h4>说魂儿-扪虱谈鬼录之二</h4>
                                    <p>栾保群 著</p>
                                    <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                                </a>
                            </div>
                            <div class="fl m1rwl textcenter">
                                <a href="" class="m1rwa disblock">
                                    <div class="m1rwaimg">
                                        <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                    </div>
                                    <h4>说魂儿-扪虱谈鬼录之二</h4>
                                    <p>栾保群 著</p>
                                    <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                                </a>
                            </div>
                            <div class="fl m1rwl textcenter">
                                <a href="" class="m1rwa disblock">
                                    <div class="m1rwaimg">
                                        <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                    </div>
                                    <h4>说魂儿-扪虱谈鬼录之二</h4>
                                    <p>栾保群 著</p>
                                    <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="tab_content_li">2</li>
                    <li class="tab_content_li">3</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="m2 mt_30 m2rw">
        <div class="tab_head mdrtop">
            <ul class="clearfix">
                <li class="active">艺术<i></i></li>
                <li>美食<i></i></li>
                <li>旅游<i></i></li>
                <li>孕产/育儿<i></i></li>
                <li>外语<i></i></li>
                <li>辅导<i></i></li>
            </ul>
        </div>
        <div class="tab_content">
            <ul>
                <li class="tab_content_li active">
                    <div class="clearfix m1rw">
                        <div class="fl m1rwl textcenter">
                            <a href="" class="m1rwa disblock">
                                <div class="m1rwaimg">
                                    <img src="<?php echo INDEX_SITE_ROOT; ?>/images//mr_03.jpg"/>
                                </div>
                                <h4>说魂儿-扪虱谈鬼录之二</h4>
                                <p>栾保群 著</p>
                                <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                            </a>
                        </div>
                        <div class="fl m1rwl textcenter">
                            <a href="" class="m1rwa disblock">
                                <div class="m1rwaimg">
                                    <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                </div>
                                <h4>说魂儿-扪虱谈鬼录之二</h4>
                                <p>栾保群 著</p>
                                <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                            </a>
                        </div>
                        <div class="fl m1rwl textcenter">
                            <a href="" class="m1rwa disblock">
                                <div class="m1rwaimg">
                                    <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                </div>
                                <h4>说魂儿-扪虱谈鬼录之二</h4>
                                <p>栾保群 著</p>
                                <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                            </a>
                        </div>
                        <div class="fl m1rwl textcenter">
                            <a href="" class="m1rwa disblock">
                                <div class="m1rwaimg">
                                    <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                </div>
                                <h4>说魂儿-扪虱谈鬼录之二</h4>
                                <p>栾保群 著</p>
                                <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                            </a>
                        </div>
                        <div class="fl m1rwl textcenter">
                            <a href="" class="m1rwa disblock">
                                <div class="m1rwaimg">
                                    <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                </div>
                                <h4>说魂儿-扪虱谈鬼录之二</h4>
                                <p>栾保群 著</p>
                                <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                            </a>
                        </div>
                        <div class="fl m1rwl textcenter">
                            <a href="" class="m1rwa disblock">
                                <div class="m1rwaimg">
                                    <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                </div>
                                <h4>说魂儿-扪虱谈鬼录之二</h4>
                                <p>栾保群 著</p>
                                <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                            </a>
                        </div>
                        <div class="fl m1rwl textcenter">
                            <a href="" class="m1rwa disblock">
                                <div class="m1rwaimg">
                                    <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                </div>
                                <h4>说魂儿-扪虱谈鬼录之二</h4>
                                <p>栾保群 著</p>
                                <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                            </a>
                        </div>
                        <div class="fl m1rwl textcenter">
                            <a href="" class="m1rwa disblock">
                                <div class="m1rwaimg">
                                    <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                </div>
                                <h4>说魂儿-扪虱谈鬼录之二</h4>
                                <p>栾保群 著</p>
                                <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                            </a>
                        </div>
                        <div class="fl m1rwl textcenter">
                            <a href="" class="m1rwa disblock">
                                <div class="m1rwaimg">
                                    <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                </div>
                                <h4>说魂儿-扪虱谈鬼录之二</h4>
                                <p>栾保群 著</p>
                                <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                            </a>
                        </div>
                        <div class="fl m1rwl textcenter">
                            <a href="" class="m1rwa disblock">
                                <div class="m1rwaimg">
                                    <img src="<?php echo INDEX_SITE_ROOT; ?>/images//book_03.jpg"/>
                                </div>
                                <h4>说魂儿-扪虱谈鬼录之二</h4>
                                <p>栾保群 著</p>
                                <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="tab_content_li">2</li>
                <li class="tab_content_li">3</li>
                <li class="tab_content_li">4</li>
                <li class="tab_content_li">5</li>
                <li class="tab_content_li">6</li>
            </ul>
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





