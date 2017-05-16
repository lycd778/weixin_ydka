<?php
require_once 'accesstoken.php';
header ( 'Content-Type: text/html; charset=UTF-8' );
$ACC_TOKEN = getaccessToken ();
$data = '{
 "button":[
 {
       "name":"微·帮手",
       "sub_button":[
        {
           "type":"click",
           "name":"测·指标",
           "key":"czb"
        },
        {
           "type":"click",
           "name":"答·量表",
           "key":"dlb"
        },
        {
           "type":"click",
           "name":"荐·运动",
           "key":"jyd"
        },
        {
           "type":"view",
           "name":"看·视频 ",
           "url":"https://xzws.maodou.io"
        }]
  },
  {
       "name":"微·查询",
       "sub_button":[
        {
           "type":"click",
           "name":"查·医院",
           "key":"cyy"
        },
        {
           "type":"click",
           "name":"随·咨询",
           "key":"szx"
        },
		  {
           "type":"click",
           "name":"居家计划",
           "key":"jjjh"
        },
        {
           "type":"click",
           "name":"绑定心脏卫士",
           "key":"bdbs"
        }]
   },
   {
       "name":"微·产品",
         "sub_button":[
        {
           "type":"click",
           "name":"看·我们",
           "key":"kwm"
        },
        {
           "type":"click",
           "name":"观·产品",
           "key":"gcp"
        }
		,
        {
           "type":"click",
           "name":"下·APP",
           "key":"xapp"
        },
       {
           "type":"click",
           "name":"购买产品",	   
           "key":"gmcp"
        }]
   }
		]}';

$ch = curl_init ();
curl_setopt ( $ch, CURLOPT_URL, "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=" . $ACC_TOKEN );
curl_setopt ( $ch, CURLOPT_CUSTOMREQUEST, "POST" );
curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, FALSE );
curl_setopt ( $ch, CURLOPT_SSL_VERIFYHOST, FALSE );
curl_setopt ( $ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)' );
curl_setopt ( $ch, CURLOPT_FOLLOWLOCATION, 1 );
curl_setopt ( $ch, CURLOPT_AUTOREFERER, 1 );
curl_setopt ( $ch, CURLOPT_POSTFIELDS, $data );
curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
$tmpInfo = curl_exec ( $ch );
curl_close ( $ch );
$menu = json_decode ( $tmpInfo, false );
if ($menu->errcode == "0") {
	echo "菜单创建成功";
} else {
	echo "菜单创建失败";
}
?>