<?php 
require('../databaserequest/connectbd.php');

$id = $_GET["id"];

$select = "SELECT TITLE FROM topic WHERE ID = '$id' ";
$result = $connect->query($select);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $use = $user["TITLE"];

    $delete = "DELETE FROM topic WHERE ID = $id";

if ($connect->query($delete) == TRUE) {
    echo "the $use topic has been deleted from the FREAK-IT FORUM";
} else {
    echo "Error : " . $connect->error;
}
    $delete2 = "DELETE FROM reply WHERE IDTOPIC = '$id'";

if ($connect->query($delete2) == TRUE) {
    echo ".";
} else {
    echo "Error : " . $connect->error;
}
}
header("Location: ../topicadmin.php");
?>



