<?php

namespace src\handlers;

use \src\models\User;


class LoginHandler {

    public static function checkLogin() {

        if (!empty($_SESSION['token'])) {

            $token = $_SESSION['token'];
            $data = User::select()->where('token', $token)->one();

            if ($data && count($data) > 0) {

                $loggedUser = new User();
                $loggedUser->id = $data['id'];
                $loggedUser->name = $data['name'];
                $loggedUser->lastName = $data['last_name'];
                $loggedUser->username = $data['username'];
                $loggedUser->avatar = $data['avatar'];
                $loggedUser->permissions = $data['permissions'];
                $loggedUser->createdAt = $data['created_at'];
                $loggedUser->addedBy = $data['added_by'];
                $loggedUser->able = $data['able'];
                
                return $loggedUser;
            }
        }

        return false;
    }

    public static function verifyLogin($username, $password){
        $user = User::select()->where('username', $username)->one();

        if($user) {
            if(password_verify($password, $user['password'])){
                $token = md5(time().rand(0, 9999).time());

                User::update()
                    ->set('token', $token)
                    ->where('username', $username)
                ->execute();

                return $token;
            }
        }

        return false;
    }

}
