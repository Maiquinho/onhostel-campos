<?php
namespace src\models;
use \core\Model;

class User extends Model {

    public $id;
    public $name;
    public $lastName;
    public $username;
    public $password;
    public $avatar;
    public $permissions;
    public $createdAt;
    public $updatedAt;
    public $addedBy;
    public $lastUpdate;
    public $token;
    public $able;
    public $tableName;
    public $tableDescription;

}