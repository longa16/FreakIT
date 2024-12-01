<?php 
require("databaserequest/connectbd.php");
$id = $_GET["id"];
echo "$id";



$delete = "DELETE FROM category WHERE id = $id";
$result = $connect->query($delete);

header("Location: category.php"); 
?>