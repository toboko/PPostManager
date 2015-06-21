<?php
include("../common/config.php");

//Show the content of a db//
$sql	=	"SHOW TABLES FROM $db_name";
$result =	 $conn->query($sql);
if ($result == FALSE) {
	echo "<li><a href='#'>No Table</a></li>";
}
else{
	while ($row = mysqli_fetch_array($result)) {
		$row 	=	$row["Tables_in_$db_name"];
		echo "<li><a href='#' onclick=\"tableChange('$row')\">$row</a></li>";
	}
}
mysqli_close($conn);
?>
