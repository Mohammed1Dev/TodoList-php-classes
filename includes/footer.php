
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Youcode Safi</span></strong>
      </div>
      <div class="credits">

        Designed by <a href="https://bootstrapmade.com/">Mohammed Amine Bettaoui</a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>



  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script> -->
  <!-- <script type="text/javascript" src="./font/js/all.js"></script> -->

  <script src="assets/js/main.js"></script>
  <script type="text/javascript">

      function addid(id){
        document.getElementsByClassName('id_ls').value = id;
      }
          $(document).ready(function(){
            $('.add_task').hide();
            $('.btn_add_task').hide();
            $('.id_ls').hide();
            $('.bn').click(function(){
              // alert($(this).next().val());
              $(this).nextAll().toggle();
            });

          });


          // $(document).ready(function(){
          //   function update(i,a,c){
          //     $.ajax({
          //       url: 'updateList.php',
          //       type: 'POST',
          //       data: {
          //         id: i,
          //         name: a,
          //         color: c
          //
          //       },
          //       beforeSend: function(){
          //         $('.result').html("Please Wait");
          //       },
          //       success: function(data){
          //           $('.result').html(data);
          //       }
          //
          //     });
          //   };
          // });

          //
          // function UpdateList(id){
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
          //
          // function DeleteList(id){
          //
          //
          //   var xmlhttp = new XMLHttpRequest();
          //   xmlhttp.onreadystatechange = function() {
          //   if (this.readyState == 4 && this.status == 200) {
          //    console.log(this.responseText);
          //    console.log(id);
          //   }
          //   };
          //   xmlhttp.open("POST", "deletelist.php?id_list ="+id, true);
          //   xmlhttp.send();
          //
          // }

  </script>
</body>

</html>
