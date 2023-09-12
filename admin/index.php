<?php
session_start();

if(!isset($_SESSION["user"])){
    
  header("Location:../login.php");
}

?>

<h3>Welcom To Ecoin</h3>