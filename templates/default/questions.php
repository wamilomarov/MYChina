<section id="questions">
    <div class="container">
        <h2 class="title title__questions" style="margin-bottom: 45px;">
            <a class="btn header__phones-btn jsModalTrigger"
               data-target="jsModalForm"
               data-title="Отправьте заявку сейчас!"
               data-subtitle="И мы подберем для Вас индивидуальную программу"
               style="height: 40px; line-height: 33px; background: #961A13;"
               onclick="ga('send', 'event', 'последняя кнопка', 'красный блок')">
                <?=$text->title_questions?>
            </a>
        </h2>
<div class="bigdiv">
<span><?=$text->or_span?><br><?=$text->bigdiv?></span>
    <div style="margin-top: 20px">
<?=$text->phone1?> <br> <?=$text->phone2?>
    </div>
</div>
    </div>
</section>