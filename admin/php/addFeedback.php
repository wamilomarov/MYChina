<?php
/**
 * Created by PhpStorm.
 * User: Shamil
 * Date: 18.07.2017
 * Time: 21:24
 */

if (!empty($_POST['name']) && !empty($_POST['feedback']) && !empty($_FILES['photo'])){



    $user_id = $_POST['user_id'];
    $token = $_POST['token'];
    $name = $_POST['name'];
    $feedback = $_POST['feedback'];
    require_once ('functions.php');
    require_once('Database.php');
    $db = new Database();
    if ($db->check_token($user_id, $token)){


        $photo = $_FILES['photo'];


        $info = getimagesize($photo['tmp_name']);

        if ($info['mime'] != "image/jpeg" && $info['mime'] != "image/png") {
            echo 407;

        }

        $target_file = basename($photo["name"]);
        $photo_name = uniqid();
        $fileType = pathinfo($target_file, PATHINFO_EXTENSION);
        $name = $photo_name . "_" . date("Y_m_d_H_i_s");
        $name = $name . '.' . $fileType;
        $name = str_replace(" ", "_", $name);

        if (move_uploaded_file($photo['tmp_name'], BASE_URL."img/feedback_photo/" . $name)) {
            $db->addFeedback($name, $feedback, $photo_name);
            print("YES");
        }


        }
    else{
        setcookie('token', '', time() - 3600);
        redirect(BASE_URL."login2.html");
    }
}
