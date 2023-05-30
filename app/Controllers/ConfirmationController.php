<?php 

class ConfirmationController extends Controller {

  public function index(){


    $id_produk = $_GET['id'] ;

    $data_product_selected = $this->model('DataConfirmation')->getDataProdukById($id_produk) ;

    $nama = $_POST['namaLengkap'] ;
    $email = $_POST['emailPengguna'] ;
    $notelp = $_POST['notelp'] ;
    $jumlahPesanan = $_POST['jumlahPesanan'] ;
    $method = $_POST['payment-method'] ;

    $addBuyer =  $this->model('DataConfirmation')->insertDataBuyer($nama, $notelp, $email, $jumlahPesanan, $method) ;

    $dataBuyer = $this->model('DataConfirmation')->getDataBuyerById($addBuyer) ;

    $data = array('data-produk' => $data_product_selected, 'data-buyer' => $dataBuyer) ;
    
    return $this->view('confirmation', $data );

  }

  public function transaction(){

    $id_produk = $_GET['id_produk'] ;
    $id_buyer = $_GET['id_buyer'] ;

    $fileConfirmation = $_FILES['fileConfirmation']['name'] ;
    $locationFile = $_FILES['fileConfirmation']['tmp_name'] ;


    move_uploaded_file($locationFile, '../public/assets/transaction/'.$fileConfirmation) ;
    
    $this->model('DataConfirmation')->insertDataTransaction($fileConfirmation, $id_produk, $id_buyer);

    header('location:http://localhost/Travelonia/public/success') ;

   }



}


?>