<?php
require_once 'db.php';

$sql ='SELECT *  FROM users';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$stock=array();
while( $row = $stmt->fetch(PDO::FETCH_OBJ)){

    $stock[]=$row;
}
echo json_encode($stock);

