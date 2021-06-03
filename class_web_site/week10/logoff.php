<?php 
session_start();
$_SESSION["userName"] = "";
session_destroy();
header("Location: login.php");