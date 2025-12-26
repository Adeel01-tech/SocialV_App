<?php
session_start();       // Session start
session_unset();       // Sab session variables remove
session_destroy();     // Session destroy
header("Location: sign-in.php"); // Login page pe redirect
exit();
?>
