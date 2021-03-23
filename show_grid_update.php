<html>
    <head>
        <title>
            Update records of user from mysql database using php
        </title>
    </head>
    <body>
        <table  cellpadding=1 cellspacing=1>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>email</th>
                <th>password</th>
 

            </tr>
            <?php
            //connect with mysql database
            $con=mysqli_connect('localhost','root','');
            //select Database
            mysqli_select_db($con,'admin');
            //select query
            $sql="select * from users";
            //execute the query
            $records=mysqli_query($con,$sql);

            while($row=mysqli_fetch_array($records))
{
    echo "<tr><form action=update.php method = post>";
    echo "<td><input type=text name=pname value='".$row['name']."'</td>";
    echo "<td><input type=text name=phone value='".$row['phone']."'</td>";
    echo "<td><input type=text name=email value='".$row['email']."'</td>";
    echo "<td><input type=text name=password value='".$row['password']."'</td>";
    echo "<input type=hidden name=id value='".$row['id']."'>";
    echo "<td><input type=submit>";
    echo "</form></tr>";
}
            ?>

        </table>
    </body>
</html>
