<?php
    class Database {

      const host = "localhost";
      const dbname = "banque";
      const user = "root";
      const password = ""; 
      public PDO $connection;

      public function __construct () {
        try {
          $this->connection = new PDO("mysql:host=" . self::host . ";dbname=" . self::dbname . ";", self::user, self::password);
          var_dump($this->connection);

        } catch(PDOException $e)  {
          die($e->getMessage());
        }
      }

    }

?>