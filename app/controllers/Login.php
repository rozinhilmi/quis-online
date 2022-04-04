<?php
class Login extends Controller{
  public function index(){
    
    $controller_name = $_SESSION['controller_name'];
    $method_name = $_SESSION['method_name'];
    $data = [
      "controller_name"=>$controller_name,
      "method_name"=> $method_name,
    ];
    
    // echo $this->controller;
    $this->view("header",$data['controller_name']);
    $this->view("$data[controller_name]/index",$data);
    $this->view("footer");


    if(isset($_POST['login'])){
      // var_dump($_POST);
      
      $is_alredy_account = $this->model("User_model")->login($_POST['username'],$_POST['password']);

      if($is_alredy_account != false){
        $_SESSION['login'] = ["username"=>$is_alredy_account['username'], "password"=> $is_alredy_account['password']  ];
          header("Location: ".BASE_URL."/Ujian");
          exit();
      }
      else{
        $this->view("Component/modal",$data_alert = [
          "title" => "Warning",
          "message" => "username atau password yang anda masukan salah"
        ]);
      }
      
      
    }
  }
}


?>