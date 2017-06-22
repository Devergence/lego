<?
session_start();

if (!empty($_SERVER['HTTP_REFERER'])) {
	$_SESSION['referer'] = $_SERVER['HTTP_REFERER'];
}
 
?>
<?php

// подключение функции изменения заголовка в зависимости от utm-метки
 require_once 'cpc.php';	
 
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5CWNVLL');</script>
	<!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lego Mindstorms Образовательные решения и домашние комплекты</title>
    <link rel="shortcut icon" href="img/favicon_lego.ico" type="image/x-icon">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css' />
    <link rel="stylesheet" href="css/style.css">
    <link rel='stylesheet' href='css/bxslider.css'>
    <link rel="stylesheet" href="css/jquery.arcticmodal-0.3.css">

    <!--куки-->
   

</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5CWNVLL"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
    <section class="first-block">
        <div class="first-back"></div>
        <!--header-->
        <header class="head-wrap">
            <div class="back"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-5">
                        <a href="index.php" class="logo" title="logo">
                            <img src="img/edulogo.png" alt="logoimg">
                        </a>
                    </div>
                    <div class="col-xs-3">
                        <div class="middle-menu">
                            <div class="organisation"><a href="#whom-section">Организациям <span>&rarr;</span></a></div>
                            <div class="people"><a href="#forHome">Для частных лиц <span>&rarr;</span></a></div>
                        </div>
                    </div>

                    <div class="col-xs-4  contacts">
                        Позвоните бесплатно из любой точки РФ<br/>
                        <a href="tel:88002222108" class="phone-wrap roistat-phone-tel"><span class="roistat-phone">8 (800) 2222 108</span></a><br/>
                        <a id="articul" class="order">Заказать по артикулу</a>
                    </div>
                    <div class="clearfix" display="none"></div>
                </div>
            </div>
        </header>

        <!--main-->
        <div class="head-body">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 hide-robot"><img src="img/storm.png" alt="robo" title="robo" class="roboimage"></div>
                    <div class="col-xs-8 about">
                        <p class="subname">Lego Mindstorms</p>
                        <div class="new-robot"><img src="img/storm.png" alt="robo" title="robo" class="roboimage"></div>
                        <p class="lead">Образовательные решения и домашние комплекты</p>
                        <a  id="orderMain" class="order-btn"><span>Заказать с бесплатной доставкой</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sales">
        <!--заголовок хиты продаж-->
        <div class="head-sales">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 about-sales">
                        <h1>Хиты продаж</h1>
                        <p>Готовые решения для бюджетных и коммерческих<br>образовательных учреждений</p>
                    </div>
                </div>
            </div>
        </div>
        <!--блоки хитов-->
        <div class="hits">
            <div class="container">
                <div class="row">
                    <div class="item-list">
                        <div class="col-xs-2">
                            <div class="circle">Безусловный<br>лидер<br>продаж!</div>
                        </div>
                        <div class="col-xs-3 image-side">
                            <img src="img/sell1.png" alt="robo-one">
                        </div>
                        <div class="col-xs-7 item-text">
                            <h3>Lego Mindstorms EV3</h3>
                            <p class="text-side">Набор Lego Mindstorms EV3 45544 - одна из лучших образовательных платформ компании Lego, которая была специально разработана для занятий в классе или кружке робототехники.</p>
                            <div class="price">
                                <span class="old-price">31 300</span>
                                <span class="new-price">29 109 &#8381;</span><br>
                                <a class="buy-btn" data-order-type="3"><span>Заказать</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="item-list sell-two">
                    <div class="col-xs-2">
                        <div class="circle robo-two">Хит продаж<br>учебного<br>сезона<br>2016-2017<br>года</div>
                    </div>
                    <div class="col-xs-3 image-side second-sellbox">
                        <img src="img/sell2.png" alt="robo-two">
                    </div>
                    <div class="col-xs-7 item-text">
                        <h3>Ресурсный набор LEGO Mindstorms Education EV3</h3>
                        <p class="text-side">С помощью ресурсного набора LEGO Mindstorms дети смогут заниматься в кружках, участвовать в соревнованиях и открывать новые секреты технических наук.</p>
                        <div class="price">
                            <span class="old-price">9 500</span>
                            <span class="new-price">8 550 &#8381;</span><br>
                            <a class="buy-btn" data-order-type="4"><span>Заказать</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="hits">
            <div class="container">
                <div class="row">
                    <div class="item-list sell-three">
                        <div class="col-xs-2">
                            <div class="circle robo-three">Универсаль-<br>ное решение<br>для дома<br>и школы!</div>
                        </div>
                        <div class="col-xs-3 image-side third-sellbox">
                            <img src="img/sell3.png" alt="robo-three">
                        </div>
                        <div class="col-xs-7 item-text">
                            <h3>Образовательное решение WeDo 2.0</h3>
                            <p class="text-side">LEGO WeDo 2 – робототехническая новинка 2016 года, ставшая вторым поколением серии WeDo. Конструктор представляет собой универсальное образовательное решение, которое можно применять на уроках в школе и дома.</p>
                            <div class="price">
                                <span class="old-price">16 200</span>
                                <span class="new-price">15 066 &#8381;</span><br>
                                <a class="buy-btn" data-order-type="5"><span>Заказать</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Кому это нужно-->
    <section class="whom" id="whom-section">
        <!--заголовок-->
        <div class="head-whom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 about-whom">
                        <h1>Кому это нужно</h1>
                        <p>Сегодня решения Lego Education просто незаменимы<br>в следующих образовательных форматах</p>
                    </div>
                </div>
            </div>
        </div>
        <!--тело секции для кого-->
        <div class="container">
            <div class="row">
                <div class="col-xs-4 left-whom text-center">
                    <img src="img/whom1.png" alt="whom-one">
                    <p>Класс робототехники в начальной и средней школе, и даже в детском саду</p>
                    <a data-order-type="6" data-order-name="Кому это нужно: школы, садики" class="showme">Узнать подробнее</a>
                </div>
                <div class="col-xs-4 middle-whom text-center">
                    <img src="img/whom2.png" alt="whom-two">
                    <p>Частные кружки по робототехнике, центры дополнительного образования</p>
                    <a class="showme" data-order-name="Кому это нужно: частные кружки" data-order-type="7">Узнать подробнее</a>
                </div>
                <div class="col-xs-4 rigth-whom text-center">
                    <img src="img/whom3.png" alt="whom-three">
                    <p>Лицеи и коммерческие образовательные учреждения</p>
                    <a class="showme" data-order-name="Кому это нужно: лицеи" data-order-type="8">Узнать подробнее</a>
                </div>
            </div>
        </div>
    </section>

    <!--Обучение со слайдером-->
    <section class="learn">
        <div class="container-slider">
            <div class="row-slider">
                <div class="slider-box">
                    <div class="content-slider">
                        <h1>Увлекательное<br>обучение</h1>
                        <p>С наборами Lego Education образование<br>стало увлекательным</p>
                    </div>
                    <!--слайдер-->
                    <ul id="learn-slider" class="bxslider">
                        <li style="background-image: url('img/learn_bg.jpg');"></li>
                        <li style="background-image: url('img/slide2.jpg');"></li>
                        <li style="background-image: url('img/slide3.jpg');"></li>
                        <li style="background-image: url('img/slide4.jpg');"></li>
                        <li style="background-image: url('img/slide5.jpg');"></li>
                        <li style="background-image: url('img/slide6.jpg');"></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix" display="none"></div>
    <!--Спец условия-->
    <section class="conditions">
        <!--заголовок условий-->
        <div class="head-conditions">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 about-conditions">
                        <h1>Мы подготовили специальные<br>условия для работы с вами</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--секция предложений-->
        <div class="first-row">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3 cond-item">
                        <div class="condition-image"><img src="img/stamp.png" alt="stamp"></div>
                        <p>Договор по 44 и 223 ФЗ, закупки<br>и тендеры</p>
                    </div>
                    <div class="col-xs-3 cond-item">
                        <div class="condition-image"><img src="img/interface.png" alt="interface"></div>
                        <p>Предоставим 3-5<br>коммерческих предложений<br>для выбора поставщика</p>
                    </div>
                    <div class="col-xs-3 cond-item">
                        <div class="condition-image"><img src="img/money.png" alt="money"></div>
                        <p>Предоставляем рассрочку<br>платежа</p>
                    </div>
                    <div class="col-xs-3 cond-item">
                        <div class="condition-image"><img src="img/medal.png" alt="medal"></div>
                        <p>Соответствуем<br>Федеральному<br>Государственному<br>Образовательному<br>Стандарту (ФГОС)</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="second-row">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3 cond-item">
                        <div class="condition-image"><img src="img/professor.png" alt="professor"></div>
                        <p>Поможем обучить<br>педагогов</p>
                    </div>
                    <div class="col-xs-3 cond-item">
                        <div class="condition-image"><img src="img/truck.png" alt="truck"></div>
                        <p>Доставим всю партию в<br>любую точку РФ без<br>предоплаты</p>
                    </div>
                    <div class="col-xs-3 cond-item">
                        <div class="condition-image"><img src="img/signature.png" alt="signature"></div>
                        <p>Предоставим все<br>необходимые документы:<br>договоры, акты,<br>сертификаты</p>
                    </div>
                    <div class="col-xs-3 cond-item">
                        <div class="condition-image"><img src="img/avatar.png" alt="avatar"></div>
                        <p>Более 5 лет работаем с<br>образовательными<br>учреждениями. Поможем<br>и вам!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--первая форма-->
    <section class="form-one">
        <img class="arrow" src="img/arrow.png" alt="arrow">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 toggle-form">
                    <h1>Бесплатный подбор и консультация</h1>
                    <p>В течение одного дня поможем подобрать наборы и укомплектовать ваш класс<br>робототехники или кружок Lego Education</p>
                    <div class="main-form-one">
                        <form>
                            <input type="text" name="name" required placeholder="Имя"><br>
                            <input type="tel" name="phone" required placeholder="Tелефон"><br>
                            <textarea type="text" name="comment" placeholder="Комментарий к заказу"></textarea><br>
                            <button type="submit" class="button" href="#exampleModal">Получить консультацию</button>
                            <p>Мы перезвоним в течение 15 минут</p>
                            <p class='conf'>Нажимая на кнопку, я даю <a target="_blank" href="politic.html" tabindex="-1">согласие на обработку персональных данных</a></p>
							<input type="hidden" name="forma" value="Подбор и консультация">
							<input type="hidden" name="order_type" value="9">
							<input type="hidden" name="utm_source" value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : '' ;?>">
							<input type="hidden" name="utm_medium" value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '' ;?>">
							<input type="hidden" name="utm_campaign" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>">
							<input type="hidden" name="utm_term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>">
							<input type="hidden" name="utm_placement" value="<?php echo isset($_GET['utm_placement']) ? $_GET['utm_placement'] : '' ;?>">
							<input type="hidden" name="utm_creative" value="<?php echo isset($_GET['utm_creative']) ? $_GET['utm_creative'] : '' ;?>">
							<input type="hidden" name="utm_content" value="<?php echo isset($_GET['utm_content']) ? $_GET['utm_content'] : '' ;?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--раздел сертификатов-->
    <section class="sertificats">
        <div class="container">
            <div class="row">
                <div class="hidden-xs">
                    <h1>Наши достижения<br>и сертификаты</h1>
                </div>
                <div id="srt-slider" class="col-xs-5 slider-sert">
                    <ul id="sert-slider" class="bxslider">
                       
                        <li><img src="img/sert4.jpg" /></li>
                        <li><img src="img/sert3.jpg" /></li>
                        <li><img src="img/sert5.jpg" /></li>
                        <li><img src="img/sert2.jpg" /></li>

                    </ul>
                </div>
                <!--Достижения-->
                <div class="col-xs-6">

                    <div class="row">
                        <div class="col-xs-6 left-sert-col">
                            <h1>Наши достижения<br>и сертификаты</h1>
                        </div>
                    </div>
                    <div class="rigth-col-body">
                        <div class="row lego-row">
                            <div class="col-xs-3 lead-brick">
                                <div class="lego-left"></div>
                                <div class="lego-right"></div>
                                <div class="lego-brick">
                                    <p>Компания Альком —<br>официальный представитель «Lego Education»</p>
                                </div>
                            </div>
                            <div class="col-xs-3 lead-brick">
                                <div class="lego-left"></div>
                                <div class="lego-right"></div>
                                <div class="lego-brick">
                                    <p>Организатор Сибирского робототехнического фестиваля «Робофест-<br>Западная сибирь»</p>
                                </div>
                            </div>
                        </div>

                        <div class="row lego-row">
                            <div class="col-xs-3 lead-brick">
                                <div class="lego-left"></div>
                                <div class="lego-right"></div>
                                <div class="lego-brick">
                                    <p>Оптовые и розничные<br>поставки Lego Education<br>по всей России и СНГ</p>
                                </div>
                            </div>
                            <div class="col-xs-3 lead-brick">
                                <div class="lego-left"></div>
                                <div class="lego-right"></div>
                                <div class="lego-brick">
                                    <p>Бесплатная доставка<br>курьерскими службами<br>по всей России</p>
                                </div>
                            </div>
                        </div>

                        <div class="row lego-row">
                            <div class="col-xs-3 lead-brick">
                                <div class="lego-left"></div>
                                <div class="lego-right"></div>
                                <div class="lego-brick">
                                    <p>Полностью соответствуем<br>ФГОС, работаем по ФЗ-44,<br>ФЗ-223</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--робофест-->
    <section class="robofest">
        <div class="container-slider">
            <div class="row-slider">
                <div class="slider-box">
                     <div class="content-slider">
                        <h1>Робофест-<br>Западная Сибирь</h1>
                        <p>Организован ГК "Альком", при поддержке Правительства
