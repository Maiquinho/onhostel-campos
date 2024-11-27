<?php

namespace src\helpers;


/**
 * Classe relacionada a segurança das senhas
 * 
 * @author Michael Matheus
 * @version 2.2
 * @access public
*/

class Password {

    /**
     * Devolve a senha em formato password hash
     * 
     * @access public
	 * @param String $id
     * @return String|Null
    */

    public static function encrypt($password) {

        return !empty($password) ? password_hash($password, PASSWORD_DEFAULT) : null;

    }

}