$(document).ready(function() {

    // куки
    $.cookieBar({
        fixed: true,
        acceptOnScroll: 50,
        message: 'Наш Сайт использует cookie-файлы для того, чтобы отличить Вас от других пользователей нашего ресурса. Это позволяет обеспечивать удобный просмотр нашего Сайта, а также даёт возможность улучшать его.',
        acceptText: 'Принимаю',
        zindex: '9999',
    });

    $('input[name="phone"]').mask('+7 (999) 999-99-99');
    $('#learn-slider').bxSlider({
        infiniteLoop: true,
        hideControlOnEnd: false,

    });

    $('#robofest-slider').bxSlider({
        infiniteLoop: true,
        hideControlOnEnd: false,

    });

    $('#sert-slider').bxSlider({
        infiniteLoop: false,
        hideControlOnEnd: false
    });

    /*
    $('.button').click(function() {
        $('#exampleModal').arcticmodal({
            afterOpen: function(data, el) {
                $('.toggle-form').toggle();
            },
            afterClose: function(data, el) {
                $('.toggle-form').toggle();
            }
        });

    });
    */

    $(document).ready(function() {
        $('a[href^="#"], *[data-href^="#"]').on('click', function(e) {
            e.preventDefault();
            var t = 1000;
            var d = $(this).attr('data-href') ? $(this).attr('data-href') : $(this).attr('href');
            $('html,body').stop().animate({ scrollTop: $(d).offset().top }, t);
        });
    });



    $('#orderMain').click(function() {
        $('#orderForm').arcticmodal();

    });

    $('#articul').click(function() {
        $('#articulForm').arcticmodal();

    });

    $('.buy-btn').click(function() {
        $('#buyForm').arcticmodal();
        $('#buyForm input[name="order_type"]').val($(this).attr('data-order-type'));
        $('#buyForm input[name="forma"]').val($(this).parent().parent().find('h3').text());

    });

    $('.showme').click(function() {
        $('#showmeForm').arcticmodal();
        $('#showmeForm input[name="order_type"]').val($(this).attr('data-order-type'));
        $('#showmeForm input[name="forma"]').val($(this).attr('data-order-name'));

    });

    $('.bxslider').bxSlider({
        pager: false
    });

    add_antispamcheck();
    check_mobile();
    timer_antispamcheck();
    $('form').submit(function(event) {
        var required = $(this).find('input[required]'); // change to [required] if not using true option as part of the attribute as it is not really needed.
        var error = false;

        for (var i = 0; i <= (required.length - 1); i++) {
            if (required[i].value == '') // tests that each required value does not equal blank, you could put in more stringent checks here if you wish.
            {
                required[i].style.borderColor = 'red';
                error = true; // if any inputs fail validation then the error variable will be set to true;     
            } else
                required[i].style.borderColor = '#fff';
        }

        if (error) event.preventDefault();
        else {
            var name = $(this).find('input[name="name"]').val();
            if (name != '') {
                $('#change_name').text(", " + name);
            } else $('#change_name').text("");
            dataLayer.push({
                'event': 'sendform'
            });
            $.ajax({
                type: "POST",
                url: './mail.php',
                data: $(this).serialize(),
                success: function(response) {
                    console.log(response);
                }
            });
            $.arcticmodal('close');
            $('#exampleModal').arcticmodal();
            event.preventDefault();
        }
    });


});

function add_antispamcheck() {
    $("form").each(function() {
        $(this).append("<input type='hidden' value='0' name='time_spend'>");
    });
}

function check_mobile() {

    var isMobile = {
        Android: function() { return navigator.userAgent.match(/Android/i) ? true : false; },
        BlackBerry: function() { return navigator.userAgent.match(/BlackBerry/i) ? true : false; },
        iOS: function() { return navigator.userAgent.match(/iPhone|iPad|iPod/i) ? true : false; },
        Windows: function() { return navigator.userAgent.match(/IEMobile/i) ? true : false; },
        any: function() { return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Windows()); }
    };

    $("form").each(function() {
        $(this).append("<input type='hidden' value='" + isMobile.any() + "' name='mobile'>");
    });
}

function timer_antispamcheck() {
    $('form input[name="time_spend"]').each(function() {
        var value = $(this).val();
        value++;
        $(this).val(value);
    });
    setTimeout(timer_antispamcheck, 1000);
}