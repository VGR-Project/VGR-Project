<?php

class Userlists extends Controller{
    public function index(){
        session_start();
        if(isset($_SESSION["user"])) {
            if($_SESSION["user"]['role'] != "admin") {
                header('Location: '.BASE_URL);
            }
            $data['name'] = $_SESSION['user']['username'];
        } else {
            header('Location: '.BASE_URL);
        }
        $data["title"] = "User List";
        $data["user-db"] = $this->model("Users_model")->getAll();
        $this->view("template/header", $data);
        $this->view("userlists/index", $data);
        $this->view("template/footer");
    }

    public function tambah(){
        if(isset($_SESSION["user"])) {
            if($_SESSION["user"]['role'] != "admin") {
                header('Location: '.BASE_URL);
            }
            if($this->model('Gamelists_model')->tambahGame($_POST) > 0){
                header('Location: ' . BASE_URL . "/gamelists/index");
                exit;
            } else{
                header('Location:' . BASE_URL . '/user/singleData');
            }
        } else {
            header('Location: '.BASE_URL);
        }
    }

    public function delete($id){
        if(isset($_SESSION["user"])) {
            if($_SESSION["user"]['role'] != "admin") {
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
            if($_SESSION["user"]['role'] != "admin") {
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
            if($_SESSION["user"]['role'] != "admin") {
                header('Location: '.BASE_URL);
            }
            echo json_encode($this->model("Gamelists_model")->getGameById_forEdit($_POST['id']));
        } else {
            header('Location: '.BASE_URL);
        }
    }
}