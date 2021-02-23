<?php require_once'logic/db.php';
if(isset($_SESSION['user_login'])&& isset($_SESSION['user_type'])){
    $user_type=$_SESSION['user_type'];?>
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
    <title>Личный кабинет - UralFitness</title>
    <script src="script/preloader.js" defer></script>
    <link rel="shortcut icon" href="media/muscle.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="script/main.js"></script>
</head>
<!----------------------- Тело Документа, Body's document ----------------------->

<body>
<?php require_once'parts/header.php'?>

    <!----------------------- Основной контент, Main's content ----------------------->
    <div class="wrapper">
        <main>
            <div class="main_imgs">
                <div class="main_img1">
                <h3>Добро пожаловать</h3>
                <div class="block_p">
                <p>ваш личный кабинет</p>
            </div>
            </div>
        </div>
            <div class="account_content">
            <?php require_once'logic/print_account.php';?>
            
            </div>
            <?php if($user_type=='1'){ ?>
            <div class="editpanel">
                        <a href="timetable_page.php">Расписание</a>
                        <a href="edit_acc.php">Изменить профиль</a>
                        <a href="logic/logout.php">Выйти из аккаунта</a>

                        <a href="/logic/delete_acc.php">Удалить аккаунт</a>
                        </div>
            <?php }?>
            <?php if($user_type=='3'): ?>
            <div class="editpanel">
                        <a href="admin.php">Панель администратора</a>
                        <a href="timetable_page.php">Расписание</a>
                        <a href="edit_acc.php">Изменить профиль</a>
                        <a href="logic/logout.php">Выйти из аккаунта</a>
                        <a href="/logic/delete_acc.php">Удалить аккаунт</a>
                        </div>
            <?php endif;?>
        </main>

        <!----------------------- Футер, Footer ----------------------->
        <?php require_once'parts/footer.php'?>
    </div>
</body>

</html>
<?php
}
else{
    header('Location: ../signin.php'); 
}
?>
