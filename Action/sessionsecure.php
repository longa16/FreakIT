<?php 
session_start();
if (!isset($_SESSION['nom_utilisateur'])) { 
    header("Location: login.php");
    exit();
}
?>