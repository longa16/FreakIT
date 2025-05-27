<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>topic action</title>
</head>
<body>
    <?php
    require('sessionsecure.php');
    require('../databaserequest/connectbd.php'); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['titre'];
    $category = $_POST['category'];
    $topic = nl2br($_POST['topic']);
    $image = $_POST['image'];
    $link = $_POST['link'];
}

function convertoemoji($topic) {
    $table = array(
        ':)' => '😊',
        ':(' => '😢',
        ':-)' => '😂',
        ':-(' => '😭',
        '<3' => '❤️',
        ':D' => '🤣',
        'xD' => '😆',
        ':O' => '😃',
        'oO' => '🤡',
        'o|' => '😈',
        '|o' => '👺',
        '||' => '💀',
    );

    $convert = strtr($topic, $table);
    return $convert;
}
$convert = convertoemoji($topic);

 $pseudo = $_SESSION['nom_utilisateur'];
 $topicdate = Date('d/m/y H:i');

 $insert = "INSERT INTO topic (PSEUDO, TITLE, CATEGORY, TOPIC, TOPICDATE, IMAGE, LINK) VALUES 
        ('$pseudo', '$title', '$category', '$convert', '$topicdate', '$image', '$link')";
        $resulat = mysqli_query($connect,$insert);
        header("Location: ../forum.php");
    ?>
</body>
</html>