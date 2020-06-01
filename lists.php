<?php include "includes/header.php" ?>
<?php include "includes/dashboard.php" ?>

<?php include('request/classlist.php');
      include('session.php');
        $lists = new lists();

          if(isset($_POST["name"]) && isset($_POST["color"]))
            {
              $name = $_POST["name"];
              $color = $_POST["color"];
              if (isset($_POST["submit"])) {
                $lists->AddList($name,$color);
              }
            }

 ?>
  <main id="main">

        <section id="portfolio" class="portfolio section-bg">
          <div class="container">

            <div class="section-title">
              <h2>Lists</h2>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>

              <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#FormInsert">
                Add Project
              </button>
              <div class="modal" id="FormInsert" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Add Lists</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Name :</label>
                              <input type="text" class="form-control" name="name">

                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Color :</label>
                              <input type="color" class="form-control" name="color">
                            </div>

                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                          </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                  </div>
                </div>
              </div>

              </div>



            <div class="row" >
              <?php



              $id_list = 0;

              $data = $lists->showlists();

              for ($i=0; $i < count($data) ; $i++) {
                  $id_list = $data[$i]["id_list"];
                  $name = $data[$i]["name"];
                  $color = $data[$i]["color"];
                  $user_id = $data[$i]["user_id"];



              ?>



              <div class="card col-3" style="width: 300px;height: 300px;background-color: <?php echo $color; ?>;">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $name; ?></h5>

                  <?php

                  $datatask = $lists->taskInside($id_list);
                  foreach ($datatask as $key){


                   ?>
                   <li><a href="" class="card-link"><?php echo $key["tasktext"]; ?></a></li>


                    <?php } ?>
                </div>
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#FormUpdate">
                  Update
                </button>
                <div class="modal" id="FormUpdate" tabindex="-1" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Update Lists</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="post">
                              <div class="form-group">
                                <label>Name :</label>
                                <input type="text" class="form-control" name="nameUp">

                              </div>
                              <div class="form-group">
                                <label>Color :</label>
                                <input type="color" class="form-control" name="colorUp">
                              </div>

                              <button type="submit" class="btn btn-primary" name="valid" onclick="update(<?php echo $id_list; ?>);">valid</button>
                            </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                      </div>
                    </div>
                  </div>
                </div>
                <a class="btn btn-outline-primary" href="delete.php" role="button">Delete</a>

              </div>
            <?php } ?>


            </div>

          </div>
        </section>
<div class="result">

</div>

  </main>
  <script>

      $(document).ready(function(){
        function update(i,a,c){
          $.ajax({
            url: 'updateList.php',
            type: 'POST',
            data: {
              id: i,
              name: a,
              color: c

            },
            beforeSend: function(){
              $('.result').html("Please Wait");
            },
            success: function(data){
                $('.result').html(data);
            }

          });
        };
      });


    // function Update(id){
    //
    //
    //   var xmlhttp = new XMLHttpRequest();
    //   xmlhttp.onreadystatechange = function() {
    //   if (this.readyState == 4 && this.status == 200) {
    //    console.log(this.responseText);
    //    console.log(id);
    //   }
    //   };
    //   xmlhttp.open("POST", "updateList.php?id_list ="+id, true);
    //   xmlhttp.send();
    //
    // }

  </script>
<?php include "includes/footer.php" ?>
