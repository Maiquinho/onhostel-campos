<?php

namespace src\helpers;

use src\handlers\ConfigHandler;
use stdClass;

/**
 * Classe para tratamento dos dados da empresa cadastrada na aplicação
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class Company {

    /**
     * Pega o nome resumido da empresa
     * 
     * @access public
     * @return String|Null
    */

    public static function getShortName() {

        $data = ConfigHandler::get('company');

        return !empty($data) ? json_decode($data->configValue)->company_name_short : null;

    }


    /**
     * Pega o nome completo da empresa
     * 
     * @access public
     * @return String|Null
    */

    public static function getFullName() {

        $data = ConfigHandler::get('company');

        return !empty($data) ? json_decode($data->configValue)->company_name_full : null;

    }


    /**
     * Pega o domínio da empresa 
     * 
     * @access public
     * @return String|Null
    */

    public static function getDomain() {

        $data = ConfigHandler::get('company');

        return !empty($data) ? json_decode($data->configValue)->domain : null;

    }


    /**
     * Pega primeiro índice de endereço da empresa
     * 
     * @access public
     * @return Object
    */

    public static function getFirstAddress() {

        $data = ConfigHandler::get('company');

        return !empty($data) ? json_decode($data->configValue)->address[0] : new stdClass();

    }


    /**
     * Pega a lista de endereços da empresa
     * 
     * @access public
     * @return Array
    */

    public static function getAddress() {

        $data = ConfigHandler::get('company');

        return !empty($data) ? json_decode($data->configValue)->address : [];

    }

}
