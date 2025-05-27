<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReplyAction</title>
</head>
<body>

    <?php
    require("databaserequest/connectbd.php");


    if(isset($_POST['submit'])){
        if(!empty($_POST['reply'])){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $reply = nl2br($_POST["reply"]);
        $pseudo = $_SESSION["nom_utilisateur"];
        $replydate = Date('d/m/y H:i');

        $insert = "INSERT INTO reply (PSEUDO, IDTOPIC, REPLY, REPLYDATE) VALUES 
        ('$pseudo', '$id', '$reply', '$replydate')";
        $resulat = mysqli_query($connect,$insert);

    }}}




?>
    
</body>
</html>