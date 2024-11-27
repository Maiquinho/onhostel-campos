<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\HighlightHandler;
use \src\handlers\LoginHandler;



/**
 * Controller dos Destaques
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class HighlightController extends Controller {

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
     * Renderiza a lista de destaques
     * 
     * @access public
     * @return void
    */

    public function index(){

        $deletedHighlightMessage        = null;
        $addedHighlightMessage          = null;
        $editedHighlightMessage         = null;

        if(!empty($_SESSION['deleted_highlight'])){
            $deletedHighlightMessage        = $_SESSION['deleted_highlight'];
            $_SESSION['deleted_highlight']  = '';   
        }
        if(!empty($_SESSION['added_highlight'])){
            $addedHighlightMessage          = $_SESSION['added_highlight'];
            $_SESSION['added_highlight']    = '';   
        }
        if(!empty($_SESSION['edited_highlight'])){
            $addedHighlightMessage          = $_SESSION['edited_highlight'];
            $_SESSION['edited_highlight']   = '';   
        }

        $highlights                     = HighlightHandler::getAll();

        $this->render('pages/admin', 'highlights', [
            'loggedUser'                => $this->loggedUser,
            'pageId'                    => 'highlights',
            'highlights'                => $highlights,
            'deletedHighlightMessage'   => $deletedHighlightMessage,
            'addedHighlightMessage'     => $addedHighlightMessage,
            'editedHighlightMessage'    => $editedHighlightMessage
        ]);

    }


    /**
     * Renderiza a tela de cadastro de um novo destaque
     * 
     * @access public
     * @return void
    */

    public function newHighlight(){

        $this->render('pages/admin', 'highlights_new', [
            'loggedUser'                => $this->loggedUser,
            'pageId'                    => 'highlight_new',
        ]);
        
    }


    /**
     * Responsável por tratar o action do novo destaque cadastrado
     * 
     * @access public
     * @return void
    */

    public function newHighlightAction(){

        if(!empty($_POST)){
            HighlightHandler::insert($_POST);
            $_SESSION['added_highlight'] = 'Highlight adicionado com sucesso!';
        }

        $this->redirect('admin/highlights');

    }


    /**
     * Renderiza o destaque de acordo com o id
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function getHighlight($args){

        $highlight                      = HighlightHandler::get($args['id']);

        if(empty((array)$highlight)){
            ErrorController::notFound404();
        }

        $this->render('pages/admin', 'highlight', [
            'loggedUser'                => $this->loggedUser,
            'pageId'                    => 'highlights',
            'highlight'                 => $highlight
        ]);
        
    }


    /**
     * Renderiza a tela de edição do destaque desejado de acordo com o id
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function editHighlight($args){

        $highlight                      = HighlightHandler::get($args['id']); 

        if(empty((array)$highlight)){
            ErrorController::notFound404();
        }

        $this->render('pages/admin', 'highlights_edit', [
            'loggedUser'                => $this->loggedUser,
            'pageId'                    => 'highlight_edit',
            'highlight'                    => $highlight
        ]);
        
    }


    /**
     * Responsável por tratar o action do destaque editado
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function editHighlightAction($args){

        if(!empty($args['id']) && !empty($_POST)){
            HighlightHandler::update($args['id'], $_POST);
            $_SESSION['edited_highlight'] = 'Highlight ' . $args['id'] . ' editado com sucesso!';
        }

        $this->redirect('admin/highlights');

    }


    /**
     * Responsável por deletar o destaque desejado de acordo com o id
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function deleteHighlight($args){

        if(!empty($args['id'])){
            HighlightHandler::delete($args['id']);
            $_SESSION['deleted_highlight'] = 'Highlight ' . $args['id'] . ' deletado com sucesso!';
            $this->redirect('admin/highlights');
        }

        $this->redirect('admin/highlights');
        
    }

}