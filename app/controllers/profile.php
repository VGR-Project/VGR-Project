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
}