<?php 
require('connectbd.php');
$delete = "DELETE FROM members WHERE ID = $id";

if ($connect->query($delete) == TRUE) {
    echo "Les données ont été supprimées avec succès de la base de données.";
} else {
    echo "Erreur lors de la suppression des données : " . $connect->error;
}

$connect->close();
?>