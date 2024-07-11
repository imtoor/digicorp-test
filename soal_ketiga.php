<?php

$arr = ['merah', 'kuning', 'hijau'];
$state = 0;

function rambuLaluLintas() {
    global $arr, $state;
    
    if($state === count($arr)) {
        $state = 0;
    }
    
    $state++;
    return $arr[$state - 1];
}

for($i = 0; $i <= 4; $i++) {
    echo rambuLaluLintas()."<br/>";
}