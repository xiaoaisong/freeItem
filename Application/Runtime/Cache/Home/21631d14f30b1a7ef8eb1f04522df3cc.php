<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>河北百众机电</title>
	<link href="/Public/Home/css/style.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="/Public/Home/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="/Public/Home/js/jquery.pack.js"></script>
	<script type="text/javascript" src="/Public/Home/js/jquery.SuperSlide.js"></script>
</head>
<body>

<div style="clear:both"></div>
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

<!--产品-->

	<div class="right_chanpin"><div class="tittle"> </div>
		<div style="clear:both;"></div>
		<div class="right_con_chan">
			<div class="chanpin_xx"><img src="/Public/Home/image/chanpin1.jpg"></div>

			<div class="SS">
				<div class="hd">
					<ul>
						<li>产品介绍</li>
					</ul>
				</div>
				<div class="bd">
					<div class="jieshao_xq">

						<p> 适用于单层和多层饼干、夹心饼干、苏打饼干、面包干、威化饼等的自动供料包装。</p>
						<p>性能特点：</p>
						<p>－可同时喂料多种口味的物料</p>
						<p>－同步性好，喂料快、误差小</p>
						<p> －供料输送机速度与包装机同步控制</p>
						<img src="/Public/Home/image/cptu.jpg">
					</div>
					<div class="neirong_con">
						<img src="/Public/Home/image/canshu.jpg">
					</div>
					<div class="neirong_con"><img src="/Public/Home/image/licheng.jpg">
					</div>

					<div class="neirong_con">
						<img src="/Public/Home/image/jishu.jpg"> </div>
					<div class="neirong_con"><img src="/Public/Home/image/jishu.jpg"></div>

					<div class="shipin" >
						<div id="youkuplayer" style="width:720px;height:450px; margin:20px auto;"></div>

						<script type="text/javascript" src="http://player.youku.com/jsapi">

							player = new YKU.Player('youkuplayer',{
								styleid: '0',
								client_id: 'YOUR YOUKUOPENAPI CLIENT_ID',
								vid: 'http://player.youku.com/player.php/sid/XNjMxMjQ1OTQ0/v.swf',
								autoplay: true,
								events:{
									onPlayStart: function(){ /*your code*/ }
								}
							});
						</script>
					</div>
				</div>
				<div style="height:10px; clear:both"></div>
			</div>
		</div>
		<div style="clear:both"></div>
		<script type="text/javascript">
			jQuery(".SS").slide({trigger:"click"});
		</script>
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


</body>
</html>