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

$sql = "SELECT TITLE FROM RESOURCEE WHERE CREATOR='Ning'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "TITLE " . $row["TITLE"]. "<br>";
    }
}else {
    echo "0 results";
}

mysqli_close($conn);
?>