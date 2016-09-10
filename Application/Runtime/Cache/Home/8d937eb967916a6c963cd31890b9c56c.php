<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>河北百众机电</title>
<link href="/Public/Home/css/style.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="/Public/Home/css/base.css" />

<script type="text/javascript" src="/Public/Home/js/jquery-1.9.1.min.js"></script>
</head>
<body>
<div id="header">
<div class="logo"><img src="/Public/Home/image/logo.png"></div>
<div class="biaoyu"><img src="/Public/Home/image/biaoyu.jpg"></div>
<div class="lianxi"><div class="ditu"><a href="index.html">网站首页</a>|<a>网站地图</a></div>
<div class="tell">TEL：<span>0311-66175058</span></div>
</div>
</div>
<div style="clear:both"></div>
<div id="nav">
<div class="conent">
<ul>
<li><a href="guanyu.html">关于百众</a></li>
<li><a href="xinwen.html">新闻展会</a></li>
<li><a href="chanpin.html" class="hover">产品展示</a></li>
<li><a href="hangye.html">行业应用</a></li>
<li><a href="jiejue.html">解决方案</a></li>
<li><a href="fuwu.html">客服服务</a></li>
<li><a href="jihui.html">工作机会</a></li>
<li style="background:none;"><a href="lianxi.html">联系我们</a></li>
</ul>
</div>
</div>
<div class="banner" id="banner" >
	<a href="" class="d1" style="background:url(/Public/Home/image/banner1.jpg) center no-repeat;"></a>
	<a href="" class="d1" style="background:url(/Public/Home/image/banner2.jpg) center no-repeat;"></a>
	<a href="" class="d1" style="background:url(/Public/Home/image/banner3.jpg) center no-repeat;"></a>
	<a href="" class="d1" style="background:url(/Public/Home/image/banner1.jpg) center no-repeat;"></a>
	<a href="" class="d1" style="background:url(/Public/Home/image/banner2.jpg) center no-repeat;"></a>
	<div class="d2" id="banner_id">
		<ul>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
<script type="text/javascript">
function banner(){	
	var bn_id = 0;
	var bn_id2= 1;
	var speed33=5000;
	var qhjg = 1;
    var MyMar33;
	$("#banner .d1").hide();
	$("#banner .d1").eq(0).fadeIn("slow");
	if($("#banner .d1").length>1)
	{
		$("#banner_id li").eq(0).addClass("nuw");
		function Marquee33(){
			bn_id2 = bn_id+1;
			if(bn_id2>$("#banner .d1").length-1)
			{
				bn_id2 = 0;
			}
			$("#banner .d1").eq(bn_id).css("z-index","2");
			$("#banner .d1").eq(bn_id2).css("z-index","1");
			$("#banner .d1").eq(bn_id2).show();
			$("#banner .d1").eq(bn_id).fadeOut("slow");
			$("#banner_id li").removeClass("nuw");
			$("#banner_id li").eq(bn_id2).addClass("nuw");
			bn_id=bn_id2;
		};
	
		MyMar33=setInterval(Marquee33,speed33);
		
		$("#banner_id li").click(function(){
			var bn_id3 = $("#banner_id li").index(this);
			if(bn_id3!=bn_id&&qhjg==1)
			{
				qhjg = 0;
				$("#banner .d1").eq(bn_id).css("z-index","2");
				$("#banner .d1").eq(bn_id3).css("z-index","1");
				$("#banner .d1").eq(bn_id3).show();
				$("#banner .d1").eq(bn_id).fadeOut("slow",function(){qhjg = 1;});
				$("#banner_id li").removeClass("nuw");
				$("#banner_id li").eq(bn_id3).addClass("nuw");
				bn_id=bn_id3;
			}
		})
		$("#banner_id").hover(
			function(){
				clearInterval(MyMar33);
			}
			,
			function(){
				MyMar33=setInterval(Marquee33,speed33);
			}
		)	
	}
	else
	{
		$("#banner_id").hide();
	}
}



