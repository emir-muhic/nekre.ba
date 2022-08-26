<?php

function toPrice($cijena){

    $tmp = (float) $cijena;

    if($tmp == 0){
        return $cijena;
    } else{
        $cijena = $cijena . " KM";
        return $cijena;
    }
}

function urlToImg($slika){ 
    $imeSlike = substr($slika, strpos($slika, "/") + 1);
    $imeSlike = substr($imeSlike, strpos($imeSlike, "/") + 1);
    return $imeSlike;
}