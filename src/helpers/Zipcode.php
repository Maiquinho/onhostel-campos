<?php

namespace src\helpers;

/**
 * Classe para tratamento de CEPs
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class Zipcode {

    /**
     * Formata o CEP no padrão dos correios
     * 
     * @access public
     * @param String|Int
     * @return String|Null
    */

    public static function format($zipcode) {
        
        return strpos($zipcode, '-') === false ? substr_replace($zipcode, '-', -3, 0) : $zipcode;

    }

}
