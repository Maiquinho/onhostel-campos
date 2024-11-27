<?php

namespace src\helpers;


/**
 * Classe relacionada a formatação de urls
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class UrlFormat {

    /**
     * Devolve uma string em formato de url ou false se o parâmetro estiver vazio 
     * 
     * @access public
	 * @param string $id
     * @return String|Null
    */

    public static function getFormatedUrl($string) {

        if(!empty($string)){
            
            $formatedUrl = strtolower(str_replace(
                ['ç', 'Ç', 'ã', 'Ã', 'â', 'Â', 'á', 'Á', 'à', 'À', 'ê', 'Ê', 'é', 'É', 'í', 'Í', 'ô', 'Ô', 'õ', 'Õ', 'ó', 'Ó', 'ú', 'Ú', '(', ')', ' ', '--', '-–-', ',', '/', ' - '], 
                ['c', 'c', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'e', 'e', 'e', 'e', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', '-', '', '-', '-', '-', '', '-', '-'], 
                $string)
            );
            
            return $formatedUrl;
            
        }

        return null;

    }


    /**
     * Devolve uma url em formato de texto
     * 
     * @access public
	 * @param String $url
     * @return String
    */

    public static function urlToText(string $url) {

        $urlFormated = str_replace(
            ['_', '__', '-'],
            [' ', ' ', ' '],
            $url
        );
    
        
        $urlFormated = mb_strtolower($urlFormated);
        $urlFormated = ucfirst($urlFormated);
    
        return $urlFormated;

    }

}