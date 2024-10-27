<?php
session_start();

// Clear all session variables and destroy the session
session_unset();
session_destroy();

// Redirect to login page
header("Location: ../login.html");
exit();
?>
