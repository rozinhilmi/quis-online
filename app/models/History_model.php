<?php
class History_model{

  private $table = "history";
  private $db;
  
  public function __construct()
  {
    $this->db = new Database;
  }

  public function is_alredy_test($id_user){
    $query = "SELECT * FROM $this->table WHERE user_id = :user_id";
    $this->db->query($query);
    $this->db->bind("user_id",$id_user);
    return $this->db->single();
  }

}

?>