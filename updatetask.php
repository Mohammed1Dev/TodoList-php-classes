<?php include("request/classtask.php"); ?>

<?php
        include('session.php');

      $task = new tasks();


      if (isset($_GET["idtask"]) && isset($_GET["done"])) {

          $id= $_GET['idtask'];
          $done = $_GET["done"];
        if($done == '0') {
            $done = '1';
             $task->UpdateTask($done,$id);
        }else {
          $done = '0';
           $task->UpdateTask($done,$id);
        }







      }


 ?>
