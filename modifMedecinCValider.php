<?php
require('model.php');
$modif = getMedecinModifier($_GET['id']);
$medecin = getMedecin();
require('medecinView.php');