<?php

namespace src\helpers;


/**
 * Classe relacionada a validação de urls
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class UrlValidator {

    /**
     * Verifica se a url atual é a mesma do que esperada
     * 
     * @access public
	 * @param string $currentUrl
	 * @param string $validUrl
     * @return bool
    */

    public static function isCurrentUrlValid($url_atual, $url_valida) {
        $padrao = '/^' . preg_quote($url_valida, '/') . '$/';
        return (bool) preg_match($padrao, $url_atual);
    }

}