<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css" >
</head>
<body>
    <?php 
    require('navbar/navbar.php');
    ?>
    <div class="background">
    Welcome in Booland !!!
    </div>
        <h1>OUR LAST EVENT</h1>
    <div class="event">
        <a class="last-event" href="#"><img class="photo" src="img/event1.jpg"></a>
        <a class="last-event" href="#"><img class="photo" src="img/event2.jpg"></a>
        <a class="last-event" href="#"><img class="photo" src="img/event3.jpg"></a>
    </div>

        <h1>SHOP BEST-SELLER</h1>
        <div class="container">
        <div class="card">
        <img src="img/card1.jpg" alt="accessories">
        <div class="card-content">
            <div class="card-title">accessories</div>
            <div class="card-description">Pumpkin, candle and too many other accessories.</div>
            <div class="card-price">29.99€</div>
            <a href="#" class="card-button">Go to web site</a>
        </div>
        </div>

        <div class="card">
        <img src="img/card2.jpg" alt="disguise">
        <div class="card-content">
            <div class="card-title">Disguise</div>
            <div class="card-description">Come and choose the disguise that will make them 
                all tremble in fear.</div>
            <div class="card-price">99.99€</div>
            <a href="#" class="card-button">Go to web site</a>
        </div>
        </div>

        <div class="card">
        <img src="img/card3.jpg" alt="Product Image">
        <div class="card-content">
            <div class="card-title">Candy</div>
            <div class="card-description">Trick or treat.</div>
            <div class="card-price">9.99€</div>
            <a href="#" class="card-button">Go to web site</a>
        </div>
        </div>

        <div class="card">
        <img src="img/card4.jpg" alt="Product Image">
        <div class="card-content">
            <div class="card-title">Makeup</div>
            <div class="card-description">Be the scariest</div>
            <div class="card-price">49.99€</div>
            <a href="#" class="card-button">Go to web site</a>
        </div>
        </div>


</div>
     <?php
        require('navbar/footer.php');
    ?>

    
</body>
</html>