<?php

function factorial($n){
    if($n<=1){
        return 1;
    }else{
        return $n*factorial($n-1);
    }
}

echo factorial(6);


$num = 3;
$fact = 1;

for($i=1;$i<=$num;$i++){
    $fact *=$i;
}

echo $fact;