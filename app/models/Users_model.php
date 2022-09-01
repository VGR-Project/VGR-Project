<?php

class Users_model
{
    private $table = "users";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll() {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultAll();
    }

    public function add($data) {
        $this->db->query("INSERT INTO {$this->table} VALUES ( :uname, :email, :pass, :role)");
        $this->db->bind('uname', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('pass', $data['password']);
        $this->db->bind('role', $data['role']);
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
        $this->db->query("SELECT * FROM {$this->table} WHERE email = :email");
        $this->db->bind('email', $data['email']);
        return $this->db->result();
    }

    public function update($data) {
        $this->db->query("UPDATE {$this->table} SET `Username`=:username,`email`=:emailPost,`Password`=:password 
            WHERE email = :email");
        $this->db->bind('email', $_SESSION['user']['email']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('emailPost', $data['email']);
        $this->db->bind('password', $data['password']);
        return $this->db->rowCount();
    }

    public function deleteUser($email){
        $this->db->query("DELETE FROM $this->table WHERE email = :email");
        $this->db->bind('email', $email);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getUserById_forEdit($email){
        $this->db->query("SELECT * FROM $this->table WHERE email =:email");
        $this->db->bind('email', $email);
        return $this->db->result();
      }
}