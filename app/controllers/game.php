<?php

class Game extends Controller {
  public function index($id) {
    session_start();
    if(!isset($_SESSION["user"])) {
      $data['name'] = "Guest";
    } else {
      $data['name'] = $_SESSION['user']['username'];
    }
    $data["title"] = $this->model("Gamelists_model")->getTitleById($id)["title"];
    $data["game"] = $this->model("Gamelists_model")->getGameById($id);
    $this->view("template/header", $data);
    $this->view("game/index", $data);
    $this->view("template/footer");
  }
}