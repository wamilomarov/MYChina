<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SEO Info -->
    <title>Гранты на обучение в ведущих университетах Китая для граждан Казахстана. Бакалавриат, магистратура, докторантура</title>
    <meta name="description" content="Прекрасная возможность для выпускников казахстанских школ, колледжей и университетов. Идеальные условия обучения и проживания в современных охраняемых кампусах. Лучшие унивеситеты Китая с рейтингом А +. Преподаватели мирового класса, насыщенная студенческая жизнь" />
    <meta name="keywords" content="обучение в китае, учеба в китае, университеты китая, отправление на учебу в китай, магистратура в китае, докторантура в китае, учиться в китае" />

	<link rel="canonical" href="<?php echo $config['url']; ?>" />
    <link rel="shortcut icon" href="<?php echo $config['url']; ?>favicon.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="<?php echo $config['css']; ?>default.css?v=2"/>
    <link rel="stylesheet" href="<?php echo $config['css']; ?>messi.min.css"/>
    <link rel="stylesheet" href="<?php echo $config['css']; ?>font-awesome.min.css"/>


    <!-- Include Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $config['url']; ?>favicon.ico"/>

    <!-- Open Graph data for social media share -->
    <meta property="og:title" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="<?php echo $config['img']; ?>logo.png" />
    <meta property="og:description" content="" />
    <!-- Google Analytics -->


</head>
<body>

<!-- POPUP FOR REDIRECT -->
<script type="text/javascript">
    function PopUpHide(){
        $("#popup_redirect").hide();
    }
</script>
<style>
    .b-popup{
        width:100%;
        min-height:100%;
        background-color: rgba(0,0,0,0.5);
        overflow:hidden;
        position:fixed;
        top:0px;
        z-index: 999;
    }
    .b-popup .b-popup-content{
        margin:220px auto 0px auto;
        width:740px;
        height: 150px;
        padding:15px;
        background-color: #fff;
        border-radius:5px;
        box-shadow: 0px 0px 10px #000;
    }
    .close_redirect_popup {
        position: relative;
        left: 710px;
        top: -145px;
        text-decoration: none!important;
        color: #000;
    }
</style>
<div class="b-popup" id="popup_redirect" style="display: none;">
    <div class="b-popup-content">
        Дорогие друзья!<br><br>
        Для поступления в Китай мы предлагаем вам зарегистрироваться на сайте нашего партнера <a href="http://stabas.org/universities?utm_source=mychina.kz&utm_medium=banner&utm_campaign=banner">Stabas.org</a><br><br>
        На сайте <a href="http://stabas.org/universities?utm_source=mychina.kz&utm_medium=banner&utm_campaign=banner">Stabas.org</a> вы сможете подать документы на грант, платную программу или на подготовительные курсы китайского языка для дальнейшего обучения в университетах Китая.<br><br>
        <a href="javascript:PopUpHide()" class="close_redirect_popup">X</a>
    </div>

