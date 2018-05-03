<?php
require('model.php');
$modif = getPatientModifier($_GET['id']);
$patient = getPatient();
require('patientView.php');