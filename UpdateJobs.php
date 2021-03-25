
<?php
include("connection_for_update.php");
if(count($_POST)>0) {
    $result=mysqli_query($conn,"UPDATE add_jobs set job_id='" . $_POST['jobid'] . "', first_name='" . $_POST['fname'] . "', last_name='" . $_POST['lname'] . "', street_address='" . $_POST['stadd'] . "' ,postcode='" . $_POST['postcd'] . "',state='" . $_POST['stt'] . "',telephone='" . $_POST['tele'] . "',mobile='" . $_POST['mob'] . "',email='" . $_POST['eml'] . "',solar_panel='" . $_POST['spanel'] . "',roof_height='" . $_POST['rheight'] . "',service_fee='" . $_POST['sfee'] . "',date_of_service='" . $_POST['doservice'] . "',time_of_service='" . $_POST['toservice'] . "',assigned_to='" . $_POST['assign'] . "',confirmed='" . $_POST['cnfmd'] . "',comments='" . $_POST['comts'] . "' WHERE job_id='" . $_POST['jobid'] . "'");
    if($result)
        {
            echo "<font color='Green'>record updated successfully";
            header("refresh:1; url=DisplayJobs.php");
        }
        else
        {
            echo "<font color='Red'>Record not updated";
        }
    }
    $result = mysqli_query($conn,"SELECT * FROM add_jobs WHERE job_id='" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($result);
?>


<html>
<head></head>
<body>
<form action="" method="Post">
<table>
<tr>
    <td>Job ID</td>
    <td></td>
    <td><input type="text" size="50" name="jobid" value="<?php echo $row['job_id']; ?>" /></td>
</tr>
<tr>
    <td>First Name</td>
    <td></td>
    <td><input type="text" size="50" name="fname" value="<?php echo $row['first_name']; ?>" /></td>
</tr>
<tr>
    <td>Last Name</td>
    <td></td>
    <td><input type="text" size="50" name="lname" value="<?php echo $row['last_name']; ?>" /></td>
</tr>

<tr>
    <td>Street Address</td>
    <td></td>
    <td><input type="text" size="50" name="stadd" value="<?php echo $row['street_address']; ?>" /></td>
</tr>

<tr>
    <td>Postcode</td>
    <td></td>
    <td><input type="text" size="50" name="postcd" value="<?php echo $row['postcode']; ?>" /></td>
</tr>

<tr>
    <td>State</td>
    <td></td>
    <td><input type="text" size="50" name="stt" value="<?php echo $row['state']; ?>" /></td>
</tr>

<tr>
    <td>Telephone</td>
    <td></td>
    <td><input type="text" size="50" name="tele" value="<?php echo $row['telephone']; ?>" /></td>
</tr>

<tr>
    <td>Mobile</td>
    <td></td>
    <td><input type="text" size="50" name="mob" value="<?php echo $row['mobile']; ?>" /></td>
</tr>

<tr>
    <td>E-mail</td>
    <td></td>
    <td><input type="text" size="50" name="eml" value="<?php echo $row['email']; ?>" /></td>
</tr>

<tr>
    <td>Solar Panel</td>
    <td></td>
    <td><input type="text" size="50" name="spanel" value="<?php echo $row['solar_panel']; ?>" /></td>
</tr>

<!-- <tr>
    <td>Roof Height</td>
    <td></td>
    <td><select name="rheight">
<option value="<?php echo $row['roof_height']; ?>" disable selected ><?php echo $row['roof_height']; ?></option>
<option value="SGL">SGL</option>
<option value="DBL">DBL</option>
<option value="TPL">TPL</option>
</select></td>
</tr> -->

<tr>
				
                    <td>Roof Height</td>
                        <td></td>
                        <td><select name="rheight">
						<option value="" disabled>choose option</option>
						<option <?php if($row['roof_height']=="SGL"){echo "selected";}?>>SGL</option>
						<option <?php if($row['roof_height']=="DBL"){echo "selected";}?>>DBL</option>
						<option <?php if($row['roof_height']=="TPL"){echo "selected";}?>>TPL</option>
					</select>
					</td>
				</tr>




<tr>
    <td>Service Fee</td>
    <td></td>
    <td><input type="text" size="50" name="sfee" value="<?php echo $row['service_fee']; ?>" /></td>
</tr>

<tr>
    <td>Date of Service</td>
    <td></td>
    <td><input type="date" size="50" name="doservice" value="<?php echo $row['date_of_service']; ?>" /></td>
</tr>

<tr>
    <td>Time of Service</td>
    <td></td>
    <td><select name="toservice" >
<option value="<?php echo $row['time_of_service']; ?>" disable selected><?php echo $row['time_of_service']; ?></option>
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
    <td><input type="text" size="50" name="assign" value="<?php echo $row['assigned_to']; ?>" /></td>
</tr>

<tr>
    <td>Confirmed</td>
    <td></td>
    <td><select name="cnfmd">
<option value="<?php echo $row['confirmed']; ?>" disable selected><?php echo $row['confirmed']; ?></option>
<option value="confirmed">CONFIRMED</option>
<option value="cancelled">CANCELLED</option>
<option value="rebooked">REBOOKED</option>
<option value="Pending">PENDING</option>
</select></td>
</tr>

<tr>
    <td>Comments</td>
    <td></td>
    <td><input type="text"  size="50" name="comts" value="<?php echo $row['comments']; ?>" /></td>
</tr>



</table>
<input type="submit" name="submit" value="update">
</form>
</body></html>