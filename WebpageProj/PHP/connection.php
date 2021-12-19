<?php
    // Getting the variable for database
    $servername="localhost";
    $username="root";
    $password="";
    $db="db";
    
    //Connecting the database
    $con = new mysqli($servername,$username,$password,$db);

    //Checking if the database is connected

    if($con->connection_error){
        die("Connection Failed: ". $conm->connect_erro)
    }
    else
        echo"Connection Complete";
?>