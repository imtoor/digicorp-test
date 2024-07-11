<?php

function countChar($text, $char) {
    
    $count = 0;
    $split = str_split($text);
    
    foreach($split as $s) {
        if($s == $char) {
            $count++;
        }
    }
    
    return $count;
}

echo "Jumlah o dalam kata 'donut coklat' adalah: ".countChar("donut coklat", "o");