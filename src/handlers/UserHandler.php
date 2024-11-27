<?php

namespace src\handlers;

use src\helpers\Password;
use src\helpers\UrlFormat;
use src\models\User;

/**
 * Adionadores adicionais para as Classes relacionadas aos usuários
 * 
 * @author Michael Matheus
 * @version 1.0
 * @access public
*/

class UserHandler {

    /**
     * Pega todos os usuários
     * 
     * @access public
     * @param Bool $onlyAbleOnes
     * @return bool|array
    */

    public static function getAll($onlyAbleOnes = true) {

        $data = ($onlyAbleOnes) ? 
            User::select()->where('able', 1)->get() : 
            User::select()->get();

        if($data && count($data) > 0){

            foreach($data as $dataItem){

                $user = new User();
                $user->id = $dataItem['id'];
                $user->name = $dataItem['name'];
                $user->lastName = $dataItem['last_name'];
                $user->username = $dataItem['username'];
                $user->avatar = $dataItem['avatar'];
                $user->permissions = $dataItem['permissions'];
                $user->createdAt = $dataItem['created_at'];
                $user->updatedAt = $dataItem['updated_at'];
                $user->addedBy = $dataItem['added_by'];
                $user->lastUpdate = $dataItem['last_update'];
                $user->able = $dataItem['able'];
    
                $users[] = $user;
                
            }
    
            return $users;

        }
        
        return false;            

    }


    /**
     * Pega um item específico da tabela pages
     * 
     * @access public
     * @param String $username
     * @return bool|object
    */

    public static function get($username) {

        $data = User::select()
            ->where('username', $username)
        ->one();

        if ($data && count($data) > 0) {

            $user = new User();
            $user->id = $data['id'];
            $user->name = $data['name'];
            $user->lastName = $data['last_name'];
            $user->username = $data['username'];
            $user->avatar = $data['avatar'];
            $user->permissions = $data['permissions'];
            $user->createdAt = $data['created_at'];
            $user->updatedAt = $data['updated_at'];
            $user->addedBy = $data['added_by'];
            $user->lastUpdate = $data['last_update'];
            $user->able = $data['able'];

            return $user;

        }
        
        return false;

    }


    /**
     * Adiciona um item específico da tabela pages
     * 
     * @access public
     * @param Array $fields
     * @return void
    */

    public static function insert($fields, $files) {

        $imagePath = 'assets/admin/images/users/';
        $tmpImageName = $files['avatar']['tmp_name'];
        $imageName = UrlFormat::getFormatedUrl($files['avatar']['name']);
        $image = (!empty($tmpImageName)) ? $imagePath . $imageName : '';

        User::insert([
            'name' => $fields['name'],
            'last_name'     => $fields['last_name'],
            'username'      => $fields['username'],
            'password'      => Password::encrypt($fields['password']),
            'avatar'        => $image,
            'permissions'   => $fields['permissions'],
            'added_by' => $fields['added_by'],
            'last_update' => $fields['last_update'],
            'able' => $fields['able']
        ])->execute();

        FileHandler::upload($files['avatar'], $tmpImageName, $image);

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

        $imagePath = 'assets/admin/images/users/';
        $tmpImageName = $files['avatar']['tmp_name'];
        $imageName = UrlFormat::getFormatedUrl($files['avatar']['name']);
        $image = (!empty($tmpImageName)) ? $imagePath . $imageName : $fields['default_image'];

        User::update()
            ->set([
                'name' => $fields['name'],
                'last_name'     => $fields['last_name'],
                'password'      => Password::encrypt($fields['password']),
                'avatar'        => $image,
                'permissions'   => $fields['permissions'],
                'last_update' => $fields['last_update'],
                'able' => $fields['able']
            ])
            ->where('slug', $slug)
        ->execute();


        FileHandler::upload($files['avatar'], $tmpImageName, $image);

    }


    /**
     * Deleta um item específico da tabela pages
     * 
     * @access public
     * @param String $slug
     * @return void
    */

    public static function delete($slug) {

        User::delete()
            ->where('slug', $slug)
        ->execute();

    }

}
