<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\GalleryHandler;
use \src\handlers\LoginHandler;

/**
 * Controller das Galerias
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class GalleryController extends Controller {

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
     * Renderiza a lista de galerias
     * 
     * @access public
     * @return void
    */

    public function index(){

        $deletedGalleryMessage = null;
        $addedGalleryMessage = null;
        $editedGalleryMessage = null;

        if(!empty($_SESSION['deleted_gallery'])){
            $deletedGalleryMessage = $_SESSION['deleted_gallery'];
            $_SESSION['deleted_gallery'] = '';   
        }
        if(!empty($_SESSION['added_gallery'])){
            $addedGalleryMessage = $_SESSION['added_gallery'];
            $_SESSION['added_gallery'] = '';   
        }
        if(!empty($_SESSION['edited_gallery'])){
            $addedGalleryMessage = $_SESSION['edited_gallery'];
            $_SESSION['edited_gallery'] = '';   
        }

        $galleries = GalleryHandler::getAll(false);
        $this->render('pages/admin', 'galleries', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'galleries',
            'galleries' => $galleries,
            'deletedGalleryMessage' => $deletedGalleryMessage,
            'addedGalleryMessage' => $addedGalleryMessage,
            'editedGalleryMessage' => $editedGalleryMessage
        ]);

    }


    /**
     * Renderiza a tela de cadastro de uma nova galeria
     * 
     * @access public
     * @return void
    */

    public function newGallery(){

        $this->render('pages/admin', 'galleries_new', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'asset_new',
        ]);
        
    }


    /**
     * Responsável por tratar o action da nova galeria cadastrada
     * 
     * @access public
     * @return void
    */

    public function newGalleryAction(){

        if(!empty($_POST)){
            GalleryHandler::insert($_POST);
            $_SESSION['added_gallery'] = 'Galeria adicionada com sucesso!';
        }

        $this->redirect('admin/galleries');

    }


    /**
     * Renderiza a galeria de acordo com o id
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function getGallery($args){

        $asset = GalleryHandler::get($args['id']);
        if($asset === false){
            $this->redirect('admin/gallery');
        }

        $this->render('pages/admin', 'gallery', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'gallery',
            'asset' => $asset
        ]);
        
    }


    /**
     * Renderiza a tela de edição da galeria desejada de acordo com o id
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function editGallery($args){

        $asset = GalleryHandler::get($args['id']); 
        if($asset === false){
            $this->redirect('admin/galleries');
        }

        $this->render('pages/admin', 'galleries_edit', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'asset_edit',
            'asset' => $asset
        ]);
        
    }


    /**
     * Responsável por tratar o action da galeria editada
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function editGalleryAction($args){

        if(!empty($args['id']) && !empty($_POST)){
            GalleryHandler::update($args['id'], $_POST);
            $_SESSION['edited_gallery'] = 'Galeria ' . $args['id'] . ' editada com sucesso!';
        }

        $this->redirect('admin/galleries');

    }


    /**
     * Responsável por deletar a galeria desejada de acordo com o id
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function deleteGallery($args){

        if(!empty($args['id'])){
            GalleryHandler::delete($args['id']);
            $_SESSION['deleted_gallery'] = 'Galeria ' . $args['id'] . ' deletada com sucesso!';
            $this->redirect('admin/galleries');
        }

        $this->redirect('admin/galleries');
        
    }

}