<?php
 $db="seatallotment";
$ser="database-1.crtmetq45lpf.ap-south-1.rds.amazonaws.com";
$user="root";
$pass="rootpassword";
$eid=$_GET['eid'];

$exam_date=$_GET['exam_date'];





$con=mysqli_connect($ser,$user,$pass,$db) or die("Connection failed");
echo "connection is done";



 
$query="update exam set exam_date='$exam_date' where eid='$eid'";
 if ($con->query($query) === TRUE) {
    echo " record updated successfully";
}

else {
    echo "Error: " . $query . "<br>" . $con->error;
}



$con->close();

?>