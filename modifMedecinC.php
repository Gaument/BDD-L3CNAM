<?php
require('model.php');
$medecin = getMedecinModif($_GET['id']);
$service = getService();
require('modifMedecinCView.php');