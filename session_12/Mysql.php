<?php

require_once 'Database.php';

class Mysql implements Database{

private $connection ;

public function __construct($dsn , $username , $password)
{
  $this->connection = new PDO($dsn , $username , $password);
} 

public function selectAll($columns  , $table){
 
  $query = "SELECT $columns  FROM  $table"; 
  $result = $this->connection->query($query) ; 
  $data= $result->fetchAll(PDO::FETCH_ASSOC);
  return $data;


}
public function select($columns ,$table , $condation , $operators , $value){
 
  $query = "SELECT $columns  FROM  $table WHERE $condation $operators $value"; 
  $result = $this->connection->query($query) ; 
  $data= $result->fetchAll(PDO::FETCH_ASSOC);
  return $data;
}
public function insert(){

}
public function update(){

}
public function delete(){

}
}

$mysql = new Mysql(dsn:"mysql:host=localhost;dbname=nti_online_g4", username:'root',password:'');
echo "<pre>";
// print_r($mysql->selectAll('*' , 'departments'));
print_r($mysql->select('first_name' , 'customers','id','=' , 5));