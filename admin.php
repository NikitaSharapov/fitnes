<?php require_once'logic/db.php';
if(isset($_SESSION['user_login'])&& isset($_SESSION['user_type'])){
    $user_type=$_SESSION['user_type'];?>
<?php if($user_type=='3'): ?>
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
    <title>Панель администратора - UralFitness</title>
    <script src="script/preloader.js" defer></script>
    <link rel="shortcut icon" href="media/muscle.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="css/admin.css">

    <script src="script/main.js"></script>
</head>
<!----------------------- Тело Документа, Body's document ----------------------->

<body>
    <?php require_once'parts/header.php'?>
    <main>
        <div class="tabs">

            <!--  Контейнер с вкладками   -->
            <ul class="tab-header">
                <li class="tab-header__item js-tab-trigger active" data-tab="1">Обратная связь</li>
                <li class="tab-header__item js-tab-trigger" data-tab="2">Абонементы</li>
                <li class="tab-header__item js-tab-trigger" data-tab="3">База упражнений</li>
                <li class="tab-header__item js-tab-trigger" data-tab="4">Расписание</li>
                <li class="tab-header__item js-tab-trigger" data-tab="5">Пользователи</li>
                <li class="tab-header__item js-tab-trigger" data-tab="6">Акции</li>
                <li class="tab-header__item js-tab-trigger" data-tab="7">Помощь</li>
            </ul>

            <!--  Контейнер с блоками, которые содержат контент вкладок   -->
            <ul class="tab-content">
                <li class="tab-content__item js-tab-content active" data-tab="1">
                    <h3>Сообщения пользователей</h3>
                    <div class="block_list">
                    </div>
                </li>

                <li class="tab-content__item js-tab-content" data-tab="2">
                        <h3>Измение данных об абонементах</h3>
                        <div class="change_block">
                            <div class="add_form">
                                <h4>Добавление запись</h4>
                                <form name="add_sub" enctype="multipart/form-data">
                                    <select name="seladdInpSubType" id="" class="seladdInpSubType inpForm">
                                        <option value=""></option>
                                        <option value="1">Персональный тренинг</option>
                                        <option value="2">Тренажёрный зал</option>
                                        <option value="3">Групповое занятие</option>
                                        <option value="4">Клубная карта</option>
                                    </select>
                                    <select name="seladdInpSubDur" id="" class="seladdInpSubDur inpForm">
                                        <option value=""></option>
                                        <option value="1">1 занятие</option>
                                        <option value="2">4 занятия</option>
                                        <option value="4">8 занятий</option>
                                        <option value="5">12 занятий</option>
                                        <option value="6">1 месяц</option>
                                        <option value="7">3 месяца</option>
                                        <option value="8">6 месяцев</option>
                                        <option value="9">12 месяцев</option>
                                        <option value="10">1 тренировка</option>
                                        <option value="11">4 тренировки</option>
                                        <option value="12">8 тренировок</option>
                                        <option value="13">10 тренировок</option>
                                        <option value="14">12 тренировок</option>
                                    </select>
                                    <input type="number" name="inpNumb" id="" class="inpForm addInpPrice"
                                        placeholder="Цена">
                                    <button class="add_sub_btn subButtonForm">Добавить запись</button>
                                </form>
                            </div>
                            <div class="edit_form">
                                <h4>Изменения записи</h4>
                                <form name="edit_sub">
                                    <select id="" class="selEditInpSub inpForm" name="selEditInpSubList">
                                        <option value=""></option>

                                    </select>
                                    <select id="" class="selEditInpSubType inpForm" name="selEditInpSubType">
                                        <option value=""></option>
                                        <option value="1">Персональный тренинг</option>
                                        <option value="2">Тренажёрный зал</option>
                                        <option value="3">Групповое занятие</option>
                                        <option value="4">Клубная карта</option>
                                    </select>
                                    <select id="" class="selEditInpSubDur inpForm" name="selEditInpSubDur">
                                        <option value=""></option>
                                        <option value="1">1 занятие</option>
                                        <option value="2">4 занятия</option>
                                        <option value="4">8 занятий</option>
                                        <option value="5">12 занятий</option>
                                        <option value="6">1 месяц</option>
                                        <option value="7">3 месяца</option>
                                        <option value="8">6 месяцев</option>
                                        <option value="9">12 месяцев</option>
                                        <option value="10">1 тренировка</option>
                                        <option value="11">4 тренировки</option>
                                        <option value="12">8 тренировок</option>
                                        <option value="13">10 тренировок</option>
                                        <option value="14">12 тренировок</option>
                                    </select>
                                    <input type="number" name="inpNumbPrice" id="" class="inpForm editInpPrice"
                                        placeholder="Цена">
                                    <button class="edit_sub_btn subButtonForm">Изменить запись</button>
                                </form>
                            </div>
                            <div class="del_form">
                                <h4>Удалить запись</h4>
                                <div class="del_form">
                                    <select id="" class="selDelInpSub inpForm">
                                        <option value=""></option>
                                    </select>
                                    <button class="del_sub_btn subButtonForm">Удалить запись</button>
                                </div>
                                </div>
                                </div>

                </li>
                <li class="tab-content__item js-tab-content" data-tab="3">
                    <h3>Изменить данные об упражнениях</h3>
                    <p class="msg none">Тут будет писаться ошибка</p>
                    <div class="change_block">
                        <div class="add_form">
                            <h4>Добавление запись</h4>
                            <form name="add_exer" enctype="multipart/form-data">
                                <input type="text" name="inpName" placeholder="Название упражнения" class="inpForm">
                                <select name="inpTypeExer" id="" class="seladdInp inpForm">
                                    <option value=""></option>
                                    <option value="1">Мышцы груди</option>
                                    <option value="2">Мышцы спины</option>
                                    <option value="3">Базовые упражнения для ног</option>
                                    <option value="4">Базовые упражнения для рук</option>
                                    <option value="5">Базовые упражнения для плеч</option>
                                    <option value="6">Базовые упражнения для пресса</option>
                                </select>
                                <textarea name="inpDescription" id="" cols="30" rows="10" placeholder="Описание"
                                    class="inpFormTxt"></textarea>
                                <label for="inpFileExer">Выберите фотографию</label>
                                <input type="file" name="inpFileExer" id="">
                                <button class="add_exer_btn subButtonForm">Добавить запись</button>
                            </form>
                            
                        </div>
                        <div class="edit_form">
                            <h4>Изменения записи</h4>
                            <form name="edit_exer">
                                <select id="" class="selEditInpExerList inpForm" name="selEditInpExer">
                                    <option value=""></option>
                                </select>
                                <input type="text" name="inpNameExer" placeholder="Название упражнения"
                                    class="inpForm inpNameExer">
                                <select name="selEditInpExerList" id="" class="selEditInpExer inpForm">
                                    <option value=""></option>
                                    <option value="1">Мышцы груди</option>
                                    <option value="2">Мышцы спины</option>
                                    <option value="3">Базовые упражнения для ног</option>
                                    <option value="4">Базовые упражнения для рук</option>
                                    <option value="5">Базовые упражнения для плеч</option>
                                    <option value="6">Базовые упражнения для пресса</option>
                                </select>
                                <textarea name="inpDescriptionExer" id="" cols="30" rows="10" placeholder="Описание"
                                    class="inpFormTxt inpDescriptionExer"></textarea>
                                <button class="edit_exer_btn subButtonForm">Изменить запись</button>
                            </form>
                        </div>
                        <div class="del_form">
                            <h4>Удалить запись</h4>
                            <div class="del_form">
                                <select id="" class="selDelInpExer inpForm">
                                    <option value=""></option>
                                </select>
                                <button class="del_exer_btn subButtonForm">Удалить запись</button>
                            </div>
                        </div>
                    </div>

                </li>
                <li class="tab-content__item js-tab-content" data-tab="4">
                    <h3>Изменить расписание</h3>
                    <div class="change_block">
                        <div class="add_form">
                            <h4>Добавление запись</h4>
                            <form name="add_time">
                                <select name="selAddInpTimeList" id="" class="selAddInpTimeList inpForm">
                                    <option value=""></option>
                                    <option value="1">Понедельник</option>
                                    <option value="2">Вторник</option>
                                    <option value="3">Среда</option>
                                    <option value="4">Четверг</option>
                                    <option value="5">Пятница</option>
                                </select>
                                <input type="text" name="inpNameTime" placeholder="Название тренировки"
                                    class="inpForm inpNameTime">
                                <label for="inpStartTime">Начало тренировки</label>
                                <input type="time" name="inpStartTime" id="" class="inpForm inpStarTime">
                                <label for="inpEndTime">Конец тренировки</label>
                                <input type="time" name="inpEndTime" id="" class="inpForm inpEndTime">
                                <button class="add_time_btn subButtonForm">Добавить запись</button>
                            </form>
                        </div>



                        <div class="edit_form">
                            <h4>Изменения записи</h4>
                            <form name="edit_time">
                                <select id="" class="selEditInpTimeList inpForm" name="selEditInpTimeList">
                                    <option value=""></option>
                                </select>
                                <select name="selEditInpTime" id="" class="selEditInpTime inpForm">
                                    <option value=""></option>
                                    <option value="1">Понедельник</option>
                                    <option value="2">Вторник</option>
                                    <option value="3">Среда</option>
                                    <option value="4">Четверг</option>
                                    <option value="5">Пятница</option>
                                </select>
                                <input type="text" name="inpNameTime" placeholder="Название тренировки"
                                    class="inpForm inpNameTimeEdit">
                                    <label for="inpStartTimeEdit">Начало тренировки</label>
                                <input type="time" name="inpStartTimeEdit" id="" class="inpForm inpStarTimeEdit">
                                <label for="inpEndTime">Конец тренировки</label>
                                <input type="time" name="inpEndTimeEdit" id="" class="inpForm inpEndTimeEdit">
                                <button class="edit_time_btn subButtonForm">Изменить запись</button>
                            </form>
                        </div>




                        <div class="del_form">
                            <h4>Удалить запись</h4>
                            <div class="del_form">
                                <select id="" class="selDelInpTime inpForm">
                                    <option value=""></option>
                                </select>
                                <button class="del_time_btn subButtonForm">Удалить запись</button>
                            </div>
                        </div>

                    </div>
                </li>
                <li class="tab-content__item js-tab-content" data-tab="5">
                        <h3>Изменить данные о пользователях</h3>
                        <h4>Выберите пользователя для добавления администратора</h4>
                        <div class="change_block">
                        <div class="del_form">
                            <select name="" id="" class="selAddAdmin inpForm">
                                <option value=""></option>
                            </select>
                            <button class="add_admin_btn subButtonForm">Добавить</button>
                        </div>
                    </div>
                    <h4>Выберите пользователя для удаления администратора</h4>
                        <div class="change_block">
                        <div class="del_form">
                            <select name="" id="" class="selDelAdmin inpForm">
                                <option value=""></option>
                            </select>
                            <button class="del_admin_btn subButtonForm">Добавить</button>
                        </div>
                    </div>
                </li>



                <li class="tab-content__item js-tab-content" data-tab="6">
                    <div class="block_edit_stocks">
                        <h3>Измение данных об акциях</h3>
                        <p class="msg none">Тут будет писаться ошибка</p>
                        <div class="change_block">
                            <div class="add_form">
                                <h4>Добавление запись</h4>
                                <form name="add_stock">
                                    <input type="text" name="inpName" placeholder="Название акции" class="inpForm">
                                    <textarea name="inpDescription" id="" cols="30" rows="10" placeholder="Описание"
                                        class="inpFormTxt"></textarea>
                                    <button class="add_stock_btn subButtonForm">Добавить запись</button>
                                </form>
                            </div>
                            <div class="edit_form">
                                <h4>Изменения записи</h4>
                                <form name="edit_stock">
                                    <select id="" class="selEditInpStock inpForm" name="selEditInpStock">
                                        <option value=""></option>
                                    </select>
                                    <input type="text" name="inpNameStock" placeholder="Название акции"
                                        class="inpForm inpNameStock">
                                    <textarea name="inpDescriptionStock" id="" cols="30" rows="10"
                                        placeholder="Описание" class="inpDescriptionStock inpFormTxt"></textarea>
                                    <button class="edit_stock_btn subButtonForm">Изменить запись</button>
                                </form>
                            </div>
                            <div class="del_form">
                                <h4>Удалить запись</h4>
                                
                                    <select id="" class="selDelInp inpForm">
                                        <option value=""></option>
                                    </select>
                                    <button class="del_stocks_btn subButtonForm">Удалить запись</button>
                                </div>
                            </div>
                        </div>
                   
                </li>
                <li class="tab-content__item js-tab-content" data-tab="7">
                    <h3>Руководство пользователя</h3>
                    <div class="info">
                        <ul>

                            <p>1) В кажой вкладке панели администратора расположены инструменты
                                изменения/добавления/удаления информациии из базы данных сайта</p>
                            <p>2) Доступ к панели администратора есть только у администратора, никто кроме
                                администратора не может изменять данные базы данных сайта</p>
                            <p>3) Изменённые данные в таблицах отображатся на сайте при перезагрузки соответствующей
                                страницы </p>
                            <p>4) Администратор не может менять данные хранящиеся вне базы данных</p>
                            <p>5) Так же администратор может получать сообщения от пользователей в разделе "Обратная
                                связь"</p>
                            <p>6) Администратор может назначать другого зарегистрированного пользователя администратором
                            </p>
                            <p>7) Никому не сообщайте пароль если вы являетесь администртором</p>
                            <p>8) Не стоит назначать каждого пользователя администратором</p>
                            <p>9) Если что-то не работае нажмите "F5"</p>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </main>
    <script src="script/jQuery.js"></script>
    <script>
        $('.js-tab-trigger').click(function () {
            var id = $(this).attr('data-tab'),
                content = $('.js-tab-content[data-tab="' + id + '"]');

            $('.js-tab-trigger.active').removeClass('active'); // 1
            $(this).addClass('active'); // 2

            $('.js-tab-content.active').removeClass('active'); // 3
            content.addClass('active'); // 4
        });
    </script>
    <script src="logic/js/admin.js"></script>
</body>

</html>





<?php endif;?>
<?php
}
else{
    header('Location: ../signin.php'); 
}
?>