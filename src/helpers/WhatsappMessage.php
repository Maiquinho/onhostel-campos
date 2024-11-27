<?php

namespace src\helpers;

/**
 * Cria uma mensagem de whatsapp personalizada
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class WhatsappMessage {

    /**
     * Gera uma mensagem genérica e plural de envio para o whatsapp 
     * 
     * @access public
     * @param String $phone
     * @param String $companyName
     * @param String $customMessage
     * @return String
    */

    public static function generatePlural($phone, $companyName, $customMessage = null) {
        $baseURI = "https://api.whatsapp.com/send?phone=$phone&text=";
        $defaultMessage = "Olá, vi seu site e gostaria de saber mais sobre os produtos da $companyName";

        if(!empty($customMessage)){
            return $baseURI . $customMessage;
        }

        return $baseURI . $defaultMessage;
    }


    /**
     * Gera uma mensagem específica e singular de envio para o whatsapp 
     * 
     * @access public
     * @param String $phone
     * @param String $product
     * @param String $companyName
     * @param String $customMessage
     * @return String
    */

    public static function generateSingular($phone, $product, $companyName, $customMessage = null) {
        $baseURI = "https://api.whatsapp.com/send?phone=$phone&text=";
        $defaultMessage = "Olá, vi seu site e gostaria de saber mais sobre o produto: $product da $companyName";

        if(!empty($customMessage)){
            return $baseURI . $customMessage;
        }

        return $baseURI . $defaultMessage;
    }

}
