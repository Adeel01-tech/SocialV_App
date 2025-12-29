<?php

$conn = mysqli_connect("localhost", "root", "", "user_db");

if(!$conn){
   
    die("Database Error: " . mysqli_connect_error());
}


session_start();

if(!isset($_SESSION['user_id'])){

   header("Location: sign-in.php");

}


?>
