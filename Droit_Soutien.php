<?php $title = "Droit et soutien"; ?>

<?php ob_start(); ?>

<!--
<script src="script.js"></script>
<link rel="stylesheet" href="style.css">
-->

<? $includes = ob_get_clean(); ?>



<?php ob_start(); ?>

<h1> Droit et soutien </h1>
<h2> <img src="./resources/gray_money.png" class="card-img-top" alt="Aide financiéres" width="10rem"> Aide financiéres</h2>

<?php $content=ob_get_clean(); ?>

<?php require "gabarit.php" ?>
