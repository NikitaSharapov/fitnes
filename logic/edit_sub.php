<?php require_once'db.php';
$title =($_POST['selEditInpSubType']);
$dur =($_POST['selEditInpSubDur']);
$type=$_POST['selEditInpSubList'];
$price=$_POST['inpNumbPrice'];
$error_fields = [];

if ($title === '') {
    $error_fields[] = 'selEditInpSubType';
}

if ($dur === '') {
    $error_fields[] = 'selEditInpSubDur';
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
$sql='UPDATE  sub SET title=:title,duration=:duration,price=:price WHERE sub.id=:type ';
    $params=['title' => $title,'duration' => $dur,'price'=>$price, 'type'=>$type];
    $stmt=$pdo->prepare($sql);
    $stmt->execute($params);
    $response = [
        "status" => true,
        "message" => "Запись изменена!",
    ];
    echo json_encode($response);