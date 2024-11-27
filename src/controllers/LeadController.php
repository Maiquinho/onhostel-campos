<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\LeadHandler;
use \src\handlers\LoginHandler;

/**
 * Controller dos Leads
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class LeadController extends Controller {

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
     * Renderiza a lista de leads
     * 
     * @access public
     * @return void
    */

    public function index(){

        $deletedLeadMessage = null;
        $addedLeadMessage = null;
        $editedLeadMessage = null;

        if(!empty($_SESSION['deleted_lead'])){
            $deletedLeadMessage = $_SESSION['deleted_lead'];
            $_SESSION['deleted_lead'] = '';   
        }
        if(!empty($_SESSION['added_lead'])){
            $addedLeadMessage = $_SESSION['added_lead'];
            $_SESSION['added_lead'] = '';   
        }
        if(!empty($_SESSION['edited_lead'])){
            $addedLeadMessage = $_SESSION['edited_lead'];
            $_SESSION['edited_lead'] = '';   
        }

        $leads = LeadHandler::getAll(false);
        $this->render('pages/admin', 'leads', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'leads',
            'leads' => $leads,
            'deletedLeadMessage' => $deletedLeadMessage,
            'addedLeadMessage' => $addedLeadMessage,
            'editedLeadMessage' => $editedLeadMessage
        ]);

    }


    /**
     * Renderiza a tela de cadastro de um novo lead
     * 
     * @access public
     * @return void
    */

    public function newLead(){

        $this->render('pages/admin', 'leads_new', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'lead_new',
        ]);
        
    }


    /**
     * Responsável por tratar o action do novo lead cadastrado
     * 
     * @access public
     * @return void
    */

    public function newLeadAction(){

        if(!empty($_POST)){
            $_POST['company'] = (empty($_POST['company'])) ? NULL : $_POST['company'];
            LeadHandler::insert($_POST);
            $_SESSION['added_lead'] = 'Lead adicionado com sucesso!';
        }

        $this->redirect('admin/leads');

    }


    /**
     * Renderiza o lead de acordo com o id
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function getLead($args){

        $lead = LeadHandler::get($args['id']);
        if($lead === false){
            $this->redirect('admin/leads');
        }

        $this->render('pages/admin', 'lead', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'leads',
            'lead' => $lead
        ]);
        
    }


    /**
     * Renderiza a tela de edição do lead desejado de acordo com o id
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function editLead($args){

        $lead = LeadHandler::get($args['id']); 
        if($lead === false){
            $this->redirect('admin/leads');
        }

        $this->render('pages/admin', 'leads_edit', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'lead_edit',
            'lead' => $lead
        ]);
        
    }


    /**
     * Responsável por tratar o action do lead editado
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function editLeadAction($args){

        if(!empty($args['id']) && !empty($_POST)){
            $_POST['company'] = (empty($_POST['company'])) ? NULL : $_POST['company'];
            LeadHandler::update($args['id'], $_POST);
            $_SESSION['edited_lead'] = 'Lead ' . $args['id'] . ' editado com sucesso!';
        }

        $this->redirect('admin/leads');

    }


    /**
     * Responsável por deletar o lead desejado de acordo com o id
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function deleteLead($args){

        if(!empty($args['id'])){
            LeadHandler::delete($args['id']);
            $_SESSION['deleted_lead'] = 'Lead ' . $args['id'] . ' deletado com sucesso!';
            $this->redirect('admin/leads');
        }

        $this->redirect('admin/leads');
        
    }

}