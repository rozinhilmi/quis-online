<?php
class User_model{

  private $table = "p_user";
  private $db;
  
  public function __construct()
  {
    $this->db = new Database;
  }


  public function get_all_user(){
    $this->db->query("SELECT * FROM $this->table ORDER BY id DESC");
    return $this->db->result_set();
  } 
  
  public function get_specific_user($username){
    try {
      $query = "SELECT * FROM $this->table WHERE username = :username";
      $this->db->query($query);
      $this->db->bind('username',$username);
      return $this->db->single();
    } catch (\Throwable $th) {
      return "Error";
    }
    
  }

  public function login($username, $password){
    $query = "SELECT * FROM $this->table WHERE username = :username && password = :password";
    $this->db->query($query);
    $this->db->bind('username',$username);
    $this->db->bind('password',$password);
    return $this->db->single();
  }

  public function register($data){
    $query = "SELECT * FROM $this->table WHERE username = :username || email = :email";
    $this->db->query($query);
    $this->db->bind('username',$data['username']);
    $this->db->bind('email',$data['email']);
    if ($this->db->single() == false ){
      $query = "INSERT INTO $this->table VALUES(0,:email,:username,:password)";
      $this->db->query($query);
      $this->db->bind('email',$data['email']);
      $this->db->bind('username',$data['username']);
      $this->db->bind('password',$data['password']);
      $this->db->execute();
      header("Location: ".BASE_URL."/Login");

    }
    else{
      return false;
    }
    

  }
}

?>