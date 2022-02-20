<?php
require_once dirname(__FILE__)."/../daos/FitnesDao.class.php";

class Fitnes {

 public function __construct(){
      $this->dao = new FitnesDao();
  }

 public function add_fitnes($data){
    return $this->dao->add($data);
 }
 
 public function get(){
   return $this->dao->get_fitnes();
 }

}

?>