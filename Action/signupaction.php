<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="action.css" >
    <title>Signupaction</title>
</head>
<body>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $gender = $_POST['gender'];
        $pseudo = $_POST['pseudo'];
        $mail = $_POST['mail'];
        $birthdate = $_POST['birthdate'];
        $password = $_POST['motdepasse'];
        $banner = nl2br($_POST['banner']);
        $password = password_hash($password, PASSWORD_BCRYPT);
        
        require('../databaserequest/connectbd.php');
        
        $verify = "SELECT * FROM members WHERE PSEUDO='$pseudo'";
        $verify2 = "SELECT * FROM members WHERE MAIL='$mail'";
        
        $resultat = mysqli_query($connect,$verify);
        $resulat2 = mysqli_query($connect,$verify2);
        
        $lines = mysqli_num_rows($resultat);
        $lines2 = mysqli_num_rows($resulat2);
        
        if($lines>0) {
            echo"<img src='../img/erreur.jpg'>";
            echo"<p>This pseudo already exist, change it!<a href='../signup.php'>sign up</a></p>";
            exit();
        }  
        
        if($lines2>0) {
            echo"<img src='../img/erreur.jpg'>";
            echo"<p>Theis email address already exist, would you want to connect? <a href='../login.php'>login</a></p>";
            exit();
        } 
        
        else {
        $insert = "INSERT INTO members (GENDER, PSEUDO, MAIL, BIRTHDATE, PASSWORD, BANNER) VALUES 
        ('$gender', '$pseudo', '$mail', '$birthdate', '$password', '$banner')";
        $resulat = mysqli_query($connect,$insert);
        }
        
        }
    ?>
    
</body>
</html>
<?php 

$to = "$mail";
$subject = "Inscription Confirmation";
$message = "Welcome $pseudo in the freak-IT Forum world 😊💀";
$headers = "From: ssalonga91@gmail.com";

 if(mail($to, $subject, $message, $headers)) {
    
    header("Location:../forum.php");
 } else {
  echo "No sended !";
}

?>