<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\TestimonialHandler;
use \src\handlers\LoginHandler;

/**
 * Controller dos Depoimentos
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class TestimonialController extends Controller {

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
     * Renderiza a lista de depoimentos
     * 
     * @access public
     * @return void
    */

    public function index(){

        $deletedTestimonialMessage = null;
        $addedTestimonialMessage = null;
        $editedTestimonialMessage = null;

        if(!empty($_SESSION['deleted_testimonial'])){
            $deletedTestimonialMessage = $_SESSION['deleted_testimonial'];
            $_SESSION['deleted_testimonial'] = '';   
        }
        if(!empty($_SESSION['added_testimonial'])){
            $addedTestimonialMessage = $_SESSION['added_testimonial'];
            $_SESSION['added_testimonial'] = '';   
        }
        if(!empty($_SESSION['edited_testimonial'])){
            $addedTestimonialMessage = $_SESSION['edited_testimonial'];
            $_SESSION['edited_testimonial'] = '';   
        }

        $testimonials = TestimonialHandler::getAll(false);
        $this->render('pages/admin', 'testimonials', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'testimonials',
            'testimonials' => $testimonials,
            'deletedTestimonialMessage' => $deletedTestimonialMessage,
            'addedTestimonialMessage' => $addedTestimonialMessage,
            'editedTestimonialMessage' => $editedTestimonialMessage
        ]);

    }


    /**
     * Renderiza a tela de cadastro de um novo depoimento
     * 
     * @access public
     * @return void
    */

    public function newTestimonial(){

        $this->render('pages/admin', 'testimonials_new', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'testimonial_new',
        ]);
        
    }


    /**
     * Responsável por tratar o action do novo depoimento cadastrado
     * 
     * @access public
     * @return void
    */

    public function newTestimonialAction(){

        if(!empty($_POST)){
            $_POST['company'] = (empty($_POST['company'])) ? NULL : $_POST['company'];
            TestimonialHandler::insert($_POST);
            $_SESSION['added_testimonial'] = 'Depoimento adicionado com sucesso!';
        }

        $this->redirect('admin/testimonials');

    }


    /**
     * Renderiza o depoimento de acordo com o id
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function getTestimonial($args){

        $testimonial = TestimonialHandler::get($args['id']);
        if($testimonial === false){
            $this->redirect('admin/testimonials');
        }

        $this->render('pages/admin', 'testimonial', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'testimonials',
            'testimonial' => $testimonial
        ]);
        
    }


    /**
     * Renderiza a tela de edição do depoimento desejado de acordo com o id
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function editTestimonial($args){

        $testimonial = TestimonialHandler::get($args['id']); 
        if($testimonial === false){
            $this->redirect('admin/testimonials');
        }

        $this->render('pages/admin', 'testimonials_edit', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'testimonial_edit',
            'testimonial' => $testimonial
        ]);
        
    }


    /**
     * Responsável por tratar o action do depoimento editado
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function editTestimonialAction($args){

        if(!empty($args['id']) && !empty($_POST)){
            $_POST['company'] = (empty($_POST['company'])) ? NULL : $_POST['company'];
            TestimonialHandler::update($args['id'], $_POST);
            $_SESSION['edited_testimonial'] = 'Depoimento ' . $args['id'] . ' editado com sucesso!';
        }

        $this->redirect('admin/testimonials');

    }


    /**
     * Responsável por deletar o depoimento desejado de acordo com o id
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function deleteTestimonial($args){

        if(!empty($args['id'])){
            TestimonialHandler::delete($args['id']);
            $_SESSION['deleted_testimonial'] = 'Depoimento ' . $args['id'] . ' deletado com sucesso!';
            $this->redirect('admin/testimonials');
        }

        $this->redirect('admin/testimonials');
        
    }

}