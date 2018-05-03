<?php
require('model.php');
$service = getServiceModif($_GET['id']);
require('modifServiceView.php');