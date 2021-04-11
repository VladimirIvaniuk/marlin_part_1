<?php
//require_once "config/db.php";
//require_once "config/settings.php";
//$db=new DB($settings);
//$tasks=$db->add("my_table", $_POST);
//header('Location: task_9.php');
$text=$_POST['text'];
$pdo=new PDO('mysql:host=localhost; dbname=marlin_part_1;', "root", "root");
$sql="INSERT INTO my_table (text) VALUES (:text)";
$statement=$pdo->prepare($sql);
$result=$statement->execute(["text"=>$text]);
header('Location: task_9.php');