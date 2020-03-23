<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:106:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\public/../application/index\view\book\special_book_list.html";i:1584585492;s:87:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\application\index\view\public\header.html";i:1584580791;s:88:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\application\index\view\public\head_pc.html";i:1584582023;s:91:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\application\index\view\public\book_seach.html";i:1584582546;s:91:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\application\index\view\public\book_class.html";i:1584585432;s:87:"E:\phpstudy\PHPTutorial\WWW\20200318fastadmin\application\index\view\public\footer.html";i:1584580738;}*/ ?>

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
    <title><?php echo $site['name']; ?></title>
</head>
<body>
<title>特价图书</title>
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
            <a href="" class="fl scwa">高级搜索</a>
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

<div class="tjbn mt_20" style="background: url(<?php echo INDEX_SITE_ROOT; ?>/images/tjbn_02.jpg) no-repeat center;"></div>

<div class="tjmd">
    <div class="wrap clearfix">
        <div class="tjtop textcenter">
            <span>特价列表</span>
        </div>
        <div class="tjw clearfix">
            <div class="fl tja">
                <a href="" class="tjaimg"><img src="<?php echo INDEX_SITE_ROOT; ?>/images/zwt_03.png"/></a>
                <a href="" class="tja1">熊十力传</a>
                <p>叶贤恩 著 湖北人民出版社</p>
                <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                <div class="cxratxtbot cxratxtbotcp clearfix">
                    <a href="bookinfo.html" class="fl active">购买</a>
                    <a href="" class="fr">收藏</a>
                </div>
            </div>
            <div class="fl tja">
                <a href="" class="tjaimg"><img src="<?php echo INDEX_SITE_ROOT; ?>/images/shu1_03.jpg"/></a>
                <a href="" class="tja1">熊十力传</a>
                <p>叶贤恩 著 湖北人民出版社</p>
                <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                <div class="cxratxtbot cxratxtbotcp clearfix">
                    <a href="bookinfo.html" class="fl active">购买</a>
                    <a href="" class="fr">收藏</a>
                </div>
            </div>
            <div class="fl tja">
                <a href="" class="tjaimg"><img src="<?php echo INDEX_SITE_ROOT; ?>/images/shu1_03.jpg"/></a>
                <a href="" class="tja1">熊十力传</a>
                <p>叶贤恩 著 湖北人民出版社</p>
                <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                <div class="cxratxtbot cxratxtbotcp clearfix">
                    <a href="bookinfo.html" class="fl active">购买</a>
                    <a href="" class="fr">收藏</a>
                </div>
            </div>
            <div class="fl tja">
                <a href="" class="tjaimg"><img src="<?php echo INDEX_SITE_ROOT; ?>/images/shu1_03.jpg"/></a>
                <a href="" class="tja1">熊十力传</a>
                <p>叶贤恩 著 湖北人民出版社</p>
                <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                <div class="cxratxtbot cxratxtbotcp clearfix">
                    <a href="bookinfo.html" class="fl active">购买</a>
                    <a href="" class="fr">收藏</a>
                </div>
            </div>
            <div class="fl tja">
                <a href="" class="tjaimg"><img src="<?php echo INDEX_SITE_ROOT; ?>/images/shu1_03.jpg"/></a>
                <a href="" class="tja1">熊十力传</a>
                <p>叶贤恩 著 湖北人民出版社</p>
                <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                <div class="cxratxtbot cxratxtbotcp clearfix">
                    <a href="bookinfo.html" class="fl active">购买</a>
                    <a href="" class="fr">收藏</a>
                </div>
            </div>
            <div class="fl tja">
                <a href="" class="tjaimg"><img src="<?php echo INDEX_SITE_ROOT; ?>/images/shu1_03.jpg"/></a>
                <a href="" class="tja1">熊十力传</a>
                <p>叶贤恩 著 湖北人民出版社</p>
                <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                <div class="cxratxtbot cxratxtbotcp clearfix">
                    <a href="bookinfo.html" class="fl active">购买</a>
                    <a href="" class="fr">收藏</a>
                </div>
            </div>
            <div class="fl tja">
                <a href="" class="tjaimg"><img src="<?php echo INDEX_SITE_ROOT; ?>/images/shu1_03.jpg"/></a>
                <a href="" class="tja1">熊十力传</a>
                <p>叶贤恩 著 湖北人民出版社</p>
                <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                <div class="cxratxtbot cxratxtbotcp clearfix">
                    <a href="bookinfo.html" class="fl active">购买</a>
                    <a href="" class="fr">收藏</a>
                </div>
            </div>
            <div class="fl tja">
                <a href="" class="tjaimg"><img src="<?php echo INDEX_SITE_ROOT; ?>/images/shu1_03.jpg"/></a>
                <a href="" class="tja1">熊十力传</a>
                <p>叶贤恩 著 湖北人民出版社</p>
                <div class="jg"><i>￥19.5</i><em>￥32.0</em></div>
                <div class="cxratxtbot cxratxtbotcp clearfix">
                    <a href="bookinfo.html" class="fl active">购买</a>
                    <a href="" class="fr">收藏</a>
                </div>
            </div>
        </div>
        <div class="page mt_50 textcenter">
            <a class="pagea" href="">上一页</a>
            <a class="active" href="">1</a>
            <a href="">2</a>
            <a href="">3</a>
            <a href="">4</a>
            <a href="">5</a>
            <a href="">...</a>
            <a href="">30</a>
            <a class="pagea" href="">下一页</a>
            <span class="ml5">共30页</span>
            <span>到<input class="pageipt1" type="text" name="" id="" value="" />页</span>
            <input class="pageipt2 hoverop" type="submit" name="" id="" value="确定" />
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
