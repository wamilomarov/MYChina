<?php

/**
 * Created by PhpStorm.
 * User: Shamil
 * Date: 17.07.2017
 * Time: 00:58
 */
class Database
{
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $db = "gochina";
        public $con;

        function __construct()
        {
            $dsn = "mysql:host=$this->host;dbname=$this->db";
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            $this->con = new PDO($dsn, $this->user, $this->password, $options);

        }

    public function update_token($user_id, $token)
    {
        $deactive = $this->con->prepare("UPDATE tokens SET active = 0 WHERE user_id = :user_id AND active = 1");
        $deactive->bindValue(':user_id', $user_id, PDO::PARAM_INT);
        $deactive->execute();

        $add = $this->con->prepare("INSERT INTO tokens (user_id, token) VALUES (:user_id, :token)");
        $add->bindValue(':user_id', $user_id, PDO::PARAM_INT);
        $add->bindValue(':token', $token, PDO::PARAM_STR);
        $add->execute();
    }

    public function check_token($user_id, $token)
    {
        $data = $this->con->prepare("SELECT COUNT(id) AS num FROM tokens WHERE active = 1 AND user_id = :user_id AND token = :token");
        $data->bindValue(':user_id', $user_id, PDO::PARAM_INT);
        $data->bindValue(':token', $token, PDO::PARAM_STR);
        $data->execute();

        $data = $data->fetch();

        if ($data['num'] == 1){
            return TRUE;
        }
        else{
            return FALSE;
        }

    }

    public function getReqCount($user_id, $token)
    {
        if ($this->check_token($user_id, $token)){
            $data = $this->con->query("SELECT COUNT(id) AS num FROM consultation_request WHERE seen = 0");
            $result = $data->fetch();
            return $result['num'];
        }
        else{
            setcookie('token', '', time() - 3600);
            redirect(BASE_URL.'login2.html');
        }
    }

    public function getRequests($user_id, $token, $offset = 1)
    {
        if ($this->check_token($user_id, $token)){
            $offset = ($offset - 1) * 3;
            $data = $this->con->query("SELECT * FROM consultation_request ORDER BY seen ASC, created_at DESC LIMIT 3 OFFSET $offset");
            $result = $data->fetchAll();
            return $result;
        }
        else{
            setcookie('token', '', time() - 3600);
            redirect(BASE_URL.'login2.html');
        }
    }

    public function addFeedback($name, $feedback, $file_name)
    {
        $data = $this->con->prepare("INSERT INTO feedbacks (name, feedback, photo) VALUES (:name, :feedback, :photo)");
        $data->bindValue(':name', $name, PDO::PARAM_STR);
        $data->bindValue(':feedback', $feedback, PDO::PARAM_STR);
        $data->bindValue(':photo', $file_name, PDO::PARAM_STR);
        $data->execute();
    }

    public function getFeedbacks($user_id, $token)
    {
        if ($this->check_token($user_id, $token)){
        $data = $this->con->query("SELECT * FROM feedbacks LIMIT 12");
        $feedbacks = $data->fetchAll();
        return $feedbacks;
        }
        else{
            setcookie('token', '', time() - 3600);
            redirect(BASE_URL.'login2.html');
        }
    }

    public function getFeedbacksFree()
    {
        $data = $this->con->query("SELECT * FROM feedbacks LIMIT 12");
        $feedbacks = $data->fetchAll();
        return $feedbacks;
    }

    public function makeRequestSeen($id)
    {
        $seen = $this->con->prepare("UPDATE consultation_request SET seen = 1 WHERE id = :id");
        $seen->bindValue(':id', $id, PDO::PARAM_INT);
        $seen->execute();
    }

    public function makeRequestNotSeen($id)
    {
        $seen = $this->con->prepare("UPDATE consultation_request SET seen = 0 WHERE id = :id");
        $seen->bindValue(':id', $id, PDO::PARAM_INT);
        $seen->execute();
    }
}