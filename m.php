<?php


    
 if (isset($_POST['']))
{


$value1= $_POST[ "motor1"];
$motor2= $_POST[ "motor2"];
$motor3= $_POST[ "motor3"];
$motor4= $_POST[ "motor4"];
$motor5= $_POST[ "motor5"];
$motor6= $_POST[ "motor6"];


$host = "localhost";
$dbusernam= "root";
$dbpassword = "";
$dbname = "db1";
$conn = new mysqli ($host, $dbusernam, $dbpassword,$dbname);
$stmt=$conn->preper("insert into sliders2(motor1,motor2,motor3,motor4,motor5,motor6)
values('$motor1','$motor2','$motor3','$motor4','$motor5','$motor6')");
$stmt->execute();

echo"THE data is insert correctly!";

      

   
	
}elseif(isset($_POST['run']))
{

$stmt=$conn->preper("insert into running(start)values('1");
$stmt->execute();
	
echo"THE data is insert correctly!";
	
	
	}else
{
echo "try ";
}

?>
