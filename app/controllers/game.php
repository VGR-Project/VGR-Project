<?php

class Game extends Controller {
  public function index($id) {
    session_start();
    if(isset($_SESSION["user"])) {
      $data['name'] = $_SESSION['user']['username'];
      $data["RCRating"] = $this->model("Rating_model")->rowUserRating($_SESSION['user']['email'], $id);
      $data["Urating"] = $this->model("Rating_model")->userRating($_SESSION['user']['email'], $id);
    }
    $data["title"] = $this->model("Gamelists_model")->getTitleById($id)["title"];
    $data["game"] = $this->model("Gamelists_model")->getGameById($id);
    $data["CURating"] = $this->model("Rating_model")->ratingCountUser($id);
    $data["review"] = $this->model("Review_model")->getReviewGame($id);
    $data["idGame"] = $id;
    $this->view("template/header", $data);
    $this->view("game/index", $data);
    $this->view("template/footer");
  }

  public function rating($id) {
    session_start();
    if($_POST['rating'] != "") {
      $this->model("Rating_model")->inputRating($id, $_POST['rating'], $_SESSION['user']['email']);
    }
    header("location: ".BASE_URL."/game/index/".$id);
  }

  public function updaterating($id) {
    session_start();
    if($_POST['rating'] != "") {
      $this->model("Rating_model")->updateRating($id, $_POST['rating'], $_SESSION['user']['email']);
    }
    header("location: ".BASE_URL."/game/index/".$id);
  }

  public function review($id) {
    session_start();
    if($_POST['review'] != "") {
      $this->model("Review_model")->inputReview($id, $_POST['review'], date("Y-m-d h:i:s"), $_SESSION['user']['email']);
    }
    header("location: ".BASE_URL."/game/index/".$id);
  }

  public function deletereview($id, $idGame) {
    session_start();
    $this->model("Review_model")->deleteReview($id);
    header("location: ".BASE_URL."/game/index/".$idGame);
  }
}