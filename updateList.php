<?php include "includes/header.php" ?>
<?php include "includes/dashboard.php" ?>
<?php include("request/classlist.php"); ?>

<?php
        include('session.php');

      $lists = new lists();

      if (isset($_GET["id"])) {
        if(isset($_POST["valid"])){



                      $name = $_POST['nameUp'];
                      $color = $_POST['colorUp'];
                      $id= $_GET['id'];



               $lists->UpdateList($name,$color,$id);
              }
      }


 ?>

 <div class="container">
   <center>
     <h1 class="row" id="tit">Update Lists</h1>

     <form method="post" id="box">

           <div class="form-group row">
             <label>Name :</label>
             <input type="text" class="form-control" name="nameUp">

           </div>
           <div class="form-group row">
             <label>Color :</label>
             <input type="color" class="form-control" name="colorUp">
           </div>

           <button class="btn btn-primary submit_update row"  name="valid">valid</button>



         </form>

   </center>

 </div>

<?php include "includes/footer.php" ?>
