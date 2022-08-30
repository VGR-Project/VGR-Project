<?php

class Review_model
{
    private $table = "review";
    private $db;

    public function __construct()
    {
      $this->db = new Database;
    }

    public function getReviewGame($id) {
      $this->db->query("SELECT {$this->table}.*, users.Username FROM {$this->table}, users
      WHERE users.email = {$this->table}.email_user
      AND id_game = :id
      ORDER BY `date_review` ASC");
      $this->db->bind("id", $id);
      return $this->db->resultAll();
    }

    public function inputReview($id, $review, $date, $email) {
      $this->db->query("INSERT INTO {$this->table} (`id_game`, `review`, `date_review`, `email_user`)
        VALUES (:id, :rating, :date, :email)");
      $this->db->bind("id", $id);
      $this->db->bind("rating", $review);
      $this->db->bind("date", $date);
      $this->db->bind("email", $email);
      return $this->db->rowCount();
    }

    public function deleteReview($id) {
      $this->db->query("DELETE FROM {$this->table} 
        WHERE id_review = :id");
      $this->db->bind("id", $id);
      return $this->db->rowCount();
    }

    public function updateReview($id, $review) {
      $this->db->query("UPDATE {$this->table} 
        SET `review` = :review
        WHERE id_review = :id");
      $this->db->bind("id", $id);
      $this->db->bind("review", $review);
      return $this->db->rowCount();
    }
}