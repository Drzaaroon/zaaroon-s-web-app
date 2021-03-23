<?php
include("connection_for_update.php");
error_reporting(0);
?>


<html>
<head></head>
<body>
<form action="" method="POST">
Name<input type="text" name="name" value=""/><br><br>
Phone<input type="text" name="phone" value=""/><br><br>
Email<input type="text" name="email" value=""/><br><br>
Password<input type="text" name="password" value=""/><br><br>
<input type="submit" name="submit" value="submit">
</form>
<?php

if($_POST['submit'])
{
    $nm=$_REQUEST['name'];
    $pn=$_REQUEST['phone'];
    $em=$_REQUEST['email'];
    $ps=$_REQUEST['password'];

    if($nm!="" && $pn!="" && $em!="" && $ps!="")
    {
        $query="insert into users(name, phone, email, password) values('$nm','$pn','$em','$ps')";
        $data=mysqli_query($conn,$query);
            if($data)
            {
                echo "data inserted into the database successfully";
                header("refresh:1; url=DisplayUsers.php");
            }

    }
    else
    {
        echo "All fields are required";
    }
}


?>
</body></html>