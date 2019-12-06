<?php $title = "Formulaire"; ?>

<?php ob_start(); ?>


<script src="script.js"></script>
<!--
<link rel="stylesheet" href="style.css">
-->

<?php $includes = ob_get_clean(); ?>


<?php ob_start(); ?>
<?php
require_once "./lib/File.php";
require_once File::build_path(array('model', 'ModelSpecialite.php'));


$a = "name.surnam@etu.u-bordeaux.fr";

?>
<form>
  <div class="form-group">
    <label for="inputName">Nom</label>
    <input type="text" class="form-control" id="inputName" placeholder="Dupont">
    <label for="inputEmail">Adresse Email Universitaire</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="<?php echo $a;?>">
  </div>
  <div class="form-group">
    <label for="selectSpecciality">Example select</label>
    <select class="form-control" id="selectSpecciality">
      <?php

      $specialite_list = array("medecine", "droit", "finance");

      foreach ($specialite_list as $value) {
        echo "<option>" . htmlspecialchars($value) . "</option>";
      }

       ?>
    </select>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>

<?php $content=ob_get_clean(); ?>

<?php require "gabarit.php" ?>
