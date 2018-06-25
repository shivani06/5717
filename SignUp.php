<?php
$servername = "localhost";
$username = "5717G4";
$password = "group4";
$databasename = "5717G4";
$conn = mysqli_connect($servername, $username, $password, $databasename);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
} 
echo "Connected successfully";

$stmt = $conn->prepare("INSERT INTO ADMIN (ID, Username, Password) VALUES (?, ?, ?)");
$stmt->bind_param("iss", $userid, $uname, $upass);
$userid = $_POST['userid'];
$uname = $_POST['uname'];
$upass = $_POST['upass'];
$stmt->execute();

mysqli_multi_query($conn, $stmt);

echo "<p> <b>Thank you for Signing Up, your login credentials are successfully saved in the database. You have now became an authorized user and you can be able to enter the new records in the database.</b></p>";
echo"<br>Thank You !</br>";
?>