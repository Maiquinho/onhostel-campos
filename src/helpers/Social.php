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

class Social {

    /**
     * Pega os dados da rede social de acordo com o argumento passado
     * 
     * @access public
     * @param String|Null $socialName
     * @return Object
    */

    public static function get($socialName = null) {
        
        $data = ConfigHandler::get('social');

        if(!empty($data) && !empty($socialName)){

            $socialDataArray = json_decode($data->configValue)->social;

            $socialDataArrayFiltered = array_filter(array_values($socialDataArray), function($item) use (&$socialName){
                return $item->name == $socialName;
            });

            $socialDataArrayWithSortKeys = array_map(fn($item) => $item, $socialDataArrayFiltered, []);


            if(!empty($socialDataArrayWithSortKeys)){
                return $socialDataArrayWithSortKeys[0];
            }


            return new stdClass();

        }

        return $socialName;

    }


    /**
     * Pega a lista de endereços da empresa
     * 
     * @access public
     * @return Array
    */

    public static function getAll() {

        $data = ConfigHandler::get('social');

        return !empty($data) ? json_decode($data->configValue)->social : [];

    }

}
