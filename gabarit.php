<!DOCTYPE html>

<?php
  session_start();
  require_once "./lib/File.php";

  if (!isset($_SESSION["language"])){
    $_SESSION["language"] = "fr";
  } if (!isset($_SESSION["encoding"])){
    $_SESSION["encoding"] = "UTF-8";
  } if (!isset($_SESSION["grayscale"])){
    $_SESSION["grayscale"] = false;
  } if (!isset($_SESSION["highContrast"])){
    $_SESSION["highContrast"] = false;
  } if (!isset($_SESSION["font"])){
    $_SESSION["font"] = Null;
  } if (!isset($_SESSION["font_size"])){
    $_SESSION["fontSize"] = "10pt";
  }

  $coloursClass = "";
  if ($_SESSION["grayscale"]){
    $coloursClass .= "grayscale";
  } if ($_SESSION["highContrast"]){
    $coloursClass .= " high-contrast";
  }
?>


<html lang=<?=$_SESSION["language"]?>>

  <head>
    <meta charset=<?=$_SESSION["encoding"]?>>
    <meta name="author" content="Camy Justine, Govin Cyril, Perez Lucas, Roux Kilian, Shi Hui">
    <base href="/" target="_self">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?=$includes?>
    <title> <?=$title?> </title>
    <link rel="stylesheet" href="style/colours.css">
    <style>
      body{
        <?php if ($_SESSION["font"] !== Null): ?>
        font-family: <?$_SESSION["font"]?>;
        <?php endif; ?>
        font-size: <?=$_SESSION["fontSize"]?>;
      }
    </style>
  </head>


  <body class="<?=$coloursClass?>">
    <style>
    .navbar {
        font-size: 1.5em;
    }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary hc-bg-blue gs-bg-dark-gray bw-black" >
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="form.php">Formulaire</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Droit_Soutien.php">Droit et soutien</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Vis_ma_etu.php">Vis ma vie d'étudiant</a>
          </li>
        </ul>
      </div>
    </nav>

    <main>
      <?php
        if ($_SESSION["grayscale"]){
          $content = preg_replace('/resources\//', 'resources\/gs_', $content);
        } if ($_SESSION["highContrast"]){
          $content = preg_replace('/resources\//', 'resources\/hc_', $content);
        }
      ?>
      <?=$content?>
    </main>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
