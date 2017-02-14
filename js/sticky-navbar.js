$(window).scroll(function () {

    if ($(window).scrollTop() > $('header').outerHeight(true)) {
      $('.navigation').addClass('navbar-fixed');
    }
    if ($(window).scrollTop() < $('header').outerHeight(true)) {
      $('.navigation').removeClass('navbar-fixed');
    }
  });