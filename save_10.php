<?php
session_start();
require_once "config/db.php";
require_once "config/settings.php";
$db=new DB($settings);
$task=$db->getOne("my_table", $_POST);
if(!empty($task)){
    $message="Введенная запись уже есть в таблице";
    $_SESSION['danger']=$message;
    header('Location: task_10.php');
    exit;
}
$tasks=$db->add("my_table", $_POST);
if(!empty($tasks)){
    $message="Запись добавленна";
    $_SESSION['success']=$message;
    header('Location: task_10.php');
    exit;
}
header('Location: task_10.php');
?>
<!--var_dump($_POST['text']);-->