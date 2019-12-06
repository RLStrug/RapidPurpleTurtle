<?php $title = "Accueil"; ?>

<?php ob_start(); ?>

<? $includes = ob_get_clean(); ?>



<?php ob_start(); ?>
<div class="bg-blue">blue</div>
<div class="bg-indigo">indigo</div>
<div class="bg-purple">purple</div>
<div class="bg-pink">pink</div>
<div class="bg-red">red</div>
<div class="bg-orange">orange</div>
<div class="bg-yellow">yellow</div>
<div class="bg-green">green</div>
<div class="bg-teal">teal</div>
<div class="bg-cyan">cyan</div>
<div class="bg-white">white</div>
<div class="bg-gray">gray</div>
<div class="bg-gray">gray</div>
<div class="bg-primary">primary</div>
<div class="bg-secondary">secondary</div>
<div class="bg-success">success</div>
<div class="bg-info">info</div>
<div class="bg-warning">warning</div>
<div class="bg-danger">danger</div>
<div class="bg-light">light</div>
<div class="bg-dark">dark</div>
<?php $content=ob_get_clean(); ?>

<?php require "gabarit.php" ?>
