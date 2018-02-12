<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>福到啦 - 在线刷福支付宝集齐五福的技巧</title>
		<meta name="author" content="罗格Roogle" />
		<meta name="description" content="福到了的创意来自于V2ex社区，之前看过什么网传支付宝万能福，支付宝集福技巧等瞎说的文章，反正我自己一直没有敬业福，今天正好闲来无聊就用世界上最黄的语言写了几行代码实现了来福的功能，方便给手边没有福的人，解决少数人的支付宝集五福的难题，就问你福不福，反正我福！"/>
		<style>
		body{margin:0;border:0}
.mask{position:fixed;z-index:9999;background:#f60c3e}
.mt{top:0;width:100%;height:10px}
.mb{bottom:0;width:100%;height:10px}
.ml{left:0;width:10px;height:100%}
.mr{right:0;width:10px;height:100%}
.main{width:100%;height:100%}
.main .content,.main .footer,.main .header{padding:10px;text-align:center}
.main .header .logo{display:block;margin:40px;font-size:40px;font-family:Simhei}
.info{overflow:hidden;margin:10px;padding:15px;background:#b21b1b;text-align:left}
.info p{color:#ffb820;line-height:15px}
.fubox img{width:300px;height:300px}
.btn{margin:30px}
.btn a{padding:8px 30px;border:1px solid #f60c3e;border-radius:5px;background-color:#f60c3e;color:#fff;color:red;text-decoration:none;font-size:15px;font-family:Microsoft Yahei}
.btn .fresh,.btn .huafu,.btn .wangyou{margin:0;color:#fff}
.btn .fresh:hover,.btn .huafu:hover,.btn .wangyou:hover{background-color:transparent;color:#f60c3e}
		</style>
	</head>
<body>
<div class="mask mt"></div><div class="mask mb"></div><div class="mask ml"></div><div class="mask mr"></div>

<div class="main">
	<div class="header"><span class="logo"><font class="fu">福</font>到啦</span></div>
	<div class="content">
		<div class="fubox"><img id="fuzi" src="img.php?folder=pic"/></div>
		<div class="btn">
			<a class="fresh" href="">换一张福</a>
			<a class="wangyou" onclick="javascript:freshWangYou();" href="javascript:">网友手写福</a>
			<a class="huafu" href="tuya.php" target="_blank">去鬼画福</a>
		</div>
	</div>
	<div class="footer">
		<div class="info">
			<p>活动时间：2月1日-2月15日</p>
			<p>每日使用支付宝扫描福可参与年度5亿瓜分</p>
			<p>本人出售自己的大量的福加微信angellcawn</p>
			<p>最终解释权归支付宝所有</p>
		</div>
	</div>
</div>
<script>
function fresh() { 
	document.getElementById('fuzi').src='img.php?folder=pic';
}

function freshWangYou() { 
	document.getElementById('fuzi').src='img.php?folder=upload';
}
</script>
</body>
</html>