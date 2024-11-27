<?php
namespace core;

use \src\Config;

class Controller {

    protected function redirect($url) {
        header("Location: ".$this->getBaseUrl().$url);
        exit;
    }

    protected function getBaseUrl() {
        $base = (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') ? 'https://' : 'http://';
        $base .= $_SERVER['SERVER_NAME'];


        switch($_SERVER['SERVER_NAME']){
            case "localhost":
                $base .= Config::BASE_DIR;
                break;
            case "sitespublinet1.com.br":
                $base .= Config::BASE_DIR;
                break;
            default:
                $base .= '/';
                break;
        }
        
        return $base;
    }

    private function _render($folder, $viewName, $viewData = []) {
        if(file_exists('../src/views/'.$folder.'/'.$viewName.'.php')) {
            extract($viewData);
            
            $render = fn($vF, $vN, $vD = []) => $this->renderPartial($vF, $vN, $vD);
            $base = $this->getBaseUrl();
            
            require '../src/views/'.$folder.'/'.$viewName.'.php';
        }
    }

    private function renderPartial($folder, $viewName, $viewData = []) {
        $this->_render($folder, $viewName, $viewData);
    }

    public function render($folder, $viewName, $viewData = []) {
        $this->_render($folder, $viewName, $viewData);
    }

}