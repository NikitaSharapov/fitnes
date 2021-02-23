<?php require_once'db.php';
$name =trim($_POST['inpNameTime']);
$day =trim($_POST['selAddInpTimeList']);
$start=($_POST['inpStartTime']);
$end=($_POST['inpEndTime']);
$error_fields = [];

if ($name === '') {
    $error_fields[] = 'inpNameTime';
}

if ($day === '') {
    $error_fields[] = 'selAddInpTimeList';
}
if ($start === '') {
    $error_fields[] = 'inpStartTime';
}
if ($end === '') {
    $error_fields[] = 'inpEndTime';
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
$sql='INSERT INTO timetable (day,name,start,end) VALUES(:day,:name, :start, :end)';
    $params=['day' => $day,'name' => $name,'start'=>$start,'end'=>$end];
    $stmt=$pdo->prepare($sql);
    $stmt->execute($params);
    $response = [
        "status" => true,
        "message" => "Запись добавлена!",
    ];
    echo json_encode($response);