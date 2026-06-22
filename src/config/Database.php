<?php
class Database {
  private static $instance = null;
  private $conn;

  private function __construct (){
    $dsn  = "mysql:host=db;dbname=SeminarioLaravel;charset=utf8mb4";
    $user = "root";
    $password = "root_password";

    try{
      $this->conn = new PDO($dsn, $user, $password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e){
      die("Error fatal de conexión: " . $e->getMessage());
    }
  }

  public static function getInstance() {
    if(self::$instance == null){
      self::$instance = new Database();
    }
    return self::$instance;
  }


public function getConnection(){
  return $this->conn;
}

}

?>