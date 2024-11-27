<?php

namespace src\helpers;

class DateFmt {

  // Define a região e como brasil para formatação das datas

  public static function setlocale(){
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
  }

}