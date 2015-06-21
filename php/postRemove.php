<?php
	include("../common/config.php");
	
	$id = $_POST['id'];
	$tab = $_POST['table'];

	if ($conn->query("DELETE FROM $tab WHERE id=$id") === TRUE) {
	    echo "<div class='alert alert-success' role='alert'>
	    		<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>
	    		Record deleted successfully
	    	</div>";
	} 
	else {
	    echo "<div class='alert alert-danger' role='alert'>
	    		<span class='glyphicon glyphicon-warning-sign' aria-hidden='true'></span>
	    		Error updating record: " . $conn->error . "
	    	</div>";
	}
	$conn->close();
?>