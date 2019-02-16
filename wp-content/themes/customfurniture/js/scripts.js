jQuery(document).ready(function ($) {

    var header = $('.header')
    var main = $('.main');

    setTop(header, main);

    $(window).resize(function () {
        setTop(header, main);
    });

    function setTop(header, main) {
        var h = parseFloat(header.css('height'));
        main.css('margin-top', h + 'px');
    }

    var $works = $('.works');
    var $footer = $('.footer__fixed');
    if($works.length && $footer.length) {
        $works.mCustomScrollbar({
            scrollInertia: 600,
            callbacks:{
                onTotalScroll:function(){
                    $footer.css('z-index', '1000');
                },
                onScrollStart:function(){
                    $footer.css('z-index', '1');
                }
            }
        });
    }
    var $work = $('.work__wrapper');
    if($work.length) {
        $work.mCustomScrollbar();
    }


    var btn = $('.arrowDown');

    btn.click(function () {
        var headerH = parseFloat(header.css("height"));
        $("html, body").animate({
            scrollTop: headerH + "px"
        },500);
    });

    var headerH = parseFloat(header.css("height"));
    var btn = $('.scrollUp');

    var win = $(window);

    var duration = 300;

    if(win.screenY >= headerH){
        btn.show(duration);
    }

    btn.click(function () {
        $("html, body").animate({
            scrollTop: "0"
        }, 500);
    });


   var isMainMenuActive = false;
    $('.menuButton, .lightBack').on('click', function () {
        if(!isMainMenuActive){
            $('.menuButton__span').eq(0).addClass('menuButton__span__first');
            $('.menuButton__span').eq(2).addClass('menuButton__span__last');
            $('.mainMenu').css('transform', 'translateX(250px)');
            $('.portfolio').css('transform', 'translateX(calc(250px + 300px))');
            $('.searchpanel').css('transform', 'translateX(462px)');
            $('.lightBack').show();
            isMainMenuActive = true;
            checkScroll();
        }
        else {
            $('.menuButton__span').eq(0).removeClass('menuButton__span__first');
            $('.menuButton__span').eq(2).removeClass('menuButton__span__last');
            $('.mainMenu').css('transform', 'translateX(-250px)');
            $('.portfolio').css('transform', 'translateX(calc(-250px - 300px))');
            $('.searchpanel').css('transform', 'translateX(0)');
            $('.lightBack').hide();
            isMainMenuActive = false;
            checkScroll();
        }
    });

    var menuBtn = $('.menuButton');

    win.scroll(function () {
        checkScroll()
    });

    function checkScroll() {
        if(window.scrollY >= headerH){
            btn.css('bottom', '30px');
            menuBtn.removeClass('menuButton_light');
        }
        else{
            btn.css('bottom', '-91px');
            if (!isMainMenuActive)
                menuBtn.addClass('menuButton_light');
            else
                menuBtn.removeClass('menuButton_light');
        }
    }

    $('.portfolio__popup-link').magnificPopup({
        type:'image',
        gallery: {
            enabled: true
        }
    });

    var $clientsSlider = $('#clients');
    if($clientsSlider.length) {
        $('#sliderRule_clients__left').on('click', function () {
            $clientsSlider.find('.owl-prev').trigger('click');
        });
        $('#sliderRule_clients__right').on('click', function () {
            $clientsSlider.find('.owl-next').trigger('click');
        });
    }

    var $mainMenu = $('.mainMenu .mainMenu__wrapper');
    var $anchorLinks = $mainMenu.find('a').sweetLinks();
    if ($anchorLinks) {
        $anchorLinks.sweetLinks();
    }
    var $menuItem = $mainMenu.find('li');
    if ($menuItem) {
        $menuItem.on('click', function (event) {
            $('.current-menu-item').removeClass('current-menu-item');
            $(this).addClass('current-menu-item');
            if (isMainMenuActive) {
                menuBtn.trigger('click');
            }
        });
    }
    
    $('.wpcf7').on('wpcf7mailsent', function () {
        $.magnificPopup.open({
            items: {
                src: '<div class="contact-popup">' +
                '<p>Спасибо!<br> Мы свяжемся с вами в ближайшее время.</p>' +
                '<button type="button" class="btn btn-success">Ок</button>' +
                '</div>',
                type:'inline'
            },
            modal: true,
            fixedContentPos: false,
            closeOnBgClick: true,
            enableEscapeKey: true
        });
        $('.contact-popup button').on('click', function (event) {
            event.preventDefault();
            $.magnificPopup.instance.close();
        });
        $('form').trigger('reset');
    });

});
