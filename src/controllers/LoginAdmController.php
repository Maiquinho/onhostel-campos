<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;


class LoginAdmController extends Controller {

    public function __construct(){
        if(LoginHandler::checkLogin()){
            $this->redirect('admin/');
        }
    }

    public function signin() {

        $errorLogin = null;

        if(!empty($_SESSION['error_login'])){
            $errorLogin = $_SESSION['error_login'];
            $_SESSION['error_login'] = '';   
        }

        $this->render('pages/admin', 'login', ['errorLogin' => $errorLogin]);
    }

    public function signinAction(){
        
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, 'password');

        if($username && $password){

            $token = LoginHandler::verifyLogin($username, $password);

            if($token){
                $_SESSION['token'] = $token;
                $this->redirect('admin/');
            } else {
                $_SESSION['error_login'] = 'Nome de usuário e/ou senha são inválidos.';
                $this->redirect('admin/login');
            }

        } else {
            $_SESSION['error_login'] = 'Digite os campos corretamente!';
            $this->redirect('admin/login');
        }

    }

}