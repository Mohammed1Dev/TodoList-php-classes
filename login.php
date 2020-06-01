<?php include "includes/header.php" ?>
<?php include "includes/dashboard.php" ?>
<?php

include('request/classhome.php');



  $users = new users();

      function valid($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

      }

    if(isset($_POST["username"]) && isset($_POST["password"]))
    {

        $user = valid($_POST["username"]);
        $password = valid($_POST["password"]);




        if(isset($_POST["submit"])) {


          $users->login($user,$password);



        }

    }


?>
<main id="main">
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Sign In</h2>
      </div>

      <div class="row" data-aos="fade-in">

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form method="POST">
            <div class="form-row">
              <div class="col">
                <input type="text" class="form-control" name="username" placeholder="Your UserName">
              </div>
              <div class="col">
                  <input type="password" class="form-control" name="password" placeholder="Your PassWord">
              </div>
            </div>



            <div class="text-center">  <button type="submit" class="btn btn-secondary" name="submit">Connexion</button><br>
              Or <a href="AddUser.php"> Creat </a>One ...

            </div>
          </form>
        </div>

      </div>

    </div>
  </section>
</main>
<?php include "includes/footer.php" ?>
