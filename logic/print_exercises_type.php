<?php
require_once 'db.php';

$sql ='SELECT *  FROM type_exercises';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$exertype=array();
while( $row = $stmt->fetch(PDO::FETCH_OBJ)){

    $exertype[]=$row;
}
echo json_encode($exertype);

