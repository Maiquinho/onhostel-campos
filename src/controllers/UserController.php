<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\UserHandler;
use \src\handlers\LoginHandler;

/**
 * Controller dos Usuários
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class UserController extends Controller {

    /**
     * Coleta o usuário logado na sessão
     * 
     * @access private
    */

    private $loggedUser;


    /**
     * Middleware para verificação de login
     * 
     * @access public
     * @return void
    */
    
    public function __construct(){
        $this->loggedUser = LoginHandler::checkLogin();
        if(LoginHandler::checkLogin() === false){
            $this->redirect('admin/login');
        }
    }


    /**
     * Renderiza a lista de usuários
     * 
     * @access public
     * @return void
    */

    public function index(){

        $deletedUserMessage = null;
        $addedUserMessage = null;
        $editedUserMessage = null;

        if(!empty($_SESSION['deleted_user'])){
            $deletedUserMessage = $_SESSION['deleted_user'];
            $_SESSION['deleted_user'] = '';   
        }
        if(!empty($_SESSION['added_user'])){
            $addedUserMessage = $_SESSION['added_user'];
            $_SESSION['added_user'] = '';   
        }
        if(!empty($_SESSION['edited_user'])){
            $addedUserMessage = $_SESSION['edited_user'];
            $_SESSION['edited_user'] = '';   
        }

        $users = UserHandler::getAll(false);
        $this->render('pages/admin', 'users', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'users',
            'users' => $users,
            'deletedUserMessage' => $deletedUserMessage,
            'addedUserMessage' => $addedUserMessage,
            'editedUserMessage' => $editedUserMessage
        ]);

    }


    /**
     * Renderiza a tela de cadastro de um novo usuário
     * 
     * @access public
     * @return void
    */

    public function newUser(){

        $this->render('pages/admin', 'users_new', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'user_new',
        ]);
        
    }


    /**
     * Responsável por tratar o action de um novo usuário cadastrado
     * 
     * @access public
     * @return void
    */

    public function newUserAction(){

        if(!empty($_POST) && !empty($_FILES) && !empty($_POST['password'])){
            UserHandler::insert($_POST, $_FILES);
            $_SESSION['added_user'] = 'Usuário <a href="'. $this->getBaseUrl() . 'admin/users/' . $_POST['username'] . '/' .'" class="text-decoration-underline text-success" target="_blank">'. $_POST['username'] .'</a> adicionado(a) com sucesso!';
        }

        $this->redirect('admin/users');

    }


    /**
     * Renderiza o conteúdo de um usuário de acordo com o username
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function getUser($args){

        $user = UserHandler::get($args['username']);

        if($user === false){
            $this->redirect('admin/users');
        }

        $this->render('pages/admin', 'user', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'users',
            'user' => $user
        ]);
        
    }


    /**
     * Renderiza a tela de edição de um usuário de acordo com o username
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function editUser($args){

        $user = UserHandler::get($args['username'], false); 
        if($user === false){
            $this->redirect('admin/users');
        }

        $this->render('pages/admin', 'users_edit', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'user_edit',
            'user' => $user
        ]);
        
    }


    /**
     * Responsável por tratar o action da página de SEO editada
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function editUserAction($args){

        if(!empty($args['username']) && !empty($_POST)){
            UserHandler::update($args['username'], $_POST, $_FILES);
            $_SESSION['edited_user'] = 'Página ' . $args['username'] . ' editado com sucesso!';
        }

        $this->redirect('admin/users');

    }


    /**
     * Responsável por deletar a página de SEO desejada baseando-se na slug
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function deleteUser($args){

        if(!empty($args['username'])){

            if(UserHandler::get($args['username'])->id == 1){
                $this->redirect('admin/users');
            }

            UserHandler::delete($args['username']);
            $_SESSION['deleted_user'] = 'Página ' . $args['username'] . ' deletada com sucesso!';
            $this->redirect('admin/users');
        }

        $this->redirect('admin/users');
        
    }

}