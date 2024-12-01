<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/topic.css" >
</head>
<body id="dybo">
    <?php 
    require("navbar/navbaradmin.php");
    require('Action/newsaction.php');
   

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo"<div class='topic'>";
            $id = $row["ID"];
            $state = $row["STATE"];
            $image = $row["IMAGE"];
            $link = $row["LINK"];
            $id = $row["ID"];
            echo "<h2>" . $row["TITLE"] . "</h2>";
            echo "<p id='category'>" . $row["CATEGORY"] . "</p>";
            echo "<p id='pseudo'>" . $row["PSEUDO"] . "</p>";
            echo "<p id='date'>" . $row["TOPICDATE"] . "</p>";
            echo "<p id='topic'>" . $row["TOPIC"] . "</p>";
            echo "<a href='$image'><p class='lien'>image:[" . $row["IMAGE"] . "]</p></a>";
            echo "<a href='$link'><p class='lien'>link:[" . $row["LINK"] . "]</p></a>";
            echo "<a a href='Action/deletetopic.php? id=$id'><button id='Delete'>Delete</button></a>";
            if ($state == 'closed'){
                echo "<p>Topic already closed</p>";
            } 
            if ($state == 'open') {
                echo "<a href='Action/closetopicaction2.php?id=$id'><button id ='Close'>Close</button></a>";
            }
            echo"</div>";
        }
    } else {
        echo "No topic found.";
    }
    $connect->close();
    
    require('navbar/footer.php');
    ?>
</body>
</html>