$(document).ready(function () {

    $('header').height(function (index, height) {
        return window.innerHeight ;
    });

    $(".show-left").addClass('active');

    $(".show-right").addClass('active');

    $('#customRangeInput').on('input', function() {
      
        $(this).css('background','linear-gradient(to right, #5999e5, 0%, #5999e5, '+this.value +'%, #fff ' + this.value + '%, white 100%)');
      
        $('.output__number-list').removeClass('active');

        switch(this.value) {

            case '0' : $('#output1').addClass('active');
            break;

            case '14.28' : $('#output2').addClass('active');;
            break;

            case '28.56' : $('#output3').addClass('active');;
            break;

            case '42.84' : $('#output4').addClass('active');;
            break;

            case '57.12' : $('#output5').addClass('active');;
            break;

            case '71.4' : $('#output6').addClass('active');;
            break;

            case '85.68' : $('#output7').addClass('active');;
            break;

            case '99.96' : $('#output8').addClass('active');;
            break;

        }

    });

    $('.menu__link').click(function(){
        var $href = $(this).attr('href');
        var $anchor = $($href).offset();

        if ($href !== '#contacts') {
            $('body').animate({ scrollTop: $anchor.top });
            $('#menu-desktop').removeClass('open');
        } else {
            $('.modal').fadeIn();
        }
        
        return false;
    });

    $('.modal__close').click(function() {
        $('.modal').fadeOut();
    });

    $('.form__input').on('focus', function() {
        $(this).siblings('.form__lbl').addClass('active');
    });

    $('.form__input').on('blur', function() {
        if (!$(this).val()) {
            $(this).siblings('.form__lbl').removeClass('active');
        }
    });

    //E-mail Ajax Send

    $("form").submit(function() {
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: th.serialize()
        }).done(function() {
            alert("Спасибо!");
            $('.modal').fadeOut();
            setTimeout(function() {
                // Done Functions
                th.trigger("reset");
            }, 1000);
        });
        return false;
    });

    $('.hamburger').click(function () {
        $('#menu-desktop').toggleClass('open');
    });

    // Setinerval change class 

    var i = 0;
    var $target = $('.begin__item');

    setInterval(function(){
        $target.removeClass('active');
        $target.eq(i).addClass('active');
        if( i == $target.length - 1 ) i = 0;
        else i++;
    }, 3000);

});

$(window).scroll(function() { 
   
    var scroll = $(window).scrollTop();
    var objectSelect = $(".begin");
    var objectPosition = objectSelect.offset().top;

    if (scroll > objectPosition - 500) {
        $(".begin__left").animate({
            left: '0'
        }, 1000);
        $(".begin__right").animate({
            left: '0'
        }, 1150);

         $(window).unbind('scroll');
    } 
});