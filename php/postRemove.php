<?php
include("../common/config.php");

$id = $_POST['id'];
$tab = tab_check($_POST['table']);

$query = "DELETE FROM $tab WHERE id = :id";

try {
	$sth = $dbh->prepare($query);
	$sth->bindParam(':id', $id);
	$sth->execute();
	echo "<div class='alert alert-success' role='alert'>
				<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>
				Record deleted successfully
				</div>";
} catch (Exception $e) {
	echo "<div class='alert alert-danger' role='alert'>
				<span class='glyphicon glyphicon-warning-sign' aria-hidden='true'></span>
				Error updating record: " . $e . "
				</div>";
}
