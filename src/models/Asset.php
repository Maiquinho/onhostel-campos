<?php
namespace src\models;
use \core\Model;

class Asset extends Model {

    public $id;
    public $fileName;
    public $legend;
    public $height;
    public $width;
    public $size;
    public $mimeType;
    public $createdAt;
    public $updatedAt;
    public $addedBy;
    public $lastUpdate;
    public $able;
    public $tableName;
    public $tableDescription; 

}