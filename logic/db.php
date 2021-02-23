<?php
$driver="mysql";
$host = 'localhost';
$db = 'websitegym';
$user = 'admin';
$pass = '123';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db";
$option=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];

try{
    $pdo = new PDO("$driver:host=$host;dbname=$db;charset=$charset",$user,$pass,$option);
    session_start();
}
catch(PDOException $e){
    die("error");
}
