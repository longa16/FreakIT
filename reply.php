<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reply</title>
    <link rel="stylesheet" href="css/reply.css" >
</head>
<body class="dybo">
    <?php 
    require("databaserequest/connectbd.php");
    require("Action/sessionsecure.php");
    require("Action/idAction.php");
    require("Action/replyaction.php");
    require("Action/showreplyaction.php");
    require("navbar/navbar.php");
     
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $state = $user["STATE"];
        $image = $user["IMAGE"];
        $link = $user["LINK"];
            echo"<div class='topic'>";
            echo "<h2 id='category' >" . $user["TITLE"] . "</h2>";
            echo"<div class='without'>";
            echo "<p>" . $user["CATEGORY"] . "</p>";
            echo "<p id='pseudo'>" .$user["PSEUDO"] . "</p>"; 
            echo "<p id='date'>" . $user["TOPICDATE"] . "</p>";
            echo "<p id='topic'>" . $user["TOPIC"] . "</p>";
            echo "<a href='$image'><p class='a'>image:[" . $image . "]</p></a>";
            echo "<a href='$link'><p class='a'>link:[" . $image . "]</p></a>";
            echo"</div>";

    }else {
                echo "No topic found.";
            }
            echo"</div>";
    
    if ($state == 'open') {
    echo"<form  method='POST'>";
    echo"<div class='content-textarea'>";
    echo"<label for='reply'>Reply</label>"; 
    echo "<textarea name='reply' rows='4' placeholder='Enter your reply'></textarea>";
    echo"</br>";
    echo"</div>";
    echo"<input id='send' type='submit' value='submit' name='submit'>";   
    echo"</form>"; 
}    

    if ($state == 'closed') {
        echo"<p id='close'>You can't reply the topic is closed !</p>";
    }

            
            if ($resultat->num_rows > 0) {

                    while($row = $resultat->fetch_assoc()) {
                        echo"<div class='reply'>";
                        echo "<h2>" . $row["PSEUDO"] . "</h2>";
                        echo "<p class='category'>" . $row["REPLY"] . "</p>";
                        echo "<p id='pseudo'>" . $row["REPLYDATE"] . "</p>";
                        echo"</div>";
                       
                    }
                }else {
                    echo "<p class='category'>No reponse yet.</p>";
                    
                }

                require("navbar/footer.php");
        ?>

    
</body>
</html>