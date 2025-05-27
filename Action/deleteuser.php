<?php
    require('../databaserequest/connectbd.php');
   
   
$id = $_GET["id"];

$select = "SELECT PSEUDO FROM members WHERE ID = '$id' ";
$result = $connect->query($select);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $use = $user["PSEUDO"];

    $delete = "DELETE FROM members WHERE ID = $id";

if ($connect->query($delete) == TRUE) {
    echo "The member $use has benn deleted from the FREAK-IT FORUM";
} else {
    echo "Error : " . $connect->error;
}
    $delete2 = "DELETE FROM topic WHERE PSEUDO = '$use'";

if ($connect->query($delete2) == TRUE) {
    echo "!";
} else {
    echo "Error : " . $connect->error;
}
    $delete3 = "DELETE FROM reply WHERE PSEUDO = '$use'";

if ($connect->query($delete3) == TRUE) {
    echo ".";
} else {
    echo "Error : " . $connect->error;
}

$connect->close();

header("Location: ../users.php");
}

?>



