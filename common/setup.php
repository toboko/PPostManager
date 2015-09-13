<?php

$site = "Name Website";
$data =(date("d-m-y"));
$host = "localhost";
$db_user = "root";
$db_psw = "root";
$db_name = "YourDB";
$path_img = glob("../img/*.*");
$path_upload = "../img/";

class system {
  //Setup your own name's table
  public static $all_tabs = array('news','porto','blog');
}
