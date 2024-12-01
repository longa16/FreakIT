<?php
require("databaserequest/connectbd.php");

$informations = "SELECT PSEUDO, IDTOPIC, REPLY, REPLYDATE FROM reply WHERE IDTOPIC = '$id' ";
  $resultat = $connect->query($informations);

?>