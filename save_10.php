<?php
session_start();
//require_once "config/db.php";
//require_once "config/settings.php";
//$db=new DB($settings);
//
//$task=$db->getOne("my_table", $_POST);
//if(!empty($task)){
//    $message="Введенная запись уже есть в таблице";
//    $_SESSION['danger']=$message;
//    header('Location: task_10.php');
//    exit;
//}
//$tasks=$db->add("my_table", $_POST);
//if(!empty($tasks)){
//    $message="Запись добавленна";
//    $_SESSION['success']=$message;
//    header('Location: task_10.php');
//    exit;
//}
//header('Location: task_10.php');
$pdo=new PDO('mysql:host=localhost; dbname=marlin_part_1;', "root", "root");
$sql ="SELECT * FROM my_table WHERE text = :text";
$statement=$pdo->prepare($sql);
$statement->execute(["text"=>$_POST['text']]);
$task=$statement->fetch(PDO::FETCH_ASSOC);
if(!empty($task)){
    $message="Введенная запись уже есть в таблице";
    $_SESSION['danger']=$message;
    header('Location: task_10.php');
    exit;
}

$sql="INSERT INTO my_table (text) VALUES (:text)";
$statement=$pdo->prepare($sql);
$tasks=$statement->execute(["text"=>$_POST['text']]);
if(!empty($tasks)){
    $message="Запись добавленна";
    $_SESSION['success']=$message;
    header('Location: task_10.php');
    exit;
}
header('Location: task_10.php');