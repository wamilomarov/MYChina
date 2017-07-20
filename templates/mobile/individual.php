<!--================================================
					#individual
=================================================-->
<section id="individual" class="individual lazy" data-original="<?php echo $config['img']; ?>individual.jpg">
    <div class="individual__overlay"></div>
    <div class="container">
        <div class="individual__form">
            <form class="form" id="jsForm_5" action="" method="post">
                <h2 class="form__title">Мы за то,</h2>
                <p class="form__text">чтобы подобрать для Вас<br/>идеальную программу
                <div class="form__container">
                    <div class="form__errorbox">
                        <input type="text" class="form__input" name="Name" id="Name" placeholder="Имя *" onfocus="if (this.placeholder=='Имя *') this.placeholder='' " onblur="if (this.placeholder==''){this.placeholder='Имя *'}">
                    </div>
                    <div class="form__errorbox">
                        <input type="text" class="form__input" name="Program" placeholder="Программа *" onfocus="if (this.placeholder=='Программа *') this.placeholder='' " onblur="if (this.placeholder==''){this.placeholder='Программа *'}">
                    </div>
                    <div class="form__errorbox">
                        <select name="Lang" id="" class="form__input">
                            <option value="">Язык обучения</option>
                            <option value="Английский">Английский</option>
                            <option value="Китайский">Китайский</option>
                        </select>
                    </div>
                    <div class="form__errorbox">
                        <input type="text" class="form__input" name="Date" placeholder="Дата начала обучения *" onfocus="if (this.placeholder=='Дата начала обучения *') this.placeholder='' " onblur="if (this.placeholder==''){this.placeholder='Дата начала обучения *'}">
                    </div>
                    <div class="form__errorbox">
                        <input class="form__input phone" id="Phone" name="Phone" placeholder="Телефон *" type="text">
                    </div>
                    <div class="form__errorbox">
                        <input type="text" class="form__input" id="Email" name="Email" placeholder="Email *" onfocus="if (this.placeholder=='Email *') this.placeholder='' " onblur="if (this.placeholder==''){this.placeholder='Email *'}">
                    </div>
                    <input type="hidden" name="subject" value="Заявка на заказ">
                    <input type="hidden" name="from" value="ОТПРАВИТЬ ЗАЯВКУ в первом скроле ">
                    <input type="hidden" name="utm_source" value="<?php echo $get_params['utm_source']; ?>">
                    <input type="hidden" name="type"       value="<?php echo $get_params['type']; ?>">
                    <input type="hidden" name="utm_medium"     value="<?php echo $get_params['utm_medium']; ?>">
                    <input type="hidden" name="utm_campaign"     value="<?php echo $get_params['utm_campaign']; ?>">
                    <input type="hidden" name="keyword"    value="<?php echo $get_params['keyword']; ?>">
                    <button class="btn individual__form-btn" onClick="checkForm('jsForm_5'); return false;">Подобрать программу</button>
                    <a class="conf" href="<?php echo $config['files']; ?>MyChina_confident.doc">Политика конфиденциальности</a>
                </div>
            </form>
        </div>
    </div>
</section><!-- /.individual -->