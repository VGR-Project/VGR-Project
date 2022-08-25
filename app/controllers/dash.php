<?php

class Dash extends Controller {
  public function index() {
    session_start();
    if(!isset($_SESSION["user"])) {
      $data['name'] = "Guest";
    } else {
      $data['name'] = $_SESSION['user']['username'];
    }
    $data["title"] = "Dashboard";
    $data["new"] = $this->model("Gamelists_model")->getNew();
    $data["rec1"] = $this->model("Gamelists_model")->getRecommended(0);
    $data["rec2"] = $this->model("Gamelists_model")->getRecommended(4);
    $data["rec3"] = $this->model("Gamelists_model")->getRecommended(8);
    $this->view("template/header", $data);
    $this->view("dash/index", $data);
    $this->view("template/footer");
  }
}