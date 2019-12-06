<!DOCTYPE html>

<?php
  session_start();
  require_once "./lib/File.php";

  $languageList = [["fr","UTF-8"]];
  $fontList = [Null, '"Comic Sans MS", "Comic Sans", cursive;'];

  if (isset($_POST["languageId"]) && is_numeric($_POST["languageId"])){
    $_SESSION["language"] = $languageList[intval($_POST["languageId"])][0];
    $_SESSION["encoding"] = $languageList[intval($_POST["languageId"])][1];
  } if (isset($_POST["grayscale"]) && $_POST["grayscale"] == "on"){
    $_SESSION["grayscale"] = true;
  } else {
    $_SESSION["grayscale"] = false;
  } if (isset($_POST["highContrast"]) && $_POST["highContrast"] == "on"){
    $_SESSION["highContrast"] = true;
  } else {
    $_SESSION["highContrast"] = false;
  } if (isset($_POST["fontId"]) && is_numeric($_POST["fontId"])){
    $_SESSION["font"] = $fontList[intval($_POST["fontId"])];
    $_SESSION["fontId"] = $_POST["fontId"];
  } if (isset($_POST["fontSize"]) && is_numeric($_POST["fontSize"])){
    $_SESSION["fontSize"] = $_POST["fontSize"]."pt";
  }

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
  } if (!isset($_SESSION["fontId"])){
    $_SESSION["fontId"] = 0;
  } if (!isset($_SESSION["fontSize"])){
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
    <meta name="viewport" content="width=device-width">
    <base href="/" target="_self">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?=$includes?>
    <title> <?=$title?> </title>
    <link rel="stylesheet" href="style/colours.css">
    <link rel="stylesheet" href="style/main.css">
    <style>
      body{
        <?php if ($_SESSION["font"] !== Null){ ?>
        font-family: <?=$_SESSION["font"]?>;
        <?php } ?>
        font-size: <?=$_SESSION["fontSize"]?>;
      }
    </style>
  </head>


  <body class="<?=$coloursClass?>">
    <script src="https://cdn.cai.tools.sap/webchat/webchat.js" channelId="0a6d4727-44c1-4811-b1b3-4c306b1191a6" token="df377902032e23bf65e627d791e5fbb9" id="cai-webchat"></script>
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
        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
          <img src="resources/settings.png" alt="settings" title="settings" width="32" height="32">
        </button>
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

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Paramètres</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form method="post">
            <div class="modal-body">
              <div class="form-group">
                <label for="langInput">Language</label>
                <select name="languageId" class="form-control" id="langInput">
                  <option value=0 <?=$_SESSION["language"]=="fr"?"selected":""?>> Français </option>
                </select>
              </div>
              <div class="form-check">
                <input name="grayscale" type="checkbox" class="form-check-input" id="gsInput" <?=$_SESSION["grayscale"]?"checked":""?>>
                <label for="gsInput"> Niveaux de gris </label>
                <br>
                <input name="highContrast" type="checkbox" class="form-check-input" id="hcInput" <?=$_SESSION["highContrast"]?"checked":""?>>
                <label for="hcInput"> Contraste élevé </label>
              </div>
              <div class="form-group">
                <label for="fontInput">Police</label>
                <select name="fontId" class="form-control" id="fontInput">
                  <option value=0 <?=$_SESSION["fontId"]==0?"selected":""?>> Défaut </option>
                  <option value=1 <?=$_SESSION["fontId"]==1?"selected":""?>> Comic Sans MS </option>
                </select>
                <label for="fontInput">Taille</label>
                <input name="fontSize" type="number" class="form-contol" id="fintSizeInput" value=<?=intval($_SESSION["fontSize"])?>>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary gs-bg-light-gray gs-text-dark-gray hc-bg-red bw-white" data-dismiss="modal">Annuler</button>
              <button type="submit" class="btn btn-primary gs-bg-dark-gray hc-bg-blue bw-black">Actualiser</button>
            </div>
          </form>
        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
