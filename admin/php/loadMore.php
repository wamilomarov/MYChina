<?php
/**
 * Created by PhpStorm.
 * User: Shamil
 * Date: 18.07.2017
 * Time: 00:34
 */

if (!empty($_POST['offset']) && !empty($_POST['token']) && !empty($_POST['user_id'])){

    require_once('functions.php');
    require_once('Database.php');
    $user_id = $_POST['user_id'];
    $token = $_POST['token'];
    $offset = $_POST['offset'];
    $db = new Database();



    $data = $db->getRequests($user_id, $token, $offset);

 foreach ($data as $datum) {
     $tr_class = $datum['seen'] == 1 ? 'active' : 'success';
     $name = $datum['name'];
     $phone = $datum['phone'];
     $email = $datum['email'];
     $time = date("j M Y H:i:s", strtotime($datum['created_at']));
     $makeSeen = $datum['seen'] == 1 ? 'style = "display: none"' : '';
     $makeNotSeen = $datum['seen'] == 0 ? 'style = "display: none"' : '';
     $id = $datum['id'];

     echo "<tr id='".$id."' class=$tr_class style='transition:background-color 0.5s ease'>
        <td>$name</td>
        <td>$phone</td>
        <td>$email</td>
        <td class='center'>$time</td>
        <td >
            <button class='btn seen' $makeSeen onclick='makeSeen($id)'>Seen</button>
            <button class='btn unseen' $makeNotSeen onclick='makeNotSeen($id)'>Not Seen</button>
        </td>
    </tr>";
 }





}
