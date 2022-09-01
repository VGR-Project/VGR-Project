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

    public function tambahUser($data){
        $query = "INSERT INTO {$this->table} 
          VALUES(null, :username, :email, :pass, :roleLevel)";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('pass', $data['pass']);
        $this->db->bind('roleLevel', $data['roleLevel']);
        return $this->db->rowCount();
      }

    public function ubahDataUser($data){
        $query = "UPDATE {$this->table} SET 
          `Username` = :username, 
          `email` = :email, 
          `Password` = :pass,
          `role` = :roleLevel 
          WHERE `id` = :id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('pass', $data['pass']);
        $this->db->bind('roleLevel', $data['roleLevel']);
        // var_dump($data);
        echo "<br>";
        echo "<br>";
        return $this->db->rowCount();
      }

    public function deleteUser($email){
        $this->db->query("DELETE FROM $this->table WHERE email = :email");
        $this->db->bind('email', $email);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getUserById_forEdit($id){
        $this->db->query("SELECT * FROM $this->table WHERE id = :id");
        $this->db->bind('id', $id);
        return $this->db->result();
      }
}