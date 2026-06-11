$(document).ready(function () {

    $('aside.sidebar > ul > li').mouseenter(function () {

        let alturaTotal = 0;

        $(this).find('ul.sbConteudo > li').each(function () {
            alturaTotal += $(this).outerHeight();
        });

        $(this).addClass('opened');

        $(this).find('ul.sbConteudo').css({
            height: alturaTotal + 6,
            paddingTop: 10
        });
    });

    $('aside.sidebar > ul > li').mouseleave(function () {

        $(this).removeClass('opened');

        $(this).find('ul.sbConteudo').css({
            height: '',
            paddingTop: ''
        });
    });

});