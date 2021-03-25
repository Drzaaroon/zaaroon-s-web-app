<style>
table, th, td {
    font-family: monospace;
    border: 1px solid;
}
</style>

<?php
include("connection_for_update.php");
error_reporting(0);
$query="SELECT * FROM add_jobs";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);


if($total!=0)
{
    ?>

<table>
        <tr>
            <th>Job ID</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>STREET ADDRESS</th>
            <th>POSTCODE</th>
            <th>STATE</th>
            <th>TELEPHONE</th>
            <th>MOBILE</th>
            <th>EMAIL</th>
            <th>SOLAR PANLES</th>
            <th>ROOF HEIGHT</th>
            <th>SERVICE FEE</th>
            <th>DATE OF SERVICE</th>
            <th>TIME OF SERVICE</th>
            <th>ASSIGNED TO</th>
            <th>CONFIRMED</th>
            <th>COMMENTS</th>
            <th COLSPAN="2">OPERATIONS</th>
        </tr>
    
<?php

    while($result=mysqli_fetch_assoc($data)){ 
        ?>
    <tr>
    <td><?php echo $result['job_id'];?></td>
    <td><?php echo $result['first_name'];?></td>
    <td><?php echo $result['last_name'];?></td>
    <td><?php echo $result['street_address'];?></td>
    <td><?php echo $result['postcode'];?></td>
    <td><?php echo $result['state'];?></td>
    <td><?php echo $result['telephone'];?></td>
    <td><?php echo $result['mobile'];?></td>
    <td><?php echo $result['email'];?></td>
    <td><?php echo $result['solar_panel'];?></td>
    <td><?php echo $result['roof_height'];?></td>
    <td><?php echo $result['service_fee'];?></td>
    <td><?php echo $result['date_of_service'];?></td>
    <td><?php echo $result['time_of_service'];?></td>
    <td><?php echo $result['confirmed'];?></td>
    <td><?php echo $result['comments'];?></td>
    <td><a href="UpdateJobs.php?id=<?php echo $result["job_id"];?>">Update</a></td>
    <td><a href="DeleteJobs.php?id=<?php echo $result["job_id"];?>" onclick="checkdelete()">Delete</a></td>
</tr>
<?php
}
}
else
{
    echo "No record found"; 
}
?>
</table>

<script>
    function checkdelete()
    {
        return confirm('Are you sure you want to delete this data?');
    }
</script>