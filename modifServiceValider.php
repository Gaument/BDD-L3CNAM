<?php
require('model.php');
$modif = getServiceModifier($_GET['id']);
$service = getService();
require('serviceView.php');