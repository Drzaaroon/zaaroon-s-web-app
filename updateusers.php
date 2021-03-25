<?php
include_once 'connection_for_update.php';
if(count($_POST)>0) {
$result=mysqli_query($conn,"UPDATE users set id='" . $_POST['userid'] . "', name='" . $_POST['name'] . "', phone='" . $_POST['phone'] . "', email='" . $_POST['email'] . "' ,password='" . $_POST['password'] . "' WHERE id='" . $_POST['userid'] . "'");
if($result)
    {
        echo "<font color='Green'>record updated successfully";
        header("refresh:1; url=displayusers.php");
    }
    else
    {
        echo "<font color='Red'>Record not updated";
    }
}
$result = mysqli_query($conn,"SELECT * FROM users WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Electrician's Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<!-- <div style="padding-bottom:5px;">
<a href="retrieve.php">Employee List</a>
</div> -->
User ID:&nbsp;&nbsp;
<input type="hidden" name="userid" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="userid"  value="<?php echo $row['id']; ?>">
<br>
Username:&nbsp;&nbsp;
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
Phone:&nbsp;&nbsp;
<input type="text" name="phone" class="txtField" value="<?php echo $row['phone']; ?>">
<br>
Email:&nbsp;&nbsp;
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
Password:&nbsp;&nbsp;
<input type="text" name="password" class="txtField" value="<?php echo $row['password']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>


