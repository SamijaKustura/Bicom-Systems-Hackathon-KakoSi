<?php

/**
* base for all daos
*
* @author Naida Fatic
*
*/

require_once dirname(__FILE__)."/../config.php";

class BaseDao{
  protected $connection; //connection is protected!!
  private $table;

  public function __construct($table){
    $this->table= $table;
    try {
      $this->connection = new PDO("mysql:host=".Config::DB_HOST().";port=".Config::DB_PORT().";dbname=".Config::DB_SCHEME(), Config::DB_USERNAME(), Config::DB_PASSWORD());
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //$this->connection->setAttribute(PDO::ATTR_AUTOCOMMIT, 0);
    } catch(PDOException $e) {
      throw $e;
    }
  }

  protected function insert($table, $entity){
    $query = "INSERT INTO ${table} (";
    foreach($entity as $name => $value){ // foreach to get every column that is there to post to db
      $query.=$name.", ";
    }
    $query= substr($query, 0, -2);
    $query .=" ) VALUES ( ";
      foreach($entity as $name => $value){
        $query.= ":".$name.", ";
      }

    $query= substr($query, 0, -2);
    $query .=" )";

    $stmt= $this->connection->prepare($query);
    $stmt->execute($entity);
    $entity["id"]= $this->connection->lastInsertId(); //automaticly gives last id
    return $entity;
  }

  protected function query($query, $params){

    $stmt = $this->connection->prepare($query);
    $stmt -> execute($params);
    return $stmt->fetchAll(PDO::FETCH_ASSOC); //this will fetch all columns in a form of assotiative array
  }

  public function add($entity){
    return $this->insert($this->table, $entity);
  }

  public function get_all(){
    return $this->query("SELECT * FROM ".$this->table,[]);
 }

}
?>