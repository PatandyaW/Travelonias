<?php 

class ProductsController extends Controller {

  public function index(){

    session_start();

    $dataProducts = $this->model('DataProducts')->showProducts();
    
    if($_SESSION['login'] == 'sukses') {
      return $this->view('products', ['data-produk' => $dataProducts]) ;
    } else {
      header('location:http://localhost/Travelonia/public/login') ;
    }


  }

  public function addProducts(){

      $nama_produk = $_POST['nama_produk'];
      $tanggal = $_POST['tanggal'];
      $harga = $_POST['harga'];
      $provinsi = ucwords( $_POST['provinsi']);
      $detail_lokasi = $_POST['detail_lokasi'];

      $img_produk = $_FILES['img_produk']['name'];
      $location_img_produk = $_FILES['img_produk']['tmp_name'];

      $img_provinsi = $_FILES['img_provinsi']['name'];
      $location_img_provinsi = $_FILES['img_provinsi']['tmp_name'];

      move_uploaded_file($location_img_produk, '../public/assets/produks/gambar-products/'.$img_produk);
      move_uploaded_file($location_img_provinsi, '../public/assets/produks/gambar-provinsi/'.$img_provinsi);


      $this->model('DataProducts')->addProduct($nama_produk, $tanggal, $harga, $img_produk, $provinsi, $detail_lokasi, $img_provinsi );

      header('location:http://localhost/Travelonia/public/products') ;

  }

  public function deleteProduct($id){

    $dataProducts = $this->model('DataProducts')->showProducts();

    foreach ($dataProducts as $produk){ 

        if( $produk['id_produk'] == $id){


         $img_produk = $produk['img_produk'] ;
         $img_provinsi = $produk['img_provinsi'] ;

          unlink('../public/assets/produks/gambar-products/'.$img_produk);
          unlink('../public/assets/produks/gambar-provinsi/'.$img_provinsi);

          $this->model('DataProducts')->deleteDataProduct($id);

           header('location:http://localhost/Travelonia/public/products') ;
          
        }
    }
    
  }

  public function editProduct($id){

    
    $nama_produk = $_POST['nama_produk'];
    $tanggal = $_POST['tanggal'];
    $harga = $_POST['harga'];
    $provinsi = ucwords( $_POST['provinsi']);
    $detail_lokasi = $_POST['detail_lokasi'];
    
    $img_produk_new = $_FILES['img_produk']['name'];
    $img_provinsi_new = $_FILES['img_provinsi']['name'];

    $getOldData = $this->model('DataProducts')->showProducts();

    foreach ($getOldData as $produk){ 

          if( $produk['id_produk'] == $id){

            $img_produk_old = $produk['img_produk'] ;
            $img_provinsi_old = $produk['img_provinsi'] ;
          }
     }


    if($img_produk_new != null){
      $update_img_produk = $img_produk_new;
      unlink('../public/assets/produks/gambar-products/'.$img_produk_old);
      move_uploaded_file($_FILES['img_produk']['tmp_name'], '../public/assets/produks/gambar-products/'.$_FILES['img_produk']['name']);
      $this->model('DataProducts')->updateDataImageProduk($id, 'img_produk', $update_img_produk );
    } 
    

    if($img_provinsi_new != null){
      $update_img_provinsi = $img_provinsi_new;
      move_uploaded_file($_FILES['img_provinsi']['tmp_name'], '../public/assets/produks/gambar-provinsi/'.$_FILES['img_provinsi']['name']);
      unlink('../public/assets/produks/gambar-provinsi/'.$img_provinsi_old);
      $this->model('DataProducts')->updateDataImageProduk($id, 'img_provinsi', $update_img_provinsi );

    } 
    

    $this->model('DataProducts')->updateDataProduk($id, $nama_produk, $tanggal, $harga, $provinsi, $detail_lokasi);
  
    header('location:http://localhost/Travelonia/public/products') ;
  }

}


?>