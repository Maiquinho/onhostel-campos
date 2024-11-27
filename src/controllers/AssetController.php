<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\AssetHandler;
use \src\handlers\LoginHandler;

/**
 * Controller dos Assets
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class AssetController extends Controller {

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
     * Renderiza a lista de assets
     * 
     * @access public
     * @return void
    */

    public function index(){

        $deletedAssetMessage = null;
        $addedAssetMessage = null;
        $editedAssetMessage = null;

        if(!empty($_SESSION['deleted_asset'])){
            $deletedAssetMessage = $_SESSION['deleted_asset'];
            $_SESSION['deleted_asset'] = '';   
        }
        if(!empty($_SESSION['added_asset'])){
            $addedAssetMessage = $_SESSION['added_asset'];
            $_SESSION['added_asset'] = '';   
        }
        if(!empty($_SESSION['edited_asset'])){
            $addedAssetMessage = $_SESSION['edited_asset'];
            $_SESSION['edited_asset'] = '';   
        }

        $assets = AssetHandler::getAll(false);
        $this->render('pages/admin', 'assets', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'assets',
            'assets' => $assets,
            'deletedAssetMessage' => $deletedAssetMessage,
            'addedAssetMessage' => $addedAssetMessage,
            'editedAssetMessage' => $editedAssetMessage
        ]);

    }


    /**
     * Renderiza a tela de cadastro de um novo asset
     * 
     * @access public
     * @return void
    */

    public function newAsset(){

        $this->render('pages/admin', 'assets_new', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'asset_new',
        ]);
        
    }


    /**
     * Responsável por tratar o action do novo asset cadastrado
     * 
     * @access public
     * @return void
    */

    public function newAssetAction(){

        if(!empty($_FILES)){
            AssetHandler::insert($_FILES, $this->loggedUser->username);
            // $_SESSION['added_asset'] = 'Asset adicionado com sucesso!';
            echo 'Asset adicionado com sucesso!';
        }

        // $this->redirect('admin/assets');

    }


    /**
     * Renderiza o asset de acordo com o id
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function getAsset($args){

        $asset = AssetHandler::get($args['id']);
        if($asset === false){
            $this->redirect('admin/assets');
        }

        $this->render('pages/admin', 'asset', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'assets',
            'asset' => $asset
        ]);
        
    }


    /**
     * Renderiza a tela de edição do asset desejado de acordo com o id
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function editAsset($args){

        $asset = AssetHandler::get($args['id']); 
        if($asset === false){
            $this->redirect('admin/assets');
        }

        $this->render('pages/admin', 'assets_edit', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'asset_edit',
            'asset' => $asset
        ]);
        
    }


    /**
     * Responsável por tratar o action do asset editado
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function editAssetAction($args){

        if(!empty($args['id'])){
            AssetHandler::update($args['id'], $_POST, $_FILES);
            $_SESSION['edited_asset'] = 'Asset ' . $args['id'] . ' editado com sucesso!';
        }

        $this->redirect('admin/assets');

    }


    /**
     * Responsável por deletar o asset desejado de acordo com o id
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function deleteAsset($args){

        if(!empty($args['id'])){
            AssetHandler::delete($args['id']);
            $_SESSION['deleted_asset'] = 'Asset ' . $args['id'] . ' deletado com sucesso!';
            $this->redirect('admin/assets');
        }

        $this->redirect('admin/assets');
        
    }

}