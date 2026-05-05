<?php

$string = "MonuKumar";

$rev = '';
$lenght = 0;

while(isset($string[$lenght])){
    $lenght++;
}

for($i=$lenght-1;$i>=0;$i--){
    $rev.=$string[$i];
}

echo $rev;