<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    //Database connection here
    $con = new mysqli("localhost","root","","internettech");
    if($con->connect_error){
        die("Failed to login : ".$con->connect_error);
    }else{
        $stmt = $con->prepare("select * from Users where username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password) {
                header('Location: detail.php');
                exit;
            }else{
                header("Location: index.php");
            }
        }else{
            header("Location: index.php");
        }
    }
?>