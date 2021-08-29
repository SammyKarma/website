<?php
    $url='localhost';
    $username='root';
    $password='';
	$databaseName = "fregister";
    $conn=mysqli_connect($url,$username,$password,$databaseName);
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
?>