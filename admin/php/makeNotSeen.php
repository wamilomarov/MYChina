<?php
/**
 * Created by PhpStorm.
 * User: Shamil
 * Date: 17.07.2017
 * Time: 20:25
 */


if (!empty($_POST['id']) && !empty($_POST['user_id']) && !empty($_POST['token'])){

    $user_id = $_POST['user_id'];
    $token = $_POST['token'];
    $id = $_POST['id'];
    require_once ('functions.php');
    require_once('Database.php');

    $db = new Database();

    if ($db->check_token($user_id, $token)){
        $db->makeRequestNotSeen($id);
        print(TRUE);
    }
    else{
        setcookie('token', '', time() - 3600);
        redirect(BASE_URL."login2.html");
    }
}
