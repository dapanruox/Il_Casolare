<?php
session_start(); 

if (!isset($_SESSION['user_id'])) {
    header("Location: creation_compte.php"); 
    exit();
}

if ($_SESSION['admin']) {
    header("Location: pageAdmin.php");
} else {
    header("Location: accueil.php");
}
exit();
?>
