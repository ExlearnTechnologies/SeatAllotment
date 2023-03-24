<?php
 $db="seatallotment";
$ser="database-1.crtmetq45lpf.ap-south-1.rds.amazonaws.com";
$user="root";
$pass="rootpassword";
$usn=$_GET['usn'];
$sem=$_GET['sem'];
$con=mysqli_connect($ser,$user,$pass,$db) or die("Connection failed");
echo "connection is done ";
$query="update student set sem='$sem' where usn='$usn'";
 if ($con->query($query) === TRUE) {
    echo " record updated successfully";
}
else {
    echo "Error: " . $query . "<br>" . $con->error;
}
$con->close();
?>