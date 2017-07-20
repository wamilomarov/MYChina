<?php
/**
 * Created by PhpStorm.
 * User: Shamil
 * Date: 18.07.2017
 * Time: 21:13
 */

if (!empty($_POST['id']) && !empty($_POST['user_id']) && !empty($_POST['token'])){

    $user_id = $_POST['user_id'];
    $token = $_POST['token'];
    $id = $_POST['id'];
    require_once ('functions.php');
    require_once('Database.php');

    $db = new Database();

    if ($db->check_token($user_id, $token)){
        $delete = $db->con->prepare("DELETE FROM feedbacks WHERE id = :id");
        $delete->bindValue(':id', $id, PDO::PARAM_INT);
        $delete->execute();
        print(TRUE);
    }
    else{
        setcookie('token', '', time() - 3600);
        redirect(BASE_URL."login2.html");
    }
}
