<!--================================================
					#reviews
=================================================-->

<?php
$db = array(
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'db' => 'gochina',
    'charset' => 'UTF8'
);

$c = mysqli_connect($db['host'], $db['user'], $db['pass'], $db['db']) or die(mysqli_error($c));
mysqli_query($c,'SET NAMES ' . $db['charset']);
$data = mysqli_query($c,'SELECT * FROM feedbacks LIMIT 12');

$reviews = mysqli_fetch_all($data, MYSQLI_ASSOC);

?>
<section class="reviews">
<div class="jsSlider-4 reviews__slider">
    <?php foreach ($reviews as $review){?>
<div>
    <div class="reviews__slider-item reviews__slider-item--1">
        <div class="container">
            <img width="150" class="lazyload" src="<?= "http://localhost/china2/admin/img/feedback_photo/".$review['photo'];?>" alt=""/>
            <h3 class="title"><?=$review['name']?></h3>
            <p>
                <?=$review['feedback']?>
            </p>
        </div>
    </div>
</div>
    <?php } ?>
<!--<div>-->
<!--    <div class="reviews__slider-item reviews__slider-item--2">-->
<!--        <div class="container">-->
<!--            <img width="150" class="lazyload" src="--><?php //echo $config['img']; ?><!--reviews/02.jpg" alt=""/>-->
<!--            <h3 class="title">Адилов Тамерлан (мама)</h3>-->
<!--            <p>-->
<!--                Добрый день!<br/>-->
<!--                Меня зовут Адилова Гульнар Нурсапаевна. Я мама Адилова Тамерлана, студента вашей-->
<!--                Программы языкового обучения в Ханджоу. Отзывы мои только положительные. Мой сын-->
<!--                доволен, ему все нравится, программа достаточно понятна и доступна для нас.-->
<!--                И главное - стоимость обучения гораздо ниже стоимости в других странах мира, а-->
<!--                качество на высоком уровне! И это радует. Спасибо вам всем огромное!!! Я желаю-->
<!--                только процветания и успехов вашей компании!-->
<!--                <br />-->
<!--                С уважением, Адилова Г.Н.-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div>-->
<!--    <div class="reviews__slider-item reviews__slider-item--3">-->
<!--        <div class="container">-->
<!--            <img width="150" class="lazyload" src="--><?php //echo $config['img']; ?><!--reviews/03.jpg" alt=""/>-->
<!--            <h3 class="title">Ревега Александр</h3>-->
<!--            <p>-->
<!--                Компания MyChina помогла мне собрать все нужные документы для обучения в Китае.-->
<!--                Компанией были даны ответы на многие важные вопросы. Более того, заявкой на получение-->
<!--                письма-приглашения на поступление в университет занималась Компания. То есть у меня было-->
<!--                больше свободного времени. Еще привлекло и то что нет необходимости сдавать ЕНТ. Сейчас-->
<!--                я обучаюсь на языковых курсах в Ханчжоу. Очень интересно и увлекательно, одна каллиграфия-->
<!--                чего стоит. В общем за короткий период пребывания в Китае у меня сложились самые приятные-->
<!--                впечатления. Мне здесь очень нравится.-->
<!--                <br />-->
<!--                С уважением, Ревега Александр-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div>-->
<!--    <div class="reviews__slider-item reviews__slider-item--4">-->
<!--        <div class="container">-->
<!--            <img width="150" class="lazyload" src="--><?php //echo $config['img']; ?><!--reviews/04.jpg" alt=""/>-->
<!--            <h3 class="title">Bakhat Sati</h3>-->
<!--            <p>-->
<!--                Nihao! Я Bakhat Sati учусь в Nanjing University of Science and Technology в городе Nanjing-->
<!--                (бакалавр) 1 курс. Наш университет быстро развивающийся с большими возможностями.-->
<!--                Территория нашего кампуса очень большая. В ней находятся несколько учебных здании,-->
<!--                общежитии, библиотека, теннисные, футбольные, баскетбольные площадки, кафетерий и-->
<!--                магазины и несколько многоэтажных столовых и тд.. Нанкин очень красивый и один из-->
<!--                самых чистых и безопасных городов в Китае. Тут народ очень дружелюбный и приветливый-->
<!--                по отношению к иностранцам.. И если вы целеустремленный и уверенный в себе человек то-->
<!--                это ваш шанс получить хорошее образование а так же отличное будущее! Вообщем я люблю-->
<!--                этот город и NUST.^)-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div>-->
<!--    <div class="reviews__slider-item reviews__slider-item--5">-->
<!--        <div class="container">-->
<!--            <img width="150" class="lazyload" src="--><?php //echo $config['img']; ?><!--reviews/05.jpg" alt=""/>-->
<!--            <h3 class="title">Уалихан</h3>-->
<!--            <p>-->
<!--                Благодарю компанию MyChina за предоставленную возможность получить грант в-->
<!--                Nanjing University Since and Technology. Хотелось бы отметить то, что представители-->
<!--                данной компании очень добросовестно выполняют свою работу. Китай мне очень понравился-->
<!--                с самого приезда. Университет оборудован по последнему слову техники – это не только-->
<!--                великолепные условия обучения, но и возможность проводить научные исследования во всех-->
<!--                различных областях, а также в кампусе университета имеются множество спортивных комплексов-->
<!--                и мест ,где можно проводить свободное время. Город Nanjing очень красив и уютен располагает-->
<!--                многими местами.-->
<!--                <br />-->
<!--                С уважением, Уалихан-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div>-->
<!--    <div class="reviews__slider-item reviews__slider-item--6">-->
<!--        <div class="container">-->
<!--            <img width="150" class="lazyload" src="--><?php //echo $config['img']; ?><!--reviews/06.jpg" alt=""/>-->
<!--            <h3 class="title">Масанчи Али</h3>-->
<!--            <p>-->
<!--                Ni Hao, меня зовут Масанчи Али, уехал по программе MyChina в Китай, город Нанкин.-->
<!--                Город просто шикарный, кто не знает это бывшая столица Китая, учусь в Nanjing-->
<!--                University of Science and Technology проще говоря NUST, основная учёба на английском-->
<!--                языке, но учим китайский полным ходом. Большой и красивый кампус, большое поле для-->
<!--                футбола, очень много баскетбольных полей, теннисные корта и д.т. в общем есть все-->
<!--                чтобы уйти с головой в учёбу и потом отдохнуть от души. Нас расположили в комфортабельную-->
<!--                общагу, в комнате 4 человека, туалет, ванная, самое главное есть выход в интернет. Если-->
<!--                ты это прочитал, ты большой везунчик!! See you in China!!-->
<!--                <br />-->
<!--                С уважением, Масанчи Али-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div>-->
<!--    <div class="reviews__slider-item reviews__slider-item--7">-->
<!--        <div class="container">-->
<!--            <img width="150" class="lazyload" src="--><?php //echo $config['img']; ?><!--reviews/07.jpg" alt=""/>-->
<!--            <h3 class="title">Шустова Юлия (мама)</h3>-->
<!--            <p>-->
<!--                Здравствуйте! Сегодня моя дочь Шустова Юлия – студент Политехнического Университета-->
<!--                г. Нанкин. Благодаря работе команды учебного центра MyChina. Спасибо за поддержку лично-->
<!--                Мирасу, Сандугаш и Зарине! Самые радостные слова от своей дочери я услышала на-->
<!--                этой неделе: “Мама, я так рада, что поехала сюда учиться! Все здорово!”-->
<!--                Ребята, спасибо, вам!-->
<!--                <br />-->
<!--                С уважением, Шустова Гульнара-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div>-->
<!--    <div class="reviews__slider-item reviews__slider-item--8">-->
<!--        <div class="container">-->
<!--            <img width="150" class="lazyload" src="--><?php //echo $config['img']; ?><!--reviews/09.jpg" alt=""/>-->
<!--            <h3 class="title">Алибек Омаркулов</h3>-->
<!--            <p>-->
<!--                Я учусь в NUST (Nanjing University of Science and Technology).-->
<!--                Очень большой университет, оснащен самыми передовыми технологиями для обучения.-->
<!--                И лучшими учителями. Есть множество кружков, куда вы можете записаться,-->
<!--                каждую пятницу, и субботу. Стадион, футбольные, баскетбольные поля.-->
<!--                Зеленый кампус, с зеленым светом на все.-->
<!--                Спасибо компании MyChina, за возможность обучения за границей!-->
<!--                <br />-->
<!--                С уважением, Алибек Омаркулов-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div>-->
<!--    <div class="reviews__slider-item reviews__slider-item--9">-->
<!--        <div class="container">-->
<!--            <img width="150" class="lazyload" src="--><?php //echo $config['img']; ?><!--reviews/11.jpg" alt=""/>-->
<!--            <h3 class="title">Назгуль Жолмагамбетова</h3>-->
<!--            <p>-->
<!--                Всем привет из Китая, точнее из города Нанкин) Меня зовут Назгуль)-->
<!--                Приехала в этот замечательный город ровно месяц назад) и ни капельки не жалею)-->
<!--                Если честно, чтобы передать все мои эмоции не хватит слов) Это просто нужно увидеть)-->
<!--                Но моя мечта учиться заграницей не сбылась бы без компании MyChina) Спасибо, что Вы-->
<!--                даете такой шанс)-->
<!---->
<!--                С уважением, Назгуль Жолмагамбетова-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div>-->
<!--    <div class="reviews__slider-item reviews__slider-item--10">-->
<!--        <div class="container">-->
<!--            <img width="150" class="lazyload" src="--><?php //echo $config['img']; ?><!--reviews/12.jpg" alt=""/>-->
<!--            <h3 class="title">Венера Бекзебеева</h3>-->
<!--            <p>-->
<!--                Здравствуйте! Я благодарю MyChina, что меня отправили сюда учиться.-->
<!--                Мне здесь все нравится сам университет и учителя очень хорошие и понимающие.-->
<!--                Сам народ такой добрый. Мне самой здесь очень нравится и все устраивает.-->
<!--                Спасибо MyChina.-->
<!--                <br />-->
<!--                С уважением, Венера Бекзебеева-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div>-->
<!--    <div class="reviews__slider-item reviews__slider-item--11">-->
<!--        <div class="container">-->
<!--            <img width="150" class="lazyload" src="--><?php //echo $config['img']; ?><!--reviews/13.jpg" alt=""/>-->
<!--            <h3 class="title">Айдын Абиров</h3>-->
<!--            <p>-->
<!--                Я, Айдын Абиров, осенью 2014 года улетел учиться в Китай по программе MyChina.-->
<!--                Я безгранично рад, что по воли случайности я в свое время наткнулся на эту компанию.-->
<!--                По началу я не верил, но сейчас собираюсь написать, как мне здесь нравится.-->
<!--                Начнем с общежития: идеальное место для занятия, так все компактно организовано.-->
<!--                Универ очень красивый, просто завораживает своим видом. Учителя добрые, всегда-->
<!--                пытаются помогать. Город просто нечто, и конечно же еда: если найти хорошие-->
<!--                места(их тут много), то можно над этим не париться. В заключении скажу, дорогие друзья,-->
<!--                бросайте все, и приезжайте сюда!!!-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div>-->
<!--    <div class="reviews__slider-item reviews__slider-item--12">-->
<!--        <div class="container">-->
<!--            <img width="150" class="lazyload" src="--><?php //echo $config['img']; ?><!--reviews/14.jpg" alt=""/>-->
<!--            <h3 class="title">Жания Дулатбаева</h3>-->
<!--            <p>-->
<!--                Очень рада,что приехала учиться в Китай.Учетеля очень вежливые,хорошие.-->
<!--                Сам язык трудный,но среди китайцев можно научиться. Все очень хорошо. Мне нравиться.-->
<!--                Приезжайте если хотите связать свое будущее с Китаем,который в числе самых-->
<!--                лучших стран мира!!!)))-->
<!--                <br />-->
<!--                С уважением, Жания Дулатбаев-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div>-->
<!--    <div class="reviews__slider-item reviews__slider-item--13">-->
<!--        <div class="container">-->
<!--            <img width="150" class="lazyload" src="--><?php //echo $config['img']; ?><!--reviews/15.jpg" alt=""/>-->
<!--            <h3 class="title">Ахан Байменов</h3>-->
<!--            <p>-->
<!--                Всем привет! Я сейчас учусь в Shandong University of Technology в городе Цзыбо,-->
<!--                на годичных языковых курсах. Мне тут очень нравится. Китайцы очень добрые и отзывчивые.-->
<!--                Город зеленый, чистый и большой, достаточно много интересных заведений.-->
<!--                В городе мало русскоговорящих по сравнению с большими городами, что хорошо мотивируют к-->
<!--                изучению языка. Приезжайте сюда, вам тут очень понравится! 大家 再见!-->
<!--                <br />-->
<!--                С уважением, Ахан Байменов-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
</div>

