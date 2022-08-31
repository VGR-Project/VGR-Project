<?php

class Gamelists extends Controller{
    public function index(){
        session_start();
        if(isset($_SESSION["user"])) {
            if($_SESSION["user"]['role'] === "user") {
                header('Location: '.BASE_URL);
            }
            $data['name'] = $_SESSION['user']['username'];
        } else {
            header('Location: '.BASE_URL);
        }
        $data["title"] = "Game List";
        $data["game-db"] = $this->model("Gamelists_model")->getAll();
        $this->view("template/header", $data);
        $this->view("gamelists/index", $data);
        $this->view("template/footer");
    }

    public function tambah(){
        if(isset($_SESSION["user"])) {
            if($_SESSION["user"]['role'] === "user") {
                header('Location: '.BASE_URL);
            }
            $data['name'] = $_SESSION['user']['username'];
        } else {
            header('Location: '.BASE_URL);
        }
        if($this->model('Gamelists_model')->tambahGame($_POST) > 0){
            header('Location: ' . BASE_URL . "/gamelists/index");
            exit;
        } else{
            header('Location:' . BASE_URL . '/user/singleData');
        }
    }

    public function delete($id){
        if(isset($_SESSION["user"])) {
            if($_SESSION["user"]['role'] === "user") {
                header('Location: '.BASE_URL);
            }
            if($this->model('Gamelists_model')->deleteGame($id) > 0){
                header('Location: ' . BASE_URL . "/gamelists/index");
                exit;
            } else{
                header('Location:' . BASE_URL . '/gamelists/index');
            }
        } else {
            header('Location: '.BASE_URL);
        }
    }    

    public function ubah(){
        if(isset($_SESSION["user"])) {
            if($_SESSION["user"]['role'] === "user") {
                header('Location: '.BASE_URL);
            }
            $this->model('Gamelists_model')->ubahDataGame($_POST);
            header('Location: ' . BASE_URL . "/gamelists/index");
        } else {
            header('Location: '.BASE_URL);
        }
    }

    public function getUbah(){
        if(isset($_SESSION["user"])) {
            if($_SESSION["user"]['role'] === "user") {
                header('Location: '.BASE_URL);
            }
            echo json_encode($this->model("Gamelists_model")->getGameById_forEdit($_POST['id']));
        } else {
            header('Location: '.BASE_URL);
        }
    }
}