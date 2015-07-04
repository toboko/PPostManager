<?php
include("../common/setup.php");
$ds          = DIRECTORY_SEPARATOR;  //1
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
     
    $targetFile =  $upload_url . $_FILES['file']['name'];  //5
 
    move_uploaded_file($tempFile,$targetFile); //6
     
}
?> 