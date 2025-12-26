<?php
$conn = mysqli_connect("localhost", "root", "", "user_db");

if(!$conn){
    die("Database Error: " . mysqli_connect_error());
}
?>
