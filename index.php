<?php $title = "Accueil"; ?>

<?php ob_start(); ?>

<!--
<script src="script.js"></script>
<link rel="stylesheet" href="style.css">
-->

<?php $includes = ob_get_clean(); ?>



<?php ob_start(); ?>

<h1> Ceci est l'accueil </h1>
<p> Prière de circuler </p>
<img src="resources/earth.png">

<?php $content=ob_get_clean(); ?>

<?php require "gabarit.php" ?>