Омской области и НП "ИТ-кластер Сибири"</p>
                    </div>
                    <!--слайдер-->
                    <ul id="robofest-slider" class="bxslider">
                        <li style="background-image: url('img/robofest_bg.jpg');"></li>
                        <li style="background-image: url('img/robofest-slide1.jpg');"></li>
                        <li style="background-image: url('img/robofest-slide2.jpg');"></li>
                        <li style="background-image: url('img/robofest-slide3.jpg');"></li>
                        <li style="background-image: url('img/robofest-slide4.jpg');"></li>
                        <li style="background-image: url('img/robofest-slide5.jpg');"></li>
                        <li style="background-image: url('img/robofest-slide6.jpg');"></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--домашнее обучение-->
    <section class="home" id="forHome">
        <div class="head-home">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 about-home">
                        <h1>Для домашнего обучения</h1>
                        <p>Изучайте робототехнику и готовьтесь к конкурсам<br>вместе с вашими детьми!</p>
                    </div>
                </div>
            </div>
        </div>
        <!--блоки хитов-->
        <div class="hits">
            <div class="container">
                <div class="row">
                    <div class="item-list sell-four">
                        <div class="col-xs-2">
                            <div class="circle robo-four">Для<br>начинающих</div>
                        </div>
                        <div class="col-xs-3 image-side fourth-sellbox">
                            <img src="img/sell4.png" alt="robo-four">
                        </div>
                        <div class="col-xs-7 item-text">
                            <h3>Образовательное решение WeDo</h3>
                            <p class="text-side">Перворобот LEGO WeDo – базовый конструктор из робототехнических решений компании LEGO.
