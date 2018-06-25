<?php
$servername = "localhost";
$username = "sb0819";
$password = "password";
$dbname = "sb0819";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT URL FROM RESOURCEE WHERE TITLE='Artificial Intelligence'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
		echo "The website where the required book is available is:";
		echo "URL: " . $row["URL"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>