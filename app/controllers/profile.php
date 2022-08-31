<?php

class profile extends Controller{
    public function index(){
        session_start();
        if(!isset($_SESSION["user"])) {
            header("location: ".BASE_URL."/login");
        } else {
            $data['name'] = $_SESSION['user']['username'];
        }
        $data["title"] = "Profile";
        $this->view("template/header", $data);
        $this->view("profile/index", $data);
        $this->view("template/footer");
    }

    public function lists($email) {
        session_start();
        if(!isset($_SESSION["user"])) {
            header("location: ".BASE_URL."/login");
        } else if ($_SESSION["user"] === $email) {
            header("location: ".BASE_URL."/login");
        } else {
            $data['name'] = $_SESSION['user']['username'];
        }
        $data["title"] = "List Game";
        $data["fav1"] = $this->model("Gamelists_model")->getRecommended(12);
        $this->view("template/header", $data);
        $this->view("profile/lists", $data);
        $this->view("template/footer");
    }

    public function update() {
        session_start();
        $data = [
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];
        if( empty($data["username"]) ||
            empty($data["email"]) ||
            empty($data["password"]) ) {
            unset($_POST);
            header("location: ".BASE_URL."/dash");
        } else {
            $this->model("Users_model")->update($data);
            $row = $row = $this->model("Users_model")->getDataByEmail($data);
            $_SESSION["user"] = [
                'username' => $row['Username'],
                'email' => $row['email'],
                'password' => $row['Password'],
                'role' => $row['role']
            ];
            unset($_POST);
            header("location: ".BASE_URL."/profile");
        }
    }
}