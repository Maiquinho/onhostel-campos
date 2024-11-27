<?php
namespace src\controllers;

use \core\Controller;


class LogoutAdmController extends Controller {

    public function signout() {
        $_SESSION['token'] = '';
        $this->redirect('admin/login');
    }

}