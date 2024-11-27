<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\BannerHandler;
use \src\handlers\LoginHandler;



/**
 * Controller dos Banners
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class BannerController extends Controller {

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
     * Renderiza a lista de banners
     * 
     * @access public
     * @return void
    */

    public function index(){

        $deletedBannerMessage = null;
        $addedBannerMessage = null;
        $editedBannerMessage = null;

        if(!empty($_SESSION['deleted_banner'])){
            $deletedBannerMessage = $_SESSION['deleted_banner'];
            $_SESSION['deleted_banner'] = '';   
        }
        if(!empty($_SESSION['added_banner'])){
            $addedBannerMessage = $_SESSION['added_banner'];
            $_SESSION['added_banner'] = '';   
        }
        if(!empty($_SESSION['edited_banner'])){
            $addedBannerMessage = $_SESSION['edited_banner'];
            $_SESSION['edited_banner'] = '';   
        }

        $banners = BannerHandler::getAll();
        $this->render('pages/admin', 'banners', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'banners',
            'banners' => $banners,
            'deletedBannerMessage' => $deletedBannerMessage,
            'addedBannerMessage' => $addedBannerMessage,
            'editedBannerMessage' => $editedBannerMessage
        ]);

    }


    /**
     * Renderiza a tela de cadastro de um novo banner
     * 
     * @access public
     * @return void
    */

    public function newBanner(){

        $this->render('pages/admin', 'banners_new', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'banner_new',
        ]);
        
    }


    /**
     * Responsável por tratar o action do novo banner cadastrado
     * 
     * @access public
     * @return void
    */

    public function newBannerAction(){

        if(!empty($_POST) && !empty($_FILES)){
            BannerHandler::insert($_POST, $_FILES);
            $_SESSION['added_banner'] = 'Banner adicionado com sucesso!';
        }

        $this->redirect('admin/banners');

    }


    /**
     * Renderiza o banner de acordo com o id
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function getBanner($args){

        $banner = BannerHandler::get($args['id']);
        if($banner === false){
            $this->redirect('admin/banners');
        }

        $this->render('pages/admin', 'banner', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'banners',
            'banner' => $banner
        ]);
        
    }


    /**
     * Renderiza a tela de edição do banner desejado de acordo com o id
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function editBanner($args){

        $banner = BannerHandler::get($args['id']); 
        if($banner === false){
            $this->redirect('admin/banners');
        }

        $this->render('pages/admin', 'banners_edit', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'banner_edit',
            'banner' => $banner
        ]);
        
    }


    /**
     * Responsável por tratar o action do banner editado
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function editBannerAction($args){

        if(!empty($args['id']) && !empty($_POST)){
            BannerHandler::update($args['id'], $_POST, $_FILES);
            $_SESSION['edited_banner'] = 'Banner ' . $args['id'] . ' editado com sucesso!';
        }

        $this->redirect('admin/banners');

    }


    /**
     * Responsável por deletar o banner desejado de acordo com o id
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function deleteBanner($args){

        if(!empty($args['id'])){
            BannerHandler::delete($args['id']);
            $_SESSION['deleted_banner'] = 'Banner ' . $args['id'] . ' deletado com sucesso!';
            $this->redirect('admin/banners');
        }

        $this->redirect('admin/banners');
        
    }

}