<?php
require('model.php');
$modif = getChercheurModifier($_GET['id']);
$chercheur = getChercheur();
require('chercheurView.php');