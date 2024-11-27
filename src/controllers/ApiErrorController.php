<?php
namespace src\controllers;

use \core\Api;

/**
 * Controller de Erros da API
 * 
 * @author Michael Matheus
 * @version 1.5.2
 * @access public
*/

class ApiErrorController extends Api {

    public function index(){
        
        $this->data = [
            'status' => 404,
            'message' => 'Nenhum dado foi encontrado!'
        ];
    
        header('HTTP/1.0 404 No data found');
        echo json_encode($this->data);

    }

    public function methodNotAllowed(){

        $this->data = [
            'status' => 405,
            'message' => "Método {$this->requestMethod} não permitido!"
        ];
    
        header('HTTP/1.0 405 Method not Allowed');
        echo json_encode($this->data);

    }

}