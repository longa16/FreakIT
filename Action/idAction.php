<?php
$id = $_GET["id"];

$reply = "SELECT * FROM topic WHERE ID = '$id'";
$result = $connect->query($reply);


?>