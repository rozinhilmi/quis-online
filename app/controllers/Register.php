<?php
class Register extends Controller{
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


    if(isset($_POST['register'])){
      if($this->model("User_model")->register($_POST) == false){
        $this->view("Component/modal",$data_alert = [
          "title" => "Warning",
          "message" => "username atau email yang anda masukan sudah dipakai"
        ]);
      }

      
      
    }
  }
}


?>