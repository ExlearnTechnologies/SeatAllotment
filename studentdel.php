<?php
 $db="seatallotment";
$ser="database-1.crtmetq45lpf.ap-south-1.rds.amazonaws.com";
$user="root";
$pass="rootpassword";
$usn=$_GET['usn'];
$con=mysqli_connect($ser,$user,$pass,$db) or die("Connection failed");
echo "connection is done";
$query="delete from student where usn='$usn'";
 if ($con->query($query) === TRUE) {
    echo " record deleted";
 }
else {
    echo "Error: " . $query . "<br>" . $con->error;
}
$con->close();
?>