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
    echo "Travel Keeda Database created successfully";
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
    echo "Table for user enquiry table created successfully";
} else {
    echo "Error creating table: enguiry table " . $conn->error;
}


/*-------------FEEDBACK TABLE CREATION-------------------*/
$sql = "CREATE TABLE feedack(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
phone BIGINT(50),
message VARCHAR(255),
stars INT(10)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table for user enquiry created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


/*----------------DESTINATION TABLE CREATED--------------*/
$sql = "CREATE TABLE destination(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
destination_name VARCHAR(30) NOT NULL,
plan VARCHAR(30) NOT NULL,
description VARCHAR(255),
amount BIGINT(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table for user destination table created successfully";
} else {
    echo "Error creating table: destination table" . $conn->error;
}


/*-------------CLIENTS TABLE CREATION-------------------*/
$sql = "CREATE TABLE clients(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
image VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table for user clients created successfully";
} else {
    echo "Error creating table: clients table " . $conn->error;
}


?>