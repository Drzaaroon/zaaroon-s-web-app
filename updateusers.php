
<?php
include("connection_for_update.php");
error_reporting(0);
$_GET['id'];
$_GET['nm'];
$_GET['pn'];
$_GET['em'];
$_GET['ps'];
?>


<html>
<head></head>
<body>
<form action="" method="GET">
User ID<input type="text" name="id" value="<?php echo $_GET['id']; ?>"/><br><br>
Name<input type="text" name="name" value="<?php echo $_GET['nm']; ?>"/><br><br>
Phone<input type="text" name="phone" value="<?php echo $_GET['pn']; ?>"/><br><br>
Email<input type="text" name="email" value="<?php echo $_GET['em']; ?>"/><br><br>
Password<input type="text" name="password" value="<?php echo $_GET['ps']; ?>"/><br><br>
<input type="submit" name="submit" value="update">
</form>
<?php

if($_GET['submit'])
{
    $id=$_GET['id'];
    $name=$_GET['name'];
    $phone=$_GET['phone'];
    $email=$_GET['email'];
    $password=$_GET['password'];
    $query="update users set name='$name',phone='$phone',email='$email',password='$password' where id='$id'";
    $data=mysqli_query($conn,$query);
    if($data)
    {
        echo "<font color='Green'>record updated successfully";
        header("refresh:1; url=displayusers.php");
    }
    else
    {
        echo "<font color='Red'>Record not updated";
    }
}
else
{
    echo "<font color='blue'>Click on Update button to save the changes";
}


?>
</body></html>