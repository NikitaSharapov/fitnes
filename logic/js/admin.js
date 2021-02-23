// добавление акций
$('.add_stock_btn').click(function (e) {
    e.preventDefault();

    let formData = new FormData(document.add_stock);
    $.ajax({
        url: '/logic/add_stock.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {

            if (data.status) {
                document.location.href = '/admin.php';
                $('.msg').removeClass('none').text(data.message);
                $('[name=inpName]').val('');
                $('[name=inpDescription]').val('');
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                    });
                }

                $('.msg').removeClass('none').text(data.message);

            }

        }
    });

});

// редактирование акций
$("document").ready(function () {
    $.ajax({
        url: '/logic/stock_list.php',
        type: "get",
        success: function (data) {
            data = jQuery.parseJSON(data);
            $.each(data, function (i, item) {
                $(".selEditInpStock").append("<option value="+item.id+">"+item.name+"</option>");
            });
        },

    });
});

    $('.selEditInpStock').change(function(){
        $(`input`).removeClass('error');
        $.ajax({
            url: '/logic/stock_list2.php',
            type: "GET",
            dataType: 'json',
            data:'type='+$('.selEditInpStock').val(),
            success (data) {
                // data = jQuery.parseJSON(data);
                $.each(data, function (i, item) {
                    $('.inpNameStock').val(item.name);
                    $('.inpDescriptionStock').val(item.description);
                });

            }
        });

    });


$('.edit_stock_btn').click(function (e) {
    e.preventDefault();
    let formData = new FormData(document.edit_stock);
    $.ajax({
        url: '/logic/edit_stock.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {

            if (data.status) {
                document.location.href = '/admin.php';
                $('.msg').removeClass('none').text(data.message);

            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                    });
                }

                $('.msg').removeClass('none').text(data.message);

            }

        }
    });

});

// удаление акций



$("document").ready(function () {
    $.ajax({
        url: '/logic/stock_list.php',
        type: "get",
        success: function (data) {
            data = jQuery.parseJSON(data);
            $.each(data, function (i, item) {
                $(".selDelInp").append("<option value="+item.name+">"+item.name+"</option>");
            });
        },

    });
});




$('.del_stocks_btn').click(function (e) {
    $(`input`).removeClass('error');
    $.ajax({
        url: '/logic/del_stocks.php',
        type: "get",
        dataType: 'json',
        data:'type='+$('.selDelInp').val(),
        success (data) {
            if (data.status) {
                document.location.href = '/admin.php';
                $('.msg').removeClass('none').text(data.message);
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



// фидбек
$("document").ready(function (){
    postFb();
    setInterval(function(){
        postFb();
    },5000);

    function postFb(){
        $(".block_list").empty()

    $.ajax({
        url: '/logic/print_feedback.php',
        type: "POST",
        async: false,
        success: function (data) {
            data = jQuery.parseJSON(data);
                $.each(data, function (i, item) {
                    let id=item.id;
                    // alert(id);
                    $(".block_list").prepend("<div class='inf_block' name="+item.id+"> <h5>Пользователь:</h5><p>" + item.name +
                        "</p> <h5>Email адрес:</h5><p> " + item.email +"</p><h5>Номер телефона:</h5><p> " + item.phone +"</p> <h5>Сообщение:</h5> <p>" + item.text + "</p><button data-id="+item.id+" class='del_msg'>Удалить сообщение</button></div>");

            });
            $('.del_msg').click(function (e) {
                let dataId = $(this).attr('data-id');
                // let dataId2 = $('.inf_block').attr('data-id2');
                console.log(dataId);  
                $.ajax({
                    url: '/logic/del_msg.php',
                    type: "POST",
                    async: false,
                    data: {comment_id: dataId},
                    success: function (data) {
                    }
                });

                $(this).parent().addClass('noneBlock');
               

        });

        },

    });
}
});




// добавление упражнений

let inpFileExer = false;
$('input[name="inpFileExer"]').change(function (e) {
    inpFileExer = e.target.files[0];
 
});

$('.add_exer_btn').click(function (e) {
    e.preventDefault();

    let formData = new FormData(document.add_exer);
    $.ajax({
        url: '/logic/add_exer.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {

            if (data.status) {
                document.location.href = '/admin.php';
                $('.msg').removeClass('none').text(data.message);
                $('[name=inpName]').val('');
                $('[name=inpDescription]').val('');
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                    });
                }

                $('.msg').removeClass('none').text(data.message);

            }

        }
    });

});

// редакт упражн
$("document").ready(function () {
    $.ajax({
        url: '/logic/exercises_list.php',
        type: "get",
        success: function (data) {
            data = jQuery.parseJSON(data);
            $.each(data, function (i, item) {
                $(".selEditInpExerList").append("<option value="+item.id_exercise+">"+item.name_exercise+"</option>");
            });
        },

    });
});


$('.selEditInpExerList').change(function(){
    $(`input`).removeClass('error');
    $.ajax({
        url: '/logic/exercises_list2.php',
        type: "GET",
        dataType: 'json',
        data:'type='+$('.selEditInpExerList').val(),
        success (data) {
            // data = jQuery.parseJSON(data);
            $.each(data, function (i, item) {
                $('.inpNameExer').val(item.name_exercise);
                $('.selEditInpExer').val(item.type_exercise);
                $('.inpDescriptionExer').val(item.description_exercise);
            });

        }
    });

});



$('.edit_exer_btn').click(function (e) {
    e.preventDefault();
    let formData = new FormData(document.edit_exer);
    $.ajax({
        url: '/logic/edit_exer.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {

            if (data.status) {
                document.location.href = '/admin.php';
                $('.msg').removeClass('none').text(data.message);

            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                    });
                }

                $('.msg').removeClass('none').text(data.message);

            }

        }
    });

});




