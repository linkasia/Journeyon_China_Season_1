    
<?php 
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
 
 
?>