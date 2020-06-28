
<?php include_once("database/connexion.php");


      class users extends database{


          public $username;
          public $photo;
          public $function;

          public function userProfile(){

            $query = "SELECT * FROM users where id_user like ".$_SESSION['id_user'];

            $result = $this->db_connect()->query($query);
            $row = array();
                while ($data = $result->fetch()) {
                        $row[] = $data;
                  }
                  return $row;
          }

          public function otherusers(){

            $query = "SELECT * FROM users where id_user not like ".$_SESSION['id_user'];

            $result = $this->db_connect()->query($query);
            $row = array();
                while ($data = $result->fetch()) {
                        $row[] = $data;
                  }
                  return $row;
          }

          public function allUsers(){

            $query = "SELECT count(id_user) FROM users";

            $result = $this->db_connect()->query($query);
            $data = $result->fetchAll();

                  return $data;
          }

          public function allList(){

            $query = "SELECT count(id_list) FROM list";

            $result = $this->db_connect()->query($query);
            $data = $result->fetchAll();

                  return $data;
          }

          public function login($username,$password){


            $query = "SELECT * FROM `users`";

            $result = $this->db_connect()->query($query);
            $data = $result->fetchAll();

            for ($i=0; $i<count($data);$i++) {

                if($username == $data[$i]["username"] && $password == $data[$i]["password"]){


                  $_SESSION["id_user"] = $data[$i]["id_user"];
                   $_SESSION["photo"] = $data[$i]["photo"];
                  $_SESSION["username"] = $username;
                 header('location:Home.php');
                 exit();
                }
                else{

                  echo "login Failed .......";
                  header('location:login.php');

             }
            }


          }

          public function register($firstname,$lastname,$username,$email,$password,$function,$photo){

            $query="INSERT into users values(null,'".$username."','".$password."','".$email."','".$firstname."','".$lastname."','".$photo."','".$function."')";

            $stmt = $this->db_connect()->query($query);
            $stmt->execute();
            header('location:login.php');
            exit();
          }


      }








?>
