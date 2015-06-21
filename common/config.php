<?php
$site = "site.com";
$vers = "10";
$base_url = "";
$host = "localhost";
$db_user = "user";
$db_psw = "password";
$db_name = "database";

$conn = new mysqli($host, $db_user, $db_psw, $db_name);
if ($conn->connect_error)
	die("Connection failed: " . $conn->connect_error);

function escape_ch($post) {
	$post = str_replace("'", "''", $post);
	return $post;
}