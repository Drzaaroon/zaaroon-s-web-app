<html>
    <head>
        <title>
            Delete records of user from mysql database using php
        </title>
    </head>
    <body>
        <table  cellpadding=1 cellspacing=1>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>email</th>
                <th>password</th>
                <th>Delete</th>

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
                echo "<tr>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['phone']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['password']."</td>";
                echo "<td><a href=delete.php?id=".$row['id'].">Delete</a></td>";

            }
            ?>

        </table>
    </body>
</html>