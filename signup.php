
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
    <title>Регистрирация - UralFitness</title>
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
        <form name="form_name">
            <h3>Регистрирация</h3>
            <p class="msg none">Тут будет писаться ошибка</p>
            <input type="text" name="inpName" id="" placeholder="Введите ваше имя"  class="inpForm">
            <input type="text" name="inpSurname" id="" placeholder="Введите вашу фамилию"  class="inpForm">
            <input type="text" name="inpPatronymic" id="" placeholder="Введите ваше отчество"  class="inpForm">
            <label for="date">Введите вашу дату рождения</label>
            <input type="date" name="inpBirthDate" id="" placeholder="Введите вашу дату рождения"  class="inpForm">
            <input type="tel" name="inpNumber" id="" placeholder="Введите ваш номер телефона " class="inpForm">
            <input type="email" name="inpEmail" id="" placeholder="Введите ваш Email"  class="inpForm">
            <label for="date">Выберите фотографию (не обязательно)</label>
            <input type="file" name="avatar" id="" >
            <input type="text" name="inpLogin" id="" placeholder="Введите логин" class="inpForm">
            <input type="password" name="inpPwd" id="" placeholder="Введите пароль (не менее 8 символов)" class="inpForm">
            <input type="password" name="inpPwd2" id="" placeholder="Повторите пароль" class="inpForm">
            <label for="chekInp"><input type="checkbox" name="checkInp" id="chk_box" class="checkBox"> Согласен(на) на обработку <a href="https://ru.wikipedia.org/wiki/%D0%9F%D0%B5%D1%80%D1%81%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D0%B5">перс. данных</a> </label>
            <button type="submit" class="subButtonForm register-btn">Зарегистрироваться</button>
            <a href="signin.php" >Авторизация</a>
            <ul>
                    <li><a href="http://pravo.gov.ru/registration/portal_rules.html">Условия</a> </li>
                    <li><a href="https://help.steampowered.com/ru/wizard/HelpWithPurchase.Vender+cromos+raacutepidamente+con+Steam+Inventory+HelperTutorialSteam">Поддержка</a> </li>
                    <li><a href="https://policies.google.com/privacy?hl=ru">Конфеденциальность</a> </li>
                </ul>
        </form>
    </div>
    </div>
    </div>
    <script src="script/jQuery.js"></script>
    <script src="logic/js/valid.js"></script>
</body>

</html>