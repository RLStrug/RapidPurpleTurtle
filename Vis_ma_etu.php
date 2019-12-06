<?php $title = "Vis ma vie d'étudiant"; ?>

<?php ob_start(); ?>

<!--
<script src="script.js"></script>
<link rel="stylesheet" href="style.css">
-->




<?php $includes = ob_get_clean(); ?>



<?php ob_start(); ?>

<script>
var express = require('express')
var bodyParser = require('body-parser')
var sapcai = require('sapcai').default

var connect = new sapcai.connect('df377902032e23bf65e627d791e5fbb9')

var app = express()

/* Server setup */
app.set('port', 5000)
app.use(bodyParser.json())
app.post('/', function(req, res) {
  connect.handleMessage(req, res, onMessage)
})

function onMessage (message) {
  // Get the content of the message
  var content = message.content

  // Get the type of the message (text, picture,...)
  var type = message.type

  // Add a reply, and send it
  message.addReply([{ type: 'text', content: 'Hello, world' }])
  message.reply()
}

app.listen(app.get('port'), function () { console.log('App is listening on port ' + app.get('port')) })
</script>
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
