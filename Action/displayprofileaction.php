
<?php
  
  require('sessionsecure.php');
  require('databaserequest/connectbd.php');

  $pseudo = $_SESSION['nom_utilisateur'];

  $informations = "SELECT PSEUDO, MAIL, BANNER, BIRTHDATE FROM members WHERE PSEUDO = '$pseudo' ";
  $result = $connect->query($informations);

  if ($result->num_rows > 0) {
      $user = $result->fetch_assoc();
  } else {
      echo "Utilisateur non trouvé.";
      exit();
  }

  $profiletopic = "SELECT * FROM TOPIC WHERE PSEUDO = '$pseudo' ORDER BY TOPICDATE DESC";
  $result2 = $connect->query($profiletopic);