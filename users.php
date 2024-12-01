<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/users.css" >
</head>
<body id="dybo">
    <?php 
    
    require("Action/useraction.php");
    require('navbar/navbaradmin.php');

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $id = $row["ID"];
            echo"<div class='users'>";
            echo "<h2>" . $row["PSEUDO"] . "</h2>";
            echo "<p id='category'>" . $row["MAIL"] . "</p>";
            echo "<p id='pseudo'>" . $row["BANNER"] . "</p>";
            echo "<a href='Action/deleteuser.php? id=$id'><button id ='delete'>Delete</button></a>";
            echo"</div>";
        }
    } else {
        echo "No users found.";
    }
    $connect->close();
    ?>

        <a class="lien" href="Action/logout.php">logout</a>


    <?php
    require('navbar/footer.php');
    ?>
    
    
</body>
</html>