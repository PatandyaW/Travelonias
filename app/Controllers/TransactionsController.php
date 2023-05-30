<?php 

class TransactionsController extends Controller {

  public function index(){

    session_start();

    $dataTransactions = $this->model('DataTransactions')->getAllData();

    if($_SESSION['login'] == 'sukses') {
      return $this->view('transactions', ['datas-transaction' => $dataTransactions]) ;
    } else {
      header('location:http://localhost/Travelonia/public/login') ;
    }
    
  }

  public function statusSukses($id){
   $this->model('DataTransactions')->changeSukses($id);
   header('location:http://localhost/Travelonia/public/transactions') ;
  }

  public function statusGagal($id){
    $this->model('DataTransactions')->changeGagal($id);
    header('location:http://localhost/Travelonia/public/transactions') ;
  }

  public function deleteTransaction($id){

    $dataTransactions = $this->model('DataTransactions')->getAllData();

    foreach ($dataTransactions as $transactions){ 

        if( $transactions['id_transaksi'] == $id){


         $buktiTf = $transactions['bukti_transfer'] ;
          unlink('../public/assets/transaction/'.$buktiTf);

          $this->model('DataTransactions')->deleteTransaction($id);
          header('location:http://localhost/Travelonia/public/transactions') ;
          
        }
    }

 
  }

}


?>