<?php require_once'db.php';

$sql = 'SELECT * FROM stocks ';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$stocks=array();
while ($row = $stmt->fetch(PDO::FETCH_OBJ)){

    $stocks[]=$row;
}
echo json_encode($stocks);
?>

