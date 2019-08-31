<?php
/*
作者:D.Young
主页：https://yyv.me/
github：https://github.com/5iux/sou
日期：2019-07-25
版权所有，请勿删除

使用前请注意务必设置好白名单和apikey
本天气插件为申请地址：和风天气-https://dev.heweather.com/
*/
header('Content-Type:application/json; charset=utf-8');
//防跨域调用
$allow_origin = array(
	//域名白名单 
    'https://5iux.cn',
    'https://www.5iux.cn'
);
header('Access-Control-Allow-Origin:'.$allow_origin);
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:x-requested-with,content-type');
//获取当前ip
$address=$_SERVER["REMOTE_ADDR"];
//你的申请的apikey 必填 请到和风天气申请
$key="3b84217fd2db43f99c64736551d9742a";


$jsonlist = file_get_contents("https://free-api.heweather.net/s6/weather/?location=".$address."&key=".$key);
echo $_GET["callback"].$jsonlist;
?>
