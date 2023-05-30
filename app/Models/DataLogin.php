<?php 

class DataLogin {
  private $_db;

  public function __construct(){
    $this->_db = Database::getInstance();
  }

  public function getAdmin($username, $password){
    return $this->_db->getDataAdmin($username, $password);
  }

}


?>