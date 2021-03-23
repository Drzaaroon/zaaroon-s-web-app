<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location:Adminlogin.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php  include 'links.php' ?> 
</head>
<body>

<div class="container center-div shadow">
		<div class="heading text-center text-uppercase text-white mb-5">  
			<?php echo $_SESSION['user']?>&nbsp;&nbsp;&nbsp;CGC - Success Through Perseverence  :) </div>
		<a href="logout.php" class="btn btn-danger">  Logout</a>
</div>



</body>
</html>


