<?php 

class DataProducts {
  private $_db;

  public function __construct(){
    $this->_db = Database::getInstance();
  }

  public function showProducts(){
    return  $this->_db->showData('produk') ;
  }

  public function addProduct($nama_produk, $tanggal, $harga, $img_produk, $provinsi, $detail_lokasi, $img_provinsi){
    return $this->_db->addProduct($nama_produk, $tanggal, $harga, $img_produk, $provinsi , $detail_lokasi, $img_provinsi ) ; 
    
  }

  public function updateDataProduk($id_produk, $nama_produk, $tanggal, $harga, $provinsi, $detail_lokasi){
    return $this->_db->updateDataProduk($id_produk, $nama_produk, $tanggal, $harga, $provinsi, $detail_lokasi);
  }

  public function updateDataImageProduk($id_produk, $nama_column, $img){
    return $this->_db->updateDataImageProduk($id_produk, $nama_column, $img);
  }

  public function deleteDataProduct($id){
    return $this->_db->deleteData($id, 'id_produk' );
  }

}
?>