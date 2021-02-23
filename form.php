<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <main>
        <form action="">
            <label for="inpName">Ваше имя</label>
            <input type="text" name="inpName" id="" placeholder="Введите ваше имя" required class="inpForm">
            <label for="inpSurname">Вашу фамилию</label>
            <input type="text" name="inpSurname" id="" placeholder="Введите вашу фамилию" required class="inpForm">
            <label for="inpPatronymic">Ваше отчество</label>
            <input type="text" name="inpPatronymic" id="" placeholder="Введите вашу отчество" required class="inpForm">
            <label for="daterange">Ваша дата рождения</label>
            <input type="date" name="daterange" id="" placeholder="Введите вашу дату рождения" required class="inpForm">
            <label for="inpNumber">Ваш номер телефона (по желанию)</label>
            <input type="tel" name="inpNumber" id="" placeholder="Введите ваш номер телефона " class="inpForm">
            <label for="inpEmail">Ваш Email</label>
            <input type="email" name="inpEmail" id="" placeholder="Введите ваш Email" required class="inpForm">
            <label for="inpPhoto">Выберите фотографию (по желанию)</label>
            <input type="file" name="inpPhoto" id="" class="inpfile">
            <label for="inpPass">Придумайте Пароль</label>
            <input type="password" name="inpLogin" id="" placeholder="Введите пароль" class="inpForm">
            <input type="submit" value="Отправить" class="subButtonForm">

        </form>
    </main>

</body>

</html>