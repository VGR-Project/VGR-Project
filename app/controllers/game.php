<?php

class Game extends Controller {
  public function index($id) {
    $data["title"] = $this->model("Gamelists_model")->getTitleById($id)["title"];
    $data["game"] = $this->model("Gamelists_model")->getGameById($id);
    $this->view("template/header", $data);
    $this->view("game/index", $data);
    $this->view("template/footer");
  }
}