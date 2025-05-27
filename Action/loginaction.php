<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="action.css" >
    <title>Loginaction</title>
</head>
<body>
<?php 
session_start();
if (isset($_SESSION['nom_utilisateur'])) {
    header("Location: ../forum.php");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$pseudo = $_POST['pseudo'];
$password = $_POST['motdepasse'];

require('../databaserequest/connectbd.php'); 

$verify = "SELECT * FROM members WHERE PSEUDO='$pseudo' OR MAIL='$pseudo'";
    $resultat = $connect->query($verify);

$info = "SELECT ROLE FROM members WHERE PSEUDO = '$pseudo' ";
$result = $connect->query($info);

    if ($resultat->num_rows == 1) {
        $row = $resultat->fetch_assoc();
        if (password_verify($password, $row["PASSWORD"])) {
            $_SESSION['nom_utilisateur'] = $pseudo;
                if ($result->num_rows > 0) {
                    $user = $result->fetch_assoc();
                if ($user["ROLE"] == "member") {
                     header("Location: ../forum.php");
       }
                  if ($user["ROLE"] == "admin") {
                     header("Location: ../users.php");
       }

  }
            
            exit();
        }
    } 
    echo"<img src='../img/correct.jpg'>";
    echo "<p>Your pseudo/email or your password is incorrect.<a href='../login.php'>Try again</a></p>";

    $connect->close();

} else {
    echo"erreur";
}


    
?>
    
</body>
</html>
<?php 



