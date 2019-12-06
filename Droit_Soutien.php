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
  <li class="list-group-item"><img src="./resources/money.png" width=32 height="32" title="Bootstrap">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Aide financiéres</h5>
      <p class="card-text">Explication .</p>
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div></li>
  <li class="list-group-item"><img src="./resources/fort.png" width=32 height="32" title="Bootstrap">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Aide au logement</h5>
      <p class="card-text">Explication .</p>
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div></li>
  <li class="list-group-item"><img src="./resources/help.png" width=32 height="32" title="Bootstrap">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Se soigner à moindre coût</h5>
      <p class="card-text">Explication .</p>
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div></li>
  <li class="list-group-item"><img src="./resources/health.png" width=32 height="32" title="Bootstrap">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Conseils juridiques</h5>
      <p class="card-text">Explication .</p>
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div></li>
  <li class="list-group-item"><img src="./resources/earth.png" width=32 height="32" title="Bootstrap">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Migrant/Réfugiés/Demandeur d'asile</h5>
      <p class="card-text">Explication .</p>
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div></li>
</ul>


<?php $content=ob_get_clean(); ?>

<?php require "gabarit.php" ?>
