<?php include "includes/header.php" ?>
<?php include "includes/dashboard.php" ?>

<?php
  include("session.php");
    include("request/classhome.php");
    $users = new users();
    $data1 = $users->allUsers();
    $nbrUser = $data1[0][0];
    $data2 = $users->allList();
    $nbrLists = $data2[0][0]
 ?>
  <main id="main">
    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Facts</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up"><?php echo $nbrUser; ?></span>
              <p><strong>Happy Users</strong> IT Mentors/Students</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up"><?php echo $nbrLists; ?></span>
              <p><strong>Projects</strong> Programming/Designing Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">1,463</span>
              <p><strong>Hours Of Support</strong> </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">5</span>
              <p><strong>Hard Workers</strong> Night to Night</p>
            </div>
          </div>

        </div>

      </div>
    </section>
  </main>
    <?php include "includes/footer.php" ?>
