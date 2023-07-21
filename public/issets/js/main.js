$(window).scrollTop(0)

let loaderPercent = 0

let preloaderStart = setInterval(() => {
    if(loaderPercent == 100) {
        clearInterval(preloaderStart)
        $('.preloader-bg').css('transition', '1s all')
        setTimeout(() => {
            $('.preloader-bg').css('width', '100%')
        }, 500)
        setTimeout(() => {
            $('.preloader').hide()
            $('.header').css('transform', 'none')
            $('.tel-popup').css('transform', 'none')
            $('.main__title').css('transform', 'none')
            
        }, 1500)
        setTimeout(() => {
            $('.main__title').css('transition', 'none')
            $('body').css('overflow', 'visible')
        }, 2300)
    } else {
        loaderPercent++
        $('.preloader-bg').css('height', `${loaderPercent}%`)
    }
}, 10)


$(window).on('load', () => {



    let windowHeight = $(window).height()
    let rootFont = parseInt($(':root').css('font-size'))

    let parallaxIndex, advantagesImgSize, animOffset

    if(!($(window).width() < 768 || ('ontouchstart' in window))) {
        parallaxIndex = 4
        advantagesImgSize = '55rem'
        animOffset = windowHeight / 4
    } else {
        parallaxIndex = 12
        advantagesImgSize = '80vw'
        animOffset = -100
    }



    
    
    let currentPos = 0
    let moveGallery 
    let galleryLength = Math.ceil($('.gallery-front img').length/3)

    $('.gallery-front').css('transform', `translateX(100vw)`)
    $('.gallery-back').css('transform', `translateX(75vw)`)

    if($(window).width() > 992) {
        moveGallery = () => {
            $('.gallery-front').css('width', `${galleryLength*100}vw`)
            $('.gallery-back').css('width', `${galleryLength*75}vw`)
            $('.gallery-front').css('transform', `translateX(-${currentPos*100}vw)`)
            $('.gallery-back').css('transform', `translateX(-${currentPos*75}vw)`)
        }
    } else {
        moveGallery = () => {
            $('.gallery-front').css('width', `${galleryLength*64}rem`)
            $('.gallery-back').css('width', `${galleryLength*48}rem`)
            $('.gallery-front').css('transform', `translateX(-${currentPos*64}rem)`)
            $('.gallery-back').css('transform', `translateX(-${currentPos*48}rem)`)
        }
    }

   

    let goBack = () => {
        if(currentPos < galleryLength) {
            currentPos++
            moveGallery()
        }

    }

    let goForward = () => {
        if(currentPos > 0) {
            currentPos--
            moveGallery()
        }
    }



   

    function is_touch_device() {
        return !!('ontouchstart' in window);
    }

    if (!is_touch_device()) {
        $('.gallery').touchInit();
        $('.gallery').swipe(
            function (direction) {
                if (direction == 'left') {
                    goBack();
                }

                if (direction == 'right') {
                    goForward();
                }
            }
        );
    } else {
        let gallery = document.querySelector('.gallery')
        gallery.addEventListener('touchstart', handleTouchStart, false);
        gallery.addEventListener('touchmove', handleTouchMove, false);

        var xDown = null;
        var yDown = null;

        function getTouches(evt) {
            return evt.touches ||             // browser API
                evt.originalEvent.touches; // jQuery
        }

        function handleTouchStart(evt) {
            const firstTouch = getTouches(evt)[0];
            xDown = firstTouch.clientX;
            yDown = firstTouch.clientY;
        };

        function handleTouchMove(evt) {
            if (!xDown || !yDown) {
                return;
            }

            var xUp = evt.touches[0].clientX;
            var yUp = evt.touches[0].clientY;

            var xDiff = xDown - xUp;
            var yDiff = yDown - yUp;

            if (Math.abs(xDiff) > Math.abs(yDiff)) {/*most significant*/
                if (xDiff > 0) {
                    goBack();
                } else {
                    goForward();
                }
            } else {
                if (yDiff > 0) {
                    goBack();
                } else {
                    goForward();
                }
            }
            xDown = null;
            yDown = null;
        };
    }

    
    //_________ANIMATION_________

    $(window).scroll(() => {
        scrollTop = $(window).scrollTop()

        if(scrollTop < windowHeight*2) {
            $('.main__title img').css('transform', `translateX(-${scrollTop/50}rem)`)
        }

        $('.advantages-main').each(function(index, item) {
            let startAnim = $(item).offset().top
            if(scrollTop > startAnim - windowHeight/3) {
                $(item).find('.advantages-main__img').css('width', advantagesImgSize)
                $(item).find('.advantages-main__img').css('transform', 'none')
                $(item).find('.advantages-main__title').css('transform', 'none')
            }
            if(scrollTop > startAnim + animOffset) {
                $(item).find('.advantages-main__img').css('width', '100vw')
                $(item).find('.advantages-main__title').css('transform', 'translateX(120%)')
            }
        })

        //_______PARALLAX_______

        $('.parallax').each(function() {
            let cardOffset = $(this).offset().top
            
            if (scrollTop + windowHeight > cardOffset) {
                let parallaxValue = (scrollTop + windowHeight - cardOffset) / parallaxIndex
                $(this).find('img').css('transform', 'translateY(' + parallaxValue + 'px)')
            }
        })

        let residenceAngle = 12
        if(residenceAngle - scrollTop/300 > 0) {
            residenceAngle = residenceAngle - scrollTop/300
        } else {
            residenceAngle = 0
        }

        $('.residence__img img').css('transform', `rotate(${residenceAngle}deg)`)

        //_______GALLERY______

        let galleryOffset = $('.gallery').offset().top
        if (scrollTop  > galleryOffset - windowHeight/2) {
            $('.gallery-front').css('transform', `translateX(0)`)
            $('.gallery-back').css('transform', `translateX(0)`)
        }

        //_______INFO__________

        let infoOffset = $('.info').offset().top
        if (scrollTop  > infoOffset - windowHeight/2 && $(window).width() > 992) {
            let lineSize = (scrollTop/(rootFont*6.3) - 80) * 5
            console.log(lineSize)
            $('.info-pattern').css('height', `${lineSize}%`)
        }
        
        $('.info-item').each(function() {
            let infoItemOffset = $(this).offset().top
            
            if (scrollTop > infoItemOffset - windowHeight/1.2) {
                $(this).addClass('black')
            } else {
                $(this).removeClass('black')
            }
        })

    })



    //_________PLANS_________



    $('.plans-carousel').owlCarousel({
        dots: false,
        nav: false,
        smartSpeed: 700,
        autoplay: true,
        autoplayTimeout: 5000,
        loop: true,
        margin: rootFont,
        responsive: {
            0: {
                items: 1,
                stagePadding: rootFont*2.5,
            },

            500: {
                items: 2,
            },
    
            992: {
                items: 3,
            },
        }

    })

    $('.plans-arrows .arrow-left').click(() => {
        $('.plans-carousel').trigger('prev.owl.carousel', [700]);
    })
    
    $('.plans-arrows .arrow-right').click(() => {
        $('.plans-carousel').trigger('next.owl.carousel', [700]);  
    })

    $('.plans-head li').click(function() {
        let index = $(this).index()
        $('.plans-head li').removeClass('current')
        $(this).addClass('current')
        $('.plans-tab').hide()
        $('.plans-tab').eq(index).fadeIn(500)


        $('.plans-carousel').trigger('to.owl.carousel', [0,0,true])
    })



    //_____________FEEDBACK_________________


    $('.feedback-open').click(e => {
        e.preventDefault()
        $('.feedback').fadeIn(600)
    })



    $('.feedback__close').click(() => {
        $('.feedback').fadeOut(600)
    })


    $('.feedback').click(e => {
        let div = $(".feedback-content")
        if (!div.is(e.target) 
            && div.has(e.target).length === 0) { 
            $('.feedback').fadeOut(600)
        }
    })


    //_____________INPUTMASK__________


    $('.form_tel').inputmask("+\\9\\98 99 999 99 99")


    //_______WOW________

    new WOW({
        offset: 50,
        mobile:  true,
    }).init();
})