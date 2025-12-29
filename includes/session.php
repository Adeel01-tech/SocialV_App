<?php 

session_start();

if(!isset($_SESSION['user_id'])){

   header("Location: sign-in.php");

   $user_id = $_SESSION['user_id'];

}



?>
