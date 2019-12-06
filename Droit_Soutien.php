<?php $title = "Droit et soutien"; ?>

<?php ob_start(); ?>

<!--
<script src="script.js"></script>
<link rel="stylesheet" href="style.css">
-->

<? $includes = ob_get_clean(); ?>



<?php ob_start(); ?>

<h1> Droit et soutien </h1>
<ul class="list-group">
  <li class="list-group-item"><img src="./resources/money.png" width=32 height="32" title="Bootstrap">  -  Aide financiéres</li>
  <li class="list-group-item"><img src="./resources/house.png" width=32 height="32" title="Bootstrap">  -  Aide au logement</li>
  <li class="list-group-item"><img src="./resources/help.png" width=32 height="32" title="Bootstrap">  -  Se soigner à moindre coût</li>
  <li class="list-group-item"><img src="./resources/gray_money.png" width=32 height="32" title="Bootstrap">  -  Conseils juridiques</li>
  <li class="list-group-item"><img src="./resources/earth.png" width=32 height="32" title="Bootstrap">  -  Migrant/Réfugiés/Demandeur d'asile</li>
</ul>


<?php $content=ob_get_clean(); ?>

<?php require "gabarit.php" ?>
