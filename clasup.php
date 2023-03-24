<?php
 $db="seatallotment";
$ser="database-1.crtmetq45lpf.ap-south-1.rds.amazonaws.com";
$user="root";
$pass="rootpassword";
$cno=$_GET['cno'];
$no_of_rows=$_GET['no_of_rows'];


$con=mysqli_connect($ser,$user,$pass,$db) or die("Connection failed");
echo "connection is done";



 
$query="update class set no_of_rows='$no_of_rows' where cno='$cno'";
 if ($con->query($query) === TRUE) {
    echo " record updated successfully";
}

else {
    echo "Error: " . $query . "<br>" . $con->error;
}



$con->close();

?>