<?php
require_once'include.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>结算</title>
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
    <link rel="stylesheet" type="text/css" href="./css/aui.css" />
    <style type="text/css"></style>
</head>
<body>
<!--标签栏-->
<header class="aui-bar aui-bar-nav">
    <a class="aui-pull-left aui-btn" href="shoppingcar.html">
        <span class="aui-iconfont aui-icon-left"></span>
    </a>
    <div class="aui-title">付款</div>
</header>
<!--付款-->
<section class="aui-content-padded">
    <h2>共计：<?php
	require_once'include.php';
	$id=$_GET['id'];
	$sql = "select price from onlinshop_pro where pid = {$id}";
							$result=mysql_query($sql);
					$res=mysql_fetch_array($result,MYSQL_ASSOC);
					$price  =  $res[price];
					echo $price;
	?></h2>
</section>
<footer class="aui-bar aui-bar-tab" id="footer">
    <div class="aui-bar-tab-item aui-active" tapmode>
        <a href="shoppingcar.php">
            <i class="aui-iconfont aui-icon-home"></i>
            <div class="aui-bar-tab-label">
			取消</div>
        </a>
    </div>
    <div class="aui-bar-tab-item" tapmode>
     <?php echo"<a href=\"ok.php?id={$id}\"> ";?>
            <i class="aui-iconfont aui-icon-star"></i>
            <div class="aui-bar-tab-label">付款</div>
        </a>
    </div>
</footer>
</body>
</html>