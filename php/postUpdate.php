<?php
include("../common/config.php");

$id = $_POST['id'];
$tab = tab_check($_POST['table']);

$query = "SELECT * FROM $tab WHERE id = :id";

$sth = $dbh->prepare($query);
$sth->bindParam(':id', $id, PDO::PARAM_INT);
$sth->execute();

$row = $sth->fetch();
if($row){
	$post = $row['post'];
	echo $post;
}
