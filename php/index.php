<?php

$name = 'AnnieSenchenkoРфіппф';

function rewrite($name){
    $pattern = '/\p{Lu}\p{Ll}+/u';
    $arr = array();
    preg_match_all($pattern, $name, $arr);
    return $arr[0][0].' '.$arr[0][1];   
}

echo rewrite($name);