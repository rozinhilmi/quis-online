<?php
class Ujian_model{

  private $table = "soal";
  private $db;
  
  public function __construct()
  {
    $this->db = new Database;
  }


  public function get_soal(){
    $this->db->query("SELECT * FROM $this->table");
    return $this->db->result_set();
  }


  public function get_all_user(){
    $this->db->query("SELECT * FROM $this->table ORDER BY id_mhs DESC");
    return $this->db->result_set();
  } 
  
  public function get_specific_user($id_mhs){
    try {
      $query = "SELECT * FROM $this->table WHERE id_mhs = :id_mhs";
      $this->db->query($query);
      $this->db->bind('id_mhs',$id_mhs);
      return $this->db->single();
    } catch (\Throwable $th) {
      return "Error";
    }
    
  }
  public function delete_mhs($id_mhs){
    $query = "DELETE FROM $this->table WHERE id_mhs = :id_mhs";
    $this->db->query($query);
    $this->db->bind('id_mhs',$id_mhs);
    $this->db->execute();
  }

  public function edit_mhs_data($data){
    $query = "UPDATE $this->table set name=:name, age=:age, job=:job WHERE id_mhs = :id_mhs ";
    $this->db->query($query);
    $this->db->bind('id_mhs',$data['id_mhs']);
    $this->db->bind('name',$data['name_edit']);
    $this->db->bind('age',$data['age_edit']);
    $this->db->bind('job',$data['job_edit']);
    $this->db->execute();
  }

  public function update_history($data){
    $query = "INSERT INTO history Values(0,:user_id,:nilai,:tanggal_ujian)";
    $this->db->query($query);
    $this->db->bind('user_id',$data['user_id']);
    $this->db->bind('nilai',$data['nilai']);
    $this->db->bind('tanggal_ujian',$data['tanggal_ujian']);
    $this->db->execute();
  }


}

?>