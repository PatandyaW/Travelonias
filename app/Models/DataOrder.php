<?php 

class DataOrder {
  private $_db;

  public function __construct(){
    $this->_db = Database::getInstance();
  }

  public function getDataProdukId($id){
    return $this->_db->getDataId($id, 'id_produk', 'produk');
  }
}


?>