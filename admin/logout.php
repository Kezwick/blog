<?php
session_start();
require_once('../lib/func.php');
unset($_SESSION['username']);
showAlert('Пока!');
goUri("/admin/index.php");
?>


