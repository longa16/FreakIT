<?php 
require("../databaserequest/connectbd.php");

$id = $_GET["id"];

$close = "UPDATE topic SET STATE = 'closed' WHERE ID = '$id'";
$result = $connect->query($close);

header("Location: ../displayprofile.php");

?>