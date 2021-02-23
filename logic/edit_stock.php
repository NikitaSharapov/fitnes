<?php require_once'db.php';
$name =($_POST['inpNameStock']);
$description =($_POST['inpDescriptionStock']);
$type=$_POST['selEditInpStock'];
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
$sql='UPDATE  stocks SET name=:name,description=:description WHERE stocks.id=:type ';
    $params=['name' => $name,'description' => $description, 'type'=>$type];
    $stmt=$pdo->prepare($sql);
    $stmt->execute($params);
    $response = [
        "status" => true,
        "message" => "Запись изменена!",
    ];
    echo json_encode($response);