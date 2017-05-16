<?php
// 菜单点击事件
function response_click($userObj, $EventKey) {
	switch ($EventKey) {
		case "czb" :
			$newsContent = "<a href=\"http://cn.onlinebmicalculator.com/\">点击进入，计算身体质量指数（BMI）</a>

如需测最大心率，请您回复您的性别-年龄（例如：女-21）

如需测最大代谢当量，请您回复 性别-年龄-身高-体重（例如：女-21-163-52）​";
			$resultStr = response_text ( $userObj, $newsContent );
			break;
		case "dlb" :
			$newsContent = array ();
			$newsContent [] = array (
					'Title' => '抑郁自评量表，测健康！',
					'Description' => '我是医医，健康随心的小管家，有什么建议',
					'PicUrl' => 'https://mmbiz.qlogo.cn/mmbiz/WqpSdibDCBRlh0psgFIno8bkYiaWDzricwd7AuicMPHo9F7ZjiaexCf8yO9kHHFS54z2YKicqkblhMD8YpGQmSUQl6sw/0?wx_fmt=jpeg',
					'Url' => 'http://mp.weixin.qq.com/s?__biz=MjM5OTEzMTkwOQ==&mid=211993258&idx=1&sn=721789de8427242f0f96e35458eeb237&scene=18#rd' 
			);
			$resultStr = response_image ( $userObj, $newsContent );
			break;
		case "jyd" :
			$newsContent = "您是属于：
0、患有不同程度的心血管疾病
1、静坐少动/无日常活动或运动/体适能很差者
2、体力活动极少/无运动/体适能较差者
3、偶尔体力活动/无或未达到规律运动/体适能较差或稍差者
4、日常体力活动/规律的中等强度或较大强度运动
5、大量日常体力活动/规律的较大强度运动

请回复上列选择的数字，及您在“测•指标”中的预计最大代谢当量（Mets）和最大心率(次/分)

（格式：1-7-180）";
			$resultStr = response_text ( $userObj, $newsContent );
			break;
		case "cyy" :
			$newsContent = "<a href=\"https://www.hqms.org.cn/usp/roster/index.jsp\">点击进入，查询医院</a>";
			$resultStr = response_text ( $userObj, $newsContent );
			break;
		case "szx" :
			$newsContent = "请回复您想咨询的问题，我们会在第一时间给您回复。";
			$resultStr = response_text ( $userObj, $newsContent );
			break;
		case "bdbs" :
			$newsContent = "请输入相关信息，以绑定心脏卫士，按照下列格式回复：
绑定+姓名+手机号。
（例如：绑定+张三+156XXXXXXXX）
请确保信息完整有效。";
			$resultStr = response_text ( $userObj, $newsContent );
			break;
		case "kwm" :
			$newsContent = array ();
			$newsContent [] = array (
					'Title' => '心脏卫士管理系统',
					'Description' => '',
					'PicUrl' => 'https://mmbiz.qlogo.cn/mmbiz/WqpSdibDCBRkvgUTUH0TPP7XMFLDwNSeKsYAl5aNl3WouqXg82go5qF8Thib7cia0eq0nnL55OJHic9RjibTz0HuADQ/0?wx_fmt=jpeg',
					'Url' => 'http://mp.weixin.qq.com/s?__biz=MjM5OTEzMTkwOQ==&mid=403849671&idx=1&sn=8a977a610e1b0bfa882272f3fd41d15d#rd' 
			);
			$newsContent [] = array (
					'Title' => 'Halents H1mini 智能健康手环',
					'Description' => '',
					'PicUrl' => 'https://mmbiz.qlogo.cn/mmbiz/WqpSdibDCBRkvgUTUH0TPP7XMFLDwNSeKBbSFPD2IX87DtKJlzAoPYicRegMgSO7j7ibkJoxv4ibm8FPp9a14V1uGA/0?wx_fmt=jpeg',
					'Url' => 'http://mp.weixin.qq.com/s?__biz=MjM5OTEzMTkwOQ==&mid=403849671&idx=2&sn=ca6050fb42d24ee508f7eaae6fb45be1#rd' 
			);
			$resultStr = response_image ( $userObj, $newsContent );
			break;
		case "gcp" :
			$newsContent = array ();
			$newsContent [] = array (
					'Title' => '心脏卫士、6分钟步行测试、评估盒子、运动记录APP介绍  ',
					'Description' => '',
					'PicUrl' => 'https://mmbiz.qlogo.cn/mmbiz/WqpSdibDCBRnMq8vEDvnA04aWF3QE6FSwOVIZs50fYdBSibBvQIialYicIRCiaLiaSYmKNLTgYqPaCuTuEhVibW2wkOsA/0?wx_fmt=jpeg',
					'Url' => 'http://mp.weixin.qq.com/s?__biz=MjM5OTEzMTkwOQ==&mid=212034776&idx=1&sn=7f5ceb49f1cac498378e67e8ff5f84be&scene=18#rd' 
			);
			$resultStr = response_image ( $userObj, $newsContent );
			break;
		
        case "gmcp" : 
                      $access_token = getaccessToken(); 
                      $url = "https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token=" . $access_token;

                   $newsContent = "请扫描图中二维码关注心脏卫士公众号以购买相关产品。";
                    $img = '{
                "touser":"' . $userObj->FromUserName . '",
                "msgtype":"image",
                "image":
                     {
                       "media_id":"JuaWhR4TJUsyoEFNlrKMxCOq9z4LPQ589f1MKMWOmIc"
                     }
                 }';

			$result = https_post($url, $img);
                        var_dump($result);
                        $resultStr = response_text ( $userObj, $newsContent );
			break;
		case "xapp" :
			$newsContent = "<a href=\"http://app.qq.com/#id=detail&appid=1102255388\">下载心脏卫士APP</a>
<a href=\"http://app.qq.com/#id=detail&appid=1104844371\">下载6分钟步行测试APP</a>
<a href=\"http://app.qq.com/#id=detail&appid=1104916648\">下载运动记录APP</a>
<a href=\"http://app.qq.com/#id=detail&appid=1104841587\">下载评估盒子APP</a>";
			$resultStr = response_text ( $userObj, $newsContent );
			break;
		case "zxbm" :
			$newsContent = "请输入相关信息，按照下列格式回复：
姓名+性别+手机号+身份证号码+寄送地址。
（例如：张三+男+156XXXXXXXX+32048219560956XXXX+详细地址）
请确保信息完整有效，客服专员后续会与您联系，核实要求，完成后发放手环。";
			$resultStr = response_text ( $userObj, $newsContent );
			break;
			case "gmsh" :
				$newsContent = "<a href=\"http://mp.weixin.qq.com/bizmall/malldetail?id=&pid=pBdn_jjvt6Kuqw__OQw_zHjrxgNk&biz=MjM5OTEzMTkwOQ==&scene=&action=show_detail&showwxpaytitle=1#wechat_redirect\">点击购买手环</a>";
				$resultStr = response_text ( $userObj, $newsContent );
				break;
		case "jjjh" :
			$menu = json_decode ( http_get_data ( "http://123.57.143.76:8010/api/qq/planlist?openid=" . $userObj->FromUserName ), false );
			if ($menu->status != "100") {
				$newsContent = $menu->status;
				$resultStr = response_text ( $userObj, $newsContent );
			} else {
				$temp = $menu->results;
				$temp = json_decode ( json_encode ( $temp ), true );
				$newsContent = array ();
				foreach ( $temp as $item ) {
					$telephone = $item ['telephone'];
					$username = $item ['username'];
					$message = json_decode ( json_encode ( $item ['getplans'] ), true );
					$temp = "";
					$newsContent [] = array (
							'Title' => $username . '您好,您的居家计划:',
							'Description' => '',
							'PicUrl' => '',
							'Url' => '' 
					);
					$i = 0;
					foreach ( $message as $item ) {
						$planName = $item ['planName'];
						$getday = $item ['getday'];
						$Dotime = $item ['Dotime'];
						$Type = $item ['Type'];
						switch ($Type) {
							case "1" :
								$Type = "运动";
								$doheartrate = $item ['doheartrate'];
								if ($i == 0) {
									$i = 1;
									$temp = $temp . '类型:' . $Type . ' ' . "\n" . '名称:' . $planName . "\n" . '目标心率:' . $doheartrate . "\n" . '执行时间:' . $getday . ' ' . $Dotime;
								} else {
									$temp = $temp . "\n" . "\n" . '类型:' . $Type . ' ' . "\n" . '名称:' . $planName . "\n" . '目标心率:' . $doheartrate . "\n" . '执行时间:' . $getday . ' ' . $Dotime;
								}
								
								break;
							case "2" :
								$Type = "用药";
								if ($i == 0) {
									$i = 1;
									$temp = $temp . '类型:' . $Type . ' ' . "\n" . '名称:' . $planName . "\n" . '执行时间:' . $getday . ' ' . $Dotime;
								} else {
									$temp = $temp . "\n" . "\n" . '类型:' . $Type . ' ' . "\n" . '名称:' . $planName . "\n" . '执行时间:' . $getday . ' ' . $Dotime;
								}
								break;
						}
					}
					$newsContent [] = array (
							'Title' => $temp,
							'Description' => '',
							'PicUrl' => '',
							'Url' => '' 
					);
				}
			}
            $resultStr = response_image($userObj, $newsContent);
            break;
			
	}
	return $resultStr;
}
function http_get_data($url) {
	$ch = curl_init ();
	curl_setopt ( $ch, CURLOPT_URL, $url );
	curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt ( $ch, CURLOPT_HEADER, 0 );
	
	$tmpInfo = curl_exec ( $ch );
	return $tmpInfo;
}
function https_post($url, $data)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);
    if (curl_errno($ch)) {

        return 'Error' . curl_errno($ch);
    }
    curl_close($ch);
    return $result;
}
?>