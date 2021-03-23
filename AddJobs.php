<?php
include("connection_for_update.php");
error_reporting(0);
?>

<html>
<head>
<title>Add jobs for Solar experts</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<form action="" method="POST">
<table>
<tr>
    <td>First Name</td>
    <td></td>
    <td><input type="text" size="50" name="fname" value="" placeholder="Enter first name"/></td>
</tr>

<tr>
    <td>Last Name</td>
    <td></td>
    <td><input type="text" size="50" name="lname" value="" placeholder="Enter last name"/></td>
</tr>

<tr>
    <td>Street Address</td>
    <td></td>
    <td><input type="text" size="70" name="stadd" value="" placeholder="Enter street address with suburb and postcode separated by comma "/></td>
</tr>

<tr>
    <td>Postcode</td>
    <td></td>
    <td><input type="text" size="50" name="postcd" value="" placeholder="Enter Post code"/></td>
</tr>

<tr>
    <td>State</td>
    <td></td>
    <td><input type="text" size="50" name="stt" value="" placeholder="Enter State name"/></td>
</tr>

<tr>
    <td>Telephone</td>
    <td></td>
    <td><input type="text" size="50" name="tele" value="" placeholder="Enter Telephone number"/></td>
</tr>

<tr>
    <td>Mobile</td>
    <td></td>
    <td><input type="text" size="50" name="mob" value="" placeholder="Enter Mobile number"/></td>
</tr>

<tr>
    <td>E-mail</td>
    <td></td>
    <td><input type="text" size="50" name="eml" value="" placeholder="Enter Email ID"/></td>
</tr>

<tr>
    <td>Solar Panel</td>
    <td></td>
    <td><input type="text" size="50" name="spanel" value="" placeholder="Enter Solar Panels"/></td>
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
</form>


<?php

if($_POST['submit'])
{
    $fn=$_REQUEST['fname'];
    $ln=$_REQUEST['lname'];
    $sad=$_REQUEST['stadd'];
    $pc=$_REQUEST['postcd'];
    $st=$_REQUEST['stt'];
    $tp=$_REQUEST['tele'];
    $m=$_REQUEST['mob'];
    $em=$_REQUEST['eml'];
    $sp=$_REQUEST['spanel'];
    $rh=$_REQUEST['rheight'];
    $sf=$_REQUEST['sfee'];
    $dos=$_REQUEST['doservice'];
    $tos=$_REQUEST['toservice'];
    $at=$_REQUEST['assign'];
    $cm=$_REQUEST['cnfmd'];
    $cmt=$_REQUEST['comts'];
    

    if($fn!="" && $ln!="" && $sad!="" && $pc!="" && $st!="" && $tp!="" && $sp!="" && $rh!="" && $sf!="" && $dos!="" && $tos!="" && $at!="" && $cm!="")
    {
        $query="insert into add_jobs(first_name,last_name,street_address,postcode,state,telephone,mobile,email,solar_panel,roof_height,service_fee,date_of_service,time_of_service,assigned_to,confirmed,comments) values( '$fn', '$ln', '$sad', '$pc', '$st', '$tp', '$m', '$em', '$sp', '$rh', '$sf', '$dos', '$tos', '$at', '$cm', '$cmt')";
        $data=mysqli_query($conn,$query);
            if($data)
            {
                echo '<script>alert( "data inserted into the database successfully")</script>';
                //header("refresh:1; url=#.php");
            }

    }
    else
    {
        echo "All fields are required";
    }
}


?>
</body>
</html>