<?php
require_once 'db.php';
$comment_id=$_POST['comment_id'];
$sql = 'DELETE FROM feedback WHERE feedback.id=:comment_id';
$stmt = $pdo->prepare($sql);
$stmt->execute([':comment_id'=>$comment_id]);
echo$comment_id;
$sql = 'SELECT *FROM feedback ';
$stmt = $pdo->prepare($sql);
$stmt->execute([':type'=>$type]);
$fb=array();
while( $row = $stmt->fetch(PDO::FETCH_OBJ)){

    $fb[]=$row;
}
// echo$type;
echo json_encode($fb);