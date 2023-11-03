<?php

namespace App\config;

final class Database
{
  protected $server;
  protected $user;
  protected $pass;
  protected $database;
  protected $connect;

  public function __construct() 
  {
    $this->server = "localhost";
    $this->user = "root";
    $this->pass = "";
    $this->database = "food_and_drink";
    $this->connect = null;
  }

  public function getConnect() : object {
    try {
      $this->connect =  new mysqli($this->server, $this->user, $this->pass, $this->database);
      return $this->connect;
    } catch (Exception $e) {
        echo $e->getMessage();
      exit();
    }

    return $this->connect;

  }

  public function closeConnect() {
    $this->connect->close();
  }
}
$connect = (new Database)->getConnect();
?>