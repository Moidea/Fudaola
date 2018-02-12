<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>在线写福 - 支付宝集五福的技巧</title>
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/huabu.js"></script>
	<meta name="author" content="罗格Roogle" />
	<meta name="description" content="福到了的创意来自于V2ex社区，之前看过什么网传支付宝万能福，支付宝集福技巧等瞎说的文章，反正我自己一直没有敬业福，今天正好闲来无聊就用世界上最黄的语言写了几行代码实现了来福的功能，方便给手边没有福的人，解决少数人的支付宝集五福的难题，就问你福不福，反正我福！"/>
	<style type="text/css">
body{text-align:center}
#cavs{width:500px;height:500px;border:1px solid #C60;border-radius:0;background:red}
#kuang{margin:0 auto;margin-top:15px;width:800px;height:40px;border-radius:3px;background:#eee}
#k1{float:left;margin-left:43px}
.button{display:inline-block;margin:4px 2px;padding:6px 15px;border:none;border-radius:25px;background-color:#F9D448;color:#fff;text-align:center;text-decoration:none;font-size:16px;cursor:pointer;-webkit-transition-duration:.4s;transition-duration:.4s}
.button2:hover{box-shadow:0 12px 16px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19)}
	</style>
</head>
<body>
	<canvas id = "cavs" width ="500" height="500"></canvas><br/><!--构建canvas对象-->

	<div id="kuang">
	<div id="k1">
	<input type="color" id="color" class="button button2">
	</div>
	<div id="k1">
	<input type="button" value="上传" id="baocun" class="button button2" >
	</div>
	<div id="k1">
	<input type="button" value="下载" id="xiazai" class="button button2" >
	</div>
	<div id="k1">
	<input type="button" value="撤销" id="chexiao" class="button button2" >
	</div>
	<div id="k1">
	<input type="button" value="清屏" id="qingping" class="button button2" >
	</div>
	<div id="k1">
	<input class="button button2" type="range" id="cuxi" value="3"  min="0" max="10">
	</div>
	</div>	
</body>
</html>	