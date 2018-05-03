<?php
require('model.php');
$suppr = getLaboSupprimer($_GET['id']);
$labo = getLabo();
require('laboView.php');