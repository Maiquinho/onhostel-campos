<?php

namespace src\handlers;

/**
 * Classe para tratamento dos dados do server
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class ServerHandler {

    /**
     * Pega a url canonica da aplicação
     * 
     * @access public
     * @return String|Null
    */

    public static function getCanonicalUrl(){

        $proto = (isset($_SERVER['HTTPS']) === true) ? 'https' : 'http';

        return $proto . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    }

}
