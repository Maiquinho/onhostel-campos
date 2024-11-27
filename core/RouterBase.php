<?php

namespace core;

use \src\Config;

class RouterBase {

    public function run($routes) {

        if (Config::APP_STATUS !== 'ON'){
            return exit(header('HTTP/1.0 403 Forbidden'));
        }

        $method = Request::getMethod();
        $url = Request::getUrl();

        // Define os itens padrão, se o a rota for da API o controller de erro é o da API, senão o controller de erro padrão os mesmo é para as actions
        $controller = (strpos($url, 'api/') !== false) ? Config::API_ERROR_CONTROLLER : Config::ERROR_CONTROLLER;
        $action = Config::DEFAULT_ACTION;
        $args = [];

        
        $action = (!isset($routes[$method])) ? RouterBase::handleRouteAction($action, $routes) : $action;


        if (isset($routes[$method])) {
            
            $action = RouterBase::handleRouteAction($action, $routes);
            
            
            foreach ($routes[$method] as $route => $callback) {

                // Identifica os argumentos e substitui por regex
                $pattern = preg_replace('(\{[a-z0-9]{1,}\})', '([a-z0-9-]{1,})', $route);


                // Faz o match da URL
                if (preg_match('#^(' . $pattern . ')*$#i', $url, $matches) === 1) {


                    array_shift($matches);
                    array_shift($matches);


                    // Pega todos os argumentos para associar
                    $itens = array();
                    if (preg_match_all('(\{[a-z0-9]{1,}\})', $route, $m)) {
                        $itens = preg_replace('(\{|\})', '', $m[0]);
                    }

                    // Faz a associação
                    $args = array();
                    foreach ($matches as $key => $match) {
                        $args[$itens[$key]] = $match;
                    }

                    // Seta o controller/action
                    $callbackSplit = explode('@', $callback);
                    $controller = $callbackSplit[0];
                    if (isset($callbackSplit[1])) {
                        $action = $callbackSplit[1];
                    }


                    break;
                }
            }
        }

        $controller = "\src\controllers\\$controller";
        $definedController = new $controller();

        $definedController->$action($args);
    }

    public static function handleRouteAction($routeAction, $routes){
        $method = Request::getMethod();
        $url = Request::getUrl();

        $httpMethods = ['get', 'post', 'put', 'patch', 'delete'];

        foreach($httpMethods as $httpMethod){
            if($httpMethod !== 'get'){
                if(isset($routes['get'][$url]) && !isset($routes[$httpMethod][$url]) && $method !== 'get'){
                    return Config::METHOD_ACTION;
                }
            }
            if($httpMethod !== 'post'){
                if(isset($routes['post'][$url]) && !isset($routes[$httpMethod][$url]) && $method !== 'post'){
                    return Config::METHOD_ACTION;
                }
            }
            if($httpMethod !== 'put'){
                if(isset($routes['put'][$url]) && !isset($routes[$httpMethod][$url]) && $method !== 'put'){
                    return Config::METHOD_ACTION;
                }
            }
            if($httpMethod !== 'patch'){
                if(isset($routes['patch'][$url]) && !isset($routes[$httpMethod][$url]) && $method !== 'patch'){
                    return Config::METHOD_ACTION;
                }
            }
            if($httpMethod !== 'delete'){
                if(isset($routes['delete'][$url]) && !isset($routes[$httpMethod][$url]) && $method !== 'delete'){
                    return Config::METHOD_ACTION;
                }
            }
        }

        return $routeAction;
    }
}
