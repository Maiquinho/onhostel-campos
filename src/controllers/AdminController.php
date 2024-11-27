<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\AdminHandler;
use src\handlers\BannerHandler;
use \src\handlers\LoginHandler;
use src\handlers\PageHandler;
// use src\handlers\PostHandler;
use src\handlers\ProductHandler;
use src\handlers\UserHandler;

class AdminController extends Controller {

    /**
     * Coleta o usuário logado na sessão
     * 
     * @access private
    */

    private $loggedUser;


    public function __construct(){
        $this->loggedUser = LoginHandler::checkLogin();
        if(LoginHandler::checkLogin() === false){
            $this->redirect('admin/login');
        }
    }


    public function index(){
        $banners = BannerHandler::getAll();
        $articles = PageHandler::getAll();
        $users = UserHandler::getAll();
        $recentActivity = AdminHandler::getRecentActivity($this->loggedUser->username, 8);

        
        $this->render('pages/admin', 'home', [
            'loggedUser' => $this->loggedUser,
            'recentActivity' => $recentActivity,
            'banners' => $banners,
            'articles' => $articles,
            'users' => $users,
            'pageId' => 'dashboard'
        ]);
    }

    public function profile(){
        $recentActivity = AdminHandler::getRecentActivity($this->loggedUser->username);

        $this->render('pages/admin', 'profile', [
            'recentActivity' => $recentActivity,
            'loggedUser' => $this->loggedUser,
            'pageId' => 'profile'
        ]);
    }

    public function banners() {
        $this->render('pages/admin', 'banners', [
            'loggedUser' => $this->loggedUser,
            'pageId' => 'banners'
        ]);
    }

}