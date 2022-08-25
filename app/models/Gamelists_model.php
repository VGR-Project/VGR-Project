<?php

class Gamelists_model
{
    private $table = "gamelists";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getAll() {
      $this->db->query("SELECT * FROM {$this->table}");
      return $this->db->resultAll();
    }

    public function getNew() {
      $this->db->query("SELECT * FROM {$this->table} ORDER BY `release-date` LIMIT 5");
      return $this->db->resultAll();
    }

    public function getRecommended($limit) {
      $this->db->query("SELECT * FROM {$this->table} ORDER BY `imdb-rating` DESC LIMIT :mit, :set");
      $this->db->bind("mit", $limit);
      $this->db->bind("set", 4);
      return $this->db->resultAll();
    }

    public function getGameById($id) {
      $this->db->query("SELECT * FROM {$this->table} WHERE id = :id");
      $this->db->bind("id", $id);
      return $this->db->result();
    }

    public function getTitleById($id) {
      $this->db->query("SELECT title FROM {$this->table} WHERE id = :id");
      $this->db->bind("id", $id);
      return $this->db->result();
    }

    public function getGameByGenre($genre) {
      $this->db->query("SELECT * FROM {$this->table} WHERE genres LIKE '%{$genre}%'");
      // Idk why this wont to convert pdo bind...
      return $this->db->resultAll();
    }
}