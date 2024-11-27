<?php

namespace src\helpers;

use src\handlers\ConfigHandler;
use stdClass;

/**
 * Classe relacionada a lingua da aplicação
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class Language {

    /**
     * Pega a lingua da aplicação
     * 
     * @access public
     * @return bool
    */

    public static function getLanguage() {

        $data = ConfigHandler::get('language');

        return !empty($data) ? json_decode($data->configValue)->language : new stdClass();

    }

}
