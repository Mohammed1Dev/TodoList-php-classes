
<?php include("database/connexion.php");


      class lists extends database{


          public $namelist;
          public $color;


          public function showlists(){

              $query = "SELECT * from list where user_id = ".$_SESSION['id_user'];

            $result = $this->db_connect()->query($query);
            $row = array();
                while ($data = $result->fetch()) {
                        $row[] = $data;
                  }
                  return $row;
          }

          public function taskInside($id_list){


          $query = "SELECT * from task where list_id = ".$id_list;

            $result = $this->db_connect()->query($query);

            $rowtask = array();
                while ($data = $result->fetch()) {
                        $rowtask[] = $data;
                  }
                  return $rowtask;


          }

          public function AddList($name,$color){

            $nbr = 0;
            $query="INSERT into list values(null,'".$name."','".$color."','".$_SESSION['id_user']."','".$nbr."')";
            echo $query;
            $this->db_connect()->query($query);
            header('location:lists.php');
            exit();
          }

          public function UpdateList($name,$color,$id){

            $stmt = $this->db_connect()->prepare("UPDATE list SET  name= ?, color = ?  WHERE id_list = $id ");

            $stmt->execute(array($name,$color));

            header('location:lists.php');
            exit();
          }



      }








?>
