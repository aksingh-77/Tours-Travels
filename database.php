<?php 


/*-------------------SERVER CONNECTION-------------------*/
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



/*-------------------DATABASE CREATION---------------------*/
$sql = "CREATE DATABASE TravelKeeda";
if ($conn->query($sql) === TRUE) 
{
    echo "Database created successfully";
} 
else 
{
    echo "Error creating database: " . $conn->error;
}


/*-----------------CONNECTION TO DATABASE-----------------*/
$conn = new mysqli($servername, $username, $password, "TravelKeeda");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


/*-----------------ENQUIRY TABLE CREATION-----------------*/
$sql = "CREATE TABLE enquiry(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
phone BIGINT(50),
message VARCHAR(255)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table for user enquiry created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}



?>