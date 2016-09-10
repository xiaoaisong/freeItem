<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>河北百众机电</title>
    <link href="/Public/Home/css/style.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/Public/Home/js/jquery-1.9.1.min.js"></script>
</head>
<body>
<div class="right_chanpin">
    <div class="tittle"><span>产品展示</span></div>
    <div style="clear:both;"></div>
    <div class="right_con_cp">
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><div class="cpjian">
                <p style="font-size:12px; font-weight:bold;"><?php echo ($vol["deptname"]); ?></p>
                <p><?php echo (htmlspecialchars_decode($vol["deptdesc"])); ?></p>
            </div>
            <div style="height:10px; clear:both"></div>
            <div class="chanpi_warp">
                <div class="chanpin_tuone"><img src="<?php echo ($vol["picture"]); ?>" width="205" height="156"></div>
                <div class="chan_jies">
                    <span><?php echo ($vol["name"]); ?></span>
                    <span>型号:<?php echo ($vol["product_id"]); ?></span>
                    <p><?php echo (htmlspecialchars_decode(msubstr($vol["product"],0,100))); ?><a href="/index.php/Home/Goods/content/id/<?php echo ($vol["id"]); ?>" target="main">查看详细>></a></p>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>

        <div id="fenye" style="_padding-top:10px;">


            <div class="zhong">
                <?php echo ($show); ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>