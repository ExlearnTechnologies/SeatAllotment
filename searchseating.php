<?php
if(!@mysql_connect("database-1.crtmetq45lpf.ap-south-1.rds.amazonaws.com",'root','rootpassword'))
echo"connection failed";
if(!mysql_select_db('seatallotment'))
echo "database selection failed";
$usn=$_GET['usn'];
$result=mysql_query("select * from seating where usn='$usn'");
if(mysql_num_rows($result)>0)
{
echo"<table border=1><tr><th>usn</th><th>cno</th></tr>";
while($arr=mysql_fetch_row($result)
)
{
echo "<tr><td>".$arr[0]."</td><td>".$arr[1]."</td></tr>";

}
echo"</table>";
}
else
{
echo "record not found";
}
?>