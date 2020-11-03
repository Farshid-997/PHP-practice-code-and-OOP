<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="phpprac";
//create connection
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

//create database

$sql="CREATE DATABASE phpPrac";

if($conn->query($sql)===TRUE){
 echo "DATABASE CREATED SUCCESSFULLY";
}
else{
    echo "error creating database " .$conn->error;
}

$sql1="CREATE TABLE student (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(50) NOT NULL,
lastname VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql1)===TRUE){
    echo "DATABASE Table CREATED SUCCESSFULLY";
}
else{
    echo "error creating database table" .$conn->error;
}

$conn->close();
?>