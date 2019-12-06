<?php $title = "Droit et soutien"; ?>

<?php ob_start(); ?>

<!--
<script src="script.js"></script>
<link rel="stylesheet" href="style.css">
-->

<? $includes = ob_get_clean(); ?>



<?php ob_start(); ?>

<h1> Droit et soutien </h1>
<h2> <img src="./resources/gray_money.png" class="mr-3" alt="Aide financiéres" width="10rem"> Aide financiéres</h2>


    <h6 class="border-bottom border-gray pb-2 mb-0">Recent updates</h6>
    <div class="media text-muted pt-3">
      <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="./resources/gray_money" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <strong class="d-block text-gray-dark">Aides financiéres</strong>
      </p>
    </div>
    <small class="d-block text-right mt-3">
      <a href="#">All updates</a>
    </small>

<?php $content=ob_get_clean(); ?>

<?php require "gabarit.php" ?>
