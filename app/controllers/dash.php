<?php

class Dash extends Controller {
  public function index() {
    session_start();
    if(isset($_SESSION["user"])) {
      $data['name'] = $_SESSION['user']['username'];
    }
    $data["title"] = "Dashboard";
    $data["new"] = $this->model("Gamelists_model")->getNew(6);
    $data["old"] = $this->model("Gamelists_model")->getOld(6);
    $data["rec1"] = $this->model("Gamelists_model")->getRecommended(12);
    $data['fav1'] = $this->model("Gamelists_model")->getFavorites(6);
    $data["rand1"] = $this->model("Gamelists_model")->getRandom(12);
    $data["rand2"] = $this->model("Gamelists_model")->getRandom(6);
    $this->view("template/header", $data);
    $this->view("dash/index", $data);
    $this->view("template/footer");
  }

  public function search() {
    if(!isset($_POST["search"])) {
      header("location: ".BASE_URL);
    }
    session_start();
    if(isset($_SESSION["user"])) {
      $data['name'] = $_SESSION['user']['username'];
    }
    $data["title"] = "Dashboard";
    $data["search"] = $this->model("Gamelists_model")->search($_POST);
    $this->view("template/header", $data);
    $this->view("dash/search", $data);
    $this->view("template/footer");
  }

  public function genre($genre = NULL) {
    if($genre === NULL) {
      header("location: ".BASE_URL);
    }
    session_start();
    if(isset($_SESSION["user"])) {
      $data['name'] = $_SESSION['user']['username'];
    }
    $data["title"] = $genre;
    $data["genre"] = $this->model("Gamelists_model")->getGameByGenre($genre);
    $this->view("template/header", $data);
    $this->view("dash/genre", $data);
    $this->view("template/footer");
  }
}