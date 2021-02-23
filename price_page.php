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
    <title>Прайслист - абонементы, скидки, акции</title>
    <script src="script/preloader.js" defer></script>
    <link rel="shortcut icon" href="media/muscle.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/price_page.css">
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
                    <h3 >Прайслист</h3>
                    <div class="block_p">
                        <p>цены, скидки, акции, абонементы</p>
                    </div>
                </div>
            </div>
            <div class="price_content">
            <div class="stocks_content">
                <h2>Акции</h2>
                <div class="block_list" >

                </div>
                </div>
                <div class="sub_content">
                    <h2 >Абонементы</h2>
                    <div class="block_sub_list" >
                    </div>
                </div>
                <?php require_once'parts/questions.php'?>
                </div>
               
        </main>

        <!----------------------- Футер, Footer ----------------------->
        <?php require_once'parts/footer.php'?>
    </div>
    <script src="script/jQuery.js"></script>
    <script>
        $("document").ready(function () {
            $.ajax({
                url: '/logic/get_stocks.php',
                type: "get",
                success: function (data) {
                    data = jQuery.parseJSON(data);
                    $.each(data, function (i, item) {
                        $(".block_list").append("<div class='inf_block' data-aos='fade-right'> <h3>" + item.name +
                            "</h3><p>" + item.description + "</p></div>");
                    });
                },

            });
            $.ajax({
                url: '/logic/get_sub.php',
                type: "get",
                success: function (data1) {
                    data1 = jQuery.parseJSON(data1);
                    $.each(data1, function (i, item) {
                        $(".block_sub_list").append("<div class='inf_block2' data-aos='fade-right'> <h3>" + item.title +
                            "</h3><p>" + item.duration + "</p> <p>" +
                            item.price + " р.</p> </div>");
                    });
                },
            });
        });
    </script>
</body>

</html>