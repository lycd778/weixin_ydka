<?php
// 回复消息
require_once 'packresponse.php';
require_once 'menu.php';
require_once 'userinfo.php';
function receiveEvent($userObj) {
	$contentStr = "";
	switch ($userObj->Event) {
		case "subscribe" :
			
			$contentStr = "嗨，我是健康随心的小管家，谢谢亲爱的你关注我。
			
			我们的任务是发布优质的健康咨讯，排忧患、读知心、看实时。
			
			回复【1】，查询心脏健康小知识
			回复【2】，查询运动普及小知识
			回复【3】，查询商务会议内容
			回复【4】，查询优秀小视频
			回复【心康经历】，查询心心医医追踪的患者康复经历";
			
			$resultStr = response_text ( $userObj, $contentStr );
			break;
		case "unsubscribe" :
			break;
		case "CLICK" :
			$resultStr = response_click ( $userObj, $userObj->EventKey );
			break;
	}
	return $resultStr;
}
function receiveText($userObj) {
	$keyword = trim ( $userObj->Content );
	$time = time ();
	if (! empty ( $keyword )) {
		switch ($keyword) {
			case "1" :
			case "心" :
			case "心脏" :
			case "妙招" :
				$newsContent = array ();
				$newsContent [] = array (
						'Title' => '冠心病患者的日常用药误区 ',
						'Description' => '',
						'PicUrl' => 'https://mmbiz.qlogo.cn/mmbiz/WqpSdibDCBRlwaQmxp4GCON0mGu4iatW0HsulXge2LjapEzLOZrtq9xDhYLZP54JNR7kPq9nPjrLZ8sAzZOk01AA/0?wx_fmt=jpeg',
						'Url' => 'http://mp.weixin.qq.com/s?__biz=MjM5OTEzMTkwOQ==&mid=211033610&idx=1&sn=9972cf03aae31be3357117741ffdc94c&scene=20#rd' 
				);
				$newsContent [] = array (
						'Title' => '为何老人容易心律失常？',
						'Description' => '',
						'PicUrl' => 'https://mmbiz.qlogo.cn/mmbiz/WqpSdibDCBRlwaQmxp4GCON0mGu4iatW0HDol6wDXY07JLMUnHokS5UoibPPj0ZPsUBaCiaw3iahfAxcJnSibFiac3mKA/0?wx_fmt=jpeg',
						'Url' => 'http://mp.weixin.qq.com/s?__biz=MjM5OTEzMTkwOQ==&mid=211033610&idx=2&sn=835599a28f7aaebf8cadc165fdbca842&scene=20#rd' 
				);
				$newsContent [] = array (
						'Title' => '老年左心衰的七大征兆 ',
						'Description' => '',
						'PicUrl' => 'https://mmbiz.qlogo.cn/mmbiz/WqpSdibDCBRng8u2AJuTFyZQLluIF9oCgh1sQYicF3SrVwCZTYNdebpNcKZkmt6nvc25dAFVrePDWicqfWF6bib8Kg/0?wx_fmt=jpeg',
						'Url' => 'http://mp.weixin.qq.com/s?__biz=MjM5OTEzMTkwOQ==&mid=210155963&idx=1&sn=d7c62e29cd0f67f9995abfc548089470&scene=20#rd' 
				);
				$newsContent [] = array (
						'Title' => '手有这痕迹心脏更健康',
						'Description' => '',
						'PicUrl' => 'https://mmbiz.qlogo.cn/mmbiz/WqpSdibDCBRng8u2AJuTFyZQLluIF9oCgWEjRJ2OUcQPlJzgI0t7oI511tfOpIM8wNnq1aUoILquWKHkcicvBRiaQ/0?wx_fmt=jpeg',
						'Url' => 'http://mp.weixin.qq.com/s?__biz=MjM5OTEzMTkwOQ==&mid=210155963&idx=3&sn=4d5c66ee19b210f8cd7b501f3ddd02de&scene=20#rd' 
				);
				$newsContent [] = array (
						'Title' => '冠心病食疗',
						'Description' => '',
						'PicUrl' => 'https://mmbiz.qlogo.cn/mmbiz/WqpSdibDCBRng8u2AJuTFyZQLluIF9oCgaJ88g2rvvibsKTicONMevs9cLZYtjicfqFzicZvrDxjp1LxC4tOY3UOUsQ/0?wx_fmt=jpeg',
						'Url' => 'http://mp.weixin.qq.com/s?__biz=MjM5OTEzMTkwOQ==&mid=210155963&idx=2&sn=9ee800d08f25696211eb064bac5266ac&scene=20#rd' 
				);
				$newsContent [] = array (
						'Title' => '盘点诱发心脏病的六大致命细节  ',
						'Description' => '',
						'PicUrl' => 'https://mmbiz.qlogo.cn/mmbiz/WqpSdibDCBRnO8zBibnBoFFIv4Cw1mE478koMB77W6Hem3o1P51uI7QnfNXiamQ1H6sjDGApJLYXqVCSce2kzHGAQ/0?wx_fmt=jpeg',
						'Url' => 'http://mp.weixin.qq.com/s?__biz=MjM5OTEzMTkwOQ==&mid=209337451&idx=1&sn=469961bb2fc4d90332d186f4c2e43c5c&scene=20#rd' 
				);
				$newsContent [] = array (
						'Title' => '怀疑自己得“胃癌”曾欲轻生，多年的“老胃病”竟是“心病”',
						'Description' => '',
						'PicUrl' => 'https://mmbiz.qlogo.cn/mmbiz/WqpSdibDCBRnO8zBibnBoFFIv4Cw1mE4786V8iajRScpbUx1PoPygRicicT5qwVZknaZiaZArhNSBHh1pTrEPMVyBz2Q/0?wx_fmt=jpeg',
						'Url' => 'http://mp.weixin.qq.com/s?__biz=MjM5OTEzMTkwOQ==&mid=209337451&idx=2&sn=e57367b888f7c07d9a28008965f55b26&scene=20#rd' 
				);
				$newsContent [] = array (
						'Title' => '引起动脉硬化的几个原因',
						'Description' => '',
						'PicUrl' => 'https://mmbiz.qlogo.cn/mmbiz/WqpSdibDCBRnO8zBibnBoFFIv4Cw1mE478Z2fd0zj6gaoVwAKsnjhGKfhdln5Ljh3zlScic9RwiaVDoHJUpiaoXhaAA/0?wx_fmt=jpeg',
						'Url' => 'http://mp.weixin.qq.com/s?__biz=MjM5OTEzMTkwOQ==&mid=209337451&idx=3&sn=4b509a33682ada6455d33ee25e11cc0c&scene=20#rd' 
				);
				$resultStr = response_image ( $userObj, $newsContent );
				break;
			case "2" :
			case "运动" :
				$newsContent = array ();
				$newsContent [] = array (
						'Title' => '赤脚跑比穿鞋更好吗？',
						'Description' => '',
						'PicUrl' => 'https://mmbiz.qlogo.cn/mmbiz/WqpSdibDCBRnEMzxnBZs5eusrl87KWfj9nWsAIcbledEuCbMtibM03DCX05SCpqvUusW5cVq9dxibs0xPEa6jmDMg/0?wx_fmt=jpeg',
						'Url' => 'http://mp.weixin.qq.com/s?__biz=MjM5OTEzMTkwOQ==&mid=210471502&idx=1&sn=6d4d3de7059d3e2282f0976e8346baf9&scene=20#rd' 
				);
				$newsContent [] = array (
						'Title' => '何为心脏负荷试验?',
						'Description' => '',
						'PicUrl' => 'https://mmbiz.qlogo.cn/mmbiz/WqpSdibDCBRlToI8ibH5uqic4BwnPv56NibfLzCQ2IQzuo7vDicRaONcqovdge2zjtErMRjYfe1UQAga1Fpypl1Tiavg/0?wx_fmt=jpeg',
						'Url' => 'http://mp.weixin.qq.com/s?__biz=MjM5OTEzMTkwOQ==&mid=209720110&idx=1&sn=936d023f4369c3a948272e03b5cbdd7a&scene=20#rd' 
				);
				$newsContent [] = array (
						'Title' => '万能的处方，运动是良医。',
						'Description' => '',
						'PicUrl' => 'https://mmbiz.qlogo.cn/mmbiz/WqpSdibDCBRnrEaVCyMmqPicicP3PSAKYeA891MIWfGszW4XUNp2W05SGia96E9cD3icsUrfJBR5TOYpZibj9CSdvLXw/0?wx_fmt=jpeg',
						'Url' => 'http://mp.weixin.qq.com/s?__biz=MjM5OTEzMTkwOQ==&mid=208213919&idx=2&sn=ea8cdcbe11ba71a207b0128be2b4a248&scene=20#rd' 
				);
				$newsContent [] = array (
						'Title' => '康复运动对心脏病的治疗有哪些作用？',
						'Description' => '',
						'PicUrl' => 'https://mmbiz.qlogo.cn/mmbiz/WqpSdibDCBRmOmFaLC6Zjv94tiaiaDCAmBb70gXOsmibyz2gozbibumqRIk0eMpFCQJiaE79KwgeiaBceV4SdXfp0fdFw/0?wx_fmt=jpeg',
						'Url' => 'http://mp.weixin.qq.com/s?__biz=MjM5OTEzMTkwOQ==&mid=209177094&idx=3&sn=1da1d22de20918870242a4c76850e70e#rd' 
				);
				$resultStr = response_image ( $userObj, $newsContent );
				break;
			case "3" :
			case "会议" :
			case "活动" :
			case "商务" :
				$newsContent = array ();
				$newsContent [] = array (
						'Title' => '【会议通知】第七届全国心脏康复及进展学习班 中美心脏康复联合论坛',
						'Description' => '',
						'PicUrl' => 'https://mmbiz.qlogo.cn/mmbiz/WqpSdibDCBRnmSHB29BA2KsbHNdJVX0gB07RUrXjtovpsPAxicHs9U3McZwiakRmeGic6mEPrZRriaP9qp2vYibSy5OA/0?wx_fmt=jpeg',
						'Url' => 'http://mp.weixin.qq.com/s?__biz=MjM5OTEzMTkwOQ==&mid=404473612&idx=1&sn=5d8056f742e8d58071e21668f2ea2fab#rd' 
				);
				$resultStr = response_image ( $userObj, $newsContent );
				break;
			case "4" :
			case "视频" :
				$newsContent = array ();
				$newsContent [] = array (
						'Title' => '一部发人深省的公益小短片：人生最后十年，你如何过？',
						'Description' => '',
						'PicUrl' => 'https://mmbiz.qlogo.cn/mmbiz/WqpSdibDCBRkhVPpkqY3q6t8ZMv39n0PhM4f74fLw2h6MeFhvFlnFwnA25FMVoQib2ujDe74dAGHKuWHFOM6YbCw/0?wx_fmt=jpeg',
						'Url' => 'http://mp.weixin.qq.com/s?__biz=MjM5OTEzMTkwOQ==&mid=211907953&idx=1&sn=bacb71423ecdc47f93deea0aec499dc9&scene=18#rd' 
				);
				$resultStr = response_image ( $userObj, $newsContent );
				break;
			case "心脏康复经历" :
			case "经历" :
			case "康复" :
				$newsContent = array ();
				$newsContent [] = array (
						'Title' => '心康经历分享',
						'Description' => '',
						'PicUrl' => 'https://mmbiz.qlogo.cn/mmbiz/WqpSdibDCBRk5ibtiaDibIuh3jF0yp654HKQoqBGFdYmKBm5Dcp74LWWLusWM6EHL21Wk1zcYW0uJO5OSuPKSFh3ug/0?wx_fmt=jpeg',
						'Url' => 'http://mp.weixin.qq.com/s?__biz=MjM5OTEzMTkwOQ==&mid=211140151&idx=1&sn=eb6aef371b894de27d432da2d0771718&scene=20#rd' 
				);
				$resultStr = response_image ( $userObj, $newsContent );
				break;
			case "下载" :
			case "客户端" :
			case "软件" :
			case "产品" :
			case "安装" :
				$newsContent = "<a href=\"http://fusion.qq.com/app_download?appid=1102255388&platform=qzone&via=QZ.MOBILEDETAIL.QRCODE&u=3046917960\">心脏卫士安卓</a> 

<a href=\"https://itunes.apple.com/cn/app/%E5%BF%83%E8%84%8F%E5%8D%AB%E5%A3%AB/id1198463508?mt=8\">心脏卫士IOS</a>

<a href=\"http://shouji.baidu.com/software/item?docid=7990849&f=sug@software\">下载6分钟步行测试APP</a>​​";
				$resultStr = response_text ( $userObj, $newsContent );
				break;
			case "心脏卫士" :
			case "APP心脏" :
			case "客户端心脏" :
			case "心脏卫士客户端" :
			case "客户端心脏卫士" :
			case "APP卫士" :
			case "APP心" :
				$newsContent = "<a href=\"http://fusion.qq.com/app_download?appid=1102255388&platform=qzone&via=QZ.MOBILEDETAIL.QRCODE&u=3046917960\">心脏卫士安卓</a> 

<a href=\"https://itunes.apple.com/cn/app/%E5%BF%83%E8%84%8F%E5%8D%AB%E5%A3%AB/id1198463508?mt=8\">心脏卫士IOS</a>​​​​";
				$resultStr = response_text ( $userObj, $newsContent );
				break;
			case "6分钟步行测试" :
			case "6分钟步行测试APP" :
			case "6分钟测试" :
			case "客户端6分钟" :
			case "app6分钟步行测试" :
			case "步行测试" :
			case "APP6分钟步行测试" :
			case "6分钟" :
				$newsContent = array ();
				$newsContent [] = array (
						'Title' => '“6分钟步行测试”APP介绍',
						'Description' => '',
						'PicUrl' => 'https://mmbiz.qlogo.cn/mmbiz/WqpSdibDCBRnMq8vEDvnA04aWF3QE6FSwCyuktdlWX0vm61fSDhnm6MDIzXIh5CJPVqticv80ic2l36UGvRNibr8hA/0?wx_fmt=jpeg',
						'Url' => 'http://mp.weixin.qq.com/s?__biz=MjM5OTEzMTkwOQ==&mid=209534473&idx=1&sn=3cee1500fcca986dbc528b018c5574d7&scene=18#rd' 
				);
				$resultStr = response_image ( $userObj, $newsContent );
				break;
			case "评估盒子" :
			case "评估" :
			case "盒子" :
				$newsContent = array ();
				$newsContent [] = array (
						'Title' => '“评估盒子"APP介绍',
						'Description' => '',
						'PicUrl' => 'https://mmbiz.qlogo.cn/mmbiz/WqpSdibDCBRnMq8vEDvnA04aWF3QE6FSwO8uyEFb7bjcMSQsibd1j9iapSYInCPpr4xMLyX72H90OpGvMrm9lFicbg/0?wx_fmt=jpeg',
						'Url' => 'http://mp.weixin.qq.com/s?__biz=MjM5OTEzMTkwOQ==&mid=209534584&idx=1&sn=3e1f4457a8a258f08193d5138d3cc907&scene=18#rd' 
				);
				$resultStr = response_image ( $userObj, $newsContent );
				break;
			case "BMI" :
			case "bmi" :
				$newsContent = "<a href=\"http://cn.onlinebmicalculator.com/\">点击进入网页，计算BMI</a>​";
				$resultStr = response_text ( $userObj, $newsContent );
				break;
			case "推荐运动" :
				$newsContent = "您是属于：
0、患有不同程度的心血管疾病
1、静坐少动/无日常活动或运动/体适能很差者
2、体力活动极少/无运动/体适能较差者
3、偶尔体力活动/无或未达到规律运动/体适能较差或稍差者
4、日常体力活动/规律的中等强度或较大强度运动
5、大量日常体力活动/规律的较大强度运动

请回复上列选择的数字，及您在“测•指标”中的预计最大代谢当量（Mets）和最大心率(次/分)

（格式：1-7-180）​";
				$resultStr = response_text ( $userObj, $newsContent );
				break;
			case "医院" :
			case "查询医院" :
			case "查医院" :
				$newsContent = "<a href=\"https://www.hqms.org.cn/usp/roster/index.jsp\">点击进入，查询医院</a>​";
				$resultStr = response_text ( $userObj, $newsContent );
				break;
			default :
				$newsContent = "我们会尽快回复您的留言";
				if ((strpos ( $keyword, '绑定' ) !== false)) {
					$arr = explode ( "+", $keyword );
					if (isphone ( $arr [2] )) {
						$data = '{
							"realname":"' . $arr [1] . '",
							"telephone":"' . $arr [2] . '",
							"openid":"' . selectuserinfo ( $userObj ) . '",
							"birthday":"20' . date ( "y-m-d", time () ) . 'T00:00:00",
							"password":"123456"
							}';
						;
						$menu = json_decode ( http_post_data ( "http://123.57.143.76:8010/api/qq/reg", $data ), false );
						if ($menu->status == "103" || $menu->status == "100") {
							$newsContent = "绑定成功";
							updateuserinfo ( $userObj, "phone", $arr [2] );
						} else {
							$newsContent = "绑定失败，请重试！";
						}
					} else {
						$newsContent = "请输入有效的手机号";
					}
				}
				$resultStr = response_text ( $userObj, $newsContent );
				break;
		}
		echo $resultStr;
	}
}
function http_post_data($url, $data_string) {
	$ch = curl_init ( $url );
	curl_setopt ( $ch, CURLOPT_CUSTOMREQUEST, "POST" );
	curl_setopt ( $ch, CURLOPT_POSTFIELDS, $data_string );
	curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt ( $ch, CURLOPT_HTTPHEADER, array (
			'Content-Type: application/json',
			'Content-Length: ' . strlen ( $data_string ) 
	) );
	
	$tmpInfo = curl_exec ( $ch );
	return $tmpInfo;
}
function isphone($str) {
	if (preg_match ( "/^1[34578]\d{9}$/", $str )) {
		return true;
	} else {
		return false;
	}
}
?>