</script>
<script type="text/javascript">banner()</script>
</div>
<!--搜索-->
<div id="search">
<div class="coen1">
<div class="left">
	<span>他们都在搜：</span><a>自立袋机型</a>、<a>给袋式机型</a>、<a>立式包装机</a>、<a>枕式包装机</a>
</div>
<div class="sear_right">
	<form method="post"  action="/index.php/Home/Goods/topsearch" target="main">
		<input type="text"  name="goodsname" class="text" value="请输入关键词搜索" onfocus="if(value == '请输入关键词搜索'){value = ''} " onblur="if(value == ''){value = '请输入关键词搜索'}"/>
		<input type="submit"  class="button_sear" value=""/>
	</form>
</div>
</div></div>
<!--产品-->
<div id="main2">
<div class="left_zhanshi">
<div class="menu"><div class="tittle"><span>产品展示</span></div>
<div class="menu_warp">

<ul>



<li class="yanse">水平式全自动包装机
<ul class="yincang" style="display:block;">
	<?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><li><a href="/index.php/Home/ShuiPing/showList/deptid/<?php echo ($vol["id"]); ?>"  target="main"><?php echo ($vol["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</li>


<li>立式包装机
<ul class="yincang">
	<?php if(is_array($data2)): $i = 0; $__LIST__ = $data2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><li><a href="/index.php/Home/LiShi/showList/deptid/<?php echo ($vol["id"]); ?>" target="main"><?php echo ($vol["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</li>

<li>枕式自动包装机
<ul class="yincang" >
	<?php if(is_array($data3)): $i = 0; $__LIST__ = $data3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><li><a href="/index.php/Home/ZhenShi/showList/deptid/<?php echo ($vol["id"]); ?>" target="main"><?php echo ($vol["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</li>


</ul>

</div>
</div>
<div class="tongdao">
<div class="tittle"><span>产品快速通道</span></div>
<div class="kuai_warp">
<form method="post" action="/index.php/Home/Goods/Search" target="main">
	<select  name="category" id="category1"  >
		<option>请选择类别</option>
		<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vol["id"]); ?>"  class="categoryid" ><?php echo ($vol["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
	</select>
	<!--<select  id="goodstype" class="text_chaxub" name="gods">-->
	<!--</select>-->
<input type="submit" class="button_sousuo" value="搜索" />
</form>
</div>
</div>
</div>
	<div class="right_chanpin">

		<iframe src="/index.php/Home/Goods/home" id="iframe" name="main" width="100%" height="800"    eftmargin="0"  topmargin="0" frameborder="0"></iframe>

	</div>
<div style="clear:both"></div>
</div>
<script type="text/javascript">



$(document).ready(function(){
	$(".menu_warp ul li ").click(function(){
		$(this).addClass("yanse").children(".yincang").show().parent()
		.siblings("li").removeClass("yanse").children(".yincang").hide();
	});
	});
</script>
<div style="clear:both; cursor:pointer;"></div>
</div>
<!--footer-->
<div id="footer">
<div class="conent_foter">
<div class="nav_foot">
<a>关于百众</a>  |   <a>新闻展会</a>  |   <a>产品展示</a>  |   <a>行业应用 </a> |  <a>解决方案</a>   |   <a>客户服务 </a> |  <a>工作机会 </a> | <a>联系我们</a>
</div>
<div style="height:20px;"></div>
<p>权所有 © 河北百众机电科技有限公司  冀ICP备10204030-1号</p><p>公司网址：www.mycodes.net  公司地址：石家庄市 建通街塔南路29号  联系电话：13901624119</p>
<div style="padding-left:288px; padding-right:100px;">
<div class="chengxin"><a href="#"><img src="/Public/Home/image/a.jpg"></a></div>
<div class="chengxin"><a href="#"><img src="/Public/Home/image/b.jpg"></a></div>
<div class="chengxin"><a href="#"><img src="/Public/Home/image/c.jpg"></a></div>
</div>
</div>
</div>
</body>
</html>