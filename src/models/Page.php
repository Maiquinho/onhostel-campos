<?php
namespace src\models;
use \core\Model;

class Page extends Model {

    public $id;
    public $title;
    public $h1;
    public $description;
    public $altTitle;
    public $slug;
    public $fullUrl;
    public $image;
    public $content;
    public $createdAt;
    public $updatedAt;
    public $addedBy;
    public $lastUpdate;
    public $able;
    public $tableName;
    public $tableDescription; 

}