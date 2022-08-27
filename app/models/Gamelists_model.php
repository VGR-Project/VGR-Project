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
      ORDER BY `release`
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

    public function tambahGame($data){
      $query = "INSERT INTO 
                  $this->table 
                  VALUES(null, :gameDesc, :gameTitle, :yearRelease, :gameGenres, :gameRelease, :gameDirectors)";

      $this->db->query($query);
      $this->db->bind('gameTitle', $data['gameTitle']);
      $this->db->bind('gameDirectors', $data['gameDirectors']);
      $this->db->bind('gameRelease', $data['gameRelease']);
      $this->db->bind('yearRelease', $data['yearRelease']);
      $this->db->bind('gameDesc', $data['gameDesc']);
      $this->db->bind('gameGenres', $data['gameGenres']);
      return $this->db->rowCount();
  }

  public function ubahDataGame($data){
    $query = "UPDATE {$this->table} SET 
                `title` = :gameTitle, 
                `directors` = :gameDirectors, 
                `release` = :gameRelease,
                `year` = :yearRelease, 
                `desc_game` = :gameDesc, 
                `genres` = :gameGenres 
                WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id' , $data['id_game']);
    $this->db->bind('gameTitle', $data['gameTitle']);
    $this->db->bind('gameDirectors', $data['gameDirectors']);
    $this->db->bind('gameRelease', $data['gameRelease']);
    $this->db->bind('yearRelease', $data['yearRelease']);
    $this->db->bind('gameDesc', $data['gameDesc']);
    $this->db->bind('gameGenres', $data['gameGenres']);
    var_dump($data);
    echo "<br>";
    echo "<br>";
    return $this->db->rowCount();
  }

  public function deleteGame($id){
    $query = "DELETE FROM $this->table WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCount();
}

  public function getGameById_forEdit($id){
    $this->db->query("SELECT * FROM $this->table WHERE id=:id");
    $this->db->bind('id', $id);
    return $this->db->result();
}
}