<?php
 $db="seatallotment";
$ser="database-1.crtmetq45lpf.ap-south-1.rds.amazonaws.com";
$user="root";
$pass="rootpassword";
$dno=$_GET['dno'];

$dname=$_GET['dname'];



$con=mysqli_connect($ser,$user,$pass,$db) or die("Connection failed");
echo "connection is done";



 $query="insert into department(dno,dname) values('$dno','$dname')";
 if ($con->query($query) === TRUE) {
    echo "New record created successfully";
 }

else {
    echo "Error: " . $query . "<br>" . $con->error;
}



$con->close();

?>