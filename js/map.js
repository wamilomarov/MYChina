//Отлавливаем событие изменения селекта
var nmaps = {
    'Алматы': 'almaty',
    'Владивосток' : 'vladik',
    'Казань'  : 'kazan',
    'Бишкек'    : 'bishkek',
    'Ереван'    : 'erevan',
    'Нанкин'    : 'nankin',
    'Москва'    : 'moscow',
    'Санкт-Петербург': 'piter',
    'Барнаул'   : 'barnaul',
    'Минск' : 'minsk'
};

function changeContacts(element){
    $this = element;
    var value        = $this.val();
    var tab          = $('.contacts__tabs-item');
    $('#YMapsID').hide().css('background', 'url(http://mychina.kz/china2/img/maps/'+nmaps[value]+'.jpg) 0 0 no-repeat').fadeIn(1000);
    tab.each(function () {
        if($(this).data('city') === value){
            $(this).addClass('active')
                .siblings()
                .removeClass('active');
        }
    });
    return false;
}
/*
$(document).ready(function () {
    $('#contacts__select').change(function () {
        $this = $(this);
        var value        = $this.val();
        var tab          = $('.contacts__tabs-item');

        $('#YMapsID').hide().css('background', 'url(http://mychina.kz/china2/img/maps/'+nmaps[value]+'.jpg) 0 0 no-repeat').fadeIn(1000);

        tab.each(function () {
            if($(this).data('city') === value){
                $(this).addClass('active')
                    .siblings()
                    .removeClass('active');
            }
        });
        return false;
    });
});*/