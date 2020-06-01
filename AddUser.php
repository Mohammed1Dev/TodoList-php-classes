<?php include "includes/header.php" ?>
<?php include('request/classhome.php'); ?>
<?php include "includes/dashboard.php"?>

<?php






  $users = new users();

      function valid($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

      }


      if(isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["function"]) && isset($_POST["photo"])){
          $firstname = $_POST["firstname"] ;
          $lastname = $_POST["lastname"] ;
          $username = $_POST["username"] ;
          $email = $_POST["email"] ;
          $password = $_POST["password"];
          $function = $_POST["function"];
          $photo = $_POST["photo"];

            echo $password;


        if(isset($_POST["valide"])) {


          $users->register($firstname,$lastname,$username,$email,$password,$function,$photo);



        }

    }


 ?>
    <main id="main">

          <section >
            <div class="container">

              <div class="section-title">
                <h2>Create Account</h2>
                <p>Thank you For Your Registration.Welcome To Our WebSite</p>
              </div>

              <div class="row">

                <form method="post">
                      <div class="form-group">
                        <label for="exampleInputEmail1">FirstName :</label>
                        <input type="text" class="form-control" name="firstname">

                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">LastName :</label>
                        <input type="text" class="form-control" name="lastname">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">UserName :</label>
                        <input type="text" class="form-control" name="username">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">email :</label>
                        <input type="email" class="form-control" name="email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password :</label>
                        <input type="password" class="form-control" name="password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Function :</label>
                        <input type="text" class="form-control" name="function">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Photo :</label>
                        <input type="text" class="form-control" name="photo">
                      </div>

                      <button type="submit" class="btn btn-primary" name="valide">Submit</button>
                    </form>
                </div>

              </div>

            </div>
          </section>
    </main>
<?php include "includes/footer.php" ?>
