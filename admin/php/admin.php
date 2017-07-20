<?php
/**
 * Created by PhpStorm.
 * User: Shamil
 * Date: 17.07.2017
 * Time: 01:52
 */
require_once ('functions.php');
require_once('Database.php');

$db = new Database();

if($db->check_token($_SESSION['user_id'], $_COOKIE['token'])){
    redirect(BASE_URL."datatables.php");
}
else{
    setcookie('token', '', time() - 3600);
    redirect(BASE_URL."login2.html");
}