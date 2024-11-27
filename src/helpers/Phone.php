<?php

namespace src\helpers;

use src\handlers\ConfigHandler;
use stdClass;

/**
 * Classe para tratamento dos telefones cadastrados na aplicação
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class Phone {

    /**
     * Pega o primeiro telefone do array de telefones
     * 
     * @access public
     * @param bool $mobile
     * @return object
    */

    public static function getFirst($mobile = false) {

        $data = ConfigHandler::get('phones');

        if($mobile){
            return !empty($data) ? json_decode($data->configValue)->mobiles[0] : new stdClass();
        }
        
        return !empty($data) ? json_decode($data->configValue)->phones[0] : new stdClass();

    }


    /**
     * Pega a lista de telefones da empresa
     * 
     * @access public
     * @return Array
    */

    public static function getAll($mobiles = false) {

        $data = ConfigHandler::get('phones');
        
        if($mobiles){
            return !empty($data) ? json_decode($data->configValue)->mobiles : [];
        }
        
        return !empty($data) ? json_decode($data->configValue)->phones : [];

    }

}
