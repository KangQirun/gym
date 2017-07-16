<?php
session_start();
$_SESSION["user_name"]="";
header("location:index.php");
?>