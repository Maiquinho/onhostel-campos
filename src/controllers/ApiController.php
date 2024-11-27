<?php
namespace src\controllers;

use \core\Api;
use src\handlers\PageHandler;
use src\handlers\ProductHandler;
use src\helpers\Company;
use src\helpers\Email;
use src\helpers\Phone;
use src\helpers\Social;

/**
 * Controller da API
 * 
 * @author Michael Matheus
 * @version 1.5.2
 * @access public
*/

class ApiController extends Api {

    public function index(){

        $products = ProductHandler::getAllNoPagination();
        // $articles = PageHandler::getAll();

        // if(!empty($products) && !empty($articles)){
        if(!empty($products)){

            $queryResult = [
                'products' => $products, 
                // 'articles' => $articles
            ];

            $data = [
                'status' => 200,
                'message' => 'Os dados foram consultados com sucesso',
                'data' => $queryResult
            ];

            header('HTTP/1.0 200 OK');
            echo json_encode($data, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);

        }else{

            $data = [
                'status' => 404,
                'message' => 'Nenhum dado foi encontrado!'
            ];

            header('HTTP/1.0 404 No Data Found');
            echo json_encode($data, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);

        }

    }


    /**
     * Renderiza a lista de produtos
     * 
     * @access public
     * @return void
    */

    public function getAllProducts(){

        $products = ProductHandler::getAllNoPagination();

        echo json_encode($products, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);

    }


    /**
     * Renderiza a lista de produtos
     * 
     * @access public
     * @return void
    */

    public function contacts(){

        $companyName    = Company::getShortName();
        $emails         = Email::getAll();
        $phones         = Phone::getAll();
        $mobiles        = Phone::getAll(true);
        $social         = Social::getAll();

        $data = [
            'companyName'   => $companyName,
            'emails'        => $emails,
            'phones'        => $phones,
            'mobiles'       => $mobiles,
            'social'        => $social,
        ];

        echo json_encode($data, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);

    }

}