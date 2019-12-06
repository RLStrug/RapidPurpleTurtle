<!DOCTYPE html>

<?php
  session_start();
  require_once "./lib/File.php";

  if (!isset($_SESSION["language"])){
    $_SESSION["language"] = "fr";
  } if (!isset($_SESSION["encoding"])){
    $_SESSION["encoding"] = "UTF-8";
  } if (!isset($_SESSION["colors"])){
    $_SESSION["colors"] = true;
  } if (!isset($_SESSION["highContrast"])){
    $_SESSION["highContrast"] = false;
  } if (!isset($_SESSION["font"])){
    $_SESSION["font"] = Null;
  } if (!isset($_SESSION["font_size"])){
    $_SESSION["font_size"] = "10pt";
  }
?>

<html lang=<?=$_SESSION["language"]?>>

  <head>
    <meta charset=<?=$_SESSION["encoding"]?>>
    <meta name="author" content="Camy Justine, Govin Cyril, Perez Lucas, Roux Kilian, Shi Hui">
    <base href="http://51.83.250.108/" target="_blank">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?=$includes?>
    <title> <?=$title?> </title>
    <style>
    </style>
  </head>


  <body>
    <style>
    .navbar {
        font-size: 17pt
    }
    </style>
    <title>Page</title>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>
      </div>
    </nav>

    <main>
      <?=$content?>
    </main>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
