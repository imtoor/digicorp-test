<?php

$arr = [];

function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

function checkTokenLimit($arr, $user) {
    
    if(!array_key_exists($user, $arr)) {
        return false;
    }
    
    if(count($arr[$user]) >= 10) {
        return true;
    }
    
    return false;
}

function generate($user, $showCurrentToken = false) {
    global $arr; // because cannot read variable outside function
    
    $token = generateRandomString();
    
    if(checkTokenLimit($arr, $user)) {
        array_splice($arr[$user], 0, 1);
    }
    
    $arr[$user][] = $token;
    
    if($showCurrentToken) return $token;
}

function verify_token($user, $token) {
    global $arr;
    
    if(!array_key_exists($user, $arr)) {
        return false;
    }
    
    for($i=0;$i <= count($arr[$user]); $i++) {
        if($arr[$user][$i] === $token) {
            array_splice($arr[$user], $i, 1);
            return true;
        }
    }
    
    return false;
}

generate("aldi");
generate("aldi");
generate("aldi");
generate("aldi");

$currentToken = generate("aldi", true);
echo verify_token("aldi", $currentToken)."<br/>";
echo "deleted token: ".$currentToken."<br/>";

generate("aldi");
generate("aldi");
generate("aldi");
generate("aldi");
generate("aldi");
echo generate("aldi", true);

echo "<pre>";
print_r($arr);
echo "</pre>";
