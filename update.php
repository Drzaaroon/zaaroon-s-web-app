<?php
            //connect with mysql database
            $con=mysqli_connect('localhost','root','');
            //select Database
            mysqli_select_db($con,'admin');
            //Update query
            $sql="Update users SET name='$_POST[pname]',phone='$_POST[phone]',email='$_POST[email]',password='$_POST[password]' WHERE id='$_POST[id]'";
            //execute the query
            if(mysqli_query($con,$sql))
            header("refresh:1; url=show_grid_update.php");
            else
               echo    "Not Updated the Modification ";
?>