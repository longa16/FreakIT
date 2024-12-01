<?php 
require('databaserequest/connectbd.php');

$news = "SELECT * FROM topic ORDER BY TOPICDATE DESC";
$result = $connect->query($news);


 
?>