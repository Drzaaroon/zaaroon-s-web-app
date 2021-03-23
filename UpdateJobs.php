
<?php
include("connection_for_update.php");
error_reporting(0);
$_GET['fn'];
$_GET['ln'];
$_GET['sad'];
$_GET['pc'];
$_GET['st'];
$_GET['tp'];
$_GET['m'];
$_GET['em'];
$_GET['sp'];
$_GET['rh'];
$_GET['sf'];
$_GET['dos'];
$_GET['tos'];
$_GET['at'];
$_GET['cm'];
$_GET['cmt'];
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

<table>
<tr>
    <td>First Name</td>
    <td></td>
    <td><input type="text" size="50" name="fname" value="<?php echo $_GET['fn']; ?>" placeholder="Enter first name"/></td>
</tr>

<tr>
    <td>Last Name</td>
    <td></td>
    <td><input type="text" size="50" name="lname" value="<?php echo $_GET['ln']; ?>" placeholder="Enter last name"/></td>
</tr>

<tr>
    <td>Street Address</td>
    <td></td>
    <td><input type="text" size="70" name="stadd" value="<?php echo $_GET['sad']; ?>" placeholder="Enter street address with suburb and postcode separated by comma "/></td>
</tr>

<tr>
    <td>Postcode</td>
    <td></td>
    <td><input type="text" size="50" name="postcd" value="<?php echo $_GET['pc']; ?>" placeholder="Enter Post code"/></td>
</tr>

<tr>
    <td>State</td>
    <td></td>
    <td><input type="text" size="50" name="stt" value="<?php echo $_GET['st']; ?>" placeholder="Enter State name"/></td>
</tr>

<tr>
    <td>Telephone</td>
    <td></td>
    <td><input type="text" size="50" name="tele" value="<?php echo $_GET['tp']; ?>" placeholder="Enter Telephone number"/></td>
</tr>

<tr>
    <td>Mobile</td>
    <td></td>
    <td><input type="text" size="50" name="mob" value="<?php echo $_GET['m']; ?>" placeholder="Enter Mobile number"/></td>
</tr>

<tr>
    <td>E-mail</td>
    <td></td>
    <td><input type="text" size="50" name="eml" value="<?php echo $_GET['em']; ?>" placeholder="Enter Email ID"/></td>
</tr>

<tr>
    <td>Solar Panel</td>
    <td></td>
    <td><input type="text" size="50" name="spanel" value="<?php echo $_GET['sp']; ?>" placeholder="Enter Solar Panels"/></td>
</tr>

<tr>
    <td>Roof Height</td>
    <td></td>
    <td><select name="rheight" placeholder="Select roof height">
<option value="" disable selected>Choose option</option>
<option value="SGL">SGL</option>
<option value="DBL">DBL</option>
<option value="TPL">TPL</option>
</select></td>
</tr>

<tr>
    <td>Service Fee</td>
    <td></td>
    <td><input type="text" size="50" name="sfee" value="" placeholder="Enter service fee"/></td>
</tr>

<tr>
    <td>Date of Service</td>
    <td></td>
    <td><input type="date" size="50" name="doservice" value="" placeholder="Enter date of service"/></td>
</tr>

<tr>
    <td>Time of Service</td>
    <td></td>
    <td><select name="toservice" placeholder="Enter time of service">
<option value="" disable selected>Choose option</option>
<option value="7:30AM">7:30 AM</option>
<option value="8:00AM">8:00 AM</option>
<option value="8:30AM">8:30 AM</option>
<option value="9:00AM">9:00 AM</option>
<option value="9:30AM">9:30 AM</option>
<option value="10:00AM">10:00 AM</option>
<option value="10:30AM">10:30 AM</option>
<option value="11:00AM">11:00 AM</option>
<option value="11:30AM">11:30 AM</option>
<option value="12:00PM">12:00 PM</option>
<option value="12:30PM">12:30 PM</option>
<option value="1:00PM">1:00 PM</option>
<option value="1:30PM">1:30 PM</option>
<option value="2:00PM">2:00 PM</option>
<option value="2:30PM">2:30 PM</option>
<option value="3:00PM">3:00 PM</option>
<option value="3:30PM">3:30 PM</option>
<option value="4:00PM">4:00 PM</option>
<option value="4:30PM">4:30 PM</option>
<option value="5:00PM">5:00 PM</option>
<option value="5:30PM">5:30 PM</option>

</select></td>
</tr>

<tr>
    <td>Assigned To</td>
    <td></td>
    <td><input type="text" size="50" name="assign" value="" placeholder="Enter name of the Solar Expert"/></td>
</tr>

<tr>
    <td>Confirmed</td>
    <td></td>
    <td><select name="cnfmd" placeholder="Select Service status">
<option value="" disable selected>Choose option</option>
<option value="confirmed">CONFIRMED</option>
<option value="cancelled">CENCELLED</option>
<option value="rebooked">REBOOKED</option>
<option value="Pending">PENDING</option>
</select></td>
</tr>

<tr>
    <td>Comments</td>
    <td></td>
    <td><input type="text"  size="50" name="comts" value="" placeholder="Enter the optional information"/></td>
</tr>

<tr>
    <td></td>
    <td><input type="submit" size="30" name="submit" value="submit"></td>
    <td></td>
</tr>

</table>
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