<?php
require_once 'db.php';
$type=$_GET['type'];

$error_fields = [];

if ($type === '') {
    $error_fields[] = 'type';
}


if (!empty($error_fields)) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Не все поля заполнены",
        "fields" => $error_fields
    ];

    echo json_encode($response);

    die();
}
$sql = 'DELETE FROM timetable WHERE timetable.id=:type';
$stmt = $pdo->prepare($sql);
$stmt->execute([':type'=>$type]);
$response = [
    "status" => true,
    "message" => "Запись Удалена!",
];
echo json_encode($response);

