<?php
namespace core;

class Api extends Controller {

    /**
     * Coleta o método da requisição
     * 
     * @access protected
    */

    protected $requestMethod;

    /**
     * Dados da requisição
     * 
     * @access protected
    */

    protected $data;


    /**
     * Define o método da requisição a cada nova requisição
     * 
     * @access public
     * @return void
    */

    public function __construct(){

        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: *');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Request-With');

        $this->requestMethod = strtolower($_SERVER['REQUEST_METHOD']);
        
    }


}