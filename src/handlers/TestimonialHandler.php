<?php

namespace src\handlers;

use src\models\Testimonial;
use stdClass;

/**
 * Adionadores adicionais para as Classes relacionadas aos depoimentos
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class TestimonialHandler {

    /**
     * Pega todos os depoimentos
     * 
     * @access public
     * @param Bool $onlyAbleOnes
     * @return Array
    */

    public static function getAll($onlyAbleOnes = true) {

        $data = ($onlyAbleOnes) ? 
            Testimonial::select()->where('able', 1)->get() : 
            Testimonial::select()->get();

            
        if(!empty($data)){

            $testimonials = [];

            foreach($data as $dataItem){

                $testimonial = new Testimonial();
                $testimonial->id = $dataItem['id'];
                $testimonial->name = $dataItem['name'];
                $testimonial->company = $dataItem['company'];
                $testimonial->text = $dataItem['text'];
                $testimonial->createdAt = $dataItem['created_at'];
                $testimonial->updatedAt = $dataItem['updated_at'];
                $testimonial->addedBy = $dataItem['added_by'];
                $testimonial->lastUpdate = $dataItem['last_update'];
                $testimonial->able = $dataItem['able'];

                $testimonials[] = $testimonial;
                
            }

            return $testimonials;
            
        }

        return [];

    }


    /**
     * Pega um item específico da tabela testimonials
     * 
     * @access public
     * @param String $id
     * @return Object
    */

    public static function get($id) {

        $data = Testimonial::select()->where('id', $id)->one();

        if (!empty($data)) {

            $testimonial = new Testimonial();
            $testimonial->id = $data['id'];
            $testimonial->name = $data['name'];
            $testimonial->company = $data['company'];
            $testimonial->text = $data['text'];
            $testimonial->createdAt = $data['created_at'];
            $testimonial->updatedAt = $data['updated_at'];
            $testimonial->addedBy = $data['added_by'];
            $testimonial->lastUpdate = $data['last_update'];
            $testimonial->able = $data['able'];

            return $testimonial;
        }

        return new stdClass();
        
    }


    /**
     * Adiciona um item específico da tabela testimonials
     * 
     * @access public
     * @param Array $fields
     * @return void
    */

    public static function insert($fields) {

        Testimonial::insert([
            'name' => $fields['name'],
            'company' => $fields['company'],
            'text' => $fields['text'],
            'added_by' => $fields['added_by'],
            'last_update' => $fields['last_update'],
            'able' => $fields['able'],
        ])->execute();

    }


    /**
     * Atualiza um item específico da tabela testimonials
     * 
     * @access public
     * @param String $id
     * @param Array $fields
     * @return void
    */

    public static function update($id, $fields) {

        Testimonial::update()
            ->set([
                'name' => $fields['name'],
                'company' => $fields['company'],
                'text' => $fields['text'],
                'last_update' => $fields['last_update'],
                'able' => $fields['able'],
            ])
            ->where('id', $id)
        ->execute();

    }


    /**
     * Deleta um item específico da tabela testimonials
     * 
     * @access public
     * @param String $id
     * @return void
    */

    public static function delete($id) {

        Testimonial::delete()
            ->where('id', $id)
        ->execute();

    }

}
