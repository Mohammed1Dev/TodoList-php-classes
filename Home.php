<?php include "includes/header.php" ?>

<?php include "includes/dashboard.php" ?>


<?php include("session.php") ?>

  <main id="main">
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center" style="background: url('assets/img/<?php echo $_SESSION['photo'];?>');background-size:cover;width: 100%;">
      <div class="hero-container" data-aos="fade-in">
        <h1><?php echo $_SESSION["username"]; ?></h1>
        <p>Let's Go To, <span class="typed" data-typed-items="Designing, Developing, Freelancing, Photographing"></span></p>
      </div>

        <div class="container">

          <div class="section-title">
            <h2>Other Users</h2>
          </div>
    <section id="testimonials" class="testimonials section-bg scroll">

            <?php

            include("request/classhome.php");
            $users = new users();
            $data = $users->otherusers();
                foreach($data as $key) {

                    $id = $key['id_user'];
                      $username = $key['username'];
                        $email = $key['email'];
                          $firstname = $key['firstname'];
                            $lastname = $key['lastname'];
                              $photo = $key['photo'];
                                $function = $key['function'];
                ?>
            <div class="testimonial-item" data-aos="fade-up">

              <img src="assets/img/testimonials/<?php echo $photo; ?>" class="testimonial-img" alt="">
              <h3><?php echo $firstname."-".$lastname; ?></h3>
              <h4><?php echo $function; ?></h4>
            </div>
            <?php   } ?>

          </div>

    </section>
        </section>




  </main>
<?php include "includes/footer.php" ?>
