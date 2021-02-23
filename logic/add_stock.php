<?php require_once'db.php';
$name =trim($_POST['inpName']);
$description =trim($_POST['inpDescription']);
$error_fields = [];

if ($name === '') {
    $error_fields[] = 'inpName';
}

if ($description === '') {
    $error_fields[] = 'inpDescription';
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
$sql='INSERT INTO stocks(name,description) VALUES(:name,:description)';
    $params=['name' => $name,'description' => $description];
    $stmt=$pdo->prepare($sql);
    $stmt->execute($params);
    $response = [
        "status" => true,
        "message" => "Запись добавлена!",
    ];
    echo json_encode($response);