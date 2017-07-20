<?php
/**
 * Created by PhpStorm.
 * User: keyzed
 * Date: 01.07.2015
 * Time: 15:50
 */

class Helper {
    public function redirect($url, $js = false){
        if(!$js){
            header('Location: '.$url);
        } else {
            echo '<script>location.href="'.$url.'";</script>';
        }
    }
} 