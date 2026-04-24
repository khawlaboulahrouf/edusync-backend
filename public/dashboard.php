<?php
session_start();
if(!isset($_SESSION['firstname'])){
    header('location: ../public/login.php');
    exit();
    echo 'hello ayoub';
    }
    $firstname=$_SESSION['firstname'];

?>
<h1>Hello <?php  echo $firstname;?></h1>