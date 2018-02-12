<?php //upload.php
//获取post过来的数据部分
$dat=file_get_contents('php://input');
//去除DataURL的头部分
$dat=substr($dat,strpos($dat,',')+1);
//把BASE64还原成二进制流
$dat=base64_decode($dat);

$up_dir = 'upload/';//存放在当前目录的upload文件夹下

if(!file_exists($up_dir)){
    mkdir($up_dir,0777);
}
//计算MD5作为文件名
$url=$up_dir.md5($dat).'.png';
//保存到文件
file_put_contents($url,$dat);
//返回文件的URL
echo $url;