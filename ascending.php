<?php

$array = array(5, 2, 9, 1, 5, 6);

$n = count($array);

for($i=0; $i<$n-1; $i++){
    for($j=0; $j<$n-$i-1; $j++){
        if($array[$j] > $array[$j+1]){
            // Swap
            $temp = $array[$j];
            $array[$j] = $array[$j+1];
            $array[$j+1] = $temp;
        }
    }
}
echo "Sorted array: ";
print_r($array);
?>