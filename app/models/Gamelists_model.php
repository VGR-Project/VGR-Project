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
      $this->db->query("SELECT * FROM {$this->table} ORDER BY title LIMIT 5");
      return $this->db->resultAll();
    }
}