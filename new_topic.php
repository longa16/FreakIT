<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New topic</title>
    <link rel="stylesheet" href="css/new_topic.css" >
</head>
<body class="dybo">
    <?php 
    require('databaserequest/connectbd.php');
    require('navbar/navbar.php');
    require('Action/sessionsecure.php');
    ?>

<div class="identify">
    <form class="form" action="Action/newtopicaction.php" method="POST">
    <h2>CREATE A NEW TOPIC</h2>
        <label for="titre">Title</label>
        <input class="space" type="text" name="titre" placeholder="Enter the title of your topic" minlength="2" maxlength="33" required> 
        <h4>Category</h4>
        <?php
        $category = "SELECT * FROM category";
    $result = $connect->query($category);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $name = $row['name'];
            echo "<label for='category'> $name </label>";
            echo "<input type='radio' name='category' value='$name'>";
        }} else {
            echo "No category found";
        } ?> <br>       
        <label for="image">Image</label>
        <input class="space" type="text" name="image" placeholder="insert an image">   
        <label for="link">Link</label>
        <input class="space" type="text" name="link" placeholder="insert a link">
        <label for="topic">Message</label>
        <textarea id="text" name="topic" placeholder="message topic"
         minlength="12" maxlength="255" required></textarea>
        <input id="send" type="submit" value="Post">
    </form>
    </div>

    <div id="emoji-content">
        <h3>be more expressive with these emojis</h3>
        <span class="emoji">":)"=>"😊" ":-)"=>"😂" ":D"=>"🤣"</span><br>   
        <span class="emoji">"xD"=>"😆" "oO"=>"🤡" "<3"=>"❤️" </span><br> 
        <span class="emoji">":-("=>"😭" ":O"=>"😃" "o|""=>"😈"</span><br> 
        <span class="emoji">":("=>"😢" "xD"=>"😆" "|o"=>"👺" "||"=>"💀"</span>
    </div>

    <?php 
    require("navbar/footer.php");
    ?>
    
</body>
</html>