<?php 

class OrderController extends Controller {
  public function index(){

    $id = $_GET['id'];

    $data_product_selected = $this->model('DataOrder')->getDataProdukId($id) ;

    return $this->view('order', ['data-produk' => $data_product_selected]);
  }
}


?>