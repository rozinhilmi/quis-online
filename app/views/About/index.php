<?php $this->view("Navbar",[]); ?>

<center><h1>Ini Halaman <?= $data['controller_name'] ?>, parameter = <?= $data['method_name'] ?></h1></center>
<center>
  <table class="table" style="width: 850px;">
    <tr>
      <th>Name</th>
      <th>Age</th>
      <th>Job</th>
      <th></th>
    </tr>
    <?php
      foreach ($data['user_data'] as $mahasiswa) {?>
        <tr>
          <form action="" method="POST">
            <input type="hidden" name="id_mhs" value="<?= $mahasiswa["id_mhs"] ?>">
            <td><input class="form-control" type="text" name="name_edit" value="<?= $mahasiswa["name"] ?>" disabled></td>
            <td><input class="form-control" type="text" name="age_edit" value="<?= $mahasiswa["age"] ?>" disabled></td>
            <td><input class="form-control" type="text" name="job_edit" value="<?= $mahasiswa["job"] ?>" disabled></td>      
            <td><a class="btn btn-success" href="<?= BASE_URL ?>/<?= $data['controller_name'] ?>/Profile/<?= $mahasiswa["id_mhs"] ?>" disabled>Open</a></td>   
          </form>
        </tr>
        
      <?php
      }
    ?>
  </table>
</center>

<div class="floating-button" onclick="showFormComment()">
  <h1>+</h1>
</div>

