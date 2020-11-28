<?php header("Content-Type: application/json; charset=UTF-8"); ?>

<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "vizitracker";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
$obj = json_decode($_POST["user"], false);
//echo json_encode($obj->usrEmail);

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$name=$obj->name;
//$emailid = "ralop@ertocp.com";
$output = array();

$sql = "SELECT * from visitor1 where name ='$name'";
//echo $sql;
$result = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_assoc($result)) {
	$output[]=$row;
  }
$sresult = json_encode($output);
echo $sresult;


mysqli_close($conn);
?>