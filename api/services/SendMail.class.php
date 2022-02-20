<?php
require_once dirname(__FILE__)."/../daos/MailDao.class.php";

class SendMail {

 public function __construct(){
      $this->dao = new MailDao();
  }

 public function add($data){
    return $this->dao->add($data);
 }
 
 public function get(){
   return $this->dao->get_mail();
 }

}

?>