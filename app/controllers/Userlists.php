<?php

class Userlists extends Controller{
    public function index(){
        session_start();
        if(isset($_SESSION["user"])) {
            $data['name'] = $_SESSION['user']['username'];
        }
        $data["title"] = "User List";
        $data["user-db"] = $this->model("Users_model")->getAll();
        $this->view("template/header", $data);
        $this->view("userlists/index", $data);
        $this->view("template/footer");
    }

    public function tambah(){
        if($this->model('Gamelists_model')->tambahGame($_POST) > 0){
            header('Location: ' . BASE_URL . "/gamelists/index");
            exit;
        } else{
            header('Location:' . BASE_URL . '/user/singleData');
        }
    }

    public function delete($id){
        if($this->model('Gamelists_model')->deleteGame($id) > 0){
            header('Location: ' . BASE_URL . "/gamelists/index");
            exit;
        } else{
            header('Location:' . BASE_URL . '/gamelists/index');
        }
    }    

    public function ubah(){
        $this->model('Gamelists_model')->ubahDataGame($_POST);
        header('Location: ' . BASE_URL . "/gamelists/index");
    }

    public function getUbah(){
        echo json_encode($this->model("Gamelists_model")->getGameById_forEdit($_POST['id']));
    }
}