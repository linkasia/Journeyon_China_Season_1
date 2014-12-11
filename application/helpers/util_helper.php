<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*글자수 제한 ...처리*/
function strcut_utf8($str, $len){
     preg_match_all('/[\xE0-\xFF][\x80-\xFF]{2}|./', $str, $match);
     $m = $match[0];
     $slen = mb_strlen($str); // length of source string
     $tail = '...';
     $tlen = $tail; // length of tail string
     if ($slen <= $len) return $str;
     $ret = array();
     $count = 0;
     for ($i=0; $i < $len; $i++){
         $count += (strlen($m[$i]) > 1)?2:1;
 
         if ($count + $tlen > $len) break;
         $ret[] = $m[$i];
     }
     return join('', $ret).$tail;
 } 
 
 function _deg2rad($deg)
 {
 	$radians = 0.0;
 	$radians = $deg * M_PI/180.0;
 	return($radians);
 }
 
 //거리계산
 function geoDistance($lat1, $lon1, $lat2, $lon2, $unit="k")
 {
 	$theta = $lon1 - $lon2;
 	$dist = sin(_deg2rad($lat1)) * sin(_deg2rad($lat2)) + cos(_deg2rad($lat1)) * cos(_deg2rad($lat2)) * cos(_deg2rad($theta));
 	$dist = acos($dist);
 	$dist = rad2deg($dist);
 	$miles = $dist * 60 * 1.1515;
 	$unit = strtolower($unit);
 
 	if ($unit == "k") {
 		return ($miles * 1.609344);
 	} else {
 		return $miles;
 	}
 }
 
?>