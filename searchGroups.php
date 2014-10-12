<?php

include 'db.php';
$con=mysqli_connect($dbHost,$dbUser,$dbPassword,$dbName);
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM tbl_group");
$rows = array();
while($r = mysqli_fetch_array($result)) {
	//echo $row['fName'] . " " . $row['lName'];
	//echo "<br>";
	$rows[] = $r;
}
mysqli_close($con);

echo json_encode($rows);	
?>