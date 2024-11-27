<?php
namespace src\models;
use \core\Model;

class Lead extends Model {

    public $id;
    public $name;
    public $company;
    public $subject;
    public $email;
    public $phone;
    public $mobile;
    public $cpfCnpj;
    public $whereWannaCallback;
    public $whereFoundUs;
    public $message;
    public $gclid;
    public $date;

}