<?php

class Users_model
{
    private $table = "users";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
}