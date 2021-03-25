<?php
include("connection_for_update.php");
error_reporting(0);
?>


<html>
<head></head>
<body>
<form action="" method="POST">
<table>
<tr>
    <td>Name</td>
    <td></td>
    <td><input type="text" name="name" value=""/></td>
</tr>

<tr>
    <td>Phone</td>
    <td></td>
    <td><input type="text" name="phone" value=""/></td>
</tr>

<tr>
    <td>Email</td>
    <td></td>
    <td><input type="text" name="email" value=""/></td>
</tr>

<tr>
    <td>Password</td>
    <td></td>
    <td><input type="text" name="password" value=""/></td>
</tr>

<tr>
    <td></td>
    <td><input type="submit" name="submit" value="submit"></td>
    <td></td>
</tr>
</table>
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