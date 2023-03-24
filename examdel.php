<?php
 $db="seatallotment";
$ser="database-1.crtmetq45lpf.ap-south-1.rds.amazonaws.com";
$user="root";
$pass="rootpassword";
$eid=$_GET['eid'];

$con=mysqli_connect($ser,$user,$pass,$db) or die("Connection failed");
echo "connection is done";



 $query="delete from exam where eid='$eid'";
 if ($con->query($query) === TRUE) {
    echo " record deleted";
 }

else {
    echo "Error: " . $query . "<br>" . $con->error;
}



$con->close();

?>