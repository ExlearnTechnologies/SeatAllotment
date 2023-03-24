<?php
 $db="seatallotment";
$ser="database-1.crtmetq45lpf.ap-south-1.rds.amazonaws.com";
$user="root";
$pass="rootpassword";
$cno=$_GET['cno'];
$no_of_rows=$_GET['no_of_rows'];


$con=mysqli_connect($ser,$user,$pass,$db) or die("Connection failed");
echo "connection is done";



 $query="insert into class(cno,no_of_rows) values('$cno','$no_of_rows')";
 if ($con->query($query) === TRUE) {
    echo "New record created successfully";
 }

else {
    echo "Error: " . $query . "<br>" . $con->error;
}



$con->close();

?>