<?php
include("../common/config.php");

$id = $_POST['id'];
$tab = $_POST['table'];

$sql = "SELECT * FROM $tab WHERE id = $id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	$post = $row['post'];
	echo $post;
}
?>