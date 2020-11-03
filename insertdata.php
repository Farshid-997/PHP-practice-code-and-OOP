<?php
$servername="localhost";
$username="root";
$password="";
$dbname="phpprac";
//create connection
$conn=new mysqli($servername,$username,$password,$dbname);

$sql2="INSERT INTO student(firstname,lastname,email,password) VALUES('Farshid','Ahsan','arnob.farshid@gmail.com',1234);";
$sql2.="INSERT INTO student(firstname,lastname,email,password) VALUES('Naruto','uzumaki','naruto.uzumaki@gmail.com',12774);";
$sql2.="INSERT INTO student(firstname,lastname,email,password) VALUES('sasuke','uchiha','sasuke.uchiha@gmail.com',18884);";

if($conn->multi_query($sql2)===TRUE){
echo "new record created successfully";
}
else{
    echo "error";
}
$conn->close();

?>