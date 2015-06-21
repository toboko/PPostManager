<?php
include("../common/config.php");

$id = $_POST['id'];
$tab = $_POST['table'];

$result = $conn->query("SELECT * FROM $tab WHERE id = $id");
if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	$post = $row['title'];
	echo $post;
}
?>