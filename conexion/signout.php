<?php
session_start();
error_reporting(0);
session_destroy(); 
session_unset(); 
header("Location: ../index.php");
?>