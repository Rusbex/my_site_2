@extends('layout')
@section('main_content')
    {{--Начало Главная--}}
    <body class="main-content">
    <header class="container header active" id="home">
        <div class="header-content">
            <div class="left-header">
                <div class="h-shape"></div>
                <div class="image">
                    <img src="{{asset("img/ava-1.jpg")}}" alt="my_avatar">
                </div>
            </div>
            <div class="right-header">
                <h1 class="name">
                    Привет, Я <br><span>Rustam Tuyakov.</span><br>
                    Веб-разработчик.
                </h1>
                <p>
                    Добро пожаловать на сайт-портфолио. Меня зовут Рустам. Мне 22 и я живу в г.Шымкент. Занимаюсь web-разработкой.
					<br>
                    Владею: HTML, CSS, PHP, JS, SQL <br>
					Знаю: ООП, Solid, MVC, Solid, UI/UX<br>
					Работаю с Laravel, Bootstrap, MySql, SQlite, Git, Docker
                </p>
            </div>
        </div>
    </header>
    {{--Начало обомне --}}
    <main>
        <section class="container about" id="about">
            <div class="main-title">
                <h2>Обо <span>мне</span></h2>
            </div>
            <div class="about-container">
                <div class="left-about">
                    <h4>Кратко о себе</h4>
                    <p>
                        Быстро схватываю новый материал, легко само обучаем. Готовность к работе в режиме многозадачности, стрессоустойчивость. Прошел проф. курсы "Web-работчик с нуля до про" в Udemy и курсы по Laravel в youtube по профилю - успешно применяю свои знания на практике.
                    </p>
                    <ul>
                        <li>
                            Владею HTML, CSS, PhP, Js
                        </li>
                        <li>
                            Знания основ ООП, Solid, MVC, UI/UX дизайна
                        </li>
						<li>Работаю с Laravel, Bootstrap, jQury </li>
                        <li>Умение работать с Базами данных MySql, SQlite и с SQL запросами</li>
                        <li>Есть знания работы с Git, Docker, Composer</li>
						<li>
                            Опыт и умение работать с CMS такими как Wordpress, Joomla, Opencart
                        </li>
                        <li>Знание адаптивной верстки (подход Mobile First).</li>
						<li>Есть знания и опыт в SEO продвижение</li>
						<li>Опыт работы с E-mail расылками и телеграм ботами через SendPulse</li>
						<li>
						Навыки и опыт работы с програмами: Figma, Adobe Photoshop, Corldraw
						</li>
                        <li>Так же владею After Efects и Fl studio</li>
                    </ul>
                </div>
                {{--Начало блоки с цифрами--}}
                <div class="right-about">
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">10+</p>
                            <p class="small-text">Проектов <br> в которых принимал участие</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">1</p>
                            <p class="small-text">лет <br> опыта в web</p>
                        </div>
                    </div>
                </div>
            </div>
            {{--Начало колонки с навыками--}}
            <div class="about-stats">
                <h4 class="stat-title">Мои навыки</h4>
                <div class="progress-bars">
                    <div class="progress-bar">
                        <p class="prog-title">html5</p>
                        <div class="progress-con">
                            <p class="prog-text">80%</p>
                            <div class="progress">
                                <span class="html"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">css3</p>
                        <div class="progress-con">
                            <p class="prog-text">75%</p>
                            <div class="progress">
                                <span class="css"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Php</p>
                        <div class="progress-con">
                            <p class="prog-text">30%</p>
                            <div class="progress">
                                <span class="php"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Laravel</p>
                        <div class="progress-con">
                            <p class="prog-text">40%</p>
                            <div class="progress">
                                <span class="laravel"></span>
                            </div>
                        </div>
                    </div>

                    <div class="progress-bar">
                        <p class="prog-title">Bootstrap</p>
                        <div class="progress-con">
                            <p class="prog-text">40%</p>
                            <div class="progress">
                                <span class="Bootstrap"></span>
                            </div>
                        </div>
                    </div>

                    <div class="progress-bar">
                        <p class="prog-title">Data Basse</p>
                        <div class="progress-con">
                            <p class="prog-text">30%</p>
                            <div class="progress">
                                <span class="bd"></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            {{--Начало опыт работы--}}
            <h4 class="stat-title">Опыт работы</h4>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">декабрь 2022 - настоящее время</p>
                    <h5>Администратор сайта<span> - Интернет магазин "Media Mart"</span></h5>
                    <p>
                        Администрирование <a href="https://mediamart.kz/" target="_blank">веб сайта</a> и заполнение контента
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">март 2022 - декабрь 2022</p>
                    <h5>Контент менеджер<span> - Веб студия "Biggrin" </span></h5>
                    <p>
                        Работал над заполнением контента/технической поддержкой сайтов
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">май 2021 - март 2022</p>
                    <h5>Графический дизайнер<span> - "Garant".</span></h5>
                    <p>
                        Разрабатывал и верстал меню, каталоги, визитки итд.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">октябрь 2020 - май 2021</p>
                    <h5>Оператор Технической подддержки
                        <span> - "Halyk Bank"</span>
                    </h5>
                    <p>
                        Техподдержка пользователей приложения "Homebank"
                    </p>
                </div>
            </div>
            </div>
            {{--Начало образование--}}
            <h4 class="stat-title">Образование</h4>
            <div class="timeline">
                <div class="timeline-item">
                    <p class="tl-duration">2022 - настоящее время</p>
                    <h5>Курсы и уроки по web Разработке<span> - "Udemy", "Laravel Creative", и Youtube</span></h5>
                    <p>
                        Прохожу курсы и уроки
                    </p>
                </div>
                <div class="timeline-item">
                    <p class="tl-duration">2020 - 2023</p>
                    <h5>Неоконченное высшие<span> - "Silkway/Miras"</span></h5>
                    <p>
                        Иностранный язык, два иностранных языка
                    </p>
                </div>
            </div>
            </div>
        </section>

        {{--Начало портфолио--}}
        <section class="container" id="portfolio">
            <div class="main-title">
                <h2>Моё <span>Портфолио</span></h2>
            </div>
            <p class="port-text">
                Мои проекты.
            </p>
            <se class="portfolios">
                <div class="portfolio-item">
                    <div class="image" title="Мой проект в Wordpress">
                        <a href="https://demeuli.kz/" target="_blank" >
                            <img src="{{asset("img/1-02.jpg")}}" alt="">
                        </a>
                    </div>
                    <div class="hover-items">
                        <a href="https://demeuli.kz/" class="icon" target="_blank">
                            <i class="fab fa-wordpress"></i>
                            Ссылка на сайт
                        </a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image" title="Макет электроного каталога в Figme">
                        <a href="https://www.figma.com/file/NpqWGKmZjhgw1oKX22OFCA/Real-Time?t=84tYiEWwDsaTarZ0-6" target="_blank">
                            <img src="{{asset("img/1-01.jpg")}}" alt="">
                        </a>
                    </div>
                    <div class="hover-items">
                        <a href="https://www.figma.com/file/NpqWGKmZjhgw1oKX22OFCA/Real-Time?t=84tYiEWwDsaTarZ0-6" class="icon" target="_blank">
                            <i class="fab fa-figma"></i>
                            Ссылка на Figma
                        </a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image" title="Этот сайт">
                        <a href="https://github.com/Rusbex/my_site_2" target="_blank">
                            <img src="{{asset("img/1-03.jpg")}}" alt="">
                        </a>
                    </div>
                    <div class="hover-items">
                        <a href="https://github.com/Rusbex/my_site_2" class="icon" target="_blank">
                            <i class="fab fa-github"></i>
                            Ссылка на сурсы
                        </a>
                    </div>
                </div>
            </se>

            {{--    Второй блок портфолио--}}

            <p class="port-text">
                Проекты в которых принимал участие.
            </p>
            <se class="portfolios">
                <div class="portfolio-item">
                    <div class="image" title="Reves">
                        <a href="https://reves.kz/" target="_blank">
                            <img src="{{asset("img/pflio/01.jpg")}}" alt="">
                        </a>
                    </div>
                    <div class="hover-items">
                        <a href="https://reves.kz/" class="icon" target="_blank">
                            <i class="fab fa-wordpress"></i>
                            Ссылка на сайт
                        </a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image" title="Labtech">
                        <a href="https://labtech.kz/" target="_blank">
                            <img src="{{asset("img/pflio/02.jpg")}}" alt="">
                        </a>
                    </div>
                    <div class="hover-items">
                        <a href="https://labtech.kz/" class="icon" target="_blank">
                            <i class="fab fa-joomla"></i>
                            Ссылка на сайт
                        </a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image" title="Balqaragai">
                        <a href="https://balqaragai.biggrin.kz/" target="_blank">
                            <img src="{{asset("img/pflio/03.jpg")}}" alt="">
                        </a>
                    </div>
                    <div class="hover-items">
                        <a href="https://balqaragai.biggrin.kz/" class="icon" target="_blank">
                            <i class="fab fa-wordpress"></i>
                            Ссылка на сайт
                        </a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image" title="MegaArt">
                        <a href="https://dverimegaart.kz/" target="_blank">
                            <img src="{{asset("img/pflio/04.jpg")}}" alt="">
                        </a>
                    </div>
                    <div class="hover-items">
                        <a href="https://dverimegaart.kz/" class="icon" target="_blank">
                            <i class="fab fa-joomla"></i>
                            Ссылка на сайт
                        </a>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="image" title="Макет электроного каталога в Figme">
                        <a href="https://belestex.kz/" target="_blank">
                            <img src="{{asset("img/pflio/06.jpg")}}" alt="">
                        </a>
                    </div>
                    <div class="hover-items">
                        <a href="https://belestex.kz/" class="icon" target="_blank">
                            <i class="fab fa-wordpress"></i>
                            Ссылка на сайт
                        </a>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="image" title="MediaMart">
                        <a href="https://mediamart.kz/" target="_blank">
                            <img src="{{asset("img/pflio/05.jpg")}}" alt="">
                        </a>
                    </div>
                    <div class="hover-items">
                        <a href="https://mediamart.kz/" class="icon" target="_blank">
                            <i class="fab fa-opencart"></i>
                            Ссылка на сайт
                        </a>
                    </div>
                </div>


            </se>
        </section>
{{--Конец портфолио--}}
{{--Начало музыка--}}
        <section class="container" id="music">
            <div class="main-title">
                <h2>Музыка, <span>сделанная в Fl</span></h2>
            </div>

            <se class="portfolios">

                <div class="portfolio-item">
                    <iframe width="350" height="350" src="https://www.youtube.com/embed/FhlTacUv2AI" title="First post-punk track" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="portfolio-item">
                    <iframe width="350" height="350" src="https://www.youtube.com/embed/wP-5_DOzexw" title="First rock track" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
				
				<div class="portfolio-item">
                    <iframe width="350" height="350" src="https://www.youtube.com/embed/LqoFjucE35w" title="Second Rock track" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>

                </se>
            </section>

        {{--Конец музыка--}}

        {{--Начало контакты--}}

        <section class="container contact" id="contact">
            <div class="contact-container">
                <div class="main-title">
                    <h2>Мои <span>контакты</span></h2>
                </div>
                <div class="contact-content-con">
                    <div class="left-contact">
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Адрес</span>
                                </div>
                                <p>
                                    : г. Шымкент РК.
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                    <span>Email</span>
                                </div>
                                <p>
                                    <a href="mailto:rustuy2018@gmail.com"><span>: rustuy2018@gmail.com</span></a>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Образование</span>
                                </div>
                                <p>
                                    <span>: "Silkway" г.Шымкент</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                    <span>мобильный телефон</span>
                                </div>
                                <p>
                                    <a href="tel:87786205167">: 8 (778) 620 51 67</a>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-paper-plane"></i>
                                    <span>Telegram</span>
                                </div>
                                <p>
                                    <a href="https://t.me/bexon123" target="_blank">: @bexon123</a>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fab fa-whatsapp"></i>
                                    <span>WhatsApp</span>
                                </div>
                                <p>
                                    <a href="https://api.whatsapp.com/send?phone=87786205167&text=найс сайт" target="_blank">
                                        : Написать
                                    </a>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fab fa-github"></i>
                                    <span>GiHub</span>
                                </div>
                                <p>
                                    <a href="https://github.com/Rusbex" target="_blank">
                                        <i class="fab fa-github"></i>
                                        : Мой GitHub
                                    </a>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-print"></i>
                                    <span>Резюме</span>
                                </div>
                                <p>
                                    <a href="stuff/hh-resume.pdf" target="_blank" >: Скачать портфолио</a>

                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-heading"></i>
                                    <span>HeadHunter</span>
                                </div>
                                <p>
                                    <a href="https://hh.kz/resume/a1fc8306ff0909072b0039ed1f6c336c6b4f62" target="_blank">: Ссылка на hh</a>

                                </p>
                            </div>

