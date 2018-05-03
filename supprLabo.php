<?php
require('model.php');
$labo = getLaboModif($_GET['id']);
require('supprLaboView.php');