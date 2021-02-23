<?php require_once'logic/db.php';
 if(isset($_SESSION['user_login'])){?>
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
    <title>Расписание занятий - фитнес клуб UralFitness</title>
    <script src="script/preloader.js" defer></script>
    <link rel="shortcut icon" href="media/muscle.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/timetable.css">
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
                <h3>Расписание</h3>
               <div class="block_p"><p>расписание наших тренировок на этой недели</p></div> 
            </div> 
        </div>
        <div class="timetable">
            <div class="day_block1" data-aos='fade-right'>
            <h2>Понедельник</h2>
                <div class="day_cards">
                <?php require_once'logic/print_time_table1.php';?>    
            </div> 
            </div>
            <div class="day_block2" data-aos='fade-right'>
            <h2>Вторник</h2>
                <div class="day_cards">
                <?php require_once'logic/print_time_table2.php';?>    
            </div> 
            </div>
            <div class="day_block3" data-aos='fade-right'>
            <h2>Среда</h2>
                <div class="day_cards" data-aos='fade-right'>
                <?php require_once'logic/print_time_table3.php';?>    
            </div> 
            </div>
            <div class="day_block4" data-aos='fade-right'>
            <h2>Четверг</h2>
                <div class="day_cards">
                <?php require_once'logic/print_time_table4.php';?>
                    
            </div> 
            </div>
            <div class="day_block5"data-aos='fade-right'>
            <h2>Пятница</h2>
                <div class="day_cards">
                <?php require_once'logic/print_time_table5.php';?>    
            </div> 
            </div>
            <div class="day_block6"data-aos='fade-right'>     
        </div>
        </main>
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