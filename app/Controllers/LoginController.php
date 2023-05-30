<?php 

class LoginController extends Controller {

  public function index(){
    session_start();
    return $this->view('login');
  }

  public function validation(){

    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $admin = $this->model('DataLogin')->getAdmin($username, $password) ;

    if($admin){
      $_SESSION['username'] = $username;
      $_SESSION['ava'] = $admin['avatar'] ;
      $_SESSION['login'] = 'sukses' ;
      header('location:http://localhost/Travelonia/public/admin') ;
    } else {
      $_SESSION['error'] = 'true' ;
      header('location:http://localhost/Travelonia/public/login') ;
    } 
  }

  public function logout(){
    session_start();
    session_destroy();
    header('location:http://localhost/Travelonia/public/login') ;
  }

}

?>