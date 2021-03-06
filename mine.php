<?php 
require_once 'include.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的</title>
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
    <link rel="stylesheet" type="text/css" href="./css/aui.css" />
    <style type="text/css">
        .mine-account{
            background-color: #ffd655;
            padding: 5%;
        }
    </style>
</head>
<body>
<!--标签栏-->
<header class="aui-bar aui-bar-nav">
    <a class="aui-pull-left aui-btn" href="index1.php">
        <span class="aui-iconfont aui-icon-left"></span>
    </a>
    <div class="aui-title">我的</div>
</header>
<!--用户信息-->
    <div class="aui-media-list-item-inner mine-account">
        <div class="aui-list-item-inner">
            <div class="aui-list-item-title"><h1>用户名</h1></div>
            <div class="aui-list-item-text">
                <?php 
				
				if(isset($_SESSION['Name'])){
					echo $_SESSION['Name'];
				}elseif(isset($_COOKIE['UserName'])){
					echo $_COOKIE['UserName'];
				}
				
				echo $_SESSION['UserName'];
				
            ?>
            </div>
        </div>
    </div>
<div class="aui-hr"></div>
<div class="aui-hr"></div>
<section class="aui-grid">
    <div class="aui-row">
        <div class="aui-col-xs-3">
            <i class="aui-iconfont aui-icon-date"></i>
            <div class="aui-grid-label">代付款</div>
        </div>
        <div class="aui-col-xs-3">
            <i class="aui-iconfont aui-icon-cart"></i>
            <div class="aui-grid-label">代发货</div>
        </div>
        <div class="aui-col-xs-3">
            <a href="tab.php">
            <i class="aui-iconfont aui-icon-paper"></i>
            <div class="aui-grid-label">物流</div>
            </a>
        </div>
        <div class="aui-col-xs-3">
            <i class="aui-iconfont aui-icon-video"></i>
            <div class="aui-grid-label">未评价</div>
        </div>
    </div>
</section>
    <div class="aui-content-padded">
        <p><a href="index.php"><div class="aui-btn aui-btn-danger aui-btn-block">退出登录</div></a></p>
    </div>
<!--底部工具栏-->
<footer class="aui-bar aui-bar-tab" id="footer">
    <div class="aui-bar-tab-item aui-active" tapmode>
        <a href="index1.php">
            <i class="aui-iconfont aui-icon-home"></i>
            <div class="aui-bar-tab-label">首页</div>
        </a>
    </div>
    <div class="aui-bar-tab-item" tapmode>
        <a href="classify.html">
            <i class="aui-iconfont aui-icon-star"></i>
            <div class="aui-bar-tab-label">分类</div>
        </a>
    </div>
    <div class="aui-bar-tab-item" tapmode>
        <a href="shoppingcar.php">
            <i class="aui-iconfont aui-icon-cart"></i>
            <div class="aui-bar-tab-label">购物车</div>
        </a>
    </div>
    <div class="aui-bar-tab-item" tapmode>
        <a href="mine.php">
            <i class="aui-iconfont aui-icon-my"></i>
            <div class="aui-bar-tab-label">我的</div>
        </a>
    </div>
</footer>
</body>
</html>
