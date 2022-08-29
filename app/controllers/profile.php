<?php

class profile extends Controller{
    public function index(){
        session_start();
        if(!isset($_SESSION["user"])) {
            header("location: ".BASE_URL."/login");
        } else {
            $data['name'] = $_SESSION['user']['username'];
        }
        $data["title"] = "Edit Profile";
        $data["fav1"] = $this->model("Gamelists_model")->getRecommended(12);
        $this->view("template/header", $data);
        $this->view("profile/index", $data);
        $this->view("template/footer");
    }
}