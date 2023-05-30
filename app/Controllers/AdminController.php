<?php 

class AdminController extends Controller {

  public function index(){

    session_start();

    $dataStatus = $this->model('DataDashboard')->getAllDataStatus() ;
    $totalData = $this->model('DataDashboard')->sumTransaction() ;

    $sukses = 0; 
    $gagal = 0 ;
    $pending = 0 ;

    foreach ($dataStatus as $dataChart) { 

        if($dataChart['status'] == 'Sukses'){
          $sukses = $dataChart['Jumlah'] ;
        }
        if($dataChart['status'] == 'Gagal'){
          $gagal = $dataChart['Jumlah'] ;
        }
        if($dataChart['status'] == 'Pending'){
          $pending = $dataChart['Jumlah'] ;
        }
    
    }

    $dataArray = array($pending, $sukses, $gagal) ;

    $data = array('data-status' => $dataArray, 'data-total' => $totalData, 'data-array' => $dataArray) ;

    if($_SESSION['login'] == 'sukses') {
      return $this->view('dashboard', $data);
    } else {
      header('location:http://localhost/Travelonia/public/login') ;
    }




  }

}


?>