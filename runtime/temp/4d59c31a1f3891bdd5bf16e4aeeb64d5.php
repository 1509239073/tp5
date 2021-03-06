<?php /*a:1:{s:53:"C:\wamp\www\tp5\application\index\view\index\api.html";i:1527067240;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN" dir="ltr" class="client-nojs">
<head>
	<meta charset="UTF-8" />
	<title>开发者接口文档</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
	<link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/index/css/load.css" />
	<style>
        a:lang(ar),a:lang(kk-arab),a:lang(mzn),a:lang(ps),a:lang(ur){text-decoration:none}
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 99%;
            border: 1px solid #b5c5da;
            border-top: 3px solid #b5c5da;
            margin: 10px 10px;
        }
        tbody {
            display: table-row-group;
            vertical-align: middle;
            border-color: inherit;
        }
        .grayBlueBg {
            background: #f4f4f5;
        }
        tr {
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        }
        td {
            height: 30px;
            line-height: 30px;
            border: 1px solid #b5c5da;
            text-align: center;
        }
    </style>

</head>
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject skin-vector action-view vector-animateLayout">
<!-- header -->
<div class="headWrap">
	<div class="header"  id="header">
		<div class="inner" style="width: 1270px;">
			<a class="logo" href="javascript:;" style="font-size: 26px;">
				API文档工具-Thinkphp
			</a>
		</div>
	</div>
</div>

<!-- main content container -->
<div class="mainwrapper" style="width: 1270px;">
	<div class="inner">

		<div id="content" class="mw-body scroll-bar-wrap" role="main">

            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $n = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($n % 2 );++$n;if(is_array($vo['api']) || $vo['api'] instanceof \think\Collection || $vo['api'] instanceof \think\Paginator): $m = 0; $__LIST__ = $vo['api'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($m % 2 );++$m;?>
            <div class="scroll-box content_data" id="content_<?php echo htmlentities($n); ?>_<?php echo htmlentities($m); ?>" <?php if($n != 1 or $m != 1): ?>style="display: none"<?php endif; ?>>
				<a id="top"></a>
				<div id="mw-js-message" style="display:none;"></div>
				<div class="content_hd">
					<h2 id="firstHeading" class="firstHeading"><?php echo htmlentities($v['title']); ?></h2>
				</div>
				<div id="bodyContent" class="bodyContent">
					<div id="mw-content-text" lang="zh-CN" dir="ltr" class="mw-content-ltr">
						<ul><li>请求说明</li></ul>
						<p>Https请求方式: <?php echo htmlentities($v['method']); ?></p>
						<ul><li>请求示例</li></ul>
                        <pre><?php echo htmlentities($v['example']); ?></pre>
						<ul><li>参数说明</li></ul>
						<table border="1" cellspacing="0" cellpadding="3" align="center" width="640px">
							<tr class="grayBlueBg">
								<th>参数</th>
								<th>是否必须</th>
								<th>类型</th>
                                <th>说明</th>
                            </tr>
                            <?php if(is_array($v['param']) || $v['param'] instanceof \think\Collection || $v['param'] instanceof \think\Paginator): $k = 0; $__LIST__ = $v['param'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($k % 2 );++$k;?>
							<tr <?php if($k % 2 == 0): ?> class="grayBlueBg" <?php endif; ?>>
								<td align="center"><?php echo htmlentities($p[0]); ?></td>
								<td align="center"><?php echo htmlentities($p[1]); ?></td>
								<td align="center"><?php echo htmlentities($p[2]); ?></td>
								<td align="center"><?php echo htmlentities($p[3]); ?></td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>
						<ul>
							<li>返回说明</li>
						</ul>
                        <pre><?php echo htmlentities($v['return']); ?></pre>
					</div>
					<div id='catlinks' class='catlinks catlinks-allhidden'></div>
					<div class="visualClear"></div>
				</div>
			</div>
            <?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>


		</div>

		<!-- nav -->
		<div id="mw-panel" class="collapsible-nav scroll-bar-wrap">
			<div class="scroll-box">
                <div class="portal" >
                    <h5 class="category separator">API</h5>
                </div>
                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $n = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($n % 2 );++$n;?>
				<div class="portal" role="navigation" >
					<h5><span class="portal_arrow"></span><?php echo htmlentities($vo['title']); ?></h5>
					<div class="body" >
						<ul>
                            <?php if(is_array($vo['api']) || $vo['api'] instanceof \think\Collection || $vo['api'] instanceof \think\Paginator): $m = 0; $__LIST__ = $vo['api'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($m % 2 );++$m;?>
							    <li ><a data-id="<?php echo htmlentities($n); ?>_<?php echo htmlentities($m); ?>" class="item" href="JavaScript:;"><?php echo htmlentities($v['title']); ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
				</div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
			<div class="cover-bar"></div>
		</div>

	</div>
</div>

<!-- footer -->
<div id="footer" role="contentinfo" class="footer">
	<ul class="links ft" id="footer-places">
		<!--<li class="links_item no_extra" id="footer-about"><a target="_blank" href="">关于</a></li>-->
		<!--<li class="links_item" id="footer-policy"> <a target="_blank" href="">服务协议</a></li>-->
		<!--<li class="links_item" id="footer-runrule"><a target="_blank" href="">运营规范</a></li>-->
		<!--<li class="links_item" id="footer-contactctr"><a target="_blank" href="">客服中心</a></li>-->
		<!--<li class="links_item" id="footer-contactonl"><a target="_blank" href="">在线客服</a></li>-->
		<!--<li class="links_item" id="footer-contactmail"><a href="464401240@qq.com">联系邮箱</a></li>-->
	</ul>
	<p class="copyright">Copyright&nbsp;@&nbsp;2017 Liuxing. All Rights Reserved.</p>
</div>
<script type="text/javascript" src='http://127.0.0.1/tp5/public/static/index/js/jquery-min.js'></script>
<script type="text/javascript" src='http://127.0.0.1/tp5/public/static/index/js/wiki.js'></script>
<script>
    $('.item').click(function(){
        var id = $(this).data('id');
        $('.content_data').hide();
        $('#content_'+id).show();
    });
</script>
</body>
</html>
