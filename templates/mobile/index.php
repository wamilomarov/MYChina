<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO Info -->
    <title>Гранты на бесплатное обучение в ведущих университетах Китая для граждан Казахстана. Бакалавриат, магистратура, докторантура</title>
    <meta name="description" content="Идеальные условия обучения и проживания по программе магистратура в современных охраняемых кампусах. Лучшие унивеситеты Китая с рейтингом А +. Преподаватели мирового класса, насыщенная студенческая жизнь" />
    <meta name="keywords" content="обучение в китае, учеба в китае, университеты китая, магистратура в китае, отправление на учебу в китай, магистратура в китае, докторантура в китае, учиться в китае" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="<?php echo $config['css']; ?>mobile.css"/>
    <link rel="stylesheet" href="<?php echo $config['css']; ?>messi.min.css"/>
    <link rel="stylesheet" href="<?php echo $config['css']; ?>font-awesome.min.css"/>

    <!-- Include Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>


</head>
<body>
<!-- <div id="page-preloader"><span class="spinner"></span></div>-->
<!-- Above the fold content (Critical path) -->

<ul id="jsMenu" class="menu">
    <li><a class="menu__item" href="#reviews">Отзывы</a></li>
    <li><a class="menu__item" href="#services">Цены</a></li>
    <li><a class="menu__item" href="#whychina">Почему Китай</a></li>
    <li><a class="menu__item" href="#benefits">Почему мы</a></li>
    <li><a class="menu__item" href="#universities">Университеты</a></li>
</ul>

<!--================================================
                    #header
=================================================-->
<header class="header">
    <div class="container">
        <a class="header__logo" href=""><img class="lazyload" data-src="<?php echo $config['img']; ?>logo-mobile.png" width="96" alt=""/></a>
        <a id="jsMenuBtn" class="header__menu-btn"></a>
        <a class="header__lang" href="index.php?lang=az">AZ</a>
        <a class="header__lang" href="index.php?lang=ru">RU</a>
    </div>
</header><!-- /.header -->


<!--================================================
                    #main
=================================================-->
<main id="main" class="main">
    <div class="jsSlider-1" >
        <div>
            <div class="main__slider-item main__slider-item--1">
                <div class="main__slider-cover"></div>
                <div class="container">
                    <h1 class="main__title">Гранты на обучение в ведущих университетах Китая</h1>
                    <!--<h2 class="main__subtitle">Бакалавриат – Магистратура – Докторантура</h2>-->
                    <ul class="main__list">
                        <li class="main__list-item">-Гарантия зачисление на грант</li>
                        <li class="main__list-item">-Без вступительных экзаменов</li>
                        <li class="main__list-item">-Полное сопровождение от консультации до встречи в аэропорту и размещения в общежитии</li>
                    </ul>
                    <a class="btn main__btn jsModalTrigger" data-target="jsModalForm" data-title="Отправьте заявку сейчас!" data-subtitle="И мы подберем для Вас индивидуальную программу" onclick="ga('send', 'event', 'основная заявка', 'заказать')">Оставить заявку</a>
                </div><!-- /.container -->
            </div>
        </div>
    </div>
</main><!-- /.main -->

<!-- End above the fold content (Critical path) -->

<!--*****************************************************************************************************************-->
<?php include_once("{$config['common']}universities.php"); ?>
<?php include_once("{$config['common']}video.php"); ?>
<?php include_once("whytrust.php"); ?>
<?php //include_once("numbers.php"); ?>
<?php include_once("prices.php"); ?>
<?php include_once("price.php"); ?>
<?php include_once("reviews.php"); ?>
<?php /*include_once("individual.php"); */?>
<?php include_once("{$config['common']}sertificates.php"); ?>
<?php include_once("callus.php"); ?>
<?php include_once("{$config['common']}contacts.php"); ?>

<!--================================================
                    #footer
=================================================-->
<footer class="footer">
    <div class="container">
        <div class="footer__left">
            <img class="lazyload" data-src="<?php echo $config['img']; ?>logo-mobile.png"  alt=""/>
        </div>
        <div class="footer__phones">
            <a class="footer__phones-link" href="tel:+7 (747) 263 46 60">+7 (747) 263 46 60</a>
            <a class="btn footer__phones-btn jsModalTrigger" onclick="ga('send', 'event', 'последняя кнопка', 'заказать')">Заказать звонок</a>
        </div>
    </div><!-- /.container -->
    <!-- The project is re-written, optimized and functions normally - BY KEYZED && DELF.SUSPECT -->
    <!--<a class="footer__created-by" href="http://cpc.kz/new"><img class="lazyload" data-src="<?php echo $config['img']; ?>created-mobile.png" width="153" height="66" alt=""/></a>-->
</footer><!-- /.footer -->

<!--================================================
                    #Hidden part of page
================================================-->
<!-- #Scroll Up Button -->
<a id="jsScrollTop" class="scroll-up" href="#main"></a>

<!-- Universities modal window -->
<?php include_once("{$config['common']}modals.php"); ?>
<?php include_once("benefits.php"); ?>


<!-- jQuery -->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!-- Custom JavaScript -->
<script src="<?php echo $config['js']; ?>libs/lazysizes.js"></script>
<script src="<?php echo $config['js']; ?>libs/jquery.scrollTo.js"></script>
<script src="<?php echo $config['js']; ?>libs/jquery.cloud9carousel.js"></script>
<script src="<?php echo $config['js']; ?>libs/jquery.placeholder.js"></script>
<script src="<?php echo $config['js']; ?>libs/jquery.maskedinput.js"></script>
<script src="<?php echo $config['js']; ?>libs/jquery.validate.js"></script>
<script src="<?php echo $config['js']; ?>libs/jquery.prettyPhoto.js"></script>
<script src="<?php echo $config['js']; ?>libs/jquery.lazyload.js"></script>
<script src="<?php echo $config['js']; ?>libs/jquery.magnific-popup.js"></script>
<script src="<?php echo $config['js']; ?>libs/jquery.malihu.PageScroll2id.js"></script>
<script src="<?php echo $config['js']; ?>libs/slick.js"></script>
<script src="<?php echo $config['js']; ?>libs/jquery.easytabs.js"></script>
<script src="<?php echo $config['js']; ?>libs/jquery.waypoints.js"></script>
<script src="<?php echo $config['js']; ?>libs/jquery.animateNumber.js"></script>
<script src="<?php echo $config['js']; ?>libs/messi.min.js"></script>
<script src="<?php echo $config['js']; ?>libs/popup.js"></script>
<script src="<?php echo $config['js']; ?>mobile.js"></script>

<!-- loadCSS: load a CSS file asynchronously -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=latin,cyrillic-ext,cyrillic"/>

<?php include_once('analyticstracking.php'); ?>
<!--<script async src="//track.soctracker.ru/?id=MTFhZTAzNmY3NWJmY2E5ZWM1MmQ2MjY3N2QxNjE0MWZ8MjA2Ng=="></script>-->
</body>
</html>