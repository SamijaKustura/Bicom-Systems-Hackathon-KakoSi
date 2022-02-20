<?php
require_once dirname(__FILE__)."/BaseDao.class.php";

class MailDao extends BaseDao{

  public function __construct(){
    parent::__construct("mail");
  }

  public function add_mail($entity){
    return $this->add($entity);
  }

  public function get_mail(){
      return $this->get_all();
  }

}

?>