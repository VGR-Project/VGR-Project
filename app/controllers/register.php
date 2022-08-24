<?php

class Register extends Controller {
    public function index()
    {
        $data['title'] = 'Register';
        $this->view('template/header', $data);
        $this->view('register/index', $data);
        $this->view('template/footer', $data);
    }

    public function regis() {
        $data = [
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'repeat' => $_POST['repeat'],
        ];
        if( empty($data["username"]) ||
            empty($data["email"]) ||
            empty($data["password"]) ||
            empty($data["repeat"])) {
            unset($_POST);
            header("location: ".BASE_URL."/register");
            // isiin alert, lewat param
        } else if($data["password"] != $data["repeat"]) {
            unset($_POST);
            header("location: ".BASE_URL."/register");
            // isiin alert, lewat param
        } else {
            if($this->model("Users_models")->checkDataByEmail($data) > 0) {
                unset($_POST);
                header("location: ".BASE_URL."/register");
            } else {
                $this->model("Users_models")->add($data);
                // session
                unset($_POST);
                header("location: ".BASE_URL);
            }
        }
    }
}