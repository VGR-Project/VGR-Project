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
      $this->db->query("SELECT {$this->table}.*, CAST(AVG(rating.rating) AS DECIMAL(4, 2)) AS rating 
      FROM {$this->table}, rating
      WHERE {$this->table}.id = rating.id_game
      GROUP BY {$this->table}.id 
      ORDER BY `release-date`
      LIMIT 5");
      return $this->db->resultAll();
    }

    public function getRecommended($limit) {
      $this->db->query("SELECT {$this->table}.*, CAST(AVG(rating.rating) AS DECIMAL(4, 2)) AS rating 
      FROM {$this->table}, rating
      WHERE {$this->table}.id = rating.id_game
      GROUP BY {$this->table}.id 
      ORDER BY rating DESC
      LIMIT :mit, :set");
      $this->db->bind("mit", $limit);
      $this->db->bind("set", 4);
      return $this->db->resultAll();
    }

    public function getGameById($id) {
      $this->db->query("SELECT {$this->table}.*, CAST(AVG(rating.rating) AS DECIMAL(4, 2)) AS rating 
        FROM {$this->table}, rating 
        WHERE id = :id 
        AND {$this->table}.id = rating.id_game");
      $this->db->bind("id", $id);
      return $this->db->result();
    }

    public function getTitleById($id) {
      $this->db->query("SELECT title 
        FROM {$this->table} 
        WHERE id = :id");
      $this->db->bind("id", $id);
      return $this->db->result();
    }

    public function getGameByGenre($genre) {
      $this->db->query("SELECT {$this->table}.*, CAST(AVG(rating.rating) AS DECIMAL(4, 2)) AS rating 
        FROM {$this->table}, rating 
        WHERE genres LIKE '%{$genre}%' 
        AND {$this->table}.id = rating.id_game 
        GROUP BY {$this->table}.id 
        ORDER BY {$this->table}.title ASC");
      // Idk why this wont to convert pdo bind...
      return $this->db->resultAll();
    }

    public function search($search) {
      $this->db->query("SELECT {$this->table}.*, CAST(AVG(rating.rating) AS DECIMAL(4, 2)) AS rating FROM {$this->table}, rating
        WHERE {$this->table}.id = rating.id_game AND (genres LIKE '%{$search["search"]}%' 
        OR title LIKE '%{$search["search"]}%' 
        OR directors LIKE '%{$search["search"]}%')
        GROUP BY {$this->table}.id
        ORDER BY {$this->table}.title ASC");
      return $this->db->resultAll();
    }
}