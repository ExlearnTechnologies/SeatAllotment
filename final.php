<?php
$con=new PDO("mysql:host=database-1.crtmetq45lpf.ap-south-1.rds.amazonaws.com;dbname=seatallotment",'root','rootpassword');
$sql="CALL seat()";
$result=$con->prepare($sql);
$result->setFetchMode(PDO::FETCH_ASSOC);
$result->execute();
while($values=$result->fetch())
{
print"<pre>";
print_r($values);
}
?>