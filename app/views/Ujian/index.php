<?php
// var_dump($data['soal']);
// var_dump($_SESSION['login']);
$this->view("Navbar",[]);
?>

<div class="main">
  <div class='__container'> 
    <h2>TOEFEL TEST</h2>
      <form action="" method="POST">
      <!-- <input type="hidden" id="user_id" name="user_id" value="{{ params.id }}"> -->
        <?php
        $index_soal = 1;
        foreach($data['soal'] as $item_soal){ ?>
          <div class="item_soal __innerContainer">
              
                  <span class="__questionText"><?= $item_soal['soal'] ?></span>
                  
                  <input type="hidden" name="opsi_benar_<?= $index_soal ?>" value="<?= $item_soal['opsi_benar'] ?>" >
                  <!-- <input type="hidden" name="soal_id" value="{{ rot_13(soal.opsi_benar) }}">  -->
                  
                  <input type="radio" class="soal_<?= $index_soal ?>" name="soal_<?= $index_soal ?>" value="<?= $item_soal['opsi1'] ?>">
                  <label for="soal_<?= $index_soal ?>"class="__labelText"><?= $item_soal['opsi1'] ?></label><br>
                  
                  <input type="radio" class="soal_<?= $index_soal ?>" name="soal_<?= $index_soal ?>" value="<?= $item_soal['opsi2'] ?>">
                  <label for="soal_<?= $index_soal ?>" class="__labelText"><?= $item_soal['opsi2'] ?></label><br>
                  
                  <input type="radio" class="soal_<?= $index_soal ?>" name="soal_<?= $index_soal ?>" value="<?= $item_soal['opsi3'] ?>">
                  <label for="soal_<?= $index_soal ?>" class="__labelText"><?= $item_soal['opsi3'] ?></label><br>
                  
                  <input type="radio" class="soal_<?= $index_soal ?>" name="soal_<?= $index_soal ?>" value="<?= $item_soal['opsi_benar'] ?>">
                  <label for="soal_<?= $index_soal ?>" class="__labelText"><?= $item_soal['opsi_benar'] ?></label>
              
              
          </div>
        <?php 
        $index_soal+=1;
        }
        ?>
          <!-- type="submit" value="jawaban" name="submitJawaban"  -->

        <button type="submit" name="submit" class="__submitBtn" ng-click="onSubmit()">Selesai</button> 
      </form>
  </div>
</div>