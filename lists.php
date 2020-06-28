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
          <div class="container-fluid">

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



            <div class="row p-4" >
              <?php





              $data = $lists->showlists();
              for ($i=0; $i < count($data) ; $i++) {
                  $id_list = $data[$i]["id_list"];
                  $name = $data[$i]["name"];
                  $color = $data[$i]["color"];
                  $user_id = $data[$i]["user_id"];
              ?>



              <div class="card col-3 mt-4 mark" style="width: 300px;height: 300px;background-color: <?php echo $color; ?>;">
                <div class="card-body p-0">
                  <form  action="addTask.php" method="post">
                  <div class="row d-flex justify-content-around">
                      <h5 class="card-title col-8 mt-2"><?php echo $name; ?></h5>
                      <a class="text-success col-4 text-right btn-lg bn"><i class="fas fa-plus-square"></i></a>

                      <input type="text" class="col-6 form-control add_task" name="taskname" >
                      <div class="">
                        <input type="text" name="idlist" class="id_ls" value="<?php echo $id_list; ?>">
                      </div>
                    <input type="submit" class="bg-info text-white text-center btn-md col-4 rounded font-weight-bold btn_add_task" name="valide" value="Ajouter">
                  </div>
                  </form>
                  <div style="height:130px;overflow-x: hidden;">
                        <?php
                        $datatask = $lists->taskInside($id_list);
                        foreach ($datatask as $key){
                         ?>
                            <div class="row d-flex justify-content-around">
                              <?php
                                    if($key["done"] == '0'){
                              ?>
                                      <p class="col-6 task_li"><a href="" class="card-link"><?php echo $key["tasktext"]; ?></a></p>
                              <?php }
                              if($key["done"] == '1'){
                                ?>
                                  <p class="col-6 task_li" style="font-size: 25px;text-decoration: line-through;"><a href="" class="card-link" style="color: darkcyan"><?php echo $key["tasktext"]; ?></a></p>
                              <?php }?>


                              <a class="text-danger col-1 text-right col-2 " href="updatetask.php?idtask=<?php echo $key["id_task"]; ?>&done=<?php echo $key["done"]; ?>"><i class="fas fa-flag-checkered"></i></a>
                              <a class="text-danger col-1 text-right col-2 " href="deleteTask.php?idtask=<?php echo $key["id_task"]; ?>"><i class="far fa-trash-alt"></i></a>
                            </div>

                          <?php
                            }
                           ?>
                     </div>
                </div>
                <a href="updateList.php?id=<?php echo $id_list; ?>" class="btn btn-secondary mb-2" >
                  Update
                </a>

              <?php echo "<a class='btn btn-danger' href=deletelist.php?id=",urlencode($id_list),">Delete</a>"; ?>


              </div>
              <div class="col-1">

              </div>
            <?php } ?>


            </div>

          </div>
        </section>

  </main>
<?php include "includes/footer.php"?>
