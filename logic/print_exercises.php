<?php
require_once 'db.php';
$type=$_GET['type'];
// echo$type;
if($type<1){
    $sql = 'SELECT exercises.id_exercise, exercises.name_exercise, exercises.description_exercise, exercises.img_exercise FROM exercises ';
}
else{
$sql = 'SELECT exercises.id_exercise, exercises.name_exercise, exercises.description_exercise, exercises.img_exercise FROM exercises WHERE exercises.type_exercise=:type';
}
$stmt = $pdo->prepare($sql);
$stmt->execute([':type'=>$type]);
$exer=array();
while( $row = $stmt->fetch(PDO::FETCH_OBJ)){

    $exer[]=$row;
}
// echo$type;
echo json_encode($exer);

