<?php

$array = array(12,12,32,43,43,12,64,74);
$n = count($array);

for($i=0;$i<$n;$i++){
    for($j=0;$j<$n-$i-1;$j++){
        if($array[$j]>$array[$j+1]){
            $temp = $array[$j];
            $array[$j] = $array[$j+1];
            $array[$j+1] = $temp;
        }
    }
}

print_r($array);

?>