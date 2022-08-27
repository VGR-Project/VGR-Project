
<?php

class Rating_model
{
    private $table = "rating";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function ratingCountUser($id) {
      $this->db->query("SELECT COUNT(email_user) AS CURating FROM {$this->table}
        WHERE id_game = :id");
      $this->db->bind("id", $id);
      return $this->db->result();
    }

    public function rowUserRating($email, $id) {
      $this->db->query("SELECT COUNT(rating) AS CURating FROM {$this->table} WHERE id_game = :id AND email_user = :email");
      $this->db->bind("email", $email);
      $this->db->bind("id", $id);
      return $this->db->result();
    }

    public function userRating($email, $id) {
      $this->db->query("SELECT rating FROM {$this->table}
        WHERE id_game = :id 
        AND email_user = :email");
      $this->db->bind("email", $email);
      $this->db->bind("id", $id);
      return $this->db->result();
    }

    public function inputRating($id, $rating, $email) {
      $this->db->query("INSERT INTO {$this->table} (`id_game`, `rating`, `email_user`)
        VALUES (:id, :rating, :email)");
      $this->db->bind("id", $id);
      $this->db->bind("rating", (double)$rating);
      $this->db->bind("email", $email);
      return $this->db->rowCount();
    }

    public function updateRating($id, $rating, $email) {
      $this->db->query("UPDATE {$this->table} SET rating = :rating WHERE email_user = :email AND id_game = :id");
      $this->db->bind("id", $id);
      $this->db->bind("rating", (double)$rating);
      $this->db->bind("email", $email);
      return $this->db->rowCount();
    }

    
}