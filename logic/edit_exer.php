<?php require_once'db.php';
$name =($_POST['inpNameExer']);
$description =($_POST['inpDescriptionExer']);
$type=$_POST['selEditInpExer'];
$typeExer=$_POST['selEditInpExerList'];
$error_fields = [];

if ($name === '') {
    $error_fields[] = 'inpNameExer';
}

if ($description === '') {
    $error_fields[] = 'selEditInpExer';
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
$sql='UPDATE  exercises SET name_exercise=:name,description_exercise=:description,type_exercise=:typeExer WHERE exercises.id_exercise=:type ';
    $params=['name' => $name,'description' => $description,'typeExer'=>$typeExer, 'type'=>$type];
    $stmt=$pdo->prepare($sql);
    $stmt->execute($params);
    $response = [
        "status" => true,
        "message" => "Запись изменена!",
    ];
    echo json_encode($response);