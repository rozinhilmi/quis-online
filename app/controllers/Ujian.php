<?php
class Ujian extends Controller{

 

  public function index(){
    
    $is_alredy_test = $this->model("History_model")->is_alredy_test(
      $this->model("User_model")->get_specific_user($_SESSION['login']['username'])['id']
    ); // var_dump($is_alredy_test);
    if($is_alredy_test != false){
      echo '<script>
      window.location.replace("'.BASE_URL.'/Home");
      </script>';
    }
    
    
    $controller_name = $_SESSION['controller_name'];
    $method_name = $_SESSION['method_name'];
    
    // echo $this->controller;
    $data = [
      "controller_name"=>$controller_name,
      "method_name"=> $method_name,
      "soal" => $this->model("Ujian_model")->get_soal()
    ];
    
    // echo $this->controller;
    $this->view("header",$data['controller_name']);
    $this->view("$data[controller_name]/index",$data);
    $this->view("footer");


    if(isset($_POST['submit'])){
      $this->update_history($_POST);
    }
  }


  public function update_history($data){
    $jumlah_benar = 0;
    for ($i=1; $i <15 ; $i++) {
      if(isset($data['opsi_benar_'.$i]) && isset($data['soal_'.$i]) ){
        if($data['opsi_benar_'.$i] == $data['soal_'.$i]){
          $jumlah_benar +=1;
        }
      } 
      
    }
    $nilai = ($jumlah_benar/15)*100;
    $data = [
      "user_id" => $_SESSION['login']['id'],
      "nilai" => $nilai,
      "tanngal_ujian" => "01-01-2021"
    ];
    $this->model("Ujian_model")->update_history($data);
    header("Location: ".BASE_URL);
  }
}
?>