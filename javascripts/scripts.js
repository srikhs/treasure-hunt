$(window).ready(function() {

	"use strict";

	$('.slider').removeClass('hide');


});

$(document).ready(function () {

    "use strict";

    // Initialize Sliders

    $(".slider").slidesjs({
        height: 300,
        pagination: {
            active: false
        },
        navigation: {
            active: false
        },
        play: {
            auto: true,
            interval: 5000,
            effect: "fade"
        }
    });



    // Resize Home Screen

    var height = $(window).height();

    $('#home').css('height', height);

    // Adjust Home Content Padding

    var homePadding = (height / 2) - (($('#home-content').height()) / 2 + 100);

    $('#home-content').css('padding-top', homePadding);

    // Adjust menu padding

    var menuHeight = $('#nav-holder ul').height();
    var menuHeight2 = $('#social-holder ul').height();
    var logoHeight = $('#logo-holder').innerHeight();

    $('#nav-holder ul').css('padding-top', ((height / 2) - (menuHeight / 2) - (logoHeight)) + 'px');

    $('#social-holder ul').css('padding-top', ((height / 2) - (menuHeight2 / 2)) + 'px');

    // Adjust Paddings on Window Resize

    $(window).resize(function () {

        var height2 = $(window).height();


        $('#home').css('height', height2);

        $('#nav-holder ul').css('padding-top', ((height2 / 2) - (menuHeight / 2) - logoHeight) + 'px');
        $('#social-holder ul').css('padding-top', ((height2 / 2) - (menuHeight2 / 2)) + 'px');

    });


    // Handle Menu Hovers

    $('#nav-holder ul li').mouseenter(function () {

        $(this).children('.menu-title').addClass('show animated fadeInRight');

    });

    $('#nav-holder ul li').mouseleave(function () {

        if ($(this).children('.menu-title').hasClass('show animated fadeInRight')) {

            $(this).children('.menu-title').removeClass('show animated fadeInRight');

        }



    });

    // Mobile Menu Toggle

    $('.mobile-toggle').click(function () {

        if ($(this).hasClass('menu-show')) {

            $('.mobile-toggle').css('left', '0px');
            $('.mobile-toggle').css('top', '10px');
            $('#nav-holder').css('left', '-60px');
            $(this).removeClass('menu-show');

        } else {

            $('.mobile-toggle').css('left', '10px');
            $('.mobile-toggle').css('top', '70px');
            $('#nav-holder').css('left', '0px');
            $(this).addClass('menu-show');

        }

    });

    // Menu Clicks


    function fadeHomeUp() {
        $('#home-content').css('padding-top', '44px');
        $('.hero-p').removeClass('fadeInUp');
        $('.hero-p').addClass('fadeOutUp');
        $('#home-work').removeClass('fadeInUp');
        $('#home-work').addClass('fadeOutUp');
    }

    function fadeHomeDown() {
        $('#home-content').css('padding-top', homePadding);
        $('.hero-p').addClass('fadeInUp');
        $('.hero-p').removeClass('fadeOutUp');
        $('#home-work').addClass('fadeInUp');
        $('#home-work').removeClass('fadeOutUp');
    }



    $('.menu-item').click(function () {

        var pageID = '#' + $(this).attr('data-menu-id');

        if ($(pageID).hasClass('active')) {
            return null;
        }


        fadeHomeUp();


        $('.page').removeClass('fadeOutDownBig');

        $('.active .exit').trigger('click');




        $(pageID).addClass('show');
        $(pageID).addClass('fadeInUpBig');
        $(pageID).addClass('active');




    });

    $('.exit').click(function () {



        if ($(this).parent().hasClass('active')) {

            $(this).parent().removeClass('fadeInUpBig');
            $(this).parent().addClass('fadeOutDownBig');
            $(this).parent().removeClass('active');

            var that = this;

            setTimeout(function () {

                $(that).parent().addClass('hide');
                $(that).parent().removeClass('show');


            }, 500);

            setTimeout(function () {

                if (!$('.page').hasClass('active')) {

                    fadeHomeDown(homePadding);

                }


            }, 100);

        }




    });

    $('.contact-menu').click(function () {

        $('#contact').removeClass('fadeOutLeftBig');
        $('#contact').removeClass('hide');
        $('#contact').addClass('show');
        $('#contact').addClass('fadeInLeftBig');

    });

    $('.exit-contact').click(function () {



        $('#contact').removeClass('fadeInLeftBig');
        $('#contact').addClass('fadeOutLeftBig');
        setTimeout(function () {

            $('#contact').addClass('hide');


        }, 500);

    });

    // Front Work Click

    $('#home-work .btn').click(function () {

        $('.work-trigger').trigger('click');

    });

    // Project Clicks

    $('.project-back .btn').click(function () {

        var projectID = '#' + $(this).attr('data-project-id');
        $(projectID).removeClass('fadeOutRightBig');
        $(projectID).removeClass('hide');
        $(projectID).addClass('show');
        $(projectID).addClass('fadeInRightBig');

        if (!$(projectID + '-slideshow').hasClass('sliderSet')) {

            setTimeout(function () {

                $(projectID + '-slideshow').liquidSlider();
                $(projectID + '-slideshow').addClass('sliderSet');


            }, 500);

        }

    });

    $('.exit-project').click(function () {

        $(this).parent().removeClass('fadeInRightBig');
        $(this).parent().addClass('fadeOutRightBig');

        var thatOne = this;

        setTimeout(function () {

            $(thatOne).parent().addClass('hide');
            $(thatOne).parent().removeClass('show');


        }, 500);

    });

    // Project Item Hovers

    $(".project-image-wrap").mouseenter(function () {
        $(this).children('.project-overlay').fadeIn(500);

    }).mouseleave(function () {
        $(this).children('.project-overlay').fadeOut(500);
    });

    //Contact Form Code:

    $(function () {
        $(".form-button").click(function (e) {
            var $error = 0;
            var name = $("#form-name").val();
            var email = $("#form-email").val();
            var text = $("#form-msg").val();
            var security = $("#form-security").val();


            if (name === "" || email === "" || text === "") {
                $('#details-error-wrap').fadeIn(1000);
                $error = 1;

            } else {
                $('#details-error-wrap').fadeOut(1000);
            }

            if (security !== '8') {
                $('#security-error-wrap').fadeIn(1000);
                $error = 1;

            } else {
                $('#security-error-wrap').fadeOut(1000);
            }

            if (!(/(.+)@(.+){2,}\.(.+){2,}/.test(email))) {
                $('#details-error-wrap').fadeIn(1000);
                $error = 1;
            }



            var dataString = 'name=' + name + '&email=' + email + '&text=' + text;

            if ($error === 0) {
                $.ajax({
                    type: "POST",
                    url: "mail.php",
                    data: dataString,
                    success: function () {
                        $('#details-error-wrap').fadeOut(300);
                        $('#security-error-wrap').fadeOut(300);
                        $('#form-sent').fadeIn(1000);




                    }
                });
                return false;
            }

            e.preventDefault();
        });
    });




});