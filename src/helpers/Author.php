<?php

namespace src\helpers;

use src\handlers\ConfigHandler;

/**
 * Classe para tratamento dos dados do autor da aplicação
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class Author {

    /**
     * Pega o nome do autor
     * 
     * @access public
     * @return String|Null
    */

    public static function getName() {

        $data = ConfigHandler::get('author');

        if(!empty($data)){
            return json_decode($data->configValue)->author_name;
        }

        return null;

    }


    /**
     * Pega o domínio do autor 
     * 
     * @access public
     * @return Object
    */

    public static function getDomain() {

        $data = ConfigHandler::get('author');

        if(!empty($data)){
            return json_decode($data->configValue)->author_url;
        }

        return null;

    }

}
