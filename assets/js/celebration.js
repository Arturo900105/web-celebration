var indice = 0;
var reverse = false;
var animaciones = [];
var intervalo;
animaciones[0] = [1, 1, 1, 1, 1, 1, 1, 1, 1, 1];
animaciones[1] = [1, 1, 1, 1, 1, 1, 1, 1, 1, .9];
animaciones[2] = [1, 1, 1, 1, 1, 1, 1, 1, .9, .8];
animaciones[3] = [1, 1, 1, 1, 1, 1, 1, .9, .8, .7];
animaciones[4] = [1, 1, 1, 1, 1, 1, .9, .8, .7, .6];
animaciones[5] = [1, 1, 1, 1, 1, .9, .8, .7, .6, .5];
animaciones[6] = [1, 1, 1, 1, .9, .8, .7, .6, .5, .4];
animaciones[7] = [1, 1, 1, .9, .8, .7, .6, .5, .4, .3];
animaciones[8] = [1, 1, .9, .8, .7, .6, .5, .4, .3, .2];
animaciones[9] = [1, .9, .8, .7, .6, .5, .4, .3, .2, .1];
animaciones[10] = [.9, .8, .7, .6, .5, .4, .3, .2, .1, 0];
animaciones[11] = [.8, .7, .6, .5, .4, .3, .2, .1, 0, 0];
animaciones[12] = [.7, .6, .5, .4, .3, .2, .1, 0, 0, 0];
animaciones[13] = [.6, .5, .4, .3, .2, .1, 0, 0, 0, 0];
animaciones[14] = [.5, .4, .3, .2, .1, 0, 0, 0, 0, 0];
animaciones[15] = [.4, .3, .2, .1, 0, 0, 0, 0, 0, 0];
animaciones[16] = [.3, .2, .1, 0, 0, 0, 0, 0, 0, 0];
animaciones[17] = [.2, .1, 0, 0, 0, 0, 0, 0, 0, 0];
animaciones[18] = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
var images = [];
var actualImage = 0;
var cambio = false;
if (title !== undefined) {
    if (title === 'empresariales') {
        images[0] = 'url("../assets/img/gal/empresarial.jpg")';
    }
    if (title === 'sociales') {
        images[0] = 'url("../assets/img/gal/social.jpg")';
        images[1] = 'url("../assets/img/gal/social_2.jpg")';
    }
    if (title === 'privados') {
        images[0] = 'url("../assets/img/gal/privado.jpg")';
        images[1] = 'url("../assets/img/gal/privado_2.jpg")';
    }
    if (title === 'cocina') {
        images[0] = 'url("../assets/img/gal/cocina.jpg")';
        images[1] = 'url("../assets/img/gal/cocina_2.jpg")';
    }
    if (title === 'profesionales') {
        images[0] = 'url("../assets/img/gal/profesional.jpg")';
        images[1] = 'url("../assets/img/gal/profesional_2.jpg")';
    }
    if (title === 'decoracion') {
        images[0] = 'url("../assets/img/gal/decoracion.jpg")';
        images[1] = 'url("../assets/img/gal/decoracion_2.jpg")';
    }
}

$(document).ready(function () {
    $('.ancla').click(function () {
        $('#collapseOne').attr('class', 'collapse');
        var link = $(this);
        var anchor = link.attr('href');
        $('html, body').stop().animate({
            scrollTop: jQuery(anchor).offset().top
        }, 1000);
        return false;
    });

    $(document).scroll(function () {
        if ($(this).scrollTop() > $('#original-nav').height()) {
            $(' #fixed-nav ').removeClass('nav-inactive').addClass('nav-active')
        } else {
            $(' #fixed-nav ').removeClass('nav-active').addClass('nav-inactive')
        }
    });
    initializeInterval();
    $('.carrusel').css('background-image', images[actualImage]);
});

function initializeInterval() {
    if (cambio) {
        actualImage++;
        console.log(actualImage);
        $('.carrusel').css('background-image', images[actualImage]);
        if (actualImage === images.length - 1) {
            actualImage = -1;
        }
        cambio = false;
    }
    intervalo = setInterval(carouselAnimation, 100);
}

function carouselAnimation() {
    $('.file_1 .col_1').css('opacity', animaciones[indice][0]);
    $('.file_2 .col_1').css('opacity', animaciones[indice][1]);
    $('.file_1 .col_2').css('opacity', animaciones[indice][2]);
    $('.file_2 .col_2').css('opacity', animaciones[indice][3]);
    $('.file_1 .col_3').css('opacity', animaciones[indice][4]);
    $('.file_2 .col_3').css('opacity', animaciones[indice][5]);
    $('.file_1 .col_4').css('opacity', animaciones[indice][6]);
    $('.file_2 .col_4').css('opacity', animaciones[indice][7]);
    $('.file_1 .col_5').css('opacity', animaciones[indice][8]);
    $('.file_2 .col_5').css('opacity', animaciones[indice][9]);
    if (reverse) {
        indice--;
        if (indice < 0) {
            reverse = false;
            indice = 0;
            clearInterval(intervalo);
            cambio = true;
            setTimeout(initializeInterval, 1000);
        }
    } else {
        indice++;
        if (indice > 18) {
            reverse = true;
            indice = 18;
            clearInterval(intervalo);
            setTimeout(initializeInterval, 5000);
        }
    }
}