// удаление упражнений
$("document").ready(function () {
    $.ajax({
        url: '/logic/exercises_list.php',
        type: "get",
        success: function (data) {
            data = jQuery.parseJSON(data);
            $.each(data, function (i, item) {
                $(".selDelInpExer").append("<option value="+item.name_exercise+">"+item.name_exercise+"</option>");
            });
        },

    });
});


$('.del_exer_btn').click(function (e) {
    $(`input`).removeClass('error');
    $.ajax({
        url: '/logic/del_exer.php',
        type: "get",
        dataType: 'json',
        data:'type='+$('.selDelInpExer').val(),
        success (data) {
            if (data.status) {
                document.location.href = '/admin.php';
                $('.msg').removeClass('none').text(data.message);
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


// добавление админа

$("document").ready(function () {
    $.ajax({
        url: '/logic/user_list.php',
        type: "POST",
        success: function (data) {
            data = jQuery.parseJSON(data);
            $.each(data, function (i, item) {
                $(".selAddAdmin").append("<option value="+item.id+">"+item.login+"</option>");
            });
        },

    });
});


$('.add_admin_btn').click(function (e) {
    $.ajax({
        url: '/logic/add_admin.php',
        type: "POST",
        dataType: 'json',
        data:'type='+$('.selAddAdmin').val(),
        success (data) {
            if (data.status) {
                document.location.href = '/admin.php';
                
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }
                
            }

        }
    });
});

// удаление админа

$("document").ready(function () {
    $.ajax({
        url: '/logic/user_list.php',
        type: "POST",
        success: function (data) {
            data = jQuery.parseJSON(data);
            $.each(data, function (i, item) {
                $(".selDelAdmin").append("<option value="+item.id+">"+item.login+"</option>");
            });
        },

    });
});

$('.del_admin_btn').click(function (e) {
    $.ajax({
        url: '/logic/del_admin.php',
        type: "POST",
        dataType: 'json',
        data:'type='+$('.selDelAdmin').val(),
        success (data) {
            if (data.status) {
                document.location.href = '/admin.php';
                
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }
                
            }

        }
    });
});


// добавление абонемента



$('.add_sub_btn').click(function (e) {
    e.preventDefault();

    let formData = new FormData(document.add_sub);
    $.ajax({
        url: '/logic/add_sub.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {

            if (data.status) {
                document.location.href = '/admin.php';
                $('.msg').removeClass('none').text(data.message);
                $('[name=inpName]').val('');
                $('[name=inpDescription]').val('');
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                    });
                }

                $('.msg').removeClass('none').text(data.message);

            }

        }
    });

});


// ред абон

$("document").ready(function () {
    $.ajax({
        url: '/logic/sub_list.php',
        type: "GET",
        success: function (data) {
            data = jQuery.parseJSON(data);
            $.each(data, function (i, item) {
                $(".selEditInpSub").append("<option value="+item.id+">Запись № "+item.id+" c ценой "+item.price+"</option>");
            });
        },

    });
});

