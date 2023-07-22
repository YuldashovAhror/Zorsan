<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="issets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="issets/css/normalize.css">
    <link rel="stylesheet" href="issets/css/owl.carousel.css">
    <link rel="stylesheet" href="issets/css/animate.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,400;0,700;1,400&family=Inter:wght@400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="issets/css/main.css">
    <title>Zo’rsan</title>

    <meta name="description" content="{!!$metateg->discription!!}">

    <!-- Facebook -->
    <meta property="og:title" content="">
    <meta property="og:site_name" content="{{$metateg->name}}">
    <meta property="og:description" content="{!!$metateg->discription!!}">
    <meta property="og:url" content="">
    <meta property="og:image" content="{{$metateg->photo}}">
    <meta property="og:type" content="website">

    <!-- Google Plus -->
    <meta itemprop="name" content="{{$metateg->name}}">
    <meta itemprop="description" content="{!!$metateg->discription!!}">
    <meta itemprop="image" content="issets/{{$metateg->photo}}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{$metateg->name}}">
    <meta name="twitter:description" content="{!!$metateg->discription!!}">
    <meta name="twitter:image" content="issets/{{$metateg->photo}}">
</head>

<body>

    <!-- PRELOADER -->

    <div class="preloader">
        <div class="preloader__logo">
            <img src="issets/img/logo.svg" alt="logo">
        </div>
        <div class="preloader-bg">
            <img src="issets/img/main.jpg" alt="Zo’rsan">
        </div>
    </div>


    <!-- FEEDBACK 	-->

    <div class="feedback">
        <div class="feedback-content">
            <div class="feedback__close">
                <img src="issets/img/icons/close.svg" alt="ico">
            </div>
            <div class="feedback__title">
                {{__('asd.Заявка')}}
            </div>

            <!-- feedback-wrap убрать feedback-done показать при отправке-->

            <div class="feedback-wrap">
                <div class="feedback__text">
                    {{__('asd.Оставьте свои контактные данные, и наш менеджер расскажет больше интересных деталей')}}
                </div>
                <div class="feedback-form">
                    <input type="text" id="first_name" placeholder="Ваше имя">
                    <input type="tel" id="phone" placeholder="Номер телефона" class="form_tel">
                    <input id="token" value="{{ csrf_token() }}" type="hidden" required>
                    <button class="btn" id="button" onclick="send1()" type="button">
                        {{__('asd.Отправить')}}
                    </button>
                </div>
                <div class="feedback__agree">
                    {{__('asd.Даю согласие на обработку моих персональных данных')}}
                </div>
            </div>
            <div class="feedback-done">
                <div class="feedback__img">
                    <img src="issets/img/icons/done.svg" alt="ico">
                </div>
                <div class="feedback__text">
                    {{__('asd.Ваш запрос получен. мы свяжемся с вами в ближайшее время')}}
                </div>
            </div>
        </div>
    </div>

    <!--TEL POPUP-->

    <a href="#" class="tel-popup feedback-open">
        <img src="issets/img/icons/tel.svg" alt="ico">
    </a>

    <!-- HEADER -->

    <header class="header">
        <div class="header__logo">
            <img src="issets/img/logo.svg" alt="Zo’rsan">
        </div>
        <div class="header-wrap">
            <!--<a href="#" class="header__tour btn" target="_blank" rel="nofollow">-->
            <!--    <img src="issets/img/icons/360.svg" alt="ico">-->
            <!--    <span>3D Тур</span>-->
            <!--</a>-->
            <div class="header-lang">
                <a class="header-lang__item btn">@if($lang == 'uz') O’z @elseif($lang == 'ru') РУ @elseif($lang == 'en') EN @endif</a>
                @if($lang != 'ru')<a href="/languages/ru" class="header-lang__item btn">
                    РУ
                </a>@endif
                @if($lang != 'uz')<a href="/languages/uz" class="header-lang__item btn">
                    O’z
                </a>@endif
                @if($lang != 'en')<a href="/languages/en" class="header-lang__item btn">
                    EN
                </a>@endif
            </div>
            <a href="tel:{{__('asd.71 200 74 00')}}" class="header__tel btn">
                <img src="issets/img/icons/tel-dark.svg" alt="ico">
                <span>{{__('asd.71 200 74 00')}}</span>
            </a>
        </div>
    </header>

    <!-- MAIN -->

    <main class="main">
        <div class="main__title">
            <img src="issets/img/main-title.svg" alt="Zo’rsan">
        </div>
    </main>

    <!-- HAPPY -->

    <section class="happy" id="about">
        <div class="section-content">
            <h2 class="section-title wow fadeInUp" data-wow-delay=".4s">
                {!!__('asd.Zo’rsan - Все для <span>жизни</span> все для <span>счастья</span>')!!}
            </h2>
            <div class="happy__text wow fadeInUp" data-wow-delay=".6s">
                {{__('asd.Обеспечьте себе благополучную жизнь вместе с нами!')}}
            </div>
        </div>
        <div class="happy-wrap">
            <div class="happy-item">
                <div class="happy-item__img wow fadeInLeft parallax" data-wow-delay=".4s">
                    <img src="{{$block->photo}}" alt="happy">
                </div>
                <div class="happy-item__text wow fadeInLeft" data-wow-delay=".4s">
                    {!!__('asd.<span>14</span> Блоков')!!}
                </div>
            </div>
            <div class="happy-item">
                <div class="happy-item__text wow fadeInRight" data-wow-delay=".4s">
                    {!!__('asd.<span>16</span> Этажные здания')!!}
                </div>
                <div class="happy-item__img wow fadeInRight parallax" data-wow-delay=".4s">
                    <img src="{{$block->photo2}}" alt="happy">
                </div>
            </div>
        </div>
    </section>

    <!-- RESIDENCE -->

    <section class="residence">
        <div class="section-content">
            <h2 class="section-title wow fadeInUp" data-wow-delay=".4s">
                {!!__('asd.Жилой комплекс <span>для</span> комфортной <span>жизни</span>')!!}
            </h2>
            <a href="{{$p->photo}}" download="" class="residence__btn btn wow fadeInUp" data-wow-delay=".6s">
                {{__('asd.Скачать презентацию')}}
            </a>
        </div>
        <div class="residence__img">
            <img src="{{$secondslider->photo}}" alt="Residence">
        </div>
    </section>

    <!-- ADVANTAGES -->

    <section class="advantages">
        <div class="advantages-main" id="advantages">
            <div class="advantages-main__img">
                <img src="{{$secondslider->photo2}}" alt="Advantages">
            </div>
            <div class="advantages-main__title">
                {{__('asd.Преимущества')}}
            </div>
        </div>
        <div class="advantages-list">
            @foreach ($productshows as $productshow)
            <div class="advantages-item">
                <div class="advantages-item__img wow fadeInUp" data-wow-delay=".4s">
                    <img src="{{$productshow->photo}}" alt="Advantages">
                </div>
                <div class="advantages-item__name">
                    {{$productshow['name_'.$lang]}}
                </div>
            </div>
                
            @endforeach
        </div>
    </section>

    <!-- LOCATION -->

    <section class="location">
        <div class="section-content" id="location">
            <h2 class="section-title">
                {{__('asd.расположение')}}
            </h2>
            <div class="location__text">
                {{__('asd.Yunsobod tumani Yuqori Qoraqamish 9 uy')}}
            </div>
        </div>
        <div class="location__map">
            <img src="issets/img/location.jpg" alt="Location">
        </div>
        <div class="advantages-main" id="arc">
            <div class="advantages-main__img">
                <img src="{{$arxitektura->photo}}" alt="Advantages">
            </div>
            <div class="advantages-main__title">
                {{__('asd.Архитектура')}}
            </div>
        </div>
    </section>

    <!-- INFO -->

    <section class="info">
        <div class="info-pattern">
            <img src="issets/img/info/pattern.svg" alt="pattern">
        </div>
        <div class="info-list">
            <div class="info-item wow fadeInUp" data-wow-delay=".4s">
                <div class="info-item__ico">
                    <img src="issets/img/info/1.svg" alt="info">
                </div>
                <div class="info-item__text">
                    {{__('asd.Xonadonlar orasidagi devorlari avtoklavlangan gazobeton bilan bolinadi, qalinligi - 200 mm')}}
                </div>
            </div>
            <div class="info-item wow fadeInUp" data-wow-delay=".4s">
                <div class="info-item__ico">
                    <img src="issets/img/info/2.svg" alt="info">
                </div>
                <div class="info-item__text">
                    {{__('asd.Oynalari 2 qavat steklopaket, tashqi oynalar yodiviy Akfa trio')}}
                </div>
            </div>
            <div class="info-item wow fadeInUp" data-wow-delay=".4s">
                <div class="info-item__ico">
                    <img src="issets/img/info/3.svg" alt="info">
                </div>
                <div class="info-item__text">
                    {{__('asd.ARD funksiyasiga ega va 900 kg og\'irlik ko\'tara oladigan liftlari go\'viladi')}}
                </div>
            </div>
        </div>

    </section>

    <!-- CONSULT -->

    <section class="consult">
        <h2 class="consult__title wow fadeInUp" data-wow-delay=".4s">
            {{__('asd.Получить консультацию')}}
        </h2>
        <div class="consult-card">
            <div class="consult-card__info wow fadeInLeft" data-wow-delay=".4s">
                <div class="consult-card__title">
                    {!!__('asd.Запишитесь <span>на</span>просмотр <span>Zo’rsan</span>')!!}
                </div>
                <div class="consult-card__form">
                    <input type="text" id="first_name2" placeholder="{{__('asd.Ваше имя')}}">
                    <input type="tel" id="phone2" placeholder="{{__('asd.Номер телефона')}}" class="form_tel">
                    <input id="token" value="{{ csrf_token() }}" type="hidden" required>
                    <button class="btn btn-yellow" id="button" onclick="send2()" type="button">
                        {{__('asd.Отправить')}}
                    </button>
                </div>
            </div>
            <div class="consult-card__img wow fadeInRight" data-wow-delay=".4s">
                <img src="issets/img/consult.jpg" alt="consult">
            </div>
        </div>
    </section>

    <!-- PLANS -->

    <section class="plans" id="plans">
        <div class="section-content">
            <div class="plans__subtitle">
                {{__('asd.Планировки')}}
            </div>
            <h2 class="section-title">
                {!!__('asd.<span>Максимум</span> полезных метров в <span>планировке</span>')!!}
            </h2>
        </div>
        
        <div class="plans-wrap">
            <ul class="plans-head">
                @foreach ($categories as $key=>$category)
                    <li @if ( $key==0) class="current" @endif>
                        {{$category['name_'.$lang]}}
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="plans-tabs">
            @foreach ($categories as $key=>$category)
            <div class="plans-tab">
                    <div class="plans-carousel owl-carousel">
                        @foreach ($category->products as $key=>$product)
                        <div class="plans-item">
                            <div class="plans-item__title">
                                {{__('asd.Площадь квартиры')}}
                            </div>
                            <div class="plans-item__square">
                                {{$product['name_'.$lang]}}
                            </div>
                            <div class="plans-item__img">
                                <img src="issets/img/plan.png" alt="plan">
                            </div>
                            <div class="plans-item__btn">
                                <a href="#" class="feedback-open btn btn-yellow">
                                    {{__('asd.Забронировать')}}
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="plans-arrows">
                        <span class="arrow-left">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M39 11.9167L11.9167 39M11.9167 39L11.9167 13M11.9167 39H37.9167"
                                    stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span class="arrow-right">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 38.0833L38.0833 11M38.0833 11V37M38.0833 11H12.0833" stroke="currentColor"
                                    stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- GALLERY -->

    <section class="gallery" id="gallery">
        <div class="gallery__title">
            {{__('asd.Галерея')}}
        </div>
        <div class="gallery-front">
            @foreach ($galleries as $gallery)
                @if($loop->iteration % 2 == 0)
                    <img src="{{$gallery->photo}}" alt="gallery">
                @endif
            @endforeach
        </div>
        <div class="gallery-back">
            @foreach ($galleries as $gallery)
                @if($loop->iteration % 2 != 0)
                    <img src="{{$gallery->photo}}" alt="gallery">
                @endif
            @endforeach
        </div>
    </section>

    <!-- FOOTER -->

    <footer class="footer">
        <div class="footer__logo">
            <a href="#">
                <img src="issets/img/logo-footer.svg" alt="Zo’rsan">
            </a>
        </div>
        <ul class="footer-menu">
            <li>
                <a href="#about">
                    {{__('asd.О проекте')}}
                </a>
            </li>
            <li>
                <a href="#advantages">
                    {{__('asd.Преимущества')}}
                </a>
            </li>
            <li>
                <a href="#location">
                    {{__('asd.PРасположение')}}
                </a>
            </li>
            <li>
                <a href="#arc">
                    {{__('asd.Архитектура')}}
                </a>
            </li>
            <li>
                <a href="#plans">
                    {{__('asd.Планировки')}}
                </a>
            </li>
            <li>
                <a href="#gallery">
                    {{__('asd.Галерея')}}
                </a>
            </li>
        </ul>
        <a href="tel:{{__('asd.71 200 74 00')}}" class="footer__tel">
            {{__('asd.71 200 74 00')}}
        </a>
        <div class="footer__text">
            {{__('asd.г. Ташкент, Юнусабадский район, ул. Янгишахар, 64А')}}
        </div>
        <div class="footer-bot">
            <ul class="footer-social">
                <li>
                    <a href="https://www.instagram.com/xonsaroyuz/" target="_blank" rel="nofollow">
                        {{__('asd.Instagram')}}
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/xonsaroyuz" target="_blank" rel="nofollow">
                        {{__('asd.Facebook')}}
                    </a>
                </li>
                <li>
                    <a href="https://t.me/XonSaroy" target="_blank" rel="nofollow">
                        {{__('asd.Telegram')}}
                    </a>
                </li>
            </ul>
            <div class="footer-wrap">
                <div class="footer__copy">
                    {{__('asd.© XON SAROY')}}
                </div>
                <a href="https://www.novastudio.uz/" class="footer__nova" target="_blank">
                    {{__('asd.created by NOVAS')}}
                </a>
            </div>
        </div>
    </footer>
    <script>
        function send2() {
    
            let token = $("#token").val();
            let name = $('#first_name2').val();
            let phone = $('#phone2').val();
            $.ajax({
                token: token,
                type: "get",
                url: "/feedback",
                data: {
                    name: name,
                    phone: phone,
                },
                contentType: "application/json; charset=utf-8",
                dataType: "json",
            });
            setTimeout(() => {
                $('.feedback-wrap').hide()
                $('.feedback-done').show()
                $("#first_name").val('');
                $("#phone").val('');
            }, 1000)
            setTimeout(() => {
                $('.feedback-wrap').show()
                $('.feedback-done').hide()
                $('.feedback').hide()
            }, 3000)
        }
    </script>
    <script>
        function send1() {
    
            let token = $("#token").val();
            let name = $('#first_name').val();
            let phone = $('#phone').val();
            $.ajax({
                token: token,
                type: "get",
                url: "/feedback",
                data: {
                    name: name,
                    phone: phone,
                },
                contentType: "application/json; charset=utf-8",
                dataType: "json",
            });
            setTimeout(() => {
                $('.feedback-wrap').hide()
                $('.feedback-done').show()
                $("#first_name").val('');
                $("#phone").val('');
            }, 1000)
            setTimeout(() => {
                $('.feedback-wrap').show()
                $('.feedback-done').hide()
                $('.feedback').hide()
            }, 3000)
        }
    </script>
    <script src="issets/js/jquery-3.4.1.min.js"></script>
    <script src="issets/js/jquery.inputmask.min.js"></script>
    <script src="issets/js/owl.carousel.js"></script>
    <script src="issets/js/jquery.swipe.js"></script>
    <script src="issets/js/jquery.touch.js"></script>
    <script src="issets/js/wow.min.js"></script>
    <script src="issets/js/main.js"></script>
</body>

</html>
