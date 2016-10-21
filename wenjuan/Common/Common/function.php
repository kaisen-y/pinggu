<?php
/**
 * 全局公用方法
 */

/**
 *返回当前模块，控制器和操作名
 */
function whereami($lower=false)
{
    $str = MODULE_NAME . '/' . CONTROLLER_NAME . '/' . ACTION_NAME;;
    return $lower?strtolower($str):$str;
}

/**
 * @param $url
 * @param $vars
 * @return string
 */
function U2($url, $vars = '')
{
    if (empty($url)) {
        return U(whereami(), $vars);
    } else {
        $arr = explode('/', $url);
        if (count($arr) < 3) {
            return 'javascript:;';
        } else {
            return U($url, $vars);
        }
    }
}


function getRootPath(){
    return $_SERVER['DOCUMENT_ROOT'];
}


function getDomain($http=true)
{
    return ($http?'http://':'') . $_SERVER['HTTP_HOST'];
}

//TODO 导出


/**导出CSV
 * @param array $data
 *         $data = array(array('name'='xxx','order_id'=>xxx),array('name'='xxx','order_id'=>xxx))
 * @param array $field = array('name'=>'名称','order_id'=>'订单号')
 * @param string $filename 报表文件名称
 * @param array $fieldTab  是否加 \t(值太长，会变成科学计数法，值会变）
 */
function export_csv($data = array(),$field = array(),$filename = '',$fieldTab = array()){
    $report_header = '';
    foreach($field as $key=>$val){
        $report_header .=  $val.',';                           // 拼接表头
    }
    $report_header = rtrim($report_header,',')."\r\n";          // 报表表头
    $report_header = iconv('utf-8','gb2312',$report_header); // 编码转换（中文表头）

    $report_data = '';
    foreach($data as $row){
        $row_data = '';
        foreach($field as $key=>$val){
            if(count($fieldTab) > 0 && in_array($key,$fieldTab)){
                $row[$key] = "\t".$row[$key];
            }

            $row_data .= iconv('utf-8','gb2312',str_replace(",","_",str_replace("\n","",str_replace("\r\n","",$row[$key])))); // 编码转换
            $row_data .= ',';
        }
        $report_data .= rtrim($row_data,',')."\r\n";
    }
    $export_data = $report_header . $report_data;
    if(empty($filename)){
        $filename = 'report_order';
    }
    $filename = $filename.'_' . date('YmdHis').'.csv';

    // 导出csv
    header("Content-type:text/csv");
    header("Content-Disposition:attachment;filename=".$filename);
    header('Cache-Control:must-revalidate,post-check=0,pre-check=0');
    header('Expires:0');
    header('Pragma:public');
    echo $export_data;

}

function toPercent($num){
	if(empty($num)) {
		return '';
	}else{
		return floatval(sprintf("%01.2f", $num * 100)) . '%';
	}
}

/**
 * 验证手机号码
 * @param int $mobile
 * @return number
 */
function isMobile($mobile){
	return preg_match('/^1[3456789][0-9]{9}$/',$mobile);
}

/**
 * 隐藏中间字串
 * @param unknown $str
 * @param number $startLen
 * @param number $endLen
 * @return mixed
 */
function hideMidStr($str,$startLen=4,$endLen=4){
	$len = strlen($str)-$startLen-$endLen;
	return substr_replace($str,str_repeat('*',$len),$startLen,$len);
}

/**
 * 返回大写人民币
 * @param Int $ns
 * @return mixed
 */
function cny($ns) {
	static $cnums=array("零","壹","贰","叁","肆","伍","陆","柒","捌","玖"),
	$cnyunits=array("圆","角","分"),
	$grees=array("拾","佰","仟","万","拾","佰","仟","亿");
	list($ns1,$ns2)=explode(".",$ns,2);
	$ns2=array_filter(array($ns2[1],$ns2[0]));
	$ret=array_merge($ns2,array(implode("",_cny_map_unit(str_split($ns1),$grees)),""));
	$ret=implode("",array_reverse(_cny_map_unit($ret,$cnyunits)));
	return str_replace(array_keys($cnums),$cnums,$ret);
}

function _cny_map_unit($list,$units) {
	$ul=count($units);
	$xs=array();
	foreach (array_reverse($list) as $x) {
		$l=count($xs);
		if ($x!="0" || !($l%4)) $n=($x=='0'?'':$x).($units[($l-1)%$ul]);
		else $n=is_numeric($xs[0][0])?$x:'';
		array_unshift($xs,$n);
	}
	return $xs;
}

/** 保留小数点倍数（默认2位） */
function numFormat($num,$digit = 2){
	if(empty($num)) {
		return '0.00';
	}else{
		$p= stripos($num, '.');
		return substr($num,0,$p+$digit+1);
	}
}

