<?php 
require('connectbd.php');
$update = "SELECT * FROM members";
$resultat = $connect->query($update);

if ($resultat->num_rows > 0) {
    while ($row = $resultat->fetch_assoc()) {
        echo "ID : " . $row["id"] . "<br>";
        echo "Nom : " . $row["nom"] . "<br>";
        echo "Email : " . $row["email"] . "<br>";
        echo "<br>";
    }
} else {
    echo "Aucun résultat trouvé.";
}
$connect->close();
?>