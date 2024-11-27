<?php

namespace src\helpers;


/**
 * Classe relacionada a formatação de telefones
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class PhoneFormat {

    /**
     * Formata telefone fixo
     * 
     * @access public
     * @return bool
    */

    public static function getUnmaskedPhone($phoneNumber) {

        if(!empty($phoneNumber)){
            
            $unmaskedPhoneNumber = str_replace(['(', ')', '-', '11 ', ' '], ['', '', '', '5511 ', ''], $phoneNumber);
            
            return $unmaskedPhoneNumber;
        }

        return false;

    }

}
