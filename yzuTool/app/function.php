<?
/*url����Ŀ����ַ  postΪ��Ҫ���͵����� numΪ���ͷ�ʽ
send_info��Ϊ�˵õ�cookie
**/
function get_cookie($url,$post,$num) { 

    $curl = curl_init();//��ʼ��curlģ�� 
    curl_setopt($curl, CURLOPT_URL, $url);//��¼�ύ�ĵ�ַ 
    curl_setopt($curl, CURLOPT_HEADER, 1);//�Ƿ���ʾͷ��Ϣ 
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);//�Ƿ��Զ���ʾ���ص���Ϣ 
 //   curl_setopt($curl, CURLOPT_COOKIEJAR, $cookie); //����Cookie��Ϣ������ָ�����ļ��� 
    curl_setopt($curl, CURLOPT_POST, $num);//post��ʽ�ύ 
    curl_setopt($curl, CURLOPT_POSTFIELDS,$post);//Ҫ�ύ����Ϣ 
    $content = curl_exec($curl);//ִ��cURL 
	preg_match('/Set-Cookie:(.*);/iU',$content,$str); //����ƥ��
    $cookie = $str[1]; //���COOKIE��SESSIONID��
    curl_close($curl);//�ر�cURL��Դ�������ͷ�ϵͳ��Դ 
	return $cookie;
} 

//��¼�ɹ����ȡ���� URLΪ��ȡ������ַ��cookieΪ�ѵõ���cookie��Ϣ numΪ���ͷ�ʽ return�Ƿ񷵻�
//����ץ����ҳ�� 
function get_content($url, $cookie,$return=0,$post=NULL,$num=1) { 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_ENCODING, "UTF-8");	
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_COOKIE, $cookie); //��ȡcookie
	curl_setopt($ch, CURLOPT_POST, $num);//post��ʽ�ύ 
    curl_setopt($ch, CURLOPT_POSTFIELDS,$post);//Ҫ�ύ����Ϣ 
    $rs = curl_exec($ch); //ִ��cURLץȡҳ������ 

	if($return == 1){ 
	return $rs;	
	}
	curl_close($ch);
}


/**
* ��������ַ���
*
* @param int $length �������
* @param string $chars ��ѡ�� ��Ĭ��Ϊ 0123456789
* @return string �ַ���
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