<?php require_once'db.php';
$type=$_POST['type'];
$type_id='3';

$sql='UPDATE users SET type_id=:type_id WHERE users.id=:type ';
    $params=['type_id' => $type_id, 'type'=>$type];
    $stmt=$pdo->prepare($sql);
    $stmt->execute($params);
    $response = [
        "status" => true,
        "message" => "Запись изменена!",
    ];
    echo json_encode($response);