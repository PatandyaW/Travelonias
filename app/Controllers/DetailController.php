<?php 

class DetailController extends Controller {
  
  public function index(){

    $provinsi = ucwords($_GET['provinsi']);
    $tanggal = $_GET['tanggal'];

    $changeFormatTanggal = date("Y-m-d", strtotime($tanggal));

    $dataFiltered = $this->model('DataDetail')->getAllFilteredData($provinsi, $changeFormatTanggal);


     return $this->view('detail-produk', ['data-produk' => $dataFiltered]);
  }

}


?>