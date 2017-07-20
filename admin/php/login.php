<?php
/**
 * Created by PhpStorm.
 * User: Shamil
 * Date: 17.07.2017
 * Time: 00:34
 */
require_once ('functions.php');
require_once('Database.php');

if (!empty($_POST['email']) && !empty($_POST['password'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    $db = new Database();

    $data = $db->con->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
    $data->bindValue(':email', $email, PDO::PARAM_STR);
    $data->execute();

    $user = $data->fetch();

    if ($user){
        if (password_verify($password, $user['password'])){
            $token = uniqid("token");
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['photo'] = $user['photo'];
            setcookie("token", $token, time() + 3600*2, '/');

            $db->update_token($user['id'], $token);
            redirect(BASE_URL."php/admin.php");
        }
        else{
            redirect(BASE_URL.'login2.html');
        }
    }
    else{
        redirect(BASE_URL.'login2.html');
    }


}