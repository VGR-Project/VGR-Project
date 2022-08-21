<?php

class Dash extends Controller {
  public function index() {
    $data["title"] = "Dashboard";
    $data["new"] = $this->model("Gamelists_model")->getNew();
    $this->view("template/header", $data);
    $this->view("dash/index", $data);
    $this->view("template/footer");
  }
}