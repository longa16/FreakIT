<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Log in</title>
</head>
<body>
    <?php 
    require('navbar/navbar.php');
    ?>
    <div class="identify">
    <form action="Action/loginaction.php" method="POST" class="form">
        <h2>Login</h2>
            <input class="space" type="text" name="pseudo" placeholder="pseudo/email">
            <input class="space" type="password" name="motdepasse" placeholder="password">
            <input id = "send" type="submit" value="Connect">
    </form> 
    </div>
    
    
    <p id="signup">You don't already have an account ? <a href="signup.php">Sign up</a></p>
    <?php 
    require('navbar/footer.php');
    ?>

</body>
</html>