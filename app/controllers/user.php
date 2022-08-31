<?php
Class user extends Controller{
public function index() {
    session_start();
    if(isset($_SESSION["user"])) {
      $data['name'] = $_SESSION['user']['username'];
    }
    $this->view("template/header", $data);
    $this->view("template/navbar", $data);
    $this->view("user/index", $data);
    $this->view("template/footer");
  }}