<?php
require('databaserequest/connectbd.php');

$users = "SELECT ID, PSEUDO, MAIL, BANNER FROM members ";
  $result = $connect->query($users);
  ?>