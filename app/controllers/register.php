<?php

class Register extends Controller {
    public function index()
    {
        session_start();
        if(isset($_SESSION["user"])) {
            header("location: ".BASE_URL);
            exit;
        }
        session_destroy();
        $data['title'] = 'Register';
        $this->view('template/header', $data);
        $this->view('register/index', $data);
        $this->view('template/footer', $data);
    }

    public function config() {
        $data = [
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'repeat' => $_POST['repeat'],
            'role' => 'user',
        ];
        if( empty($data["username"]) ||
            empty($data["email"]) ||
            empty($data["password"]) ||
            empty($data["repeat"])) {
            unset($_POST);
            header("location: ".BASE_URL."/register");
        } else if($data["password"] != $data["repeat"]) {
            unset($_POST);
            header("location: ".BASE_URL."/register");
        } else {
            if($this->model("Users_model")->checkDataByEmail($data) > 0) {
                unset($_POST);
                header("location: ".BASE_URL."/register");
            } else {
                $this->model("Users_model")->add($data);
                $row = $this->model("Users_model")->getDataByEmail($data);
                session_start();
                $_SESSION["user"] = [
                    'username' => $row['Username'],
                    'email' => $row['email'],
                    'password' => $row['Password'],
                    'role' => $row['role']
                ];
                unset($_POST);
                header("location: ".BASE_URL);
            }
        }
    }
}