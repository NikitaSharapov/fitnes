<?php require_once'db.php';
$type =trim($_POST['seladdInpSubType']);
$dur =trim($_POST['seladdInpSubDur']);
$price=trim($_POST['inpNumb']);
$error_fields = [];

if ($type === '') {
    $error_fields[] = 'seladdInpSubType';
}

if ($dur === '') {
    $error_fields[] = 'seladdInpSubDur';
}
if ($price === '') {
    $error_fields[] = 'inpNumb';
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
$sql='INSERT INTO sub(title,duration,price) VALUES(:title,:duration, :price)';
    $params=['title' => $type,'duration' => $dur,'price'=>$price];
    $stmt=$pdo->prepare($sql);
    $stmt->execute($params);
    $response = [
        "status" => true,
        "message" => "Запись добавлена!",
    ];
    echo json_encode($response);