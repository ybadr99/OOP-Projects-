<?php

$connection = require_once 'pdo.php';


if(isset($_POST['submit']))
{
    $connection->createNote($_POST);
    header("location:index.php");
}
