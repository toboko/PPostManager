<?php
include("../common/config.php");

//Show the content of a db//
$query = "SHOW TABLES FROM $db_name";
$sth = $dbh->prepare($query);
try {
	$sth->execute();
	$row = $sth->fetch();
	if($row){
		do {
			$row 	=	$row["Tables_in_$db_name"];
			echo "<li><a href='#' onclick=\"tableChange('$row')\">$row</a></li>";
		} while ($row = $sth->fetch());
	}
	else {
		echo "<li><a href='#'>No Table</a></li>";
	}
} catch (Exception $e) {
	echo "Error : ". $e;
}
