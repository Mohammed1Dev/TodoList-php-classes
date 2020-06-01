<?php



    class database
    {
    
        public function db_connect(){


              $servername = "localhost";
              $username = "root";
              $password = "";

              try {
                $connexion = new PDO("mysql:host = $servername; dbname=todo", $username, $password);
                // set the PDO error mode to exception
                $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $connexion;
                echo "Connected successfully";
              } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
              }

          }
    }
?>