$('.selEditInpSub').change(function(){
    $(`input`).removeClass('error');
    $.ajax({
        url: '/logic/sub_list2.php',
        type: "GET",
        dataType: 'json',
        data:'type='+$('.selEditInpSub').val(),
        success (data) {
            // data = jQuery.parseJSON(data);
            $.each(data, function (i, item) {
                $('.selEditInpSubType').val(item.title);
                $('.selEditInpSubDur').val(item.duration);
                $('.editInpPrice').val(item.price);
            });

        }
    });

});

$('.edit_sub_btn').click(function (e) {
    e.preventDefault();
    let formData = new FormData(document.edit_sub);
    $.ajax({
        url: '/logic/edit_sub.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {

            if (data.status) {
                document.location.href = '/admin.php';
                $('.msg').removeClass('none').text(data.message);

            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                    });
                }

                $('.msg').removeClass('none').text(data.message);

            }

        }
    });

});


// удаление абонемента

$("document").ready(function () {
    $.ajax({
        url: '/logic/sub_list.php',
        type: "POST",
        success: function (data) {
            data = jQuery.parseJSON(data);
            $.each(data, function (i, item) {
                $(".selDelInpSub").append("<option value="+item.id+">Запись № "+item.id+" c ценой "+item.price+"</option>");
            });
        },

    });
});


$('.del_sub_btn').click(function (e) {
    $(`input`).removeClass('error');
    $.ajax({
        url: '/logic/del_sub.php',
        type: "get",
        dataType: 'json',
        data:'type='+$('.selDelInpSub').val(),
        success (data) {
            if (data.status) {
                document.location.href = '/admin.php';
                $('.msg').removeClass('none').text(data.message);
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




// Добваление расписания

$('.add_time_btn ').click(function (e) {
    e.preventDefault();

    let formData = new FormData(document.add_time);
    $.ajax({
        url: '/logic/add_time.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {

            if (data.status) {
                document.location.href = '/admin.php';
                $('.msg').removeClass('none').text(data.message);
                $('[name=inpNameTime]').val('');
                $('[name=selAddInpTimeList]').val('');
                $('[name=inpStartTime]').val('');
                $('[name=inpEndTime]').val('');
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                    });
                }

                $('.msg').removeClass('none').text(data.message);

            }

        }
    });

});


// измен расп
$("document").ready(function () {
    $.ajax({
        url: '/logic/time_list.php',
        type: "GET",
        success: function (data) {
            data = jQuery.parseJSON(data);
            $.each(data, function (i, item) {
                $(".selEditInpTimeList").append("<option value="+item.id+">"+item.name+" нач. "+item.start+"</option>");
            });
        },

    });
});

$('.selEditInpTimeList').change(function(){
    $(`input`).removeClass('error');
    $.ajax({
        url: '/logic/time_list2.php',
        type: "GET",
        dataType: 'json',
        data:'type='+$('.selEditInpTimeList').val(),
        success (data) {
            // data = jQuery.parseJSON(data);
            $.each(data, function (i, item) {
                $('.selEditInpTime').val(item.day);
                $('.inpNameTimeEdit').val(item.name);
                $('.inpStarTimeEdit').val(item.start);
                $('.inpEndTimeEdit').val(item.end);
            });

        }
    });

});


$('.edit_time_btn').click(function (e) {
    e.preventDefault();
    let formData = new FormData(document.edit_time);
    $.ajax({
        url: '/logic/edit_time.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {

            if (data.status) {
                document.location.href = '/admin.php';
                $('.msg').removeClass('none').text(data.message);

            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                    });
                }

                $('.msg').removeClass('none').text(data.message);

            }

        }
    });

});





// удаление расписания

$("document").ready(function () {
    $.ajax({
        url: '/logic/time_list.php',
        type: "POST",
        success: function (data) {
            data = jQuery.parseJSON(data);
            $.each(data, function (i, item) {
                $(".selDelInpTime").append("<option value="+item.id+">"+item.name+" нач. "+item.start+"</option>");
            });
        },

    });
});


$('.del_time_btn').click(function (e) {
    $(`input`).removeClass('error');
    $.ajax({
        url: '/logic/del_time.php',
        type: "get",
        dataType: 'json',
        data:'type='+$('.selDelInpTime').val(),
        success (data) {
            if (data.status) {
                document.location.href = '/admin.php';
                $('.msg').removeClass('none').text(data.message);
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