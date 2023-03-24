<?php
 $db="seatallotment";
$ser="database-1.crtmetq45lpf.ap-south-1.rds.amazonaws.com";
$user="root";
$pass="rootpassword";
$fid=$_GET['fid'];
$fname=$_GET['fname'];
$dno=$_GET['dno'];



$con=mysqli_connect($ser,$user,$pass,$db) or die("Connection failed");
echo "connection is done";



 $query="insert into faculty(fid,fname,dno) values('$fid','$fname','$dno')";
 if ($con->query($query) === TRUE) {
    echo "New record created successfully";
 }

else {
    echo "Error: " . $query . "<br>" . $con->error;
}



$con->close();


echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";

?>