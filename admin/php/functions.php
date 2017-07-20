<?php
/**
 * Created by PhpStorm.
 * User: Shamil
 * Date: 17.07.2017
 * Time: 00:35
 */
session_start();

define('BASE_URL', "http://localhost/china2/admin/");

function redirect($url){
    header("Location:$url");
}

function token(){
    return $_SESSION['token'];
}

