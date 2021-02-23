<?php require_once'logic/db.php';?>
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
    <title>База упражнений - UralFitness</title>
    <script src="script/preloader.js" defer></script>
    <link rel="shortcut icon" href="media/muscle.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/exercises.css?<?echo time();?>">
    <link rel="stylesheet" href="css/style.css">
    <script src="script/aos.js"></script>
    <script src="script/main.js" defer></script>
    <script src="script/jQuery.js"></script>
</head> 
<!----------------------- Тело Документа, Body's document ----------------------->

<body>
<?php require_once'parts/header.php'?>

    <!----------------------- Основной контент, Main's content ----------------------->
    <div class="wrapper">
        <main>
            <div class="main_imgs">
                <div class="main_img1">
                    <h3>Упражнения</h3>
                    <div class="block_p">
                        <p>описание упражнений и тренировок</p>
                    </div>
                </div>
            </div>
            <div class="exercise_content">
                <h2>Cписок упражнений</h2>
                    <select name="selectType" id="" class="inp">
                        <option value="0">Все</option>

                    </select>
                <div class="block_list">

                </div>
            </div>
        </main>

        <!----------------------- Футер, Footer ----------------------->
        <?php require_once'parts/footer.php'?>
    </div>
    <script>
        $("document").ready(function () {
                    $.ajax({
                        url: '/logic/print_exercises_type.php',
                        type: "get",
                        success: function (data) {
                            data = jQuery.parseJSON(data);
                            $.each(data, function (i, item) {
                                $(".inp").append("<option value="+item.id_type_exercise+">"+item.name_type_exercise+"</option>");
                            });
                        },

                    });
                });

        $("document").ready(function () {
            $.ajax({
                url: '/logic/print_exercises.php',
                type: "get",
                data:'type=0',
                success: function (data) {
                    data = jQuery.parseJSON(data);
                    $.each(data, function (i, item) {
                        $(".block_list").prepend("<div class='inf_block' data-aos='fade-right'> <h3>" + item.name_exercise +
                            "</h3><p>" + item.description_exercise + "</p><img src="+item.img_exercise+"></div>");
                    });
                },

            });
        });
        $('[name=selectType]').change(function(){
            $(".block_list").empty()
            $.ajax({
                url: '/logic/print_exercises.php',
                type: "get",
                data:'type='+$('[name=selectType]').val(),
                success: function (data) {
                    data = jQuery.parseJSON(data);
                    $.each(data, function (i, item) {
                        $(".block_list").prepend("<div class='inf_block' data-aos='fade-right'> <h3>" + item.name_exercise +
                            "</h3><p>" + item.description_exercise + "</p><img src="+item.img_exercise+"></div>");
                    });
                },

            });
        })
    </script>
</body>

</html>