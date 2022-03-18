<?php

$connection = require_once 'pdo.php';

//        echo "<pre>";
//        var_dump($_POST);
//        echo "</pre>";

$id = $_POST['id'] ?? '';
if($id)
{
    $connection->updateNote($id, $_POST);
} else {
    $connection->createNote($_POST);
}

header("location:index.php");
