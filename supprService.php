<?php
require('model.php');
$service = getServiceModif($_GET['id']);
require('supprServiceView.php');