{{--Начало Форма обратного звонка--}}
                            <div class="form-block">
                                <form method="POST" class="main-title" action="{{route("contact_form_process")}}">
                                    <h3>Оставьте заявку</h3>
                                    <p>и я с вами свяжусь</p>
                                    @csrf
                                    <div class="form">
                                        <label for="name">Ваше имя:</label>
                                        <input type="name" name="name" class="form" id="name" placeholder="matsuR...">
                                    </div>
                                    <div class="form">
                                        <label for="email">Ваша почта:</label>
                                        <input type="email" name="email" class="form" id="email"
                                               placeholder="123@gmail.com...">
                                    </div>
                                    <div class="form">
                                        <label for="text">Сообщение:</label>
                                        <input type="text" name="text" class="form-text" id="text"
                                               placeholder="Найс сайт...">
                                    </div>
                                    <button type="submit" class="button">Отправить сообщение</button>
                                    @if($errors->any())
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </form>
                            </div>
                            {{--Конец Форма обратного звонка--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="controls">
        <div class="control active-btn" data-id="home">
            <i class="fas fa-home"></i>
        </div>
        <div class="control" data-id="about">
            <i class="fas fa-user"></i>
        </div>
        <div class="control" data-id="portfolio">
            <i class="fas fa-briefcase"></i>
        </div>
		<div class="control" data-id="music">
            <i class="fas fa-music"></i>
        </div>
        <div class="control" data-id="contact">
            <i class="fas fa-envelope-open"></i>
        </div>
    </div>
    <div class="theme-btn">
        <i class="fas fa-adjust"></i>
    </div>
    <script src="{{asset("js/app.js")}}"></script>
 <!-- !!! СКРИПТ ОКНА !!!-->
    <!-- jquery -->
    <script
        src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>

    <script src="//yandex.st/jquery/cookie/1.0/jquery.cookie.min.js"></script>

    <script src="{{asset('js/jquery.arcticmodal-0.3/jquery.arcticmodal-0.3.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('js/jquery.arcticmodal-0.3/jquery.arcticmodal-0.3.css')}}">

    <!-- arcticModal theme -->

    <link rel="stylesheet" href="{{asset('js/jquery.arcticmodal-0.3/themes/dark.css')}}">

    <div style="display: none;">
        <div class="box-modal" id="boxUserFirstInfo">
            <div class="box-modal_close arcticmodal-close">закрыть</div>

            <h3>Небольшая информация о сайте</h3>
            <br>
            <p>Фронт: Html, Css, JS, jQury<br>
                Бэк: Laravel, php<br>
            </p>
        </div>
    </div>

    <script>
        (function ($) {
            $(function () {

                // ПРОВЕРКА на КУКИ
                if (!$.cookie('was')) {

                    // Покажем всплывающее окно
                    $('#boxUserFirstInfo').arcticmodal({
                        closeOnOverlayClick: false,
                        closeOnEsc: true
                    });

                }

                // КУКИ
                $.cookie('was', true, {
                    expires: 365,
                    path: '/'
                });

            })
        })(jQuery)
    </script>

    <!-- ////СКРИПТ ОКНА КОНЕЦ///// -->


    </body>
    <div></div></html>
@endsection
