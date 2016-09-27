<?php

$name = 'AnnieSenchenko';

function rewrite($name){
    $pattern = '#([A-Z][^A-Z]*)#';
    $array = preg_split($pattern, $name, null, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
    return $array[0].' '.$array[1];    
}

echo rewrite($name);