<?php
	include("../common/config.php");
	
	$title = $_POST['title'];
	$title = escape_ch($title);
	
	$tab = $_POST['table'];
	
	$post = $_POST['post'];
	$post = escape_ch($post);
	
	$date= date("Y-m-d H:i:s");
	
	if ($conn->query("INSERT INTO $tab (id, title, post, date) VALUES (NULL, '$title', '$post', '$date')") === TRUE) {
	    echo "<div class='alert alert-success' role='alert'>New record created successfully</div>";
	} 
	else {
	    echo "<div class='alert alert-danger' role='alert'>Error updating record: " . $conn->error . "</div>";
	    echo "<p>$post</p>";
	}
	$conn->close();
?>