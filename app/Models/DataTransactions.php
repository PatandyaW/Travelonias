<?php 

class DataTransactions{
  private $_db;

  public function __construct(){
    $this->_db = Database::getInstance();
  }

  public function getAllData(){
    return $this->_db->getAllTransaction() ; 
  }

  public function changeSukses($id){
    return $this->_db->changeStatus('Sukses', $id) ;
  }

  public function changeGagal($id){
    return $this->_db->changeStatus('Gagal', $id) ;
  }

  public function deleteTransaction($id){
    return $this->_db->deleteData($id, 'id_transaksi', 'transaksi');
  }



}


?>