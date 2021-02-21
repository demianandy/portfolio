$(function(){
    // ================== ПЛАВНОЕ ПЕРЕМЕЩЕНИЕ =====================

    var link = $('.link, .flop');

    link.on('click', function(e){
        e.preventDefault();

        var selector = $($(this).attr('href'));

        $('html, body').animate({
            scrollTop: selector.offset().top - 0
        }, 600);
    })
    // =========== УСЛОВИЕ ДЛЯ КНОПКИ ОТПРАВЛЕНИЯ ОТЗЫВА ==+=======
    
    $('#okay').click(function (e) {
        e.preventDefault();
        let reg = /[0-9]/;
        let name = $('#nom').val();
        let message = $('#message').val();
        if (message.length < 50) {
            $(".error2").addClass('invalid');
            $(".error2").html("Слишком короткий текст!");
            $(".error2").css({'color': 'red'});
        } else if (name.length < 4) {
            $(".error2").addClass('invalid');
            $(".error2").html("Имя должно быть длиннее");
            $(".error2").css({'color': 'red'});
        } else if (reg.test(name)){
            $(".error2").addClass('invalid');
            $(".error2").html("Цифры в имени недопустимы");
            $(".error2").css({'color': 'red'});
        } else {
                    $('#form').submit();
                    // ======= ОТПРАВЛЯЕТ ЗАПРОС НА ОБНОВЛЕНИЕ КОЛИЧЕСТВА КОММЕНАРИЕВ======
                    $.get(
                        'php/base.php',
                        function (data){$('#col').text(data)}
                    );
                    $.get(
                        'php/base.php',
                        function (data){$('#col').text(data)}
                    );                    
                    $.get(
                        'php/base.php',
                        function (data){$('#col').text(data)}
                    );
                    $.get(
                        'php/base.php',
                        function (data){$('#col').text(data)}
                    );
                    $(".error2").addClass('invalid');
                    $(".error2").html("Отзыв успешно отправлен");
                    $(".error2").css({'color': 'green'});
                    $('#message').val("");
                    $('#nom').val("");
            } 
    })
    // ================ ФОРМА ОБРАТНОЙ СВЯЗИ ================
    
    $('#go').click(function(e) {
        e.preventDefault();
        let er = /[0-9]/;
        let dog = "@";
        let avtor = $('#avtor').val();
        let call = $('#call').val();
        let email = $('#email').val();
        if (avtor.length < 1 || email.length < 1 || call.length < 1 ){
        $(".error3").addClass('invalid');
        $(".error3").html("Заполните все поля");
        $(".error3").css({'color': 'red'});
        } else if (call.length < 10) {
            $(".error3").addClass('invalid');
            $(".error3").html("Слишком короткий текст сообщения");
            $(".error3").css({'color': 'red'});
        } else if (avtor.length < 4) {
            $(".error3").addClass('invalid');
            $(".error3").html("Имя должно быть длиннее");
            $(".error3").css({'color': 'red'});
        } else if (er.test(avtor)){
            $(".error3").addClass('invalid');
            $(".error3").html("Цифры в имени недопустимы");
            $(".error3").css({'color': 'red'});
        } else if (!email.includes("@")) {
            $(".error3").addClass('invalid');
            $(".error3").html("Имя почты некорректно");
            $(".error3").css({'color': 'red'});
        } else {
            $(".error3").addClass('invalid');
            $(".error3").html("Письмо отправлено успешно");
            $(".error3").css({'color': 'green'});
            $('#callback').submit();
                    $('#avtor').val("");
                    $('#email').val("");
                    $('#call').val("");
            } 
    })
    // ==================== ВХОД ДЛЯ АДМИНА =======================
    // $('#enter').click(function(e) {
    //     e.preventDefault();
    //     let name = $('#name').val();
    //     let password = $('#password').val();
    //     if (name.value < 1 || password <  ){
    //         $(".error3").addClass('invalid');
    //         $(".error3").html("Заполните все поля");
    //         $(".error3").css({'color': 'red'});
    //         } else if (call.length < 10) {
    //         $(".error3").addClass('invalid');
    //         $(".error3").html("Слишком короткий текст сообщения");
    //         $(".error3").css({'color': 'red'});
    //     } else if (avtor.length < 4) {
    //         $(".error3").addClass('invalid');
    //         $(".error3").html("Имя должно быть длиннее");
    //         $(".error3").css({'color': 'red'});
    //     } else if (er.test(avtor)){
    //         $(".error3").addClass('invalid');
    //         $(".error3").html("Цифры в имени недопустимы");
    //         $(".error3").css({'color': 'red'});
    //     } else if (!email.includes("@")) {
    //         $(".error3").addClass('invalid');
    //         $(".error3").html("Имя почты некорректно");
    //         $(".error3").css({'color': 'red'});
    //     } else {
    //         $(".error3").addClass('invalid');
    //         $(".error3").html("Письмо отправлено успешно");
    //         $(".error3").css({'color': 'green'});
    //         $('#callback').submit();
    //                 $('#avtor').val("");
    //                 $('#email').val("");
    //                 $('#call').val("");
    //         } 
    // })
    // ================= ПЕРЕМЕШИВАНИЕ ОТЗЫВОВ ====================
    $('#zapros').click (function(){
        $.get(
            'php/options.php',
               function(data){
                $('#fortext1').text(data[0].rewiev);
                $('#forname1').text(data[0].name);
                $('#fortext2').text(data[1].rewiev);
                $('#forname2').text(data[1].name);
                $('#fortext3').text(data[2].rewiev);
                $('#forname3').text(data[2].name);
                $('#fortext4').text(data[3].rewiev);
                $('#forname4').text(data[3].name);
                $('#fortext5').text(data[4].rewiev);
                $('#forname5').text(data[4].name);
                $('#fortext6').text(data[5].rewiev);
                $('#forname6').text(data[5].name);
                $('#fortext7').text(data[6].rewiev);
                $('#forname7').text(data[6].name);
                },
        "json");
    });
    
})