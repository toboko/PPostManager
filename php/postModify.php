<?php
include("../common/config.php");

$id = $_POST['id'];
$tab = tab_check($_POST['table']);
$title = $_POST['title'];
$title = escape_ch($title);
$post = $_POST['post'];
$post = escape_ch($post);

$query = "UPDATE $tab SET title = :title, post = :post WHERE id = :id";

try {
	$sth = $dbh->prepare($query);
	$sth->bindParam(':title', $title);
	$sth->bindParam(':post', $post);
	$sth->bindParam(':id', $id);
	$sth->execute();

	echo "<div class='alert alert-success' role='alert'>
				<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>
				".$sth->rowCount()." Record updated successfully</div>";
} catch (Exception $e) {
	echo "<div class='alert alert-danger' role='alert'>
				<span class='glyphicon glyphicon-warning-sign' aria-hidden='true'></span>
				Error updating record: " . $e . "
				</div>";
}
