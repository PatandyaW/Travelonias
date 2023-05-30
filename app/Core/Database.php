<?php

use LDAP\Result;

class Database {

  private static $_instance = null;
  private $mysqli;

  public function __construct(){
    $this->mysqli = new mysqli('localhost', 'root', '', 'db_travelonia') or die('Error Connection');
  }

  public static function getInstance(){
    if(!isset(self::$_instance)){
      self::$_instance = new Database();
    }

    return self::$_instance;
    
  }

  public function showData($table){

    $reply = [];
    $query = "SELECT * FROM $table" ;
    $result = $this->mysqli->query($query);

    while($row = $result->fetch_assoc()) 
      $reply[] = $row;
    return $reply ;
    
  }

  public function getDataId($id,$column_name, $table){

    $query = "SELECT * FROM $table WHERE $column_name = $id " ;
    $result = $this->mysqli->query($query)->fetch_assoc() ;

    return $result ;

  }

  /* Produk */

  public function addProduct($nama_produk, $tanggal, $harga, $img_produk, $provinsi, $detail_lokasi, $img_provinsi){

    $sql = "INSERT INTO produk( nama_produk , tanggal, harga, img_produk, provinsi , detail_lokasi, img_provinsi ) VALUES (  '$nama_produk', '$tanggal', '$harga', '$img_produk', '$provinsi' , '$detail_lokasi', '$img_provinsi' )" ; 
    $this->mysqli->query($sql);

  }

  public function updateDataImageProduk($id_produk, $nama_coloumn, $img ){

    $sql = "UPDATE PRODUK SET  $nama_coloumn = '$img' WHERE id_produk = '$id_produk'";
    $this->mysqli->query($sql);

  }

  public function updateDataProduk($id_produk, $nama_produk, $tanggal, $harga, $provinsi, $detail_lokasi){

    $sql = "UPDATE PRODUK SET  nama_produk='$nama_produk' , tanggal='$tanggal', harga='$harga', provinsi='$provinsi' , detail_lokasi='$detail_lokasi' WHERE id_produk = '$id_produk'";
    $this->mysqli->query($sql);

  }


  public function deleteData($id, $column, $table_name){
    
    $sql = "DELETE FROM $table_name WHERE $column = '$id' " ;
    $this->mysqli->query($sql);

  }

  /* Filtering Data Produk */

  public function showDataFiltered($provinsi, $tanggal, $table ){

    $reply = [];
    $sql = "SELECT id_produk, nama_produk, provinsi, harga, tanggal FROM $table WHERE provinsi = '$provinsi' AND tanggal = '$tanggal' ";
    $result = $this->mysqli->query($sql);

    while($row = $result->fetch_assoc()) 
      $reply[] = $row;
    return $reply ;

  }
  
  /* Insert Data Buyer */

  public function addDataBuyer($nama_pembeli, $no_hp, $email, $jumlah_pembelian, $metode_pembayaran){

    $sql = "INSERT INTO pembeli( nama_pembeli, no_hp, email, jumlah_pembelian, metode_pembayaran ) VALUES ('$nama_pembeli', '$no_hp', '$email', '$jumlah_pembelian', '$metode_pembayaran' ) " ;
    $this->mysqli->query($sql) ;

    return $this->mysqli->insert_id ;

  }

  /* Insert Data Transaction  */

  public function insertTransaction($file, $status, $id_produk, $id_pembeli) {
  
    $sql = "INSERT INTO transaksi(bukti_transfer, status, id_produk, id_pembeli ) VALUES ('$file', '$status' , '$id_produk', '$id_pembeli')" ;
    $this->mysqli->query($sql) ;
  }

  /* Transaction */

  public function getAllTransaction(){

    $reply = [];
    $sql = "SELECT id_transaksi, nama_pembeli, nama_produk, jumlah_pembelian, no_hp, email, bukti_transfer, status FROM transaksi JOIN produk ON transaksi.id_produk = produk.id_produk JOIN pembeli ON transaksi.id_pembeli = pembeli.id_pembeli" ;
    $result = $this->mysqli->query($sql);

    while($row = $result->fetch_assoc()) 
      $reply[] = $row;
    return $reply ;
  
  }

  public function changeStatus($status, $id){
    $sql = "UPDATE transaksi SET status='$status' WHERE id_transaksi='$id' " ;
    $this->mysqli->query($sql);
  }

  /* Dashboard */

  public function getDataStatus(){

    $reply = [];
    $sql = "SELECT status, COUNT(*) AS 'Jumlah' FROM transaksi JOIN produk ON transaksi.id_produk = produk.id_produk JOIN pembeli ON transaksi.id_pembeli = pembeli.id_pembeli GROUP BY status ";
    $result = $this->mysqli->query($sql) ;

    while($row = $result->fetch_assoc()) 
      $reply[] = $row;
    return $reply ;
  }

  public function getSumTransaction(){
    $reply = [];

    $sql = "SELECT COUNT(id_transaksi) AS 'Total Transaksi' FROM transaksi JOIN produk ON transaksi.id_produk = produk.id_produk JOIN pembeli ON transaksi.id_pembeli = pembeli.id_pembeli " ;
    $result = $this->mysqli->query($sql) ;

    while($row = $result->fetch_assoc()) 
      $reply[] = $row;
    return $reply ;
  }

  /*Get Profile */

  public function getAdminProfile($username){
    $sql = "SELECT * FROM admin WHERE username = '$username' " ;
    return $this->mysqli->query($sql)->fetch_assoc() ;

  }

  public function updateAdminProfile($ava, $nama, $username, $pass, $alamat){
    $sql = "UPDATE admin SET  nama_admin='$nama' , username='$username', password='$pass', alamat='$alamat' , avatar='$ava' WHERE username = '$username'";
    return $this->mysqli->query($sql);

  }

  
  /* Login */

  public function getDataAdmin($username, $password){
    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password' " ;
    return $this->mysqli->query($sql)->fetch_assoc() ;
  
  }
  

}