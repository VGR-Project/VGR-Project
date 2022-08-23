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

    public function getGameById($id) {
      $this->db->query("SELECT * FROM {$this->table} WHERE id = :id");
      $this->db->bind("id", $id);
      return $this->db->resultAll();
    }

    public function getTitleById($id) {
      $this->db->query("SELECT title FROM {$this->table} WHERE id = :id");
      $this->db->bind("id", $id);
      return $this->db->result();
    }
}