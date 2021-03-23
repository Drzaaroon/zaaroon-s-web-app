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

    while($result=mysqli_fetch_assoc($data))
    echo "<tr>
    <td>".$result['job_id']."</td>
    <td>".$result['first_name']."</td>
    <td>".$result['last_name']."</td>
    <td>".$result['street_address']."</td>
    <td>".$result['postcode']."</td>
    <td>".$result['state']."</td>
    <td>".$result['telephone']."</td>
    <td>".$result['mobile']."</td>
    <td>".$result['email']."</td>
    <td>".$result['solar_panel']."</td>
    <td>".$result['roof_height']."</td>
    <td>".$result['service_fee']."</td>
    <td>".$result['date_of_service']."</td>
    <td>".$result['time_of_service']."</td>
    <td>".$result['confirmed']."</td>
    <td>".$result['comments']."</td>
    <td><a href='update2.php?id=$row[id]&nm=$row[name]&pn=$row[phone]&em=$row[email]&pd=$row[password]'>Update</a></td>
    <td><a href='delete2.php?id=$row[id]' onclick='checkdelete()'>Delete</a></td>
</tr>";
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