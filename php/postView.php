<?php
include("../common/config.php");

$string = '';
$tab = $_POST['table'];

$result = $conn->query("SELECT * FROM $tab ORDER BY id DESC");
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$string .= '
			<a href="#" class="list-group-item" onclick="postUpdate('.$row['id'].')">
				<h4 class="list-group-item-heading">'.$row['title'].'</h4>
				<p class="list-group-item-text">'.substr($row['post'], 0, 100).'...</p>
			</a>';
	}
}
$conn->close();
echo $string;
?>