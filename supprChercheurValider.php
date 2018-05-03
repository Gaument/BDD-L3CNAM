<?php
require('model.php');
$suppr = getChercheurSupprimer($_GET['id']);
$chercheur = getChercheur();
require('chercheurView.php');