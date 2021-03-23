<html>
    <head>
        <title>
            Delete and update records of user from mysql database using php
        </title>
    </head>
    <body>
    <style>
      td
      {
          padding: 10px;;
      }
    </style>

        <table  cellpadding=1 cellspacing=1>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>email</th>
                <th>password</th>
                <th colspan="2">Operations</th>
            </tr>
            
            <?php
            //connect with mysql database
            $con=mysqli_connect('localhost','root','');
            //select Database
            mysqli_select_db($con,'admin');
            //select query
            //https://www.youtube.com/watch?v=wTSijA06gnE
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
                echo "<td><a href='update2.php?nm=$result[name]&pn=$result[phone]&em=$result[email]&pd=$result[password]'>Update</a></td>";
                echo "<td><a href='#'>Delete</a></td>";
            }
            ?>

        </table>
    </body>
</html>