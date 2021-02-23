<?php require_once'db.php';
$day=($_POST['selEditInpTime']);
$name =($_POST['inpNameTime']);
$type=$_POST['selEditInpTimeList'];

$start=$_POST['inpStartTimeEdit'];
$end=$_POST['inpEndTimeEdit'];


$sql='UPDATE  timetable SET name=:name, day=:day, start=:start,end=:end WHERE timetable.id=:type ';
    $params=['day' => $day,'name' => $name,'start'=>$start,'end'=>$end, 'type'=>$type];
    $stmt=$pdo->prepare($sql);
    $stmt->execute($params);
    $response = [
        "status" => true,
        "message" => "Запись изменена!",
    ];
    echo json_encode($response);