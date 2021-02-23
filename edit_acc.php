<?php require_once'logic/db.php';
    if (isset($_SESSION['user_id'])) {
  $id = $_SESSION['user_id'];
  $sql = 'SELECT * FROM users WHERE id = :id';
  $stmt = $pdo->prepare($sql);
  $params = [':id'=>$id];
//   echo $params;
  $stmt->execute($params);

  while ($user = $stmt->fetch(PDO::FETCH_OBJ)):
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="UralFitness - молодая, но очень перспективная сеть фитнес клубов в Челябинской области и за её пределами, предоставляющая широкий спектр спортивных услуг, тренажёрный зал, групповые занятия, детский секции, сауна, душ. " />
    <meta name="keywords"
        content="спорт, фитнес, зал, фитнес зал, урал, фитнес не дорого, спортзал, абонемент в спортзал" />
    <title>Редактирования профиля - UralFitness</title>
    <script src="script/preloader.js" defer></script>
    <link rel="shortcut icon" href="media/muscle.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/form.css?<?php echo time()?>">

    <script src="script/main.js" defer></script>
</head>

<body>
    <?php require_once'parts/header.php'?>
    <div class="content">
    <div class="sign_form sign_form1">
        <form name="form_edit" enctype="multipart/form-data">
            <h3>Редактирование профиля</h3>
            <p class="msg none">Тут будет писаться ошибка</p>
            <input type="text" name="inpName" id="" placeholder="Введите ваше имя"  class="inpForm" value="<?= $user->firstname; ?>">
            <input type="text" name="inpSurname" id="" placeholder="Введите вашу фамилию"  class="inpForm" value="<?= $user->lastname; ?>">
            <input type="text" name="inpPatronymic" id="" placeholder="Введите ваше отчество"  class="inpForm"value="<?= $user->patronymic; ?>">
            <label for="date">Введите вашу дату рождения</label>
            <input type="date" name="inpBirthDate" id="" placeholder="Введите вашу дату рождения"  class="inpForm" value="<?= $user->birthday; ?>">
            <input type="tel" name="inpNumber" id="" placeholder="Введите ваш номер телефона " class="inpForm" value="<?= $user->phone; ?>">
            <label for="date">Изменить фотографию</label>
            <input type="file" name="avatar" id="" value="<?= $user->image;?>" >
            <input type="email" name="inpEmail" id="" placeholder="Введите ваш Email"  class="inpForm" value="<?= $user->email; ?>">
            <button type="submit" class="subButtonForm edit-btn">Внести изменения</button>
            <a href="account.php" >Назад</a>
        </form>
    </div>
    </div>
    </div>
    <script src="script/jQuery.js"></script>
    <script src="logic/js/valid.js"></script>
</body>

</html>
<?php
endwhile;
    }
    else{
        header('Location: ../signin.php'); 
    }
?>