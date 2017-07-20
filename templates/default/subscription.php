<section id="subscription">
    <div class="container">
        <h2 class="title subs_title">Узнайте о новых выгодных программах первым!</h2>
        <h3 class="subs">Подпишитесь на рассылку и наши менеджеры<br />будут оповещать Вас о новых грантовых программах</h3><br /><br />
        <form name="subs_form" action="" method="post" id="jsForm_3">
            <input type="hidden" name="subject" value="Заявка на подписке">
            <input type="hidden" name="from" value="ОТПРАВИТЬ ЗАЯВКУ в скролле подписки">
            <input type="hidden" name="utm_source" value="<?php echo $get_params['utm_source']; ?>">
            <input type="hidden" name="utm_campaign" value="<?php echo $get_params['utm_campaign']; ?>">
            <input type="hidden" name="utm_medium" value="<?php echo $get_params['utm_medium']; ?>">

            <input type="text" class="form__input ib" name="Name" placeholder="Имя *" onfocus="if (this.placeholder=='Имя *') this.placeholder='' " onblur="if (this.placeholder==''){this.placeholder='Имя *'}">
            <input class="form__input phone ib" name="Phone" placeholder="Телефон *" type="text">
            <input type="text" class="form__input ib" name="Email" placeholder="E-mail" onfocus="if (this.placeholder=='E-mail') this.placeholder='' " onblur="if (this.placeholder==''){this.placeholder='E-mail'}">

            <button class="btn main__form-btn">ПОДПИСАТЬСЯ</button>
        </form>
    </div>
</section>