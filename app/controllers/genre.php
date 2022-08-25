<?php

class Genre extends Controller {
  public function index($genre) {
    session_start();
    if(!isset($_SESSION["user"])) {
      $data['name'] = "Guest";
    } else {
      $data['name'] = $_SESSION['user']['username'];
    }
    $data["title"] = $genre;
    $data["genre"] = $this->model("Gamelists_model")->getGameByGenre($genre);
    $this->view("template/header", $data);
    $this->view("genre/index", $data);
    $this->view("template/footer");
  }
}