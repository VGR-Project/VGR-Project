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

    public function tambah(){
        if($this->model('Gamelists_model')->tambahGame($_POST) > 0){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . "/gamelists/index");
            exit;
        } else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location:' . BASE_URL . '/user/singleData');
        }
    }

    public function deleteGame($id){
        $query = "DELETE FROM $this->table WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubah(){
        if($this->model('Gamelists_model')->ubahDataGame($_POST) > 0){
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASE_URL . "/gamelists/index");
            exit;
        } else{
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location:' . BASE_URL . '/gamelists/index');
        }
    }

    public function getUbah(){
        echo json_encode($this->model("Gamelists_model")->getGameById_forEdit($_POST['id']));
    }
}