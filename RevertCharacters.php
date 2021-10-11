<?php

echo revertCharacters("Hey long time no see.");

function revertCharacters($str){
    $result = array();
    $words = explode(' ', $str);
    foreach ($words as $word){
        $result[] = strrev($word) . ' ';
    }
    return implode($result, ' ');
}



