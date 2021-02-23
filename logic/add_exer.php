<?php require_once'db.php';
$name =trim($_POST['inpName']);
$description =trim($_POST['inpDescription']);
$type=($_POST['inpTypeExer']);
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
$path = 'media/exercises/' . $_FILES["inpFileExer"]["name"];
if (!move_uploaded_file($_FILES['inpFileExer']['tmp_name'], '../' . $path)) {
    $path='media/exercises/1484316.jpg';
}
$sql='INSERT INTO exercises(name_exercise,description_exercise,img_exercise,type_exercise) VALUES(:name,:description, :img,:type)';
    $params=['name' => $name,'description' => $description,'img'=>$path, 'type'=>$type];
    $stmt=$pdo->prepare($sql);
    $stmt->execute($params);
    $response = [
        "status" => true,
        "message" => "Запись добавлена!",
    ];
    echo json_encode($response);