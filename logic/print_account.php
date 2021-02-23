<?php
require_once 'db.php';
if (isset($_SESSION['user_id'])) {
  $id = $_SESSION['user_id'];
  $sql = 'SELECT * FROM users WHERE id = :id';
  $stmt = $pdo->prepare($sql);
  $params = [':id'=>$id];
//   echo $params;
  $stmt->execute($params);

  while ($user = $stmt->fetch(PDO::FETCH_OBJ)):
?>

<div class="account_inf">
    <h4><?= $user->lastname . ' ' . $user->firstname. ' ' . $user->patronymic; ?></h4>
    <ul>
        <li><b>Дата рождения:</b><br><?= $user->birthday; ?></li>
        <li><b>Номер телефона:</b><br><?= $user->phone; ?></li>
        <li><b>Email адрес:</b><br> <?= $user->email; ?></li>
    </ul>
    </div>
    <div class="acc_img">
    <img src="<?= $user->image; ?>" alt="">
    </div>

    
<?php
  endwhile;
} else {
  exit;
}
?>