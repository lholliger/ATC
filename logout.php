<?php
session_start();
$_SESSION['LOG'] = False;
$_SESSION['USERNAME'] = "";
$_SESSION['PASSWORD'] = "";
header("Location: index.php?notify=out");
 ?>
