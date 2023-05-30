<?php 

class DataDashboard {
  private $_db;

  public function __construct(){
    $this->_db = Database::getInstance();
  }

  public function getAllDataStatus(){
  
    return $this->_db->getDataStatus() ;

  }

  public function sumTransaction(){
    return $this->_db->getSumTransaction() ;
  }



}


?>