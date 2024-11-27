<?php
namespace src\controllers;

use \core\Controller;

class ErrorController extends Controller {

    public function index() {
        
        header("HTTP/1.0 404 Not Found");

        if(strpos($_SERVER['REQUEST_URI'], 'admin/') !== false){
            $this->render('pages/admin', '404', ['pageId' => '404']);
        }else{
            $this->render('pages/site', '404', ['pageId' => '404']);
        }


    }

    public function methodNotAllowed(){
        
        header('HTTP/1.0 405 Method not Allowed');

        $this->render('pages/site', '405', ['pageId' => '405']);
    
    }

    public static function notFound404(){

        $controller = new Controller();

        header("HTTP/1.0 404 Not Found");
        
        if(strpos($_SERVER['REQUEST_URI'], 'admin/') !== false){
            $controller->render('pages/admin', '404', ['pageId' => '404']);
        }else{
            $controller->render('pages/site', '404', ['pageId' => '404']);
        }

        exit;

    }

}