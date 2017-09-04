$(document).ready(function () {
    $('.ancla').click(function () {
        $('.ancla').each(function( index ) {
            $( this ).removeClass("active");
        });
        $('#collapseOne').attr('class', 'collapse');
        var link = $(this);
        var anchor = link.attr('href');
        $('a[href="'+anchor+'"]').addClass("active");
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
});
