<?php
require('model.php');
$patient = getPatientModif($_GET['id']);
require('supprPatientView.php');