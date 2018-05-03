<?php
require('model.php');
$modif = getLaboModifier($_GET['id']);
$labo = getLabo();
require('laboView.php');