<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/displayprofile.css" >
    <title>My profile</title>
</head>
<body class="hello">
    <?php
    require('navbar/navbar.php');
    require('Action/displayprofileaction.php');
    ?>    
        <div class="info">
        <img src="img/citrouille.png" alt="User Avatar" class="user-avatar">
        <?php
        echo"<div class='info-text'>";
        echo "<h2 class='user-name'>" . $user['PSEUDO']. "</h2><br>";
        echo "<h4 class='user-banner'>" .$user['BANNER']. "</h4><br>"; 
        echo"</div>";   
        ?>
        </div>
    <div class="profil">
    <div class="user-posts">
    <?php
     if ($result2->num_rows > 0) {
         while ($post = $result2->fetch_assoc()){
            $id = $post["ID"];
            $state = $post["STATE"];
            $image = $post['IMAGE'];
            $link = $post['LINK'];
            $title = $post['TITLE'];
            echo"<p class='post'>";
            echo "<h2> $title</h2><br>"; 
            echo $post['CATEGORY']. "<br>"; 
            echo $post['TOPIC']. "<br>"; 
            echo "image :<a href='$image'>[". $image. "]</a><br>"; 
            echo "link :<a href='$link'>[". $link. "]</a><br>"; 
            echo $post['TOPICDATE']. "<br>";
            if ($state == 'closed'){
                echo "<p>Topic already closed</p>";
            } 
            if ($state == 'open') {
                echo "<a href='Action/closetopicaction.php?id=$id'><button id ='delete'>Close</button></a>";
            }
            echo"</p>";
        } 
     }else {
     
        echo"<h3>You have not yet published a topic.</h3>";
    }   
?>
</div>
</div>

    <?php
    require('navbar/footer.php');
    ?>
    
</body>
</html>