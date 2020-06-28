
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


            $query="UPDATE list SET  name= '".$name."',color ='".$color."'  WHERE id_list = ".$id;
            $this->db_connect()->query($query);

            header('location:lists.php');
            exit();
          }

          public function DeleteList($id){

            $stmt = $this->db_connect()->prepare("DELETE FROM list WHERE id_list= ?");

            $stmt->execute(array($id));

            header('location:lists.php');
            exit();
          }





      }








?>