<div class="price__btns" style="margin-top: -50px;">
    <button type="button" id="revSlide1_prev" class="price__btn price__btn--prev" ><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAdCAYAAABxPebnAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAARpJREFUeNpi/P//PwMpgJGRsY2RFE1ADe1AiosBpIkQBqkH4lwgXgrmE6nJG4g3ATEbUZqAwBGIDwKxCFyMgAZNID4CxMIo4ng0CADxUSA2wpDDoUEEiPcCsQtWeRya1gJxCE5XYNEwH4gr8PkVHrnAiGMGUi1AzAIUK8UXySxI7AwgFgXidIJJA2pTDBBvgUUeEXHHYACNbRZiNMA0HQBia2I1wDQ5AfEykjRBdWYB8RqSNEE1VgPxRCBmJqSJCSkgO6F0BVFBjubJ1UCcQ5Tz0DRuBWIvUjVJQjOeOdGakDQeB2I9ojVBNepCcy4v0ZqQCpX9QMxDtCaoxnBoqHKSoglU7uUD8TyUTEhkCdsLilpGMsryPoAAAwBD49VaS2wWqwAAAABJRU5ErkJggg==" /></button>
    <button type="button" id="revSlide1_next" class="price__btn price__btn--next" ><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAdCAYAAABxPebnAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAARhJREFUeNpiYGBgmAnESv///2cgFoOAJxDvAmImojVBdSYD8QYgZiRaE1RjCRBPA2IWQpqYGBCgH4i/AnENAyGAxZNLgLiIKOehadwMxH6kahIH4v1AbE20JqhGMSA+BsT6RGuCatQB4iNAzEe0JqhGT6hT+YnWBNUYAsRrgZiDFE2MQFwIxPNBfEZYAiQGMDIyghLAA5I0QTWeItWmeiD1ixQ/pQHxKlICwhWItwExJ7HxZA2NYHFiU4QqEB8FJSli0x4fEB8GYjNiU7kwEO8FYndSssYaIA4jJrvD4mIekDoLlFyFM75gkQtUzAykGqHBWowvklmQ2GnQHJtOVMECBLHQcoGd2BLWBRpSTKQUy3NJLcsBAgwAKdbSmEpSh+IAAAAASUVORK5CYII=" /></button>
</div>
<div style="clear: both"></div><br /><br />
</section><!-- /.reviews -->