<?php 

class DataProfile {

  private $_db ;

  public function __construct(){
    $this->_db = Database::getInstance();
  }


  public function showProfile($username){
    return $this->_db->getAdminProfile($username);
  }

  public function updateProfile($ava, $nama, $username, $pass, $alamat){
    return $this->_db->updateAdminProfile($ava, $nama, $username, $pass, $alamat) ;
  }


} 


?>