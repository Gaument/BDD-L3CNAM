<?php
require('model.php');
$patient = getPatientModif($_GET['id']);
$medecin = getMedecin();
require('modifPatientView.php');