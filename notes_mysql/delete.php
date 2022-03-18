<?php

$connection = require_once 'pdo.php';


if(isset($_POST['id']))
{
    $id =  $_POST['id'];

    $connection->removeNote($id);
    header("location:index.php");
}
