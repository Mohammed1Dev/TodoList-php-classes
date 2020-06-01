<?php include("request/classlist.php"); ?>

<?php




          if(isset($_POST["valid"])){
          


                        $name = $_POST['nameUp'];
                          $color = $_POST['colorUp'];
                           $id= $_GET['id_list'];


                $db->updateList($name,$color,$id);


                }



 ?>
