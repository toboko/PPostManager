<?php
include("../common/config.php");

$title	= $_POST['title'];
$title	= escape_ch($title);
$tab		= tab_check($_POST['table']);
$post		= $_POST['post'];
$post		= escape_ch($post);
$date		= date("Y-m-d H:i:s");

$query = "INSERT INTO $tab (id, title, post, date) VALUES (NULL, :title, :post, :date)";

try {
	$sth = $dbh->prepare($query);
	$sth->bindParam(':title', $title, PDO::PARAM_STR);
	$sth->bindParam(':post', $post, PDO::PARAM_STR);
	$sth->bindParam(':date', $date);
	$sth->execute();

  echo "<div class='alert alert-success' role='alert'>New record created successfully</div>";
} catch (Exception $e) {
	echo "<div class='alert alert-danger' role='alert'>Error updating record: " . $e . "</div>";
}
