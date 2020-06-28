<?php  include("request/classtask.php");


            $task = new tasks();

            if (isset($_GET["idtask"])) {


                  $id_task =  $_GET["idtask"];
                  $task->DeleteTask($id_task);

            }









?>
