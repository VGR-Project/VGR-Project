<?php

class Users_models
{
    private $table = "users";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function add($data) {
        $this->db->query("INSERT INTO . $this->table .  VALUES (NULL, :uname, :email, :pass, :role)");
        $this->db->bind('uname', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('pass', $data['password']);
        $this->db->bind('role', $data['role']);
       
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function checkDataByEmail($data) {
        $this->db->query("SELECT * FROM {$this->table} WHERE email = :email");
        $this->db->bind('email', $data['email']);
        return $this->db->rowCount();
    }

    public function getDataByEmail($data) {
        $this->db->query("SELECT * FROM {$this->table} WHERE email = :email");
        $this->db->bind('email', $data['email']);
        return $this->db->result();
    }

    public function validateUser($data){
        $query = 'SELECT * FROM {$this->table} WHERE email = :email';
        $this->db->query($query);
        $this->db->bind('email', $data['email']);

        return $this->db->result();

    }

   

 
}