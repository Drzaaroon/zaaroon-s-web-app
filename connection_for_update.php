<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="admin";
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn)
    {
        //echo "Connection successful";
        echo "";
    }
    else
    {
        die("Connection failed because".mysqli_connect_error());
    }
?>