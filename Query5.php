<?php
$servername = "localhost";
$username = "5717G4";
$password = "group4";
$databasename = "5717G4"; 
$conn = mysqli_connect($servername, $username, $password, $databasename);
echo "Connected to the 5717G4 Database successfully";
echo "<br/><br/>";
echo "The following table displays information about each user posts from the database";
$sql= "SELECT * FROM USE_POSTS";
$result = mysqli_query($conn, $sql);
echo"<table border = '1'>";
echo"<tr><td>User ID</td><td>Numbers of Posts</td><td>Number of Likes</td><td>Number of Comments</td><td>Total Views</td><td>Date of Post</td><tr>";
while($row = mysqli_fetch_assoc($result)) {
	echo"<tr><td>{$row['USE_ID']}</td><td>{$row['USE_POSTINGS']}</td><td>{$row['No_of_LIKES']}</td><td>{$row['No_of_COMMENTS']}</td><td>{$row['TOTAL_VIEWS']}</td><td>{$row['FIIRSTPOST_DATE']}</td><tr>";
	}
echo"</table>";

?>