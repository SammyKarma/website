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
                // echo "<h2>Login Successful</h2>";
                header('Location: detail.html');
                exit;
            }else{
                // echo "<h2>Invalid username or password</h2>";
                header("Location: index.php");
                // echo '<script type="text/JavaScript"> 
                // window.alert("Invalid username or password");
                // </script>';
            }
        }else{
            header("Location: index.php");
            // echo '<script type="text/JavaScript"> 
            //     window.alert("Invalid username or password");
            //     </script>';
        }
    }
?>