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
        $this->db->query("INSERT INTO {$this->table}(`Username`, `email`, `Password`) VALUES (:uname, :email, :pass)");
        $this->db->bind('uname', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('pass', $data['password']);
        $this->db->resultAll();
    }

    public function checkDataByEmail($data) {
        $this->db->query("SELECT * FROM {$this->table} WHERE email = :email");
        $this->db->bind('email', $data['email']);
        return $this->db->rowCount();
    }
}