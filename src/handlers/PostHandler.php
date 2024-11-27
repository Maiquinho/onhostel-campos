<?php

namespace src\handlers;

use src\helpers\DateFmt;
use src\helpers\UrlFormat;
use src\models\Post;

/**
 * Adionadores adicionais para as Classes relacionadas aos Posts do Blog
 * 
 * @author Michael Matheus
 * @version 1.5.3
 * @access public
*/

class PostHandler {

    /**
     * Pega todos os posts
     * 
     * @access public
     * @param Bool $onlyAbleOnes
     * @return bool
    */

    public static function getAll($onlyAbleOnes = true) {

        DateFmt::setlocale();


        $data = ($onlyAbleOnes) ? 
            Post::select()->where('able', 1)->get() : 
            Post::select()->get();


        if($data && count($data) > 0){

            $posts = [];

            foreach($data as $dataItem){

                $post = new Post();
                $post->id = $dataItem['id'];
                $post->title = $dataItem['title'];
                $post->h1 = $dataItem['h1'];
                $post->altTitle = $dataItem['alt_title'];
                $post->description = $dataItem['description'];
                $post->slug = $dataItem['slug'];
                $post->fullUrl = 'blog/' . $dataItem['slug'];
                $post->image = $dataItem['image'];
                $post->content = $dataItem['content'];
                $post->createdAt = $dataItem['created_at'];
                $post->updatedAt = $dataItem['updated_at'];
                $post->addedBy = $dataItem['added_by'];
                $post->lastUpdate = $dataItem['last_update'];
                $post->able = $dataItem['able'];

                $posts[] = $post;
                
            }

            return $posts;
            
        }

        return false;

    }


    /**
     * Pega todos os posts recentes
     * 
     * @access public
     * @param Bool $onlyAbleOnes
     * @return bool
    */

    public static function getRecentPosts($onlyAbleOnes = true, $withoutCurrentOne = null) {

        DateFmt::setlocale();

        $data = '';

        if($onlyAbleOnes && $withoutCurrentOne == null){
            $data = Post::select()->where('able', 1)->orderBy('created_at', 'desc')->get();
        }elseif($onlyAbleOnes && $withoutCurrentOne){
            $data = Post::select()->where('able', 1)->whereNotIn('slug', [$withoutCurrentOne])->orderBy('created_at', 'desc')->get();
        }else{
            $data = Post::select()->orderBy('created_at', 'desc')->get();
        }


        if($data && count($data) > 0){

            $posts = [];

            foreach($data as $dataItem){

                $post = new Post();
                $post->id = $dataItem['id'];
                $post->title = $dataItem['title'];
                $post->h1 = $dataItem['h1'];
                $post->altTitle = $dataItem['alt_title'];
                $post->description = $dataItem['description'];
                $post->slug = $dataItem['slug'];
                $post->fullUrl = 'blog/' . $dataItem['slug'];
                $post->image = $dataItem['image'];
                $post->content = $dataItem['content'];
                $post->createdAt = $dataItem['created_at'];
                $post->updatedAt = $dataItem['updated_at'];
                $post->addedBy = $dataItem['added_by'];
                $post->lastUpdate = $dataItem['last_update'];
                $post->able = $dataItem['able'];

                $posts[] = $post;
                
            }

            if(count($posts) > 4){
                $posts = array_slice($posts, 0, 4);
            }
            
            return $posts;
            
        }

        return false;

    }


    /**
     * Pega um item específico da tabela posts
     * 
     * @access public
     * @param String $slug
     * @return bool
    */

    public static function get($slug, $onlyAble = true) {

        DateFmt::setlocale();

        $data = ($onlyAble) ? 
            Post::select()
                ->where('slug', $slug)
                ->where('able', 1)
            ->one() : 
            Post::select()
                ->where('slug', $slug)
            ->one();


        if ($data && count($data) > 0) {

            $post = new Post();
            $post->id = $data['id'];
            $post->title = $data['title'];
            $post->h1 = $data['h1'];
            $post->altTitle = $data['alt_title'];
            $post->description = $data['description'];
            $post->slug = $data['slug'];
            $post->fullUrl = 'blog/' . $data['slug'];
            $post->image = $data['image'];
            $post->content = $data['content'];
            $post->createdAt = $data['created_at'];
            $post->updatedAt = $data['updated_at'];
            $post->addedBy = $data['added_by'];
            $post->lastUpdate = $data['last_update'];
            $post->able = $data['able'];

            return $post;
        }

        return false;
    }


    /**
     * Adiciona um item específico da tabela posts
     * 
     * @access public
     * @param Array $fields
     * @return void
    */

    public static function insert($fields, $files) {

        $imagePath = 'assets/site/images/blog/';
        $tmpImageName = $files['image']['tmp_name'];
        $imageName = UrlFormat::getFormatedUrl($files['image']['name']);
        $image = (!empty($tmpImageName)) ? $imagePath . $imageName : '';

        Post::insert([
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
     * Atualiza um item específico da tabela posts
     * 
     * @access public
     * @param String $slug
     * @param Array $fields
     * @param Array $files
     * @return void
    */

    public static function update($slug, $fields, $files) {

        $imagePath = 'assets/site/images/blog/';
        $tmpImageName = $files['image']['tmp_name'];
        $imageName = UrlFormat::getFormatedUrl($files['image']['name']);
        $image = (!empty($tmpImageName)) ? $imagePath . $imageName : $fields['default_image'];

        Post::update()
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
     * Deleta um item específico da tabela posts
     * 
     * @access public
     * @param String $slug
     * @return void
    */

    public static function delete($slug) {

        Post::delete()
            ->where('slug', $slug)
        ->execute();

    }

}