С его изучения начинается первое знакомство ребят со сложными программируемыми механизмами. </p>
                            <div class="price">
                                <span class="old-price">11 220</span>
                                <span class="new-price">10 098 &#8381;</span><br>
                                <a class="buy-btn" data-order-type="10"><span>Заказать</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="item-list sell-five">
                    <div class="col-xs-2">
                        <div class="circle robo-five">Для удобной<br>работы с<br>наборами</div>
                    </div>
                    <div class="col-xs-3 image-side fifth-sellbox">
                        <img src="img/sell5.png" alt="robo-five">
                    </div>
                    <div class="col-xs-7 item-text">
                        <h3>Transformer 10V DC Зарядное устройство постоянного тока 10В</h3>
                        <p class="text-side">Зарядное устройство постоянного тока на 10 В позволяет заряжать аккумуляторные батареи к микрокомпьютеру EV3, NXR и WeDo 2.0</p>
                        <div class="price">
                             <span class="old-price">2 500</span>
                            <span class="new-price">2 250 &#8381;</span><br>
                            <a class="buy-btn" data-order-type="11"><span>Заказать</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="hits">
            <div class="container">
                <div class="row">
                    <div class="item-list sell-six">
                        <div class="col-xs-2">
                            <div class="circle robo-six">Незаменим для<br>соревнований</div>
                        </div>
                        <div class="col-xs-3 image-side six-sellbox">
                            <img src="img/sell6.png" alt="robo-six">
                        </div>
                        <div class="col-xs-7 item-text">
                            <h3>EV3 Color Sensor Датчик цвета EV3</h3>
                            <p class="text-side">Датчик цвета различает 7 цветов и может определить отсутствие цвета. Как и в NXT, он может работать как датчик освещенности</p>
                            <div class="price">

                                <span class="new-price-home">2 850 &#8381;</span><br>
                                <a class="buy-btn" data-order-type="12"><span>Заказать</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--вторая форма-->
    <section class="form-two">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 toggle-form">
                    <h1>Нужна конкретная деталь?</h1>
                    <p>Напишите название детали и ее артикул, мы проверим ее наличие на складе<br> и перезвоним вам для оформления заказа</p>
                    <div class="main-form-one">
                        <form>
                            <input type="text" name="name" placeholder="Имя"><br>
                            <input type="tel" name="phone" required placeholder="Tелефон"><br>
                            <textarea type="text" name="comment" placeholder="Название необходимой детали или артикул"></textarea><br>
                            <button type="submit" class="button" href="#exampleModal">Получить консультацию</button>
                            <p>Мы перезвоним в течение 15 минут</p>
                            <p class='conf'>Нажимая на кнопку, я даю <a target="_blank" href="politic.html" tabindex="-1">согласие на обработку персональных данных</a></p>
							<input type="hidden" name="forma" value="Конкретная деталь (низ)">
							<input type="hidden" name="order_type" value="13">
							<input type="hidden" name="utm_source" value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : '' ;?>">
							<input type="hidden" name="utm_medium" value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '' ;?>">
							<input type="hidden" name="utm_campaign" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>">
							<input type="hidden" name="utm_term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>">
							<input type="hidden" name="utm_placement" value="<?php echo isset($_GET['utm_placement']) ? $_GET['utm_placement'] : '' ;?>">
							<input type="hidden" name="utm_creative" value="<?php echo isset($_GET['utm_creative']) ? $_GET['utm_creative'] : '' ;?>">
							<input type="hidden" name="utm_content" value="<?php echo isset($_GET['utm_content']) ? $_GET['utm_content'] : '' ;?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--футер-->
    <footer>
        <div class="mapsection">

            <div class="container footer-map">
                <div class="row">
                    <div class="col-xs-6">

                        <div class="contacts-footer">
                            <h1>Контактная информация</h1>
                            <p class="org">Группа компаний «Альком»</p>
                            <a href="tel:88002222108" class="phone-wrap roistat-phone-tel tel-footer"><span class="roistat-phone">8 (800) 2222 108</span></a><br>
                            <span>звонок бесплатный</span><br>

                            <a href="mailto:info@legorobo.ru" class="mail"><span>info@legorobo.ru<span></a>
                        </div>
                    </div>
                </div>
            </div>
          <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae8546612cd66e42060627cc9eb20ccb826c08f7e7f0a03f4826ec0dbad245214&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=false"></script>
        </div>

        <div class="low-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-1 logo-alk">
                        <img src="img/alkom-logo.png" alt="alkom">
                    </div>
                    <div class="col-xs-4 left-footer">Образовательные решения и домашние комплекты<br> Lego Education с бесплатной доставкой по всей России <br><a href="politic.html" target=_blank>Политика конфиденциальности<a></div>
                    <div class="col-xs-4 right-footer">Создание сайта<br> <a href="https://media-group.biz" target="_blank">media-group.biz</a>
                    </div>
                    <div class="col-xs-2 pull-right logo-media">
                        <a href="https://media-group.biz" target="_blank"><img src="img/media-logo.png" alt="media-group"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--модал для кнопки заказать бесплатно с доставкой-->
    <div style="display: none;">
        <div class="box-modal" id="orderForm">
            <div class="box-modal_close arcticmodal-close"><img src="img/close.png" alt=""></div>
            <form>
                <h1>Бесплатный подбор и консультация</h1>
                <p>В течение одного дня поможем подобрать наборы и укомплектовать ваш класс<br>робототехники или кружок Lego Education</p>
                <input type="text" id="popupformName" name="name" placeholder="Имя"><br>
                <input type="tel" id="popupformPhone" name="phone" required placeholder="Tелефон"><br>
                <textarea type="text" id="popupformComent" name="comment" placeholder="Комментарий к заказу"></textarea><br>
                <button type="submit" class="button">Получить консультацию</button>
                <p>Мы перезвоним в течение 15 минут</p>
                <p class='conf'>Нажимая на кнопку, я даю <a target="_blank" href="politic.html" tabindex="-1">согласие на обработку персональных данных</a></p>
				<input type="hidden" name="forma" value="Первый экран">
				<input type="hidden" name="order_type" value="2">
				<input type="hidden" name="utm_source" value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : '' ;?>">
				<input type="hidden" name="utm_medium" value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '' ;?>">
				<input type="hidden" name="utm_campaign" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>">
				<input type="hidden" name="utm_term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>">
				<input type="hidden" name="utm_placement" value="<?php echo isset($_GET['utm_placement']) ? $_GET['utm_placement'] : '' ;?>">
				<input type="hidden" name="utm_creative" value="<?php echo isset($_GET['utm_creative']) ? $_GET['utm_creative'] : '' ;?>">
				<input type="hidden" name="utm_content" value="<?php echo isset($_GET['utm_content']) ? $_GET['utm_content'] : '' ;?>">
            </form>
        </div>
    </div>

    <!--Модал для заказать по артикулу-->
    <div style="display: none;">
        <div class="box-modal" id="articulForm">
            <div class="box-modal_close arcticmodal-close"><img src="img/close.png" alt=""></div>
            <form data-toggle="validator">
                <h1>Нужна конкретная деталь?</h1>
                <p>Напишите название детали и ее артикул, мы проверим ее наличие на складе<br> и перезвоним вам для оформления заказа</p>
                <input type="text" id="popupformName" name="name" placeholder="Имя"><br>
                <input type="tel" id="popupformPhone" name="phone" required placeholder="Tелефон"><br>
                <textarea type="text" id="popupformComent" name="comment" placeholder="Комментарий к заказу"></textarea><br>
                <button type="submit" class="button">Получить консультацию</button>
                <p>Мы перезвоним в течение 15 минут</p>
                <p class='conf'>Нажимая на кнопку, я даю <a target="_blank" href="politic.html" tabindex="-1">согласие на обработку персональных данных</a></p>
				<input type="hidden" name="forma" value="Артикул вверх ">
				<input type="hidden" name="order_type" value="1">
				<input type="hidden" name="utm_source" value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : '' ;?>">
				<input type="hidden" name="utm_medium" value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '' ;?>">
				<input type="hidden" name="utm_campaign" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>">
				<input type="hidden" name="utm_term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>">
				<input type="hidden" name="utm_placement" value="<?php echo isset($_GET['utm_placement']) ? $_GET['utm_placement'] : '' ;?>">
				<input type="hidden" name="utm_creative" value="<?php echo isset($_GET['utm_creative']) ? $_GET['utm_creative'] : '' ;?>">
				<input type="hidden" name="utm_content" value="<?php echo isset($_GET['utm_content']) ? $_GET['utm_content'] : '' ;?>">
            </form>
        </div>
    </div>
    <!--модал для заказа товара-->
    <div style="display: none;">
        <div class="box-modal" id="buyForm">
            <div class="box-modal_close arcticmodal-close"><img src="img/close.png" alt=""></div>
            <form data-toggle="validator">
                <h1>Заполните форму</h1>
                <p> Оставьте Ваш номер телефона и в течение 15 минут с Вами свяжутся для оформления заказа и бесплатной консультации</p>
                <input type="text" id="popupformName" name="name" placeholder="Имя"><br>
                <input type="tel" id="popupformPhone" name="phone" required placeholder="Tелефон"><br>
                <textarea type="text" id="popupformComent" name="comment" placeholder="Комментарий к заказу"></textarea><br>
                <button type="submit" class="button">Оставить заявку</button>
                <p>Мы перезвоним в течение 15 минут</p>
                <p class='conf'>Нажимая на кнопку, я даю <a target="_blank" href="politic.html" tabindex="-1">согласие на обработку персональных данных</a></p>
				<input type="hidden" name="forma" value="Товар">
				<input type="hidden" name="order_type" value="0">
				<input type="hidden" name="utm_source" value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : '' ;?>">
				<input type="hidden" name="utm_medium" value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '' ;?>">
				<input type="hidden" name="utm_campaign" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>">
				<input type="hidden" name="utm_term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>">
				<input type="hidden" name="utm_placement" value="<?php echo isset($_GET['utm_placement']) ? $_GET['utm_placement'] : '' ;?>">
				<input type="hidden" name="utm_creative" value="<?php echo isset($_GET['utm_creative']) ? $_GET['utm_creative'] : '' ;?>">
				<input type="hidden" name="utm_content" value="<?php echo isset($_GET['utm_content']) ? $_GET['utm_content'] : '' ;?>">
            </form>
        </div>
    </div>
    <!--Кому это нужно модалока-->
    <div style="display: none;">
        <div class="box-modal" id="showmeForm">
            <div class="box-modal_close arcticmodal-close"><img src="img/close.png" alt=""></div>
            <form data-toggle="validator">
                <h1>Бесплатный подбор и консультация</h1>
                <p>В течение одного дня поможем подобрать наборы и укомплектовать ваш класс<br>робототехники или кружок Lego Education</p>
                <input type="text" id="popupformName" name="name" placeholder="Имя"><br>
                <input type="tel" id="popupformPhone" name="phone" required placeholder="Tелефон"><br>
                <textarea type="text" id="popupformComent" name="comment" placeholder="Комментарий к заказу"></textarea><br>
                <button type="submit" class="button">Получить консультацию</button>
                <p>Мы перезвоним в течение 15 минут</p>
                <p class='conf'>Нажимая на кнопку, я даю <a target="_blank" href="politic.html" tabindex="-1">согласие на обработку персональных данных</a></p>
				<input type="hidden" name="forma" value="Кому это нужно">
				<input type="hidden" name="order_type" value="0">
				<input type="hidden" name="utm_source" value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : '' ;?>">
				<input type="hidden" name="utm_medium" value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '' ;?>">
				<input type="hidden" name="utm_campaign" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>">
				<input type="hidden" name="utm_term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>">
				<input type="hidden" name="utm_placement" value="<?php echo isset($_GET['utm_placement']) ? $_GET['utm_placement'] : '' ;?>">
				<input type="hidden" name="utm_creative" value="<?php echo isset($_GET['utm_creative']) ? $_GET['utm_creative'] : '' ;?>">
				<input type="hidden" name="utm_content" value="<?php echo isset($_GET['utm_content']) ? $_GET['utm_content'] : '' ;?>">
            </form>
        </div>
    </div>

	<div style="display: none;">
		<div class="box-modal" id="exampleModal">
<div class="box-modal_close arcticmodal-close"><img src="img/close.png" alt=""></div>
			<h1>Спасибо за ваше<br>обращение<span id="change_name">, Сергей</span>!</h1>
			<p>Наш менеджер свяжется с Вами в течение 15 минут,<br>чтобы ответить на ваши вопросы и помочь<br>с оформлением заказа. </p>
		</div>
	</div>












   
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='js/jquery.cookiebar.js'></script>
    <script src='js/jquery.arcticmodal-0.3.min.js'></script>
    <script src='js/bxslider.min.js'></script>
    <script src='js/mask.js'></script>
    <script src="js/common.js?<?= filemtime('common.js'); ?>"></script>
</body>

</html>