<?php
function checkName($name){
    $pattern = "/^{1,}\-[CAP]{4,}\-[0123456789]{1,}\-[GHIJKL]$/";
    if ( preg_match($name,$pattern)){
        echo " Ten lop khong hop le";
    }
    else{
        echo " Ten lop khong hop le ";
    }
}

checkName("C0318G");