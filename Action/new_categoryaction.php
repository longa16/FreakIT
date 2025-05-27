
<?php
require('../databaserequest/connectbd.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newcategory = $_POST["newcategory"];
}

$insert = "INSERT INTO category (name) VALUES ('$newcategory')";
        $resulat = mysqli_query($connect,$insert);
        
        mysqli_close($connect);
       header("Location:../category.php"); 

?>