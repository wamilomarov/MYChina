<?php
/**
 * Created by PhpStorm.
 * User: Shamil
 * Date: 17.07.2017
 * Time: 16:17
 */


require_once ('functions.php');
require_once('Database.php');

$user_id = $_SESSION['user_id'];
$token = $_COOKIE['token'];

$db = new Database();

if($db->check_token($user_id, $token)){
    $logout = $db->con->prepare("UPDATE tokens SET active = 0 WHERE token = :token AND user_id = :user_id");
    $logout->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $logout->bindValue(':token', $token, PDO::PARAM_STR);
    $logout->execute();
    setcookie('token', '', time() - 3600);
    session_unset();
    redirect(BASE_URL."login2.html");
}
else{
    setcookie('token', '', time() - 3600);
    redirect(BASE_URL."login2.html");
}