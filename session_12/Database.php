<?php


// class Database{

// private static $dsn = "mysql:host=localhost;dbname=nti_online_g4" ;

// public static function getConnection(){
//   return new PDO(self::$dsn , 'root' , '' );

// }
// }

// // $db = new Database ;
// // $db->getConnection();
// Database::getConnection();


interface Database{
    public function selectAll($columns  , $table);
    public function select($columns ,$table , $condation , $operators , $value);
    public function insert();
    public function update();
    public function delete();
}