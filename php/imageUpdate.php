<?php
include("../common/setup.php");

for ($i=0; $i<count($path_img); $i++) {
	$image = $path_img[$i];
	$image = substr($image, 1);
	echo '
		<img 
		class="img_to_drag"
		dropzone="copy s:text"
		draggable="true"
		ondragstart="start_drag(event)" 
		data-code="![Image]('.$image.' \'Image\')" 
		src="'.$image.'" />';
}
?>