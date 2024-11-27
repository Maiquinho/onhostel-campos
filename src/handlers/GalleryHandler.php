<?php

namespace src\handlers;

use src\models\GalleryPhoto;
use stdClass;

/**
 * Adionadores adicionais para as Classes relacionadas às galerias
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class GalleryHandler {

    /**
     * Pega todos as galerias
     * 
     * @access public
     * @param Bool $onlyAbleOnes
     * @return Array
    */

    public static function getAll($onlyAbleOnes = true) {

        $data = ($onlyAbleOnes) ? 
            GalleryPhoto::select()->where('able', 1)->get() : 
            GalleryPhoto::select()->get();

            
        if(!empty($data)){

            $galleries = [];

            foreach($data as $dataItem){

                $gallery                = new GalleryPhoto();

                $gallery->id            = $dataItem['id'];
                $gallery->title         = $dataItem['title'];
                $gallery->createdAt     = $dataItem['created_at'];
                $gallery->updatedAt     = $dataItem['updated_at'];
                $gallery->addedBy       = $dataItem['added_by'];
                $gallery->lastUpdate    = $dataItem['last_update'];
                $gallery->able          = $dataItem['able'];

                $galleries[]            = $gallery;
                
            }

            return $galleries;
            
        }

        return [];

    }


    /**
     * Pega um item específico da tabela galerias
     * 
     * @access public
     * @param String $id
     * @return Object
    */

    public static function get($id) {

        $data = GalleryPhoto::select()->where('id', $id)->one();

        if (!empty($data)) {

            $gallery                  = new GalleryPhoto();

            $gallery->id              = $data['id'];
            $gallery->title           = $data['title'];
            $gallery->createdAt       = $data['created_at'];
            $gallery->updatedAt       = $data['updated_at'];
            $gallery->addedBy         = $data['added_by'];
            $gallery->lastUpdate      = $data['last_update'];
            $gallery->able            = $data['able'];

            return $gallery;
        }

        return new stdClass();
        
    }


    /**
     * Adiciona um item específico da tabela galerias
     * 
     * @access public
     * @param Array $fields
     * @return void
    */

    public static function insert($fields) {

        // $filePath                       = FileHandler::getUploadFolder();
        // $tmpFileName                    = $files['file']['tmp_name'];
        // $fileName                       = $files['file']['name'];
        // $fileType                       = $files['file']['type'];
        // $fileSize                       = FileHandler::convertToReadableSize($files['file']['size']);
        // $file                           = $filePath . $fileName;

        // $imageWidth                     = null;
        // $imageHeight                    = null;
        // $imageType                      = null;
        // $imageAttr                      = null;

        // if(FileHandler::isImageFile($tmpFileName)){
        //     list($imageWidth, $imageHeight, $imageType, $imageAttr) = getimagesize($tmpFileName); 
        // }

        // GalleryPhoto::insert([  
        //     'file_name'         => $file,
        //     'legend'            => null,
        //     'height'            => $imageHeight,
        //     'width'             => $imageWidth,
        //     'size'              => $fileSize,
        //     'mime_type'         => $fileType,
        //     'added_by'          => $username,
        //     'last_update'       => $username,
        //     'able'              => 1
        // ])->execute();

        // FileHandler::upload($files['file'], $tmpFileName, $file);

    }


    /**
     * Atualiza um item específico da tabela galerias
     * 
     * @access public
     * @param Int $id
     * @param Array $fields
     * @return void
    */

    public static function update($id, $fields) {

        // $filePath                       = FileHandler::getUploadFolder();
        // $tmpFileName                    = $files['file']['tmp_name'];
        // $fileName                       = $files['file']['name'];
        // $fileType                       = $files['file']['type'];
        // $fileSize                       = FileHandler::convertToReadableSize($files['file']['size']);
        // $file                           = $filePath . $fileName;

        // $imageWidth                     = null;
        // $imageHeight                    = null;
        // $imageType                      = null;
        // $imageAttr                      = null;

        // if(FileHandler::isImageFile($tmpFileName)){
        //     list($imageWidth, $imageHeight, $imageType, $imageAttr) = getimagesize($tmpFileName); 
        // }

        // GalleryPhoto::update([  
        //     'file_name'         => $file,
        //     'legend'            => $fields['legend'],
        //     'height'            => $imageHeight,
        //     'width'             => $imageWidth,
        //     'size'              => $fileSize,
        //     'mime_type'         => $fileType,
        //     'last_update'       => $fields['last_update'],
        //     'able'              => 1
        // ])->where('id', $id)->execute();

        // FileHandler::upload($files['file'], $tmpFileName, $file);

    }


    /**
     * Deleta um item específico da tabela galerias
     * 
     * @access public
     * @param String $id
     * @return void
    */

    public static function delete($id) {

        if (!empty($id)) {

            GalleryPhoto::delete()
                ->where('id', $id)
            ->execute();
            
        }

    }

}
