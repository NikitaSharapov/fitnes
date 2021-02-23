<?php
require_once 'db.php';
$sql = 'SELECT *FROM feedback ';
$stmt = $pdo->prepare($sql);
$stmt->execute([':type'=>$type]);
$fb=array();
while( $row = $stmt->fetch(PDO::FETCH_OBJ)){

    $fb[]=$row;
}
// echo$type;
echo json_encode($fb);