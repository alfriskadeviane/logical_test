<?php
function hasilbagi($bilangan, $pembagi){
    while ($bilangan-$pembagi >= $pembagi){
        $bilangan=$bilangan-$pembagi;
        // echo $bilangan;
    };
    echo "$bilangan";
    // if($bilangan-$pembagi>=$pembagi){
    //     $bilangan=$bilangan-$pembagi;

    // }
    // else{
    //     echo "$bilangan";
    // }
}

hasilbagi(7,2);
