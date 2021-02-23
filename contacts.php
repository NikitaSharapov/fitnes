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
    <title>Свяжитесь с нами - UralFitness</title>
    <script src="script/preloader.js" defer></script>
    <link rel="shortcut icon" href="media/muscle.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/contacts.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="script/aos.js"></script>
    <script src="script/main.js" defer></script>
</head>
<!----------------------- Тело Документа, Body's document ----------------------->

<body>
<?php require_once'parts/header.php'?>

    <!----------------------- Основной контент, Main's content ----------------------->
    <div class="wrapper">
        <main>
            <div class="main_imgs">
                <div class="main_img1">
                <h3>Свяжитесь с нами</h3>
                <div class="block_p">
                <p>напишите, позвоните или оставьте свои данные и с вами свяжется наш менеджер</p>
            </div>
            </div>
            </div>
            <div class="contact_content">
                <div class="contact_form" data-aos="fade-right">
                    <form action="" name="contact_form">
                    <p class="msg none">Тут будет писаться ошибка</p>
                        <label for="inpName">Ваше имя</label>
                        <input type="text" name="inpName" id="" placeholder="Введите ваше имя"  class="inpCont">
                        <label for="inpEmail">Ваш Email</label>
                        <input type="email" name="inpEmail" id="" placeholder="Введите ваш Email" 
                            class="inpCont">
                        <label for="inpNumber">Ваш номер телефона (по желанию)</label>
                        <input type="tel" name="inpNumber" id="" placeholder="Введите ваш номер телефона "
                            class="inpCont">
                        <label for="inpText">Ваше сообщение</label>
                        <textarea name="inpText" id="" cols="50" rows="50"
                            placeholder="Введите ваше сообщение"></textarea>
                        <button type="submit"class="subButtonContact сont-btn">Отправить</button>
                    </form>
                </div>
                <div class="contact_info"data-aos="fade-up-left">
                    <h3>Контактная информация</h3>
                    <h5>Телефон:</h5>
                    <p><a href="tel:+">Тел.+7 (956) 663-19-99</a></p>
                    <p><a href="tel:+">Тел.+7 (351) 217-05-02</a></p>
                    <h5>Почта:</h5>
                    <p><a href="mailto:uralf74@gmail.com">uralf74@gmail.com</a></p>
                    <h5>Адрес:</h5>
                    <p>71340 г. Челябинск</p>
                </div>
            </div>

        </main>

        <!----------------------- Футер, Footer ----------------------->
        <?php require_once'parts/footer.php'?>
    </div>
    <script src="script/jQuery.js"></script>
    <script src="logic/js/valid.js"></script>
</body>

</html>