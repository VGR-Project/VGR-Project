<?php

class Gamelists extends Controller{
    public function index(){
        session_start();
        if(!isset($_SESSION["user"])) {
        $data['name'] = "Guest";
        } else {
        $data['name'] = $_SESSION['user']['username'];
        }
        $data["title"] = "Game List";
        $data["game-db"] = $this->model("Gamelists_model")->getAll();
        $this->view("template/header", $data);
        $this->view("gamelists/index", $data);
        $this->view("template/footer");
    }
}