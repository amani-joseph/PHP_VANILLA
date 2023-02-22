<?php
require_once ('functions.php');
//require_once ('routes/routes.php');

//connecting to DB
$dsn = "mysql:host=localhost;port=3306;db_name=test_db;user=dev;password=Chancery@1";
$pdo = new PDO($dsn);
$statement = $pdo->prepare("select * from Persons");
$statement->execute();
$posts = $statement->fetchAll();
var_dump($posts);
echo "test";