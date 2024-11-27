<?php

namespace src\handlers;

use core\Request;
use \src\models\Banner;
use \src\handlers\FileHandler;
use stdClass;

/**
 * Adionadores adicionais para as Classes relacionadas aos banners
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class BannerHandler {

    /**
     * Pega todas as linhas dos banners
     * 
     * @access public
     * @param Bool $onlyAbleOnes
     * @return Array
    */

    public static function getAll($onlyAbleOnes = true) {

        $data = ($onlyAbleOnes) ? 
            Banner::select()
                ->where('able', 1)
                ->orderBy('order_position')
            ->get() 
            : 
            Banner::select()
            ->get();

        $banners = [];

        if(!empty($data)){

            foreach($data as $dataItem){

                $banner = new Banner();
                $banner->id = $dataItem['id'];
                $banner->image = $dataItem['image'];
                $banner->altTitle = $dataItem['alt_title'];
                $banner->orderPosition = $dataItem['order_position'];
                $banner->url = $dataItem['url'];
                $banner->createdAt = $dataItem['created_at'];
                $banner->updatedAt = $dataItem['updated_at'];
                $banner->addedBy = $dataItem['added_by'];
                $banner->lastUpdate = $dataItem['last_update'];
                $banner->able = $dataItem['able'];

                $banners[] = $banner;
                
            }

            return $banners;
            
        }
        
        return $banners;

    }


    /**
     * Pega um item específico da tabela banners
     * 
     * @access public
     * @param String $id
     * @param Bool $onlyAbleOnes
     * @return Object
    */

    public static function get($id, $onlyAbleOnes = true) {

        $data = ($onlyAbleOnes) ? 
            Banner::select()
                ->where('id', $id)
                ->where('able', 1)
            ->one() 
            : 
            Banner::select()
                ->where('id', $id)
            ->one();

        if (!empty($data)) {

            $banner = new Banner();
            $banner->id = $data['id'];
            $banner->image = $data['image'];
            $banner->altTitle = $data['alt_title'];
            $banner->orderPosition = $data['order_position'];
            $banner->url = $data['url'];
            $banner->createdAt = $data['created_at'];
            $banner->updatedAt = $data['updated_at'];
            $banner->addedBy = $data['added_by'];
            $banner->lastUpdate = $data['last_update'];
            $banner->able = $data['able'];

            return $banner;
        }

        return new stdClass();
    }


    /**
     * Atualiza um item específico da tabela banners
     * 
     * @access public
     * @param Array $fields
     * @param Array $files
     * @return void
    */

    public static function insert($fields, $files) {

        $imagePath = FileHandler::getUploadFolder();
        $tmpImageName = $files['image']['tmp_name'];
        $imageName = $files['image']['name'];
        $image = $imagePath . $imageName;

        Banner::insert([
            'image'             => $image,
            'alt_title'         => $fields['alt_title'],
            'order_position'    => $fields['order_position'],
            'url'               => $fields['url'],
            'added_by'          => $fields['added_by'],
            'last_update'       => $fields['last_update'],
            'able'              => $fields['able'],
        ])->execute();


        FileHandler::upload($files['image'], $tmpImageName, $image);

    }


    /**
     * Atualiza um item específico da tabela banners
     * 
     * @access public
     * @param String $id
     * @param Array $fields
     * @param Array $files
     * @return void
    */

    public static function update($id, $fields, $files) {

        $fields = EmptyFieldHandler::setNull($fields);

        $imagePath = FileHandler::getUploadFolder();
        $tmpImageName = $files['image']['tmp_name'];
        $imageName = $files['image']['name'];
        $image = (!empty($tmpImageName)) ? $imagePath . $imageName : $fields['default_image'];

        Banner::update([
            'image'             => $image,
            'alt_title'         => $fields['alt_title'],
            'order_position'    => $fields['order_position'],
            'url'               => $fields['url'],
            'last_update'       => $fields['last_update'],
            'able'              => $fields['able'],
        ])->where('id', $id)->execute();

        
        FileHandler::upload($files['image'], $tmpImageName, $image);

    }


    /**
     * Deleta um item específico da tabela banners
     * 
     * @access public
     * @param String $id
     * @return void
    */

    public static function delete($id) {

        Banner::delete()
            ->where('id', $id)
        ->execute();

    }

}
