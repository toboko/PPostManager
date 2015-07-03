<?php
include_once("setup.php");

$conn = new mysqli($host, $db_user, $db_psw, $db_name);
if ($conn->connect_error)
	die("Connection failed: " . $conn->connect_error);

function escape_ch($post) {
	$post = str_replace("'", "''", $post);
	return $post;
}