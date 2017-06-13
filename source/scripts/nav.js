(function($){
    $('.nav__list').click(function (e) {
        e.preventDefault();
        $(this).next().toggleClass('open');
        $(this).toggleClass('unfolded');
    })

    $('.nav__button').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('menu-unfolded');
        $('body').toggleClass('with-menu');
    })
})(jQuery);
