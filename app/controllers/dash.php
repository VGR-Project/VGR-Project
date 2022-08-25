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

  public function search() {
    session_start();
    if(!isset($_SESSION["user"])) {
      $data['name'] = "Guest";
    } else if (!isset($_POST["search"])) {
      header("location: ".BASE_URL);
    } else {
      $data['name'] = $_SESSION['user']['username'];
    }
    $data["title"] = "Dashboard";
    $data["search"] = $this->model("Gamelists_model")->search($_POST);
    $this->view("template/header", $data);
    $this->view("dash/search", $data);
    $this->view("template/footer");
  }

  public function genre($genre) {
    session_start();
    if(!isset($_SESSION["user"])) {
      $data['name'] = "Guest";
    } else {
      $data['name'] = $_SESSION['user']['username'];
    }
    $data["title"] = $genre;
    $data["genre"] = $this->model("Gamelists_model")->getGameByGenre($genre);
    $this->view("template/header", $data);
    $this->view("dash/genre", $data);
    $this->view("template/footer");
  }
}