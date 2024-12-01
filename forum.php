<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/forum.css" >
    <title>Forum</title>
</head>
<body>
    <?php 
    require('Action/newsaction.php');
    require('navbar/navbar.php');
    require('Action/sessionsecure.php');
    ?>  
    <div class="frame">
    <h2 id="tit">FREAK-IT FORUM</h2> 
        <div class="sidebar">
        <a class="lien" id="profile" href="displayprofile.php"><img src="img/profil.PNG">My profile</a>
        <div id="new-topic">
        <a class="lien" href="new_topic.php"><img src="img/bulle-de-discussion.PNG">new topic</a>
        </div>
        <div id="logout">
        <a class="lien" href="Action/logout.php"><img src="img/logout.PNG">logout</a>
        </div>
        </div>

        <div class="topic">
        <?php 
       
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $image = $row["IMAGE"];
                $link = $row["LINK"];
                $id = $row["ID"];
                $pseu = $row["PSEUDO"];
                echo "<div class='top'>";
                echo "<h2 id='title'>" . $row["TITLE"] . "</h2>";
                echo "<p id='category'>" . $row["CATEGORY"] . "</p>";
                echo "<p id='pseudo'>" . $pseu . "</p>";
                echo "<p id='date'>" . $row["TOPICDATE"] . "</p>";
                echo "<p id='topic'><strong>" . $row["TOPIC"] . "</strong></p>";
                echo "<a href='$image'><p>image:[" . $row["IMAGE"] . "]</p></a>";
                echo "<a href='$link'><p>link:[" . $row["LINK"] . "]</p></a>";
                $news2 = "SELECT BANNER FROM members WHERE PSEUDO = '$pseu'";
                $result2 = $connect->query($news2);
                if($result2->num_rows > 0) {
                    while($row = $result2->fetch_assoc()){
                        echo "<p id='pseudo'>" . $row["BANNER"] . "</p>";
                    }
                } 
                echo "<a href='reply.php? id=$id'><button id='send'>Reply</button></a>";
                echo "</div>";
            }
        } else {
            echo "No topic found.";
        }

       


        $connect->close();
        ?>
        </div>
    </div>
 
    <?php 
    require('navbar/footer.php');
    ?>
</body>
</html>
