<?php

 //connect with mysql database
 $con=mysqli_connect('localhost','root','');
 //select Database
 mysqli_select_db($con,'admin');
 //select query
 $sql="Delete from users where id = '$_GET[id]'";
 //execute  the query
 if(mysqli_query($con,$sql))
 header("refresh:1; url=show_grid_Delete.php");
 else
    echo    "Not deleted";
?>
