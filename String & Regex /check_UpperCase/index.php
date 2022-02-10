<?php

function isFirstLetterUpperCase($str){
    $regxp = '/^[A-Z]/';
    if (preg_match($regxp,$str)){
        echo " String's first character is uppercase";
    }
    else{
        echo " String's first character is not uppercase";
    }
}

isFirstLetterUpperCase("abc");