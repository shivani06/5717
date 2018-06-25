<?php
$servername = "localhost";
$username = "5717G4";
$password = "group4";
$databasename = "5717G4"; 
$conn = mysqli_connect($servername, $username, $password, $databasename);
echo "Connected to the 5717G4 Database successfully";
echo "<br/><br/>";
echo "The following Table displays all user details from the database";
$sql= "SELECT * FROM USE_DETAILS";
$result = mysqli_query($conn, $sql);
echo"<table border = '1'>";
echo"<tr><td>User ID</td><td>User Name</td><td>User Email</td><td>User Reply</td><tr>";
while($row = mysqli_fetch_assoc($result)) {
	echo"<tr><td>{$row['USE_ID']}</td><td>{$row['USE_NAME']}</td><td>{$row['USE_EMAIL']}</td><td>{$row['USE_REPLY']}</td><tr>";
	}
echo"</table>";

?>