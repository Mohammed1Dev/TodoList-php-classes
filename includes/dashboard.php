


  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <header id="header">
    <div class="d-flex flex-column">
      <?php
      session_start();

      if (isset($_SESSION["username"])) {

       ?>
      <div class="profile">
        <img src="assets/img/<?php echo $_SESSION["photo"]; ?>" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html"><?php echo $_SESSION["username"]; ?></a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav class="nav-menu">
        <ul>

          <li class="active"><a href="Home.php"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="lists.php"><i class="bx bx-user"></i> <span>Lists</span></a></li>
          <li><a href="task.php"><i class="bx bx-file-blank"></i> <span>Tasks</span></a></li>
          <li><a href="facts.php"><i class="bx bx-server"></i>Our Facts</a></li>
          <li><a href="UserProfile.php"><i class="bx bx-envelope"></i> Your Profile -></a></li>
          <li><a href="login.php"><i class="bx bx-book-content"></i> Log In </a></li>
          <li><a href="logOut.php"><i class="bx bx-server"></i> Log Out </a></li>
        <?php }else{?>
          <span class="badge badge-light">Connect, or Creat One</span>
          <li><a href="login.php"><i class="bx bx-book-content"></i> Log In </a></li>
          <li><a href="logOut.php"><i class="bx bx-server"></i> Log Out </a></li>
        <?php } ?>


        </ul>
      </nav>
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header>
