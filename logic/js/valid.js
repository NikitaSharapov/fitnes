$('.login-btn').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let login = $('input[name="login"]').val(),
        password = $('input[name="pwd"]').val();

    $.ajax({
        url: '/logic/auth.php',
        type: 'POST',
        dataType: 'json',
        data: {
            login: login,
            pwd: password
        },
        success (data) {

            if (data.status) {
                document.location.href = 'account.php';
            } else {
                $('.msg').removeClass('none').text(data.message);
            }

        }
    });

});



let avatar = false;
$('input[name="avatar"]').change(function (e) {
    avatar = e.target.files[0];
});

/*
    Регистрация
 */

$('.register-btn').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

        // password_confirm = $('input[name="password_confirm"]').val();

    let formData = new FormData(document.form_name);
    $.ajax({
        url: '/logic/reg.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {

            if (data.status) {
                document.location.href = '/signin.php';
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }

                $('.msg').removeClass('none').text(data.message);

            }

        }
    });

});

$('.edit-btn').click(function (e) {
    e.preventDefault();
    let formData = new FormData(document.form_edit);
    $.ajax({
        url: '/logic/edit.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {

            if (data.status) {
                document.location.href = '/account.php';
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }

                $('.msg').removeClass('none').text(data.message);

            }

        }
    });

});

$('.сont-btn').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

        // password_confirm = $('input[name="password_confirm"]').val();

    let formData = new FormData(document.contact_form);
    $.ajax({
        url: '/logic/contactup.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {
            if (data.status) {
                document.location.href = '/contacts.php';
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }

                $('.msg').removeClass('none').text(data.message);

            }

        }
    });

});