<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css" >
    <title>Sign up</title>
</head>
<body>
    <?php 
    require('navbar/navbar.php');
    ?>
    <div class="identify">
    <form action="Action/signupaction.php" method="POST" class="form">
    <h2>Register for Freak-IT forum by fiiling out this form ;)</h2 >

            <label for="gender">Male</label>
            <input  type="radio" name="gender" value="m" required>
            <label  for="gender">Female</label>
            <input type="radio" name="gender" value="f" required> <br>
            
            <label class="label" for="pseudo">pseudo</label>
            <input class="space" type="text" name="pseudo" placeholder="pseudo" minlength="4" maxlength="10" required>
            
            <label class="label" for="email">email</label>
            <input class="space" type="email" name="mail" placeholder="email" minlength="7" maxlength="33" required>
            
            <label class="label" for="birthdate">birthdate</label>
            <input class="space" type="date" name="birthdate" placeholder="birthdate" required>
            
            <label class="label" for="password">password</label>
            <input class="space" type="password" name="motdepasse" placeholder="password" minlength="8" maxlength="33" required>
            

         
            <label class="label" for="banner">banner</label>
            <textarea id="text" name="banner" placeholder="enter your bio" minlength="8" maxlength="145"></textarea> 
        
            <input id="send" type="submit" value="send">
    </form>
    </div>
    <h3 id="h3">You already have an account ? <a href="login.php">Log in</a></h3>
    <?php 
    require('navbar/footer.php');
    ?>
</body>
</html>