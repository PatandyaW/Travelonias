<?php 

class DataDetail {
  private $_db;

  public function __construct(){
    $this->_db = Database::getInstance();
  }

  public function getAllFilteredData($provinsi, $tanggal){
  
  
    return $this->_db->showDataFiltered($provinsi, $tanggal, 'produk');

  }



}


?>