<?php
class Controller{

  public function __construct()
  {
    if(!isset($_SESSION['login'])  && $_SESSION['controller_name'] != "Login"  && $_SESSION['controller_name'] != "Register" ){
      header("Location: ".BASE_URL."/Login");
    }
    else if (isset($_SESSION['login']) && $_SESSION['controller_name'] == "Login" ){
      header("Location: ".BASE_URL."/Ujian");
    }
    else if(isset($_SESSION['login'])  && $_SESSION['controller_name'] != "Login"){

      // var_dump($this->model("User_model")->login($_SESSION['login']['username'],$_SESSION['login']['password']));
      $is_alredy_account = $this->model("User_model")->login($_SESSION['login']['username'],$_SESSION['login']['password']);
      if($is_alredy_account == false){
        session_destroy();
        header("Location: ".BASE_URL."/Login");
      }
    }

    if(isset($_POST['logout'])){
      session_destroy();
      header("Location: ".BASE_URL."/Login");

    }
  }
  
  
  public function view($view,$data=[]){
    require_once "../app/views/$view.php";
  }

  public function model($model){
    require_once "../app/models/$model.php";
    return new $model;
  }


  public function show_loading_screen(){
    require "../app/views/LoadingScreen.php";
  }
}

?>