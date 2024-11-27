<?php

namespace src\handlers;

use src\helpers\UrlFormat;
use src\models\Page;
use stdClass;

/**
 * Adionadores adicionais para as Classes relacionadas às páginas de SEO
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class PageHandler {

    /**
     * Pega todas as páginas
     * 
     * @access public
     * @param Bool $onlyAbleOnes
     * @return Array
    */

    public static function getAll($onlyAbleOnes = true) {

        $data = ($onlyAbleOnes) ? 
            Page::select()->where('able', 1)->get() : 
            Page::select()->get();

            
        $pages = [];

        if($data && count($data) > 0){

            foreach($data as $dataItem){

                $page = new Page();
                $page->id = $dataItem['id'];
                $page->title = $dataItem['title'];
                $page->h1 = $dataItem['h1'];
                $page->altTitle = $dataItem['alt_title'];
                $page->description = $dataItem['description'];
                $page->slug = $dataItem['slug'];
                $page->fullUrl = 'informacoes/' . $dataItem['slug'];
                $page->image = $dataItem['image'];
                $page->content = $dataItem['content'];
                $page->createdAt = $dataItem['created_at'];
                $page->updatedAt = $dataItem['updated_at'];
                $page->addedBy = $dataItem['added_by'];
                $page->lastUpdate = $dataItem['last_update'];
                $page->able = $dataItem['able'];

                $pages[] = $page;
                
            }

            return $pages;
            
        }

        return $pages;

    }


    /**
     * Pega todas as páginas
     * 
     * @access public
     * @param Bool $onlyAbleOnes
     * @return bool
    */

    public static function getAllPagesRelated($onlyAbleOnes = true) {

        $data = ($onlyAbleOnes) ? 
            Page::select()->where('able', 1)->get() : 
            Page::select()->get();

        $pages = [];

        if($data && count($data) > 0){

            foreach($data as $dataItem){

                $page = new Page();
                $page->id = $dataItem['id'];
                $page->title = $dataItem['title'];
                $page->h1 = $dataItem['h1'];
                $page->altTitle = $dataItem['alt_title'];
                $page->description = $dataItem['description'];
                $page->slug = $dataItem['slug'];
                $page->fullUrl = 'informacoes/' . $dataItem['slug'];
                $page->image = $dataItem['image'];
                $page->content = $dataItem['content'];
                $page->createdAt = $dataItem['created_at'];
                $page->updatedAt = $dataItem['updated_at'];
                $page->addedBy = $dataItem['added_by'];
                $page->lastUpdate = $dataItem['last_update'];
                $page->able = $dataItem['able'];

                $pages[] = $page;
                
            }

            shuffle($pages);

            return array_slice($pages, 0, 10);
            
        }

        return $pages;

    }


    /**
     * Pega um item específico da tabela pages
     * 
     * @access public
     * @param String $slug
     * @return Object
    */

    public static function get($slug, $onlyAble = true) {

        $data = ($onlyAble) ? 
            Page::select()
                ->where('slug', $slug)
                ->where('able', 1)
            ->one() : 
            Page::select()
                ->where('slug', $slug)
            ->one();


        if ($data && count($data) > 0) {

            $page = new Page();
            $page->id = $data['id'];
            $page->title = $data['title'];
            $page->h1 = $data['h1'];
            $page->altTitle = $data['alt_title'];
            $page->description = $data['description'];
            $page->slug = $data['slug'];
            $page->fullUrl = 'informacoes/' . $data['slug'];
            $page->image = $data['image'];
            $page->content = $data['content'];
            $page->createdAt = $data['created_at'];
            $page->updatedAt = $data['updated_at'];
            $page->addedBy = $data['added_by'];
            $page->lastUpdate = $data['last_update'];
            $page->able = $data['able'];

            return $page;
        }

        return new stdClass();
    }


    /**
     * Adiciona um item específico da tabela pages
     * 
     * @access public
     * @param Array $fields
     * @return void
    */

    public static function insert($fields, $files) {

        $imagePath = 'assets/site/images/articles/';
        $tmpImageName = $files['image']['tmp_name'];
        $imageName = UrlFormat::getFormatedUrl($files['image']['name']);
        $image = (!empty($tmpImageName)) ? $imagePath . $imageName : '';

        Page::insert([
            'title' => $fields['title'],
            'h1' => $fields['h1'],
            'alt_title' => $fields['alt_title'],
            'description' => $fields['description'],
            'slug' => $fields['slug'],
            'image' => $image,
            'content' => $fields['content'],
            'added_by' => $fields['added_by'],
            'last_update' => $fields['last_update'],
            'able' => $fields['able']
        ])->execute();

        FileHandler::upload($files['image'], $tmpImageName, $image);

    }


    /**
     * Atualiza um item específico da tabela pages
     * 
     * @access public
     * @param String $slug
     * @param Array $fields
     * @param Array $files
     * @return void
    */

    public static function update($slug, $fields, $files) {

        $imagePath = 'assets/site/images/articles/';
        $tmpImageName = $files['image']['tmp_name'];
        $imageName = UrlFormat::getFormatedUrl($files['image']['name']);
        $image = (!empty($tmpImageName)) ? $imagePath . $imageName : $fields['default_image'];

        Page::update()
            ->set([
                'title' => $fields['title'],
                'h1' => $fields['h1'],
                'alt_title' => $fields['alt_title'],
                'description' => $fields['description'],
                'slug' => $fields['slug'],
                'image' => $image,
                'content' => $fields['content'],
                'last_update' => $fields['last_update'],
                'able' => $fields['able']
            ])
            ->where('slug', $slug)
        ->execute();


        FileHandler::upload($files['image'], $tmpImageName, $image);

    }


    /**
     * Deleta um item específico da tabela pages
     * 
     * @access public
     * @param String $slug
     * @return void
    */

    public static function delete($slug) {

        Page::delete()
            ->where('slug', $slug)
        ->execute();

    }

}
