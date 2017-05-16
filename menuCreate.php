<?php
require_once 'accesstoken.php';
header('Content-Type: text/html; charset=UTF-8');
$ACC_TOKEN = getaccessToken();
$data = '{
 "button":[
 {
        "type":"view",
         "name":"心康讲堂",
         "url":"https://xzws.maodou.io"

  },
   {
       "name":"产品介绍",
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

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=" . $ACC_TOKEN);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$tmpInfo = curl_exec($ch);
curl_close($ch);
$menu = json_decode($tmpInfo, false);
if ($menu->errcode == "0") {
    echo "菜单创建成功";
} else {
    echo "菜单创建失败";
}
?>