<?php
require('model.php');
$chercheur = getChercheurModif($_GET['id']);
require('supprChercheurView.php');