<?php
session_start();

$name = $_POST['Name'];
$phone = $_POST['Phone'];
$email =  $_POST['Email'];

$subject = 'Заявка на сайте Mychina.kz';
$message = "<table cellspacing='0' style='width: 100%; font-family: tahoma, arial'>";
$message .= '<tr><td></td>';
$message .= '<td style="width: 230px"><img src="http://'.$_SERVER['SERVER_NAME'].'/images/imgmail/logo.png" ></td>';
$message .= '<td style="width: 370px; text-align: right">';
$message .= '<a target="_blank" href="https://vk.com/mychina_kz"><img style="margin-right: 10px;" src="http://'.$_SERVER['SERVER_NAME'].'/images/imgmail/soc_vk.png" ></a>';
$message .= '<a target="_blank" href="https://facebook.com/mychinakz"><img style="margin-right: 10px;" src="http://'.$_SERVER['SERVER_NAME'].'/images/imgmail/soc_fb.png" ></a>';
$message .= '<a target="_blank" href="https://instagram.com/mychina_world/"><img style="margin-right: 10px;" src="http://'.$_SERVER['SERVER_NAME'].'/images/imgmail/soc_inst.png" ></a>';
$message .= '<a target="_blank" href="https://www.youtube.com/channel/UC1_pFqFf9-Adw7nzV5Uphyg"><img style="margin-right: 10px;" src="http://'.$_SERVER['SERVER_NAME'].'/images/imgmail/soc_yt.png" ></a>';
$message .= '<a target="_blank" href="http://ok.ru/group/53389901430904"><img style="margin-right: 10px;" src="http://'.$_SERVER['SERVER_NAME'].'/images/imgmail/soc_ok.png" ></a>';
$message .= '</td>';
$message .= '<td></td></tr>';
$message .= '<tr><td></td>';
$message .= '<td colspan="2" style="text-align: center"><img style="margin-right: 10px;" src="http://'.$_SERVER['SERVER_NAME'].'/images/imgmail/bg_line.png" ></td>';
$message .= '<td></td></tr>';
$message .= '</tr><tr><td></td>';
$message .= '<td width="600" colspan="2" style="padding-top:10px; padding-bottom:10px;">';
$message .= 'Здравствуйте, '.$name.'!<br /><br />';
$message .= 'Спасибо за ваш интерес к нашим программам обучения в Китае.';
$message .= '<br> Ваша заявка сейчас в обработке.';
$message .= '<br> Наш менеджер свяжется с Вами через 15-20 минут и проконсультирует по условиям гранта.';
$message .= '<br><br> Вы указали следующие данные:<br />';
$message .= 'Имя: '.$name.'<br />';
$message .= 'Телефон: '.$phone.'<br />';
$message .= 'E-mail: '.$email.'<br /><br />';
$message .= 'Ну, а пока Вы ждете звонка, ознакомьтесь с программой на 2016 год.';
$message .= '</td><td></td></tr>';
$message .= '<tr><td></td>';
//$message .= '<td style="text-align: center"><img height="170" src="http://'.$_SERVER['SERVER_NAME'].'/images/imgmail/buklet.png" ></td>';
$message .= '<td colspan="2"><ul style="margin-left: 10px;"><li>Условия гранта</li><li>Специальности</li><li>Как поступить в Китай по гранту</li><li>Преимущества MyChina</li></ul></td>';
//$message .= '<td><p style="font-size: 18px; font-weight: bold; ">Буклет MyChina 2016</p>';
//$message .= '<ul style="font-size: 14px; margin-left: 10px;"><li>Программы обучения</li><li>Университеты партнеры MyChina</li><li>Преимущества обучения в Китае</li><li>О компании MyChina</li></ul>';
//$message .= '<p style="margin-left: 60px;"><a target="_blank" href="http://'.$_SERVER['SERVER_NAME'].'/files/MyChina_buklet.pdf"><img height="35" src="http://'.$_SERVER['SERVER_NAME'].'/images/imgmail/btn.png" ></a></p></td>';
$message .= '<td></td></tr>';
$message .= '<tr><td></td><td colspan="2" style="text-align: center"><br /><br /><a style="padding: 10px;border-radius: 25px;border: 1px solid #CA0207;background: #CA0207;color: #fff;text-decoration: none;" target="_blank" href="http://'.$_SERVER['SERVER_NAME'].'/files/BAK.pdf">БАКАЛАВРИАТ</a>                <a style="padding: 10px;border-radius: 25px;border: 1px solid #CA0207;background: #CA0207;color: #fff;text-decoration: none;" target="_blank" href="http://'.$_SERVER['SERVER_NAME'].'/files/MAG.pdf">МАГИСТРАТУРА</a>                <a style="padding: 10px;border-radius: 25px;border: 1px solid #CA0207;background: #CA0207;color: #fff;text-decoration: none;" target="_blank" href="http://'.$_SERVER['SERVER_NAME'].'/files/Nanfin.pdf">НАНФИН</a><br /><br /></td><td></td></tr>';
$message .= '<tr><td></td>';
$message .= '<td style="padding-top: 20px; padding-bottom: 10px;">с уважением, <br>команда MyChina</td>';
$message .= '<td></td>';
$message .= '<td></td></tr>';
$message .= '<tr style="background: #ca0207;"><td></td><td colspan="2" style="text-align: center"><img style="margin-right: 10px;" src="http://'.$_SERVER['SERVER_NAME'].'/images/imgmail/bg_line2.png" ></td><td></td></tr>';
$message .= '<tr style="background: #ca0207; color: #fff;" ><td></td>';
$message .= '<td height="60" style="padding-left: 10px; padding-bottom: 24px;">';
$message .= '<p style="font-size: 12px; margin: 0; margin-bottom: 10px;">Подписывайтесь на наши группы</p>';
$message .= '<a target="_blank" href="https://vk.com/mychina_kz"><img style="margin-right: 10px;" src="http://'.$_SERVER['SERVER_NAME'].'/images/imgmail/soc_vk.png" ></a>';
$message .= '<a target="_blank" href="https://facebook.com/mychinakz"><img style="margin-right: 10px;" src="http://'.$_SERVER['SERVER_NAME'].'/images/imgmail/soc_fb.png" ></a>';
$message .= '<a target="_blank" href="https://instagram.com/mychina_world/"><img style="margin-right: 10px;" src="http://'.$_SERVER['SERVER_NAME'].'/images/imgmail/soc_inst.png" ></a>';
$message .= '<a target="_blank" href="https://www.youtube.com/channel/UC1_pFqFf9-Adw7nzV5Uphyg"><img style="margin-right: 10px;" src="http://'.$_SERVER['SERVER_NAME'].'/images/imgmail/soc_yt.png" ></a>';
$message .= '<a target="_blank" href="http://ok.ru/group/53389901430904"><img style="margin-right: 10px;" src="http://'.$_SERVER['SERVER_NAME'].'/images/imgmail/soc_ok.png" ></a>';
$message .= '</td>';
$message .= '<td  style="padding-left: 90px; padding-bottom: 30px;"><p style="font-size: 12px; margin: 0;">MyChina.org</p>';
$message .= '<p style="font-size: 12px; margin: 0;">г.Алматы, Шевчено 165б, уг. ул. Радостовца.</p>';
$message .= '<p style="font-size: 12px; margin: 0;">+7 (727) 335 00 00, +7 (707) 335 00 00</p></td>';
$message .= '<td></td></tr>';
$message .= '<tr style="background: #4b4b4b;"><td></td>';
$message .= '<td width="600" colspan="2" style="text-align: center">';
$message .= '<p style="font-size: 12px; margin: 0; margin-top:10px; margin-bottom: 10px;">&copy;MyChina.org 2015 - Все права защищены</p></td>';
$message .= '<td></td></tr>';
$message .= '</table>';
/*
$message = 'Здравстуйте, '.$name.'!<br /><br />';
$message .= 'Вы оставили заявку на сайте Mychina.kz'.' со следующими данными:<br /><br />';
$message .= 'Имя: '.$name.'<br />';
$message .= 'Телефон: '.$phone.'<br />';
$message .= 'E-mail: '.$email.'<br /><br />';
$message .= 'Наш менеджер свяжется с Вами в ближайшее время и ответит на все вопросы';*/
$content_text = strip_tags($message);
$from = 'noreply@mychina.org';
$to = $email; //определили выше в родительском файле

//mandrill goes here
$uri = 'https://mandrillapp.com/api/1.0/messages/send.json';
$api_key = 'GeQHYuVixJkYSZzP2LMjig';
//$content_text = strip_tags($content);
$massive = array(
    'key' => $api_key,
    'message' => array(
        'html' => $message,
        'text' => $content_text,
        'subject' => $subject,
        'from_email' => $from,
        'to' => array(
            array('email' => $to, 'name' => $to)
        ),
        'track_opens' => true,
        'track_clicks' => true,
        'auto_text' => true,
        'url_strip_qs' => true,
        'preserve_recipients' => true,
    ),
    'async' => false
);
$postString = json_encode($massive);
/*$postString = '{
            "key": "' . $api_key . '",
            "message": {
             "html": "' . $message . '",
             "text": "' . $content_text . '",
             "subject": "' . $subject . '",
             "from_email": "' . $from . '",
             "from_name": "' . $from . '",
             "to": [
             {
             "email": "' . $to . '",
             "name": "' . $to . '"
             }
             ],
             "track_opens": true,
             "track_clicks": true,
             "auto_text": true,
             "url_strip_qs": true,
             "preserve_recipients": true
            },
            "async": false
            }';*/
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $uri);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
$result = curl_exec($ch);