<?php

namespace src\helpers;

use src\handlers\ConfigHandler;
use stdClass;

/**
 * Classe para tratamento dos emails cadastrados na aplicação
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class Email {

    /**
     * Pega o primeiro email do array de emails da empresa
     * 
     * @access public
     * @return object
    */

    public static function getFirst() {

        $data = ConfigHandler::get('email');

        return !empty($data) ? json_decode($data->configValue)->email[0] : new stdClass();

    }


    /**
     * Pega a lista de emails da empresa
     * 
     * @access public
     * @return Array
    */

    public static function getAll() {

        $data = ConfigHandler::get('email');

        return !empty($data) ? json_decode($data->configValue)->email : [];

    }

}
