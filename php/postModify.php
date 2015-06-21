<?php
	include("../common/config.php");
	
	$id = $_POST['id'];
	$tab = $_POST['table'];
	
	$title = $_POST['title'];
	$title = escape_ch($title);
	
	$post = $_POST['post'];
	$post = escape_ch($post);
	
	if ($conn->query("UPDATE $tab SET title='$title', post='$post' WHERE id=$id") === TRUE) {
	    echo "<div class='alert alert-success' role='alert'>
	    		<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>
	    		Record updated successfully
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