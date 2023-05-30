<?php 

class DataConfirmation  {

  private $_db ;

  public function __construct(){
    $this->_db = Database::getInstance();
  }

  public function insertDataBuyer($nama_pembeli, $no_hp, $email, $jumlah_pembelian, $metode_pembayaran){
  
   return  $this->_db->addDataBuyer($nama_pembeli, $no_hp, $email, $jumlah_pembelian, $metode_pembayaran) ;

  }

  public function getDataProdukById($id){
    return $this->_db->getDataId($id, 'id_produk', 'produk');
  }

  public function getDataBuyerById($id){
    return $this->_db->getDataId($id, 'id_pembeli', 'pembeli');
  }

  public function insertDataTransaction($file, $id_produk, $id_pembeli) {
    return $this->_db->insertTransaction($file, 'Pending' ,$id_produk, $id_pembeli) ;
  }


} 


?>