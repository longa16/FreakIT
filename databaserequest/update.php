<?php
require('connectbd.php');

$update = "UPDATE members SET PSEUDO ='YOYO' WHERE id = 5 ";

if ($connect->query($update) == TRUE) {
    echo "Les données ont été mises à jour avec succès dans la base de données.";
} else {
    echo "Erreur lors de la mise à jour des données : " . $conneect->error;
}

$connect->close();

?>