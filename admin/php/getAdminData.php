<?php
/**
 * Created by PhpStorm.
 * User: Shamil
 * Date: 17.07.2017
 * Time: 01:56
 */
require_once ('functions.php');
require_once('Database.php');

if (!empty($_GET['user_id']) && !empty($_GET['token'])){
    $user_id = $_GET['user_id'];
    $token = $_GET['token'];

    $db = new Database();

    if ($db->check_token($user_id, $token)){
        $data = $db->con->query("SELECT * FROM consultation_request ORDER BY seen ASC, created_at DESC ");
        $result = $data->fetchAll();
var_dump($result);
        //print_r($result);
    }
    else{
        setcookie('token', '', time() - 3600);
        redirect(BASE_URL.'login2.html');
    }






}