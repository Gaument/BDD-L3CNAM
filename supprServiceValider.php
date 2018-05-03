<?php
require('model.php');
$suppr = getServiceSupprimer($_GET['id']);
$service = getService();
require('serviceView.php');