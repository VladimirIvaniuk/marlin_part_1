<?php
require_once "config/db.php";
require_once "config/settings.php";
$db=new DB($settings);
$tasks=$db->add("my_table", $_POST);
header('Location: task_9.php');
?>
<!--var_dump($_POST['text']);-->