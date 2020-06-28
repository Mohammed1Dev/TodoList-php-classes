<?php  include("request/classlist.php");


          $lists = new lists();

           $id_list =  $_GET["id"];



        
          $lists->DeleteList($id_list);








?>
