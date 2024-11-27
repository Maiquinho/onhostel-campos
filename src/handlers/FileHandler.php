<?php

namespace src\handlers;


/**
 * Adionadores adicionais para as Classes relacionadas aos arquivos
 * 
 * @author Michael Matheus
 * @version 1.1
 * @access public
*/

class FileHandler {


    /**
     * Verifica qual o diretório atual para upload de arquivos de acordo com mês e ano 
     * se não existir algum para essa data é gerado um novo diretório seguindo esse
     * padrão
     * 
     * @access public
     * @return String
    */

    public static function getUploadFolder(){

        $folderName = 'assets/site/img/uploads/' . date('Y') . '/' . date('m');

        if(!file_exists($folderName)){
            mkdir($folderName, 0777, true);
        }

        return $folderName . '/';

    }
    

    /**
     * Sobe um arquivo para o servidor
     * 
     * @access public
     * @param String $file  
     * @param String $tmpImageName  
     * @param String $newImageName  
     * @return bool
    */

    public static function upload($file, $tmpImageName, $newImageName) {
        
        if (isset($file) && !empty($tmpImageName)) {
            move_uploaded_file($tmpImageName, $newImageName);
            rename($newImageName, strtolower(str_replace(['ç', 'Ç', 'ã', 'Ã', 'â', 'Â', 'á', 'Á', 'à', 'À', 'ê', 'Ê', 'é', 'É', 'í', 'Í', 'ô', 'Ô', 'õ', 'Õ', 'ó', 'Ó', 'ú', 'Ú', '(', ')', ' ', '--', '-–-'], ['c', 'c', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'e', 'e', 'e', 'e', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', '-', '', '-', '-', '-'], $newImageName)));
        }

        return false;

    }


    /**
     * Retorna o tamanho do arquivo em Kb
     * 
     * @access public
     * @param String $size  
     * @return Int
    */

    public static function convertToReadableSize($size){

        $base = log($size) / log(1024);
        
        return round(pow(1024, $base - floor($base)), 1);

    }


    /**
     * Verifica se o arquivo é uma imagem
     * 
     * @access public
     * @param String $file  
     * @return bool
    */

    public static function isImageFile($file){

        return (is_array(getimagesize($file))) ? true : false;

    }


    /**
     * Exclui um arquivo do servidor
     * 
     * @access public
     * @param String $file  
     * @return bool
    */

    public static function delete($file) {

        unlink($file);

    }

}
