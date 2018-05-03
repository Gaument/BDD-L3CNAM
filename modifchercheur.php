<?php
require('model.php');
$chercheur = getChercheurModif($_GET['id']);
$labo = getLabo();
require('modifchercheurView.php');