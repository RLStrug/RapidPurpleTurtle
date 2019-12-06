<?php $title = "Formulaire"; ?>

<?php ob_start(); ?>


<script src="script.js"></script>
<!--
<link rel="stylesheet" href="style.css">
-->

<?php $includes = ob_get_clean(); ?>


<?php ob_start(); ?>
<?php


$a = "name.surnam@etu.u-bordeaux.fr";

?>
<form action="addExpert.php" method="post">
  <div class="form-group">
    <label for="inputName">Nom</label>
    <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Dupont">
    <label for="inputEmail">Adresse Email Universitaire</label>
    <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="<?php echo $a;?>">
  </div>
  <div class="form-group">
    <label for="selectFiliere">Études</label>
    <select class="form-control" id="selectFiliere" name="selectFiliere">
      <?php

      $filiere_list = array("biologie", "informatique", "physique");

      foreach ($filiere_list as $value) {
        echo "<option>" . htmlspecialchars($value) . "</option>";
      }

       ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>

<?php $content=ob_get_clean(); ?>

<?php require "gabarit.php" ?>
