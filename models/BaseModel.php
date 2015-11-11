<?php
require_once '../include/config.php';
abstract class BaseModel{
    protected static $db;
    public function __construct() {
        if(self::$db==null){
            self::$db=new mysqli($host, $user, $password, $db_name);
            self::$db->set_charset('utf8');
            
        }
        if(self::$db->connect_errorno){
            die('Connect failed:'.$db->connect_error);
        }
    }
}

