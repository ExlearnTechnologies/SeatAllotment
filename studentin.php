<?php
 $db="seatallotment";
$ser="database-1.crtmetq45lpf.ap-south-1.rds.amazonaws.com";
$user="root";
$pass="rootpassword";
$usn=$_GET['usn'];
$sname=$_GET['sname'];
$dno=$_GET['dno'];
$sem=$_GET['sem'];

$con=mysqli_connect($ser,$user,$pass,$db) or die("Connection failed");
echo "connection is done";

$query="insert into student(usn,sname,dno,cno,sem) values('$usn','$sname','$dno','$cno','$sem')";
 if ($con->query($query) === TRUE) {
    echo "  new record created successfully";
}
else {
    echo "Error: " . $query . "<br>" . $con->error;
}
$con->close();
?>