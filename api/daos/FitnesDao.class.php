<?php
require_once dirname(__FILE__)."/BaseDao.class.php";

class FitnesDao extends BaseDao{

  public function __construct(){
    parent::__construct("fitnes");
  }

  public function add_fitnes($entity){
    return $this->add($entity);
  }

  public function get_fitnes(){
      return $this->get_all();
  }

}

?>