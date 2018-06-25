<?php
$servername = "localhost";
$username = "5717G4";
$password = "group4";
$databasename = "5717G4"; 
$conn = mysqli_connect($servername, $username, $password, $databasename);
echo "Connected to the 5717G4 Database successfully";
echo "<br/><br/>";
echo "The following table displays the total number of Online Communities and Forums records";
$sql= "SELECT * FROM TYPE";
$result = mysqli_query($conn, $sql);
echo"<table border = '1'>";
echo"<tr><td>Online Community or Forum Name</td><td>Description</td><td>URL</td><tr>";
while($row = mysqli_fetch_assoc($result)) {
	echo"<tr><td>{$row['TYPE_NAME']}</td><td>{$row['TYPE_DESCRIPTION']}</td><td>{$row['TYPE_URL']}</td><tr>";
	}
echo"</table>";

?>