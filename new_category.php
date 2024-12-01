<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/new_category.css" >
    <title>New category</title>
</head>
<?php 
require('navbar/navbaradmin.php');
?>
<body>
    <div class="dybo">
    <form action="Action/new_categoryaction.php" method="POST">
        <label for="newcategory">Enter the new category</label>
        <input class="space" type="text" name="newcategory" required>
        <input type="submit" value="Validate" id="add">
    </form>
    </div>
</body>

<?php 
require('navbar/footer.php');
?>
</html>