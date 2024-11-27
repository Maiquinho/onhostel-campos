<?php

namespace src\handlers;


/**
 * Validador de campos vazios
 * 
 * @author Michael Matheus
 * @version 1.1
 * @access public
*/

class EmptyFieldHandler {


    /**
     * Verifica se o algum valor enviado por post é vazio, o transforma em NULO e o devolve
     * 
     * @access public
     * @return Array
    */

    public static function setNull($fields){

        foreach($fields as $fieldKey => &$field){
            if(empty($field)){
                $field = NULL;
            }
        }

        unset($field);

        return $fields;

    }

}
