<?php

namespace src\handlers;

use src\helpers\DateFmt;
use \src\models\Banner;
use \src\models\Page;
use \src\models\Post;
// use \src\models\Testimonial;



/**
 * Adionadores adicionais para as Classes relacionadas aos banners
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class AdminHandler {

    /**
     * Pega todas as últimas alterações nas tabelas
     * 
     * @access public
     * @return bool
    */

    public static function getRecentActivity($loggedUser, $limitResults = null) {


        DateFmt::setlocale();


        // Inicia a matriz dos dados como vazia

        $data = [];



        // Dados dos banners

        $bannerData = Banner::select() 
            ->where('last_update', $loggedUser)
            ->orderBy('updated_at', 'desc')
        ->one();

        if($bannerData && count($bannerData) > 0){

            $banner = new Banner();
            $banner->id = $bannerData['id'];
            $banner->image = $bannerData['image'];
            $banner->altTitle = $bannerData['alt_title'];
            $banner->orderPosition = $bannerData['order_position'];
            $banner->url = $bannerData['url'];
            $banner->createdAt = $bannerData['created_at'];
            $banner->updatedAt = $bannerData['updated_at'];
            $banner->addedBy = $bannerData['added_by'];
            $banner->lastUpdate = $bannerData['last_update'];
            $banner->tableName = 'Banner';
            $banner->tableDescription = 'banner da página home';
    
            $data[] = $banner;
        }

        // Dados das marcas clientes

        // $brandData = Brand::select() 
        //     ->where('last_update', $loggedUser)
        //     ->orderBy('updated_at', 'desc')
        // ->one();

        // if($brandData && count($brandData) > 0){

        //     $brand = new Brand();
        //     $brand->id = $brandData['id'];
        //     $brand->name = $brandData['name'];
        //     $brand->image = $brandData['image'];
        //     $brand->createdAt = $brandData['created_at'];
        //     $brand->updatedAt = $brandData['updated_at'];
        //     $brand->addedBy = $brandData['added_by'];
        //     $brand->lastUpdate = $brandData['last_update'];
        //     $brand->able = $brandData['able'];
        //     $brand->tableName = 'Marca';
        //     $brand->tableDescription = 'marca do cliente';
    
        //     $data[] = $brand;
        // }

        // Dados das páginas de SEO

        $pageData = Page::select() 
            ->where('last_update', $loggedUser)
            ->orderBy('updated_at', 'desc')
        ->one();

        if($pageData && count($pageData) > 0){

            $page = new Page();
            $page->id = $pageData['id'];
            $page->title = $pageData['title'];
            $page->h1 = $pageData['h1'];
            $page->altTitle = $pageData['alt_title'];
            $page->description = $pageData['description'];
            $page->slug = $pageData['slug'];
            $page->fullUrl = 'informacoes/' . $pageData['slug'];
            $page->image = $pageData['image'];
            $page->content = $pageData['content'];
            $page->createdAt = $pageData['created_at'];
            $page->updatedAt = $pageData['updated_at'];
            $page->addedBy = $pageData['added_by'];
            $page->lastUpdate = $pageData['last_update'];
            $page->able = $pageData['able'];
            $page->tableName = 'Página';
            $page->tableDescription = 'página de SEO';
    
            $data[] = $page;
        }

        // Dados dos posts do blog

        $postData = Post::select() 
            ->where('last_update', $loggedUser)
            ->orderBy('updated_at', 'desc')
        ->one();

        if($postData && count($postData) > 0){

            $post = new Post();
            $post->id = $postData['id'];
            $post->title = $postData['title'];
            $post->h1 = $postData['h1'];
            $post->altTitle = $postData['alt_title'];
            $post->description = $postData['description'];
            $post->slug = $postData['slug'];
            $post->fullUrl = 'informacoes/' . $postData['slug'];
            $post->image = $postData['image'];
            $post->content = $postData['content'];
            $post->createdAt = $postData['created_at'];
            $post->updatedAt = $postData['updated_at'];
            $post->addedBy = $postData['added_by'];
            $post->lastUpdate = $postData['last_update'];
            $post->able = $postData['able'];
            $post->tableName = 'Post';
            $post->tableDescription = 'post do blog';
    
            $data[] = $post;
        }


        // Dados dos depoimentos

        // $testimonialData = Testimonial::select() 
        //     ->where('last_update', $loggedUser)
        //     ->orderBy('updated_at', 'desc')
        // ->one();

        // if($testimonialData && count($testimonialData) > 0){

        //     $testimonial = new Testimonial();
        //     $testimonial->id = $testimonialData['id'];
        //     $testimonial->createdAt = $testimonialData['created_at'];
        //     $testimonial->updatedAt = $testimonialData['updated_at'];
        //     $testimonial->addedBy = $testimonialData['added_by'];
        //     $testimonial->lastUpdate = $testimonialData['last_update'];
        //     $testimonial->able = $testimonialData['able'];
        //     $testimonial->tableName = 'Produto';
        //     $testimonial->tableDescription = 'produto';
    
        //     $data[] = $testimonial;
        // }




        // Filtra os elementos do array pelo updatedAt

        array_multisort(array_map(function ($element) {
            return $element->updatedAt;
        }, $data), SORT_DESC, $data);

        
        // Limita a quantidade do array para até 5 resultados
        
        if(!empty($data) && $limitResults){
            $data = array_slice($data, 0, $limitResults);
        }


        
        return $data;

    }

}
