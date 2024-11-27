<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\PageHandler;
use \src\handlers\LoginHandler;
use src\helpers\UrlFormat;

/**
 * Controller das Páginas de SEO
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class PageController extends Controller {

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
        if($this->loggedUser->permissions != 0){
            $this->redirect('admin/login');
        }
    }


    /**
     * Renderiza a lista de páginas de SEO
     * 
     * @access public
     * @return void
    */

    public function index(){

        $deletedPageMessage = null;
        $addedPageMessage = null;
        $editedPageMessage = null;

        if(!empty($_SESSION['deleted_page'])){
            $deletedPageMessage = $_SESSION['deleted_page'];
            $_SESSION['deleted_page'] = '';   
        }
        if(!empty($_SESSION['added_page'])){
            $addedPageMessage = $_SESSION['added_page'];
            $_SESSION['added_page'] = '';   
        }
        if(!empty($_SESSION['edited_page'])){
            $addedPageMessage = $_SESSION['edited_page'];
            $_SESSION['edited_page'] = '';   
        }

        $pages = PageHandler::getAll(false);
        $this->render('pages/admin', 'pages', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'pages',
            'pages' => $pages,
            'deletedPageMessage' => $deletedPageMessage,
            'addedPageMessage' => $addedPageMessage,
            'editedPageMessage' => $editedPageMessage
        ]);

    }


    /**
     * Renderiza a tela de cadastro de uma nova página de SEO
     * 
     * @access public
     * @return void
    */

    public function newPage(){

        $this->render('pages/admin', 'pages_new', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'page_new',
        ]);
        
    }


    /**
     * Responsável por tratar o action de uma nova página de SEO
     * 
     * @access public
     * @return void
    */

    public function newPageAction(){

        if(!empty($_POST) && !empty($_FILES)){
            $_POST['slug'] = UrlFormat::getFormatedUrl($_POST['slug']);
            PageHandler::insert($_POST, $_FILES);
            $_SESSION['added_page'] = 'Página <a href="'. $this->getBaseUrl() . 'admin/pages/' . $_POST['slug'] . '/' .'" class="text-decoration-underline text-success" target="_blank">'. $_POST['slug'] .'</a> adicionada com sucesso!';
        }

        $this->redirect('admin/pages');

    }


    /**
     * Renderiza o conteúdo da página de SEO baseando-se na slug
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function getPage($args){

        $page = PageHandler::get($args['slug'], false);
        if($page === false){
            $this->redirect('admin/pages');
        }

        $this->render('pages/admin', 'page', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'pages',
            'page' => $page
        ]);
        
    }


    /**
     * Renderiza a tela de edição da página de SEO baseando-se na slug
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function editPage($args){

        $page = PageHandler::get($args['slug'], false); 
        if($page === false){
            $this->redirect('admin/pages');
        }

        $this->render('pages/admin', 'pages_edit', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'page_edit',
            'page' => $page
        ]);
        
    }


    /**
     * Responsável por tratar o action da página de SEO editada
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function editPageAction($args){

        if(!empty($args['slug']) && !empty($_POST)){
            $_POST['company'] = (empty($_POST['company'])) ? NULL : $_POST['company'];
            PageHandler::update($args['slug'], $_POST, $_FILES);
            $_SESSION['edited_page'] = 'Página ' . $args['slug'] . ' editado com sucesso!';
        }

        $this->redirect('admin/pages');

    }


    /**
     * Responsável por deletar a página de SEO desejada baseando-se na slug
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function deletePage($args){

        if(!empty($args['slug'])){
            PageHandler::delete($args['slug']);
            $_SESSION['deleted_page'] = 'Página ' . $args['slug'] . ' deletada com sucesso!';
            $this->redirect('admin/pages');
        }

        $this->redirect('admin/pages');
        
    }

}