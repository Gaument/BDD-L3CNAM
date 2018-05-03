<?php
require('model.php');
$medecin = getMedecinModif($_GET['id']);
require('supprMedecinView.php');