<?php 
 // we are creating php variables
$uname=$_POST['uname'];
$upass=$_POST['upass'];
$servername = "localhost";
$username = "5717G4";
$password = "group4";
$databasename = "5717G4"; 
$conn = mysqli_connect($servername, $username, $password, $databasename);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
$sql= "SELECT * 
FROM ADMIN
WHERE Username =  '$uname'
AND PASSWORD =  '$upass' ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
echo "Login Failed! Please Enter valid User login Details";
echo "<br></br>";
echo "Thank You!";
if(($row["Username"]) == $uname && $row["Password"]== $upass) {
	header("location: EntryFormDetails.html");
}
?>