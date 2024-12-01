<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="stylesheet" href="css/category.css" >
</head>
<body>
    <?php
    require('databaserequest/connectbd.php');
    require('navbar/navbaradmin.php');
    
    echo "<div  class='dybo'>";

    $category = "SELECT * FROM category";
    $result = $connect->query($category);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $id = $row["id"];
            echo "<div class='category'>";
            echo "<h2 id='title'>" . $id . "</h2>";
            echo "<p id='category'>" . $row["name"] . "</p>";
            echo "<a href='deletecategory.php? id=$id'> <input id='delete' type='submit' value='Delete'></a>";
            echo "</div>";
        }} else {
            echo "No category found";
        }
        echo "</div>";
    ?>
    
    <a href="new_category.php" id="delete">Create a new categroy</a>
    <?php 
    require('navbar/footer.php');
    ?>
</body>
</html>