<?php
include("connection_for_update.php");
error_reporting(0);
//$id=$_GET['id'];
//$query="Delete from users where id='$id'";
$query="Delete from users where id='" .$_GET["id"] . "'";
$data=mysqli_query($conn,$query);
if($data)
{
    echo "<script>alert('Selected record deleted successfully')</script>";
    header("refresh:1; url=DisplayUsers.php");
}
else
{
    echo "<FONT COLOR='RED'>SORRY,RECORD NOT DELETED";
}
?>