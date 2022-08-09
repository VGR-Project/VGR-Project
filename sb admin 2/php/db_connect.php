<?php

    class dbConnect{
        protected $host;
        protected $username;
        protected $pass;
        protected $database;

        function __construct($host, $username, $pass, $database){
            $this->host = $host;
            $this->username = $username;
            $this->pass = $pass;
            $this->database = $database;
        }

        function connect(){
            $db_connect = mysqli_connect($this->host, $this->username, $this->pass, $this->database);
            return $db_connect;
        }

        function query($sqlQuery){
            $conn = $this->connect();
            $queryRun = mysqli_query($conn, $sqlQuery) or die(mysqli_error($conn));

            return $queryRun;
        }

        function fetchAll($query){
            $queryRun = $this->query($query);

            $data = mysqli_fetch_assoc($queryRun);
            return $data;
        }
    }

    $connectDatabase = new dbConnect("localhost", "root", "", "vgr_project");