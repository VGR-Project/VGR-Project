<?php

class Game extends Controller {
  public function index($id = NULL) {
    if($id === NULL || $this->model("Gamelists_model")->checkGame($id) === 0) {
      header("location: ".BASE_URL);
    }
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

  public function rating($id = NULL) {
    session_start();
    if ($id === NULL) {
      header("location: ".BASE_URL);
    } else if($_POST['rating'] != "" || $_POST['rating'] != NULL) {
      $this->model("Rating_model")->inputRating($id, $_POST['rating'], $_SESSION['user']['email']);
    }
    header("location: ".BASE_URL."/game/index/".$id);
  }

  public function updaterating($id = NULL) {
    session_start();
    if ($id === NULL) {
      header("location: ".BASE_URL);
    } else if ($_POST['rating'] != "" || $_POST['rating'] != NULL) {
      $this->model("Rating_model")->updateRating($id, $_POST['rating'], $_SESSION['user']['email']);
    }
    header("location: ".BASE_URL."/game/index/".$id);
  }

  public function review($id = NULL) {
    session_start();
    if ($id === NULL) {
      header("location: ".BASE_URL);
    } else if ($_POST['review'] != "" || $_POST['review'] != NULL) {
      $this->model("Review_model")->inputReview($id, $_POST['review'], date("Y-m-d h:i:s"), $_SESSION['user']['email']);
    }
    header("location: ".BASE_URL."/game/index/".$id);
  }

  public function deletereview($id = NULL, $idGame = NULL) {
    session_start();
    if ($id === NULL || $idGame === NULL) {
      header("location: ".BASE_URL);
    }
    $this->model("Review_model")->deleteReview($id);
    header("location: ".BASE_URL."/game/index/".$idGame);
  }

  public function updatereview($id = NULL, $idGame = NULL) {
    session_start();
    if ($id === NULL || $idGame === NULL) {
      header("location: ".BASE_URL);
    }
    $this->model("Review_model")->updateReview($id, $_POST['review']);
    header("location: ".BASE_URL."/game/index/".$idGame);
  }
}