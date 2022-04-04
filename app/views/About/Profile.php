<?php $this->view("Navbar",[]); ?>

<center><h1>Ini Profile</h1></center>
<center>
  <?php
  if($data['user_data'] != false){ ?>
    <table class="table" style="width: 450px;">
      <tr>
        <td>Name</td>
        <td><?= $data['user_data']['name'] ?></td>
      </tr>
      <tr>
        <td>Age</td>
        <td><?= $data['user_data']['age'] ?></td>
      </tr>
      <tr>
        <td>Job</td>
        <td><?= $data['user_data']['job'] ?></td>
      </tr>
      <tr>
        <td><button name="edit" onclick="showFormComment()" class="btn btn-outline-success">Edit</button></td>
        <form action="" method="POST">
          <td><button type="submit" name="delete" class="btn btn-outline-danger">Delete</button></td>   
        </form>
        
      </tr>
    </table>
  <?php }
  else{ ?>
    <h5>data tidak ditemukan</h5>
  <?php }
  ?>
  
</center>