<?php
require('model.php');
$suppr = getMedecinSupprimer($_GET['id']);
$medecin = getMedecin();
require('medecinView.php');