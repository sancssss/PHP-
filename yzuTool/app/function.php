<?
/*url代表目标网址  post为需要发送的内容 num为发送方式
send_info是为了得到cookie
**/
function get_cookie($url,$post,$num) { 

    $curl = curl_init();//初始化curl模块 
    curl_setopt($curl, CURLOPT_URL, $url);//登录提交的地址 
    curl_setopt($curl, CURLOPT_HEADER, 1);//是否显示头信息 
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);//是否自动显示返回的信息 
 //   curl_setopt($curl, CURLOPT_COOKIEJAR, $cookie); //设置Cookie信息保存在指定的文件中 
    curl_setopt($curl, CURLOPT_POST, $num);//post方式提交 
    curl_setopt($curl, CURLOPT_POSTFIELDS,$post);//要提交的信息 
    $content = curl_exec($curl);//执行cURL 
	preg_match('/Set-Cookie:(.*);/iU',$content,$str); //正则匹配
    $cookie = $str[1]; //获得COOKIE（SESSIONID）
    curl_close($curl);//关闭cURL资源，并且释放系统资源 
	return $cookie;
} 

//登录成功后获取数据 URL为获取数据网址，cookie为已得到的cookie信息 num为发送方式 return是否返回
//返回抓到的页面 
function get_content($url, $cookie,$return=0,$post=NULL,$num=1) { 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_ENCODING, "UTF-8");	
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_COOKIE, $cookie); //读取cookie
	curl_setopt($ch, CURLOPT_POST, $num);//post方式提交 
    curl_setopt($ch, CURLOPT_POSTFIELDS,$post);//要提交的信息 
    $rs = curl_exec($ch); //执行cURL抓取页面内容 

	if($return == 1){ 
	return $rs;	
	}
	curl_close($ch);
}


/**
* 产生随机字符串
*
* @param int $length 输出长度
* @param string $chars 可选的 ，默认为 0123456789
* @return string 字符串
*/
function random($length, $chars = '0123456789') {
$hash = '';
$max = strlen($chars) - 1;
for($i = 0; $i < $length; $i++) {
$hash .= $chars[mt_rand(0, $max)];
}
return $hash;
}


?>