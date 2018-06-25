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


$stmt = $conn->prepare("INSERT INTO TYPE (USE_ID, POST_ID, TYPE_ID, WHICH_TYPE, TYPE_NAME, TYPE_DESCRIPTION, TYPE_URL) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("iiissss", $Use_Id, $Post_Id, $Type_Id, $Which_Type, $Type_Name, $Type_Description, $Type_URL);
$Use_Id = $_POST['Use_Id'];
$Post_Id = $_POST['Post_Id'];
$Type_Id = $_POST['Type_Id'];
$Which_Type = $_POST['Which_Type'];
$Type_Name = $_POST['Type_Name'];
$Type_Description = $_POST['Type_Description'];
$Type_URL = $_POST['Type_URL'];
$stmt->execute();

$stmt2 = $conn->prepare("INSERT INTO USE_DETAILS (POST_ID, TYPE_ID, USE_ID, USE_NAME, USE_EMAIL, USE_REPLY) VALUES (?, ?, ?, ?, ?, ?)");
$stmt2->bind_param("iiisss", $Post_Id, $Type_Id, $Use_Id, $Use_Name, $Use_Email, $Use_Reply);
$Post_Id = $_POST['Post_Id'];
$Type_Id = $_POST['Type_Id'];
$Use_Id = $_POST['Use_Id'];
$Use_Name = $_POST['Use_Name'];
$Use_Email = $_POST['Use_Email'];
$Use_Reply = $_POST['Use_Reply'];
$stmt2->execute();

$stmt3 = $conn->prepare("INSERT INTO USE_POSTS (TYPE_ID, USE_ID, POST_ID, USE_POSTINGS, No_of_LIKES, No_of_COMMENTS, TOTAL_VIEWS, FIIRSTPOST_DATE) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt3->bind_param("iiiiiiis", $Type_Id, $Use_Id, $Post_Id, $Use_Posts, $No_of_Likes, $No_of_Comments, $Total_Views, $Firstpost_Date);
$Type_Id = $_POST['Type_Id'];
$Use_Id = $_POST['Use_Id'];
$Post_Id = $_POST['Post_Id'];
$Use_Posts = $_POST['Use_Posts'];
$No_of_Likes = $_POST['No_of_Likes'];
$No_of_Comments = $_POST['No_of_Comments'];
$Total_Views = $_POST['Total_Views'];
$Firstpost_Date = $_POST['Firstpost_Date'];
$stmt3->execute();

mysqli_multi_query($conn, $stmt);
mysqli_multi_query($conn, $stmt2);
mysqli_multi_query($conn, $stmt3);

echo "<p> <b>Thank you for entering the details, now you can able to view this information in the database</b></p>";
?>