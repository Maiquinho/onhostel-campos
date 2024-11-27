<?php

namespace src\handlers;

use src\models\Asset;
use stdClass;

/**
 * Adionadores adicionais para as Classes relacionadas aos assets
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class AssetHandler {

    /**
     * Pega todos os assets
     * 
     * @access public
     * @param Bool $onlyAbleOnes
     * @return Array
    */

    public static function getAll($onlyAbleOnes = true) {

        $data = ($onlyAbleOnes) ? 
            Asset::select()->where('able', 1)->get() : 
            Asset::select()->get();

            
        if(!empty($data)){

            $assets = [];

            foreach($data as $dataItem){

                $asset                = new Asset();

                $asset->id            = $dataItem['id'];
                $asset->fileName      = $dataItem['file_name'];
                $asset->legend        = $dataItem['legend'];
                $asset->height        = $dataItem['height'];
                $asset->width         = $dataItem['width'];
                $asset->size          = $dataItem['size'];
                $asset->mimeType      = $dataItem['mime_type'];
                $asset->createdAt     = $dataItem['created_at'];
                $asset->updatedAt     = $dataItem['updated_at'];
                $asset->addedBy       = $dataItem['added_by'];
                $asset->lastUpdate    = $dataItem['last_update'];
                $asset->able          = $dataItem['able'];

                $assets[]             = $asset;
                
            }

            return $assets;
            
        }

        return [];

    }


    /**
     * Pega todos os arquivos de imagens
     * 
     * @access public
     * @param Bool $onlyAbleOnes
     * @return Array
    */

    public static function getAllImages($onlyAbleOnes = true) {

        $data = ($onlyAbleOnes) ? 
            Asset::select()->where('able', 1)->get() : 
            Asset::select()->get();

            
        if(!empty($data)){

            $assets = [];

            foreach($data as $dataItem){

                if(FileHandler::isImageFile($dataItem['file_name'])){

                    $asset                = new Asset();

                    $asset->id            = $dataItem['id'];
                    $asset->fileName      = $dataItem['file_name'];
                    $asset->legend        = $dataItem['legend'];
                    $asset->height        = $dataItem['height'];
                    $asset->width         = $dataItem['width'];
                    $asset->size          = $dataItem['size'];
                    $asset->mimeType      = $dataItem['mime_type'];
                    $asset->createdAt     = $dataItem['created_at'];
                    $asset->updatedAt     = $dataItem['updated_at'];
                    $asset->addedBy       = $dataItem['added_by'];
                    $asset->lastUpdate    = $dataItem['last_update'];
                    $asset->able          = $dataItem['able'];
    
                    $assets[]             = $asset;

                }
                
            }

            return $assets;
            
        }

        return [];

    }


    /**
     * Pega um item específico da tabela assets
     * 
     * @access public
     * @param String $id
     * @return Object
    */

    public static function get($id) {

        $data = Asset::select()->where('id', $id)->one();

        if (!empty($data)) {

            $asset                  = new Asset();

            $asset->id              = $data['id'];
            $asset->fileName        = $data['file_name'];
            $asset->legend          = $data['legend'];
            $asset->height          = $data['height'];
            $asset->width           = $data['width'];
            $asset->size            = $data['size'];
            $asset->mimeType        = $data['mime_type'];
            $asset->createdAt       = $data['created_at'];
            $asset->updatedAt       = $data['updated_at'];
            $asset->addedBy         = $data['added_by'];
            $asset->lastUpdate      = $data['last_update'];
            $asset->able            = $data['able'];

            return $asset;
        }

        return new stdClass();
        
    }


    /**
     * Adiciona um item específico da tabela assets
     * 
     * @access public
     * @param Array $files
     * @param String $username
     * @return void
    */

    public static function insert($files, $username) {

        $filePath                       = FileHandler::getUploadFolder();
        $tmpFileName                    = $files['file']['tmp_name'];
        $fileName                       = $files['file']['name'];
        $fileType                       = $files['file']['type'];
        $fileSize                       = FileHandler::convertToReadableSize($files['file']['size']);
        $file                           = $filePath . $fileName;

        $imageWidth                     = null;
        $imageHeight                    = null;
        $imageType                      = null;
        $imageAttr                      = null;

        if(FileHandler::isImageFile($tmpFileName)){
            list($imageWidth, $imageHeight, $imageType, $imageAttr) = getimagesize($tmpFileName); 
        }

        Asset::insert([  
            'file_name'         => $file,
            'legend'            => null,
            'height'            => $imageHeight,
            'width'             => $imageWidth,
            'size'              => $fileSize,
            'mime_type'         => $fileType,
            'added_by'          => $username,
            'last_update'       => $username,
            'able'              => 1
        ])->execute();

        FileHandler::upload($files['file'], $tmpFileName, $file);

    }


    /**
     * Atualiza um item específico da tabela assets
     * 
     * @access public
     * @param Int $id
     * @param Array $fields
     * @param Array $files
     * @return void
    */

    public static function update($id, $fields, $files) {

        $filePath                       = FileHandler::getUploadFolder();
        $tmpFileName                    = $files['file']['tmp_name'];
        $fileName                       = $files['file']['name'];
        $fileType                       = $files['file']['type'];
        $fileSize                       = FileHandler::convertToReadableSize($files['file']['size']);
        $file                           = $filePath . $fileName;

        $imageWidth                     = null;
        $imageHeight                    = null;
        $imageType                      = null;
        $imageAttr                      = null;

        if(FileHandler::isImageFile($tmpFileName)){
            list($imageWidth, $imageHeight, $imageType, $imageAttr) = getimagesize($tmpFileName); 
        }

        Asset::update([  
            'file_name'         => $file,
            'legend'            => $fields['legend'],
            'height'            => $imageHeight,
            'width'             => $imageWidth,
            'size'              => $fileSize,
            'mime_type'         => $fileType,
            'last_update'       => $fields['last_update'],
            'able'              => 1
        ])->where('id', $id)->execute();

        FileHandler::upload($files['file'], $tmpFileName, $file);

    }


    /**
     * Deleta um item específico da tabela assets
     * 
     * @access public
     * @param String $id
     * @return void
    */

    public static function delete($id) {

        $data = Asset::select()->where('id', $id)->one();

        if (!empty($data)) {

            FileHandler::delete($data['file_name']);

            Asset::delete()
                ->where('id', $id)
            ->execute();
            
        }

    }

}
