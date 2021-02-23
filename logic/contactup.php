<?php require_once'db.php';
$name =trim($_POST['inpName']);
$telNumb=trim($_POST['inpNumber']);
$email=trim($_POST['inpEmail']);
$text=($_POST['inpText']);

$error_fields = [];

if ($name === '') {
    $error_fields[] = 'inpName';
}

if ($email === '') {
    $error_fields[] = 'inpEmail';
}
if ($text === '') {
    $error_fields[] = 'inpText';
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
else{
$sql='INSERT INTO feedback (name,email,phone,text) VALUES(:name,:email,:phone,:text)';
$params=['name'=>$name,'email' => $email,'phone'=>$telNumb,'text'=>$text];
$stmt=$pdo->prepare($sql);
$stmt->execute($params);
$response = [
    "status" => true,
    "message" => "Сообщение отправлено",
];
echo json_encode($response);

}
     