</div>
<!-- POPUP FOR REDIRECT -->
    <ul id="jsMenu" class="tablet__menu">
        <li><a class="tablet__menu-item" href="#programs">Программы обучения</a></li>
        <li><a class="tablet__menu-item" href="#universities">Университеты</a></li>
        <li><a class="tablet__menu-item" href="#benefits">Почему мы</a></li>
        <li><a class="tablet__menu-item" href="#whychina">Почему Китай</a></li>
        <li><a class="tablet__menu-item" href="#services">Цены</a></li>
        <li><a class="tablet__menu-item" href="#reviews">Отзывы</a></li>
    </ul>

    <!--================================================
                    #header
    =================================================-->
    <header class="header">
        <div class="container">
            <a class="header__logo" href=""><img class="lazyload" data-src="<?php echo $config['img']; ?>logo_ny.jpg" width="210" height="55" alt=""/></a>

            <div class="header__lang" style="float: right; padding: 30px 15px 5px 10px;">


                    <a href="index.php?lang=az"><img src="img/az.png" style="vertical-align: middle;">	&nbsp;AZ</a>

                <br>
                    <a href="index.php?lang=ru"> <img src="img/ru.png" style="vertical-align: middle;">	&nbsp;RU</a>

            </div>


            <div class="header__phones">
                <a class="header__phones-link" href="tel:+7 (747) 263 46 60"><?=$text->phone1?> <br><?=$text->phone2?> </a>
                <a class="btn header__phones-btn jsModalTrigger"
                   data-target="jsModalForm"
                   data-title="Отправьте заявку сейчас!"
                   data-subtitle="И мы подберем для Вас индивидуальную программу"
                   onclick="ga('send', 'event', 'заявка меню', 'заказать')">
                    Заказать звонок</a>
            </div>

            <p class="header__description" style="margin-top: -10px;">Образовательный центр MyChina при поддержке<br />Министерства образования КНР приглашают студентов на обучение<br />в лучшие ВУЗы поднебесной</p>
            <nav class="header__nav">
                <a class="header__nav-item" href="index.php?lang=az">AZ</a>
                <a class="header__nav-item" href="index.php?lang=ru">RU</a>
                <a class="header__nav-item" href="#reviews">Отзывы</a>
                <a class="header__nav-item" href="#services">Цены</a>
                <a class="header__nav-item" href="#whychina">Почему Китай</a>
                <a class="header__nav-item" href="#benefits">Почему мы</a>
                <a class="header__nav-item" href="#universities">Университеты</a>
                <a class="header__nav-item" href="#programs">Программы обучения</a>
                <a class="btn header__phones-btn jsModalTrigger"
                   data-target="jsModalForm"
                   data-title="Отправьте заявку сейчас!"
                   data-subtitle="И мы подберем для Вас индивидуальную программу"
                    style="float: right; height: 40px; line-height: 40px;"
                   onclick="ga('send', 'event', 'заявка скролл', 'заказать')">
                    Заказать звонок</a>


            </nav>
            <a id="jsMenuBtn" class="tablet__menu-btn"></a>
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
                    <img class="main__slider-img" src="<?php echo $config['img']; ?>main/1.png" width="484" height="600" alt=""/>
                    <div class="container">
                        <form class="form main__form" id="jsForm_1" action="" method="post">
                            <h2 class="form__title">Отправьте заявку сейчас!</h2>
                            <p class="form__text" style="margin-top:10px;">И мы подберем для Вас индивидуальную программу</p>
                            <div class="form__container">
                                <div class="form__errorbox">
                                    <label for="" class="form__label">Имя *</label>
                                    <input type="text" class="form__input" name="Name" placeholder="Имя *" onfocus="if (this.placeholder=='Имя *') this.placeholder='' " onblur="if (this.placeholder==''){this.placeholder='Имя *'}">
                                </div>
                                <div class="form__errorbox">
                                    <label for="" class="form__label">Телефон *</label>
                                    <input class="form__input phone" name="Phone" placeholder="Телефон *" type="text">
                                </div>
                                <div class="form__errorbox">
                                    <label for="" class="form__label">Email</label>
                                    <input type="text" class="form__input" name="Email" placeholder="Email" onfocus="if (this.placeholder=='Email') this.placeholder='' " onblur="if (this.placeholder==''){this.placeholder='Email'}">
                                </div>
                                <input type="hidden" name="subject" value="Заявка на заказ">
                                <input type="hidden" name="from" value="ОТПРАВИТЬ ЗАЯВКУ в первом скроле">
                                <input type="hidden" name="utm_source" value="<?php echo $get_params['utm_source']; ?>">
                                <input type="hidden" name="utm_campaign" value="<?php echo $get_params['utm_campaign']; ?>">
                                <input type="hidden" name="utm_medium" value="<?php echo $get_params['utm_medium']; ?>">
                                <!--<input type="hidden" name="type"       value="<?php echo $get_params['type']; ?>">
                                        <input type="hidden" name="source"     value="<?php echo $get_params['source']; ?>">
                                        <input type="hidden" name="keyword"    value="<?php echo $get_params['keyword']; ?>">--><br />
                                <button class="btn main__form-btn">ОТПРАВИТЬ ЗАЯВКУ</button>
                                <a class="conf" href="<?php echo $config['files']; ?>MyChina_confident.doc">Политика конфиденциальности</a>
                            </div>
                        </form>
                        <div class="main__left">
                            <h1 class="main__title">Гранты на обучение в<br />ведущих университетах Китая<br /></h1>
                            <!--<h2 class="main__subtitle">Бакалавриат – Магистратура – Докторантура</h2>-->
                            <ul class="main__list">
                                <li class="main__list-item">Гарантия зачисление на грант</li>
                                <li class="main__list-item">Без вступительных экзаменов</li>
                                <li class="main__list-item">Полное сопровождение от консультации до встречи в аэропорту и размещения в общежитии</li>
                            </ul>
                        </div>
                    </div><!-- /.container -->
                </div>
            </div>
        </div>
    </main><!-- /.main -->
    <?php /*include_once("{$config['tmpl']}programms.php"); */?>
    <?php include_once("{$config['common']}universities.php"); ?>
    <?php include_once("{$config['tmpl']}organizations.php"); ?>
    <?php include_once("{$config['tmpl']}whytrust.php"); ?>
    <?php //include_once("{$config['tmpl']}numbers.php"); ?>
    <?php /*include_once("{$config['tmpl']}reasons.php"); */?>
    <?php include_once("{$config['tmpl']}price.php"); ?>
    <?php include_once("{$config['common']}studentlife.php"); ?>
    <?php include_once("{$config['tmpl']}services.php"); ?>
    <?php /*include_once("{$config['tmpl']}subscription.php"); */?>
    <?php include_once("{$config['common']}video.php"); ?>
    <?php include_once("{$config['tmpl']}reviews.php"); ?>
    <?php /*include_once("{$config['tmpl']}individual.php"); */?>
    <?php include_once("{$config['common']}sertificates.php"); ?>
    <?php //include_once("{$config['tmpl']}social.php"); ?>
    <?php include_once("{$config['tmpl']}questions.php"); ?>
    <?php include_once("{$config['common']}contacts.php"); ?>

    <!--================================================
                        #footer
    =================================================-->
    <footer class="footer">
        <div class="container">
            <div class="footer__left">
                <img class="lazyload" data-src="<?php echo $config['img']; ?>logo_ny.jpg" width="210" height="55" alt=""/>
            </div>
            <div class="footer__center">
                <p><?=$text->footer_center_1?><br /><?=$text->footer_center_2?><br /><?=$text->footer_center_3?></p>
            </div>
            <div class="footer__phones">
                <a class="footer__phones-link" href="tel:<?=$text->phone1?>"><?=$text->phone1?><br><?=$text->phone2?></a>
                <a class="btn footer__phones-btn jsModalTrigger" onclick="ga('send', 'event', 'последняя кнопка', 'заказать')">Заказать звонок</a>
            </div>
        </div><!-- /.container -->
        <!-- The project is re-written, optimized and functions normally - BY KEYZED && DELF.SUSPECT -->
        <!--<a class="footer__created-by" href="http://cpc.kz/new"><img class="lazyload" data-src="<?php echo $config['img']; ?>created.png" width="153" height="66" alt=""/></a>-->
    </footer><!-- /.footer -->

    <div id="waiting-popup">
        Пожалуйста подождите 20 секунд, Ваша заявка в процессе отправки.
    </div>

    <!-- #Scroll Up Button -->
    <a id="jsScrollTop" class="scroll-up" href="#main"></a>    
    
    <?php include_once("{$config['common']}modals.php"); ?>

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
    <script src="<?php echo $config['js']; ?>default.js?v=22"></script>

    <!-- loadCSS: load a CSS file asynchronously -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=latin,cyrillic-ext,cyrillic"/>

    <?php /*?><script src="http://api-maps.yandex.ru/1.1/index.xml" type="text/javascript"></script><?php */?>
    <script src="<?php echo $config['js']; ?>map.js" type="text/javascript"></script>

    <?php include_once('analyticstracking.php'); ?>
    <!--<script src="http://fastcallmanager.com/widgets/last/widget.js" code="bb3179cad7bfe3e4b621bf5f9958eb30"></script>-->
    <!--<script async src="//track.soctracker.ru/?id=MTFhZTAzNmY3NWJmY2E5ZWM1MmQ2MjY3N2QxNjE0MWZ8MjA2Ng=="></script>-->
</body>
</html>