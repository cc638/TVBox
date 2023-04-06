<?php
header("Content-type: text/html; charset=utf-8"); 	
$url=$_GET['url'];
$api='https://jx.wslmf.com/api.php?tp=all&url='.$url;
$get=file_get_contents($api);
$t=str_replace("(","",$get);
$t=str_replace(");","",$t);
$json=json_decode($t,true);
?>
<!DOCTYPE html>
<html>
 <head>
    <title>流氓凡解析</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="content-language" content="zh-CN" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta name="referrer" content="never" />
    <meta name="renderer" content="webkit" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="x5-page-mode" content="app" />
    <meta name="Viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
    <link rel="shortcut icon" href="data/images/logo.ico" type="image/icon"/>
	<script type="text/javascript" src="//www.ckplayer.tv/ccdao.js"></script>   
    <link rel="stylesheet" href="//cdn.btjson.com/dplayer/1.22.2/DPlayer.min.css" type="text/css" />
    <style type="text/css">*{margin: 0;padding: 0;font-family: "Microsoft YaHei",SimHei,"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:13px;}img{border: 0;}a{color:inherit;text-decoration: none;color:#4B7E9D;}a:hover{text-decoration: underline;}body{background:#000;padding: 0;margin: 0;width:100%;height:100%;color:#fff;overflow:hidden;cursor: default;}.error{position:absolute;width:100%;height:100%;text-align:center;top:50%;margin:-30px 0 0 0;z-index:10;}.player,#dpplayer{position:absolute;width:100%;height:100%;}.dplayer-menu{display:none !important;}.torrentnum{padding: 5px;position: absolute;font-size: 12px;}</style>
    <script type="text/javascript" src="//cdn.btjson.com/hlsjs/0.9.1/hls.min.js"></script>
    <script type="text/javascript" src="//cdn.btjson.com/dplayer/1.22.2/DPlayer.min.js"></script>
    <script type="text/javascript" src="//cdn.btjson.com/p2pjs/1.0/p2p.js"></script>
    <script type="text/javascript" src="//cdn.btjson.com/p2pjs/1.0/hls.plugin.js"></script>
    <script type="text/javascript">
    window.onload = function(){
        var dp = new DPlayer({
            container:document.getElementById('dpplayer'),
             autoplay:true,
			 video:{
                quality:[{
                    type:'hls',
                    name:'自动',
                    url:'<?php echo($json['url']);?>'
                }],
                defaultQuality:0
            }
        });
        dp.play();
    };
    </script>
    <body>
    <div id="dpplayer"></div>
    </body>
    </html>