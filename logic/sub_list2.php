<?php
require_once 'db.php';
$type=$_GET['type'];
$sql ='SELECT *  FROM sub WHERE sub.id=:type';
$stmt = $pdo->prepare($sql);
$stmt->execute(['type'=>$type]);
$stock=array();
while( $row = $stmt->fetch(PDO::FETCH_OBJ)){

    $stock[]=$row;
}
echo json_encode($stock);

