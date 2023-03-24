<?php
 $db="seatallotment";
$ser="database-1.crtmetq45lpf.ap-south-1.rds.amazonaws.com";
$user="root";
$pass="rootpassword";
$eid=$_GET['eid'];

$ename=$_GET['ename'];
$exam_date=$_GET['exam_date'];
$cno=$_GET['cno'];



$con=mysqli_connect($ser,$user,$pass,$db) or die("Connection failed");
echo "connection is done";



 $query="insert into exam(eid,ename,exam_date,cno) values('$eid','$ename','$exam_date','$cno')";
 if ($con->query($query) === TRUE) {
    echo "New record created successfully";
 }

else {
    echo "Error: " . $query . "<br>" . $con->error;
}



$con->close();

?>