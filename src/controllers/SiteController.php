<?php
namespace src\controllers;

use \core\Controller;
use core\Request;
use src\handlers\BannerHandler;
use src\handlers\PageHandler;
use src\handlers\ProductCatHandler;
use src\handlers\ProductSubCatHandler;
use src\handlers\FormHandler;
use src\helpers\Company;
use src\helpers\GClid;


/**
 * Controllers do Site
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class SiteController extends Controller {

    /**
     * Código GCLID (Google Click ID)
     * 
     * @var string|null $gclid
    */
    
    private $gclid;

    /**
     * Mostra a paginação atual caso haja um limite de resultados do banco de dados
     * 
     * @var int|null $currentPagination
    */

    private $currentPagination;


    /**
     * Define as propriedades globais do site
     * 
     * @access public
     * @return void
    */

    public function __construct(){
        $this->currentPagination    = (!empty(filter_input(INPUT_GET, 'page'))) ? intval(filter_input(INPUT_GET, 'page')) : null;
        $this->gclid                = GClid::getCode();

        if(empty($_SESSION['gclid_code']) && !empty($this->gclid)){
            $_SESSION['gclid_code'] = $this->gclid;
        }
    }


    /**
     * Renderiza a página home
     * 
     * @access public
     * @return void
    */

    public function index() {
        $pageId     = 'home';
        $metadata   = [
            'title'                 => 'Hostel em Campos do Jordão | ON Hostel',
            'description'           => 'Hospede-se em Campos do Jordão com conforto, localização central e preços acessíveis. Reserve sua estadia e aproveite o melhor da cidade.',
            'pageId'                => $pageId
        ];

        $this->render('pages/site', 'home', [
            'metadata'              => $metadata,
        ]);
    }


    /**
     * Renderiza a página empresa
     * 
     * @access public
     * @return void
    */

    public function about() {
        $pageId     = 'about';
        $metadata   = [
            'title'                 => 'Sobre o Hostel | ' . Company::getShortName(),
            'description'           => 'Conheça o ON Hostel, parte do grupo ON, fundado em 2022. Oferecemos conforto, segurança e hospitalidade em Guarulhos. Faça sua reserva hoje mesmo!',
            'breadcrumbTitle'       => 'O Hostel',
            'breadcrumbSchema'      => null,
            'pageId'                => $pageId
        ];

        $this->render('pages/site', 'about', [
            'metadata'              => $metadata,
            'pageId'                => $pageId
        ]);
    }


    /**
     * Página de artigos (conteúdos de SEO)
     * 
     * @access public
     * @return void
    */

    public function articles(){
        $articles = PageHandler::getAll();

        $pageId     = 'articles';
        $metadata   = [
            'title'                 => 'Informações | ' . Company::getShortName(),
            'description'           => 'Página de informações da ' . Company::getShortName() . '. Todos os serviços prestados pela ' . Company::getShortName() . ' encontram-se aqui.',
            'breadcrumbTitle'       => 'Informações',
            'bredcrumbSchema'       => null,
            'pageId'                => $pageId
        ];

        $this->render('pages/site', 'articles', [
            'metadata'              => $metadata,
            'articles'              => $articles,
            'pageId'                => $pageId
        ]);
    }


    /**
     * Página final de artigo (conteúdo de SEO)
     * 
     * @access public
     * @param Array $args
     * @return void
    */

    public function article($args){
        $article            = PageHandler::get($args['slug']);
        $relatedArticles    = PageHandler::getAllPagesRelated();

        // Valida se a categoria existe
        if(empty((array)$article)){
            ErrorController::notFound404();
        }

        $pageId     = 'single-article';
        $metadata   = [
            'title'                 => $article->title,
            'description'           => $article->description,
            'breadcrumbTitle'       => $article->h1,
            'bredcrumbSchema'       => [
                'Informações'       => 'informacoes',
                $article->h1     => '', // o link do último item fica vazio
            ],
            'pageId'                => $pageId
        ];

        $this->render('pages/site', 'article', [
            'metadata'              => $metadata,
            'article'               => $article,
            'relatedArticles'       => $relatedArticles,
            'pageId'                => $pageId
        ]);
    }


    /**
     * Envio dos dados de contato da página de informação via método POST
     * 
     * @access public
     * @return void
    */
    
    public function articleAction(){
        if(!empty($_POST)){        
            $sendArticleForm  = FormHandler::sendForm($_POST);

            if($sendArticleForm !== false){
                $this->redirect('obrigado');
            }else {
                header("location:javascript://history.go(-1)");
            }
        }else{
            $this->redirect('');
        }        
    }


    /**
     * Renderiza a página de galeria
     * 
     * @access public
     * @return void
    */

    public function gallery() {
        $pageId     = 'gallery';
        $metadata   = [
            'title'                 => 'Galeria | ' . Company::getShortName(),
            'description'           => 'Explore a galeria do ON Hostel e descubra nossos quartos confortáveis, áreas comuns acolhedoras e instalações modernas em Guarulhos.',
            'breadcrumbTitle'       => 'Galeria',
            'breadcrumbSchema'      => null,
            'pageId'                => $pageId
        ];

        $this->render('pages/site', 'gallery', [
            'metadata'              => $metadata,
            'pageId'                => $pageId
        ]);
    }


    /**
     * Renderiza a página de reservas
     * 
     * @access public
     * @return void
    */

    public function booking() {
        $pageId     = 'booking';
        $metadata   = [
            'title'                 => 'Reservas no ON Hostel - Reserve seu Quarto Agora!',
            'description'           => 'Garanta sua hospedagem no ON Hostel em Guarulhos. Quartos confortáveis, ambiente acolhedor e ótimas tarifas. Reserve já e aproveite!',
            'breadcrumbTitle'       => 'Reservas',
            'breadcrumbSchema'      => null,
            'pageId'                => $pageId
        ];

        $this->render('pages/site', 'booking', [
            'metadata'              => $metadata,
            'pageId'                => $pageId
        ]);
    }


    /**
     * Página de contato
     * 
     * @access public
     * @return void
    */
    
    public function howToArrive(){
        $pageId     = 'how-to-arrive';
        $metadata   = [
            'title' => 'Saiba como chegar no ' . Company::getShortName() . ' Através do Google Maps e Waze',
            'description' => 'Saiba como chegar no ON Hostel em Guarulhos. Veja rotas, opções de transporte e dicas para uma chegada tranquila e fácil.',
            'breadcrumbTitle'       => 'Como chegar no ON Hostel',
            'bredcrumbSchema'       => null,
            'pageId'                => $pageId
        ];

        $this->render('pages/site', 'how-to-arrive', [
            'metadata'              => $metadata,
            'pageId'                => 'how-to-arrive'
        ]);
    }

    /**
     * Página de contato
     * 
     * @access public
     * @return void
    */
    
    public function contact(){
        $pageId     = 'contact';
        $metadata   = [
            'title' => 'Contato | ' . Company::getFullName(),
            'description' => 'Entre em contato conosco no ON Hostel em Guarulhos. Tire dúvidas, faça reservas e aproveite nossa hospitalidade única. Estamos aqui para atendê-lo!',
            'breadcrumbTitle'       => 'Contato',
            'bredcrumbSchema'       => null,
            'pageId'                => $pageId
        ];

        $this->render('pages/site', 'contact', [
            'metadata'              => $metadata,
            'pageId'                => 'contact'
        ]);
    }


    /**
     * Envio dos dados de contato via método POST
     * 
     * @access public
     * @return void
    */
    
    public function contactAction(){
        if(!empty($_POST)){        
            $sendContactForm  = FormHandler::sendForm($_POST);

            if($sendContactForm !== false){
                $this->redirect('obrigado');
            }else {
                $this->redirect('contato');
            }
        }else{
            $this->redirect('');
        }        
    }


    /**
     * Página de redirecionamento após envio dos forms
     * 
     * @access public
     * @return void
    */

    public function contactThanks(){
        $formMessageSuccess = null;

        if(!empty($_SESSION['form_message_success'])){
            $formMessageSuccess = $_SESSION['form_message_success'];
            $_SESSION['form_message_success'] = '';   

            $this->render('pages/site', 'contact_thanks', [
                'formMessageSuccess' => $formMessageSuccess,
                'pageId' => 'contact'
            ]);
        }else{
            $this->redirect('');
        }
        
    }


    /**
     * Página termos e condições
     * 
     * @access public
     * @return void
    */
    
    public function termsAndConditions(){
        $pageId     = 'terms-and-conditions';
        $metadata   = [
            'title' => 'Termos e Condições | ' . Company::getShortName(),
            'description' => 'Ao acessar ao site ON Hostel, concorda em cumprir estes termos de serviço, todas as leis e regulamentos aplicáveis ​​e concorda que é responsável pelo cumprimento de todas as leis locais aplicáveis.',
            'breadcrumbTitle'       => 'Termos e Condições',
            'bredcrumbSchema'       => null,
            'pageId'                => $pageId
        ];

        $this->render('pages/site', 'terms-and-conditions', [
            'metadata'              => $metadata,
            'pageId'                => 'terms-and-conditions'
        ]);
    }


    /**
     * Página políticas de privacidade
     * 
     * @access public
     * @return void
    */
    
    public function privacyPolitics(){
        $pageId     = 'privacy-politics';
        $metadata   = [
            'title' => 'Política de Privacidade | ' . Company::getShortName(),
            'description' => 'A sua privacidade é importante para nós. É política do ON Hostel respeitar a sua privacidade em relação a qualquer informação sua que possamos coletar no site ON Hostel.',
            'breadcrumbTitle'       => 'Política de Privacidade',
            'bredcrumbSchema'       => null,
            'pageId'                => $pageId
        ];

        $this->render('pages/site', 'privacy-politics', [
            'metadata'              => $metadata,
            'pageId'                => 'privacy-politics'
        ]);
    }


    /**
     * Página mapa do site
     * 
     * @access public
     * @return void
    */
    
    public function sitemap(){
        $articles = PageHandler::getAll();

        $pageId     = 'sitemap';
        $metadata   = [
            'title' => 'Mapa do Site | ' . Company::getShortName(),
            'description' => "Mapa do Site " . Company::getShortName() . " - Todos os atalhos para todas as páginas deste site.",
            'breadcrumbTitle'       => 'Mapa do Site',
            'bredcrumbSchema'       => null,
            'pageId'                => $pageId
        ];

        $this->render('pages/site', 'sitemap', [
            'metadata'              => $metadata,
            'articles'              => $articles,
            'pageId'                => 'sitemap'
        ]);
    }

}