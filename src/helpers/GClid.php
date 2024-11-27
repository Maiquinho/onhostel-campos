<?php

namespace src\helpers;

class GClid {

  // Pega o código GClid

  public static function getCode(){

    $url = $_SERVER['REQUEST_URI'];
    $gclid = null;

    if(strpos($url, 'gclid=')){
        $gclid = explode('gclid=', $url)[1];
    }

    return $gclid;

  }

}