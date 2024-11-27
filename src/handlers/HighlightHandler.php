<?php

namespace src\handlers;

use \src\models\Highlight;
use stdClass;

/**
 * Adionadores adicionais para as Classes relacionadas aos destaques
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class HighlightHandler {

    /**
     * Pega todas as linhas dos banners
     * 
     * @access public
     * @param Bool $onlyAbleOnes
     * @return Array
    */

    public static function getAll($onlyAbleOnes = true) {

        $data = ($onlyAbleOnes) ? 
            Highlight::select()
                ->where('able', 1)
            ->get() 
            : 
            Highlight::select()
            ->get();

        $highlights = [];

        if(!empty($data)){

            foreach($data as $dataItem){

                $highlight                 = new Highlight();

                $highlight->id             = $dataItem['id'];
                $highlight->name           = $dataItem['name'];
                $highlight->description    = $dataItem['description'];
                $highlight->icon           = 'fas fa-' . $dataItem['icon'];
                $highlight->createdAt      = $dataItem['created_at'];
                $highlight->updatedAt      = $dataItem['updated_at'];
                $highlight->addedBy        = $dataItem['added_by'];
                $highlight->lastUpdate     = $dataItem['last_update'];
                $highlight->able           = $dataItem['able'];

                $highlights[] = $highlight;
                
            }

            return $highlights;
            
        }
        
        return $highlights;

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
            Highlight::select()
                ->where('id', $id)
                ->where('able', 1)
            ->one() 
            : 
            Highlight::select()
                ->where('id', $id)
            ->one();

        if (!empty($data)) {

            $highlight                 = new Highlight();

            $highlight->id             = $data['id'];
            $highlight->name           = $data['name'];
            $highlight->description    = $data['description'];
            $highlight->icon           = 'fas fa-' . $data['icon'];
            $highlight->createdAt      = $data['created_at'];
            $highlight->updatedAt      = $data['updated_at'];
            $highlight->addedBy        = $data['added_by'];
            $highlight->lastUpdate     = $data['last_update'];
            $highlight->able           = $data['able'];

            return $highlight;
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

    public static function insert($fields) {

        Highlight::insert([
            'name'              => $fields['name'],
            'description'       => $fields['description'],
            'icon'              => 'fas fa-' . $fields['icon'],
            'added_by'          => $fields['added_by'],
            'last_update'       => $fields['last_update'],
            'able'              => $fields['able'],
        ])->execute();

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

    public static function update($id, $fields) {

        $fields = EmptyFieldHandler::setNull($fields);

        Highlight::update([
            'name'              => $fields['name'],
            'description'       => $fields['description'],
            'icon'              => 'fas fa-' . $fields['icon'],
            'last_update'       => $fields['last_update'],
            'able'              => $fields['able'],
        ])->where('id', $id)->execute();

    }


    /**
     * Deleta um item específico da tabela banners
     * 
     * @access public
     * @param String $id
     * @return void
    */

    public static function delete($id) {

        Highlight::delete()
            ->where('id', $id)
        ->execute();

    }

}
