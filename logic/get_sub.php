<?php require_once'db.php';

$sql = 'SELECT *FROM sub 
INNER JOIN sub_type ON sub.title  = sub_type.id 


INNER JOIN sub_duration ON sub.duration  = sub_duration.id
WHERE sub.title = sub_type.id AND
sub.duration  = sub_duration.id';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$sub=array();
while ($row = $stmt->fetch(PDO::FETCH_OBJ)){
    $sub[]=$row;
}
echo json_encode($sub);
?>

