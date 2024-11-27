<?php

namespace src\handlers;

use src\models\Config;
use stdClass;

/**
 * Acionadores dos dados de configurações
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class ConfigHandler {

    /**
     * Pega todas os dados das configurações
     * 
     * @access public
     * @return Array
    */

    public static function getAll() {

        $data = Config::select()->get();

        if($data && count($data) > 0){

            $configs = [];

            foreach($data as $dataItem){

                $config = new Config();
                $config->id = $dataItem['id'];
                $config->configName = $dataItem['config_name'];
                $config->configValue = $dataItem['config_value'];

                $configs[] = $config;
                
            }

            return $configs;
            
        }

        return [];

    }


    /**
     * Pega um item específico da tabela config
     * 
     * @access public
     * @param String $configName
     * @return Object
    */

    public static function get($configName) {

        $data = Config::select()
            ->where('config_name', $configName)
        ->one();


        if ($data && count($data) > 0) {

            $config = new Config();
            $config->id = $data['id'];
            $config->configName = $data['config_name'];
            $config->configValue = $data['config_value'];

            return $config;
        }

        return new stdClass();

    }

}
