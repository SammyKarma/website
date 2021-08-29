<?php
extract($_POST);
include("database.php");
$sql=mysqli_query($conn,"SELECT * FROM register where Email='$email'");
    if (isset ($_POST['save']) {  
        echo "Submit button is clicked.";  
        if ($_SERVER["REQUEST_METHOD"] == "POST") {  
            echo "Data is sent using POST method ";  
        }  
    } else {  
        echo "Data is not submitted";  
    }  
}

?>