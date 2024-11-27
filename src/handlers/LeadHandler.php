<?php

namespace src\handlers;

use src\models\Lead;

/**
 * Adionadores adicionais para as Classes relacionadas aos leads
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class LeadHandler {

    /**
     * Pega todos os leads
     * 
     * @access public
     * @return bool
    */

    public static function getAll() {

        $data = Lead::select()->get();


        if($data && count($data) > 0){

            $leads = [];

            foreach($data as $dataItem){

                $lead = new Lead();
                $lead->id = $dataItem['id'];
                $lead->name = $dataItem['name'];
                $lead->company = $dataItem['company'];
                $lead->subject = $dataItem['subject'];
                $lead->email = $dataItem['email'];
                $lead->phone = $dataItem['phone'];
                $lead->mobile = $dataItem['mobile'];
                $lead->cpfCnpj = $dataItem['cpf_cnpj'];
                $lead->whereWannaCallback = $dataItem['where_wanna_callback'];
                $lead->whereFoundUs = $dataItem['where_found_us'];
                $lead->message = $dataItem['message'];
                $lead->gclid = $dataItem['gclid'];
                $lead->date = $dataItem['date'];

                $leads[] = $lead;
                
            }

            return $leads;
            
        }

        return false;

    }


    /**
     * Pega um item específico da tabela leads
     * 
     * @access public
     * @param String $id
     * @return bool
    */

    public static function get($id) {

        $data = Lead::select()->where('id', $id)->one();


        if ($data && count($data) > 0) {

            $lead = new Lead();
            $lead->id = $data['id'];
            $lead->name = $data['name'];
            $lead->company = $data['company'];
            $lead->subject = $data['subject'];
            $lead->email = $data['email'];
            $lead->phone = $data['phone'];
            $lead->mobile = $data['mobile'];
            $lead->cpfCnpj = $data['cpf_cnpj'];
            $lead->whereWannaCallback = $data['where_wanna_callback'];
            $lead->whereFoundUs = $data['where_found_us'];
            $lead->message = $data['message'];
            $lead->gclid = $data['gclid'];
            $lead->date = $data['date'];

            return $lead;
        }

        return false;
    }


    /**
     * Adiciona um item específico da tabela leads
     * 
     * @access public
     * @param Array $fields
     * @return void
    */

    public static function insert($fields) {

        Lead::insert([
            'name' => $fields['name'],
            'company' => $fields['company'],
            'subject' => $fields['subject'],
            'email' => $fields['email'],
            'phone' => $fields['phone'],
            'mobile' => $fields['mobile'],
            'cpf_cnpj' => $fields['cpf_cnpj'],
            'where_wanna_callback' => $fields['where_wanna_callback'],
            'where_found_us' => $fields['where_found_us'],
            'message' => $fields['message'],
            'products' => $fields['products'],
            'gclid' => $fields['gclid'],
        ])->execute();

    }


    /**
     * Atualiza um item específico da tabela leads
     * 
     * @access public
     * @param String $id
     * @param Array $fields
     * @return void
    */

    public static function update($id, $fields) {

        Lead::update()
            ->set([
                'name' => $fields['name'],
                'company' => $fields['company'],
                'subject' => $fields['subject'],
                'email' => $fields['email'],
                'phone' => $fields['phone'],
                'mobile' => $fields['mobile'],
                'cpf_cnpj' => $fields['cpf_cnpj'],
                'where_wanna_callback' => $fields['where_wanna_callback'],
                'where_found_us' => $fields['where_found_us'],
                'message' => $fields['message'],
                'products' => $fields['products'],
                'gclid' => $fields['gclid'],
            ])
            ->where('id', $id)
        ->execute();

    }


    /**
     * Deleta um item específico da tabela leads
     * 
     * @access public
     * @param String $id
     * @return void
    */

    public static function delete($id) {

        Lead::delete()
            ->where('id', $id)
        ->execute();

    }

}
