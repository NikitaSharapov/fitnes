
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
    <title>Вход - UralFitness</title>
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
        <div class="sign_form">
        <!-- <form action="logic/auth.php" method="POST"> -->
            <form>
                <h3>Авторизация</h3>
                <p class="msg none">Тут будет писаться ошибка</p>
                <input type="text" name="login" placeholder="Логин" class="inpForm" autofocus>
                <input type="password" name="pwd" id="" placeholder="Пароль" class="inpForm">
                <button type="submit" class="subButtonForm login-btn" >Вход</button>
                <a href="signup.php">Регистрация</a>
                <ul>
                    <li><a href="http://pravo.gov.ru/registration/portal_rules.html">Условия</a> </li>
                    <li><a href="https://help.steampowered.com/ru/wizard/HelpWithPurchase.Vender+cromos+raacutepidamente+con+Steam+Inventory+HelperTutorialSteam">Поддержка</a> </li>
                    <li><a href="https://policies.google.com/privacy?hl=ru">Конфеденциальность</a> </li>
                </ul>
            </form>
        </div>
        <script src="script/jQuery.js"></script>
    <script src="logic/js/valid.js"></script>
</body>

</html>