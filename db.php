<html>pozdrav</html>
<?php
$host = "lvpatrikluka-server.mysql.database.azure.com";
$user = "mnctbuband";
$pwd = "2RC268L6846CF670$";
$db = "lvpatrikluka-database";
// $host = "127.0.0.1:52932";
// $user = "azure";
// $pwd = "6#vWHD_$";
// $db = "localdb";
$conn = mysqli_connect($host,$user,$pwd);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else {
echo 'Connected successfully';
}

mysqli_select_db($conn,$db);
$sql_create = "CREATE TABLE registration_tbl(id INT NOT NULL
AUTO_INCREMENT, PRIMARY KEY(id), name VARCHAR(30), email
VARCHAR(30), date DATE);";
if ($conn->query($sql_create) === TRUE) {
echo "Table registration_tbl created successfully";
} else {
echo "Error creating table: " . $conn->error;
}
$conn->close();
?>
