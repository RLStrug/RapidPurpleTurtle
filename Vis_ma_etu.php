<?php $title = "Vis ma vie d'étudiant"; ?>

<?php ob_start(); ?>

<!--
<script src="script.js"></script>
<link rel="stylesheet" href="style.css">
-->

<?php $includes = ob_get_clean(); ?>



<?php ob_start(); ?>




<script src="https://cdn.cai.tools.sap/webchat/webchat.js"
channelId="0a6d4727-44c1-4811-b1b3-4c306b1191a6"
token="df377902032e23bf65e627d791e5fbb9"
id="cai-webchat">
</script>

<h1> Vis ma vie d'étudiant </h1>

<div id="cai-webchat" > lala</div>

<ul class="list-group">
  <li class="list-group-item"><img src="./resources/sofa.png" width=32 height="32" title="Bootstrap">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Meubler mon logement</h5>
      <p class="card-text">Explication .</p>
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div></li>
  <li class="list-group-item"><img src="./resources/eat.png" width=32 height="32" title="Bootstrap">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Me nourrir</h5>
      <p class="card-text">Explication .</p>
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div></li>
  <li class="list-group-item"><img src="./resources/shirt.png" width=32 height="32" title="Bootstrap">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">M'habiller</h5>
      <p class="card-text">Explication .</p>
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div></li>
  <li class="list-group-item"><img src="./resources/luggage.png" width=32 height="32" title="Bootstrap">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Voyager</h5>
      <p class="card-text">Explication .</p>
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div></li>

</ul>


<?php $content=ob_get_clean(); ?>

<?php require "gabarit.php" ?>
