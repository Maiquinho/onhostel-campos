<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\PostHandler;
use \src\handlers\LoginHandler;
use src\helpers\UrlFormat;

/**
 * Controller das Posts do Blog
 * 
 * @author Michael Matheus
 * @version 1.5.3
 * @access public
*/

class PostController extends Controller {

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
     * Renderiza a lista de posts do blog
     * 
     * @access public
     * @return void
    */

    public function index(){

        $deletedPostMessage = null;
        $addedPostMessage = null;
        $editedPostMessage = null;

        if(!empty($_SESSION['deleted_post'])){
            $deletedPostMessage = $_SESSION['deleted_post'];
            $_SESSION['deleted_post'] = '';   
        }
        if(!empty($_SESSION['added_post'])){
            $addedPostMessage = $_SESSION['added_post'];
            $_SESSION['added_post'] = '';   
        }
        if(!empty($_SESSION['edited_post'])){
            $addedPostMessage = $_SESSION['edited_post'];
            $_SESSION['edited_post'] = '';   
        }

        $posts = PostHandler::getAll(false);
        $this->render('pages/admin', 'posts', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'posts',
            'posts' => $posts,
            'deletedPostMessage' => $deletedPostMessage,
            'addedPostMessage' => $addedPostMessage,
            'editedPostMessage' => $editedPostMessage
        ]);

    }


    /**
     * Renderiza a tela de cadastro de um novo post do blog
     * 
     * @access public
     * @return void
    */

    public function newPost(){

        $this->render('pages/admin', 'posts_new', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'post_new',
        ]);
        
    }


    /**
     * Responsável por tratar o action de um novo post do blog
     * 
     * @access public
     * @return void
    */

    public function newPostAction(){

        if(!empty($_POST) && !empty($_FILES)){
            $_POST['slug'] = UrlFormat::getFormatedUrl($_POST['slug']);
            PostHandler::insert($_POST, $_FILES);
            $_SESSION['added_post'] = 'Post <a href="'. $this->getBaseUrl() . 'admin/blog/' . $_POST['slug'] . '/' .'" class="text-decoration-underline text-success" target="_blank">'. $_POST['slug'] .'</a> adicionado com sucesso!';
        }

        $this->redirect('admin/blog');

    }


    /**
     * Renderiza o conteúdo do post do blog baseando-se na slug
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function getPost($args){

        $post = PostHandler::get($args['slug'], false);
        if($post === false){
            $this->redirect('admin/blog');
        }

        $this->render('pages/admin', 'post', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'posts',
            'post' => $post
        ]);
        
    }


    /**
     * Renderiza a tela de edição do post do blog baseando-se na slug
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function editPost($args){

        $post = PostHandler::get($args['slug'], false); 
        if($post === false){
            $this->redirect('admin/blog');
        }

        $this->render('pages/admin', 'posts_edit', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'post_edit',
            'post' => $post
        ]);
        
    }


    /**
     * Responsável por tratar o action do post do blog editado
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function editPostAction($args){

        if(!empty($args['slug']) && !empty($_POST)){
            $_POST['company'] = (empty($_POST['company'])) ? NULL : $_POST['company'];
            PostHandler::update($args['slug'], $_POST, $_FILES);
            $_SESSION['edited_post'] = 'Post ' . $args['slug'] . ' editado com sucesso!';
        }

        $this->redirect('admin/blog');

    }


    /**
     * Responsável por deletar o post do blog baseando-se na slug
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function deletePage($args){

        if(!empty($args['slug'])){
            PostHandler::delete($args['slug']);
            $_SESSION['deleted_post'] = 'Post ' . $args['slug'] . ' deletado com sucesso!';
            $this->redirect('admin/blog');
        }

        $this->redirect('admin/blog');
        
    }

}