<?php $title = "Formulaire"; ?>

<?php ob_start(); ?>

<!--
<link rel="stylesheet" href="style.css">
-->

<?php $includes = ob_get_clean(); ?>


<?php ob_start(); ?>

<?php
require_once "./lib/File.php";
require_once File::build_path(array('model', 'ModelSpecialite.php'));
require_once File::build_path(array('model', 'ModelExpert.php'));

if(isset($_POST['inputName']) && isset($_POST['inputEmail']) && isset($_POST['selectFiliere']) && isset($_POST['selectSpeciality']) ){
$name = $_POST['inputName'];
$email = $_POST['inputEmail'];
$filiere = $_POST['selectFiliere'];
$speciality = $_POST['selectSpeciality'];

$data = array(
  "customer_name" => $name,
  "customer_email" => $email,
  "customer_filiere" => $filiere
);

ModelExpert::save($data);


}


?>

<?php $content=ob_get_clean(); ?>

<?php require "gabarit.php" ?>
