<?php
$host = "lvpatrikluka-server.mysql.database.azure.com";
$user = "mnctbuband";
$pwd = "2RC268L6846CF670$";
$db = "lvpatrikluka-database";

// Create a connection
$conn = mysqli_connect($host, $user, $pwd);

// Check connection
if (!$conn) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
} else {
    echo 'Connected successfully';
}

// Select the database
mysqli_select_db($conn, $db);

// SQL to create a table
$sql_create = "CREATE TABLE registration_tbl (
    id INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(id),
    name VARCHAR(30),
    email VARCHAR(30),
    date DATE
);";

// Execute the query to create the table
if ($conn->query($sql_create) === TRUE) {
    echo "Table registration_tbl created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the connection
$conn->close();
?>
