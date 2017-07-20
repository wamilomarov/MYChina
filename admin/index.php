<?php
/**
 * Created by PhpStorm.
 * User: Shamil
 * Date: 20.07.2017
 * Time: 11:58
 */


require_once('php/functions.php');
require_once('php/Database.php');
$user_id = $_SESSION['user_id'];
$token = $_COOKIE['token'];
$db = new Database();

if ($db->check_token($user_id, $token)){
    redirect(BASE_URL."datatables.php");
}
else{
    redirect(BASE_URL."login2.html");
}