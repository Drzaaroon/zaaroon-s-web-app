<style>
      td
      {
          padding: 10px;;
      }
</style>
<?php
include("connection_for_update.php");
error_reporting(0);
$query="SELECT * FROM USERS";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);


if($total!=0)
{
    ?>

    <table>
        <tr>
            <th>User ID</th>
            <th>NAME</th>
            <th>PHONE</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th COLSPAN="2">OPERATIONS</th>
        </tr>
    
<?php

    while($result=mysqli_fetch_assoc($data)){ 
   ?>
 <tr>
<td><?php echo $result["id"];?></td>
<td><?php echo $result["name"];?></td>
<td><?php echo $result["phone"];?></td>
<td><?php echo $result["email"];?></td>
<td><?php echo $result["password"];?></td>
<td><a href="updateusers.php?id=<?php echo $result["id"];?>">Update</a></td>
<td><a href="deleteusers.php?id=<?php echo $result["id"];?>" onclick="checkdelete()">Delete</a></td>
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