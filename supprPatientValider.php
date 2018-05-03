<?php
require('model.php');
$suppr = getPatientSupprimer($_GET['id']);
$patient = getPatient();
require('patientView.php');