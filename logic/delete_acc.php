<?php
require_once'db.php';
$id = $_SESSION['user_id'];
$sql = 'DELETE FROM users WHERE id = :id';
$stmt = $pdo->prepare($sql);
$params = [':id'=>$id];
//   echo $params;
$stmt->execute($params);



$_SESSION=[];
if(isset($_COOKIE[session_name()])){
    setcookie(session_name(),'', time()-3600, '/');
}
session_destroy();

header('Location:../signin.php');