<?
//扬大成绩上学期与这学期
	if(@$_GET["is_past"] == 'yes'){
		$chengjiurl = "http://58.192.142.134:7777/pls/wwwbks/bkscjcx.yxkc";
		$get_cjtag = 9;
		$get_xftag = 3;
		//映射模板
		$is_past = 1;
	}else{
		$chengjiurl = "http://58.192.142.134:7777/pls/wwwbks/bkscjcx.curscopre";
		$get_cjtag = 10;
		$get_xftag =4;
	}
	$rs = get_content($chengjiurl,$_SESSION["cookiesave"],1);

	//将内容转换为数组
	$rs = mb_convert_encoding($rs, 'utf-8', 'GBK,UTF-8,ASCII');
	//泪奔的编码
	$rs = explode('<TR>',$rs);
	$rs = str_replace(array("", "/r", "/n"), "", $rs);
	$arr = array();
	for($i=1;$i<count($rs);$i++){
	preg_match_all('/<td width="112" height="20" class=td_biaogexian><p align="center">(.*)(|
)<\/p><\/td>/iU',$rs[$i],$match);
	$arr[] = $match[1];
	}
	

//学科数
$subcount = count($arr);
//学分总
$xuefen = 0;
//学分与成绩乘积之和
$xuefen_chengji = 0;
//成绩总
$chengji = 0;
//$get_cjtag表示不同页面数组下标的不同
for($i=0;$i<$subcount;$i++){
	switch($arr[$i][$get_cjtag]){
		case '及格':
		$arr[$i][$get_cjtag] = 65;
		break;
		case '中等':
		$arr[$i][$get_cjtag] = 75;
		break;
		case '良好':
		$arr[$i][$get_cjtag] = 85;
		break;
		case '优秀':
		$arr[$i][$get_cjtag] = 95;
		break;
		default:
		$arr[$i][$get_cjtag];
	}
	$xuefen += $arr[$i][$get_xftag];
	$chengji += $arr[$i][$get_cjtag];
	$xuefen_chengji += (5 - ((100-$arr[$i][$get_cjtag])/10))*$arr[$i][$get_xftag];
}

	//得到标准算法gpa1
	$gpa1 = $xuefen_chengji/$xuefen;
	@$smarty->assign("is_past", $is_past);	
	$smarty->assign("totalcj", $chengji);
	$smarty->assign("totalxf", $xuefen);
	$smarty->assign("gpa1", $gpa1);
	$smarty->assign("content", $arr);

	?>