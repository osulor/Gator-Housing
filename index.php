<!-- Database connection-->
<?php include 'server.php' ?>
<?php session_start();
include 'navbar.php' ?>


  <!-- body -->
  
  <div class="bg-primary text-center py-5 mb-4" >
  <div class="container">
    <h1 class="font-weight-light text-white">
     
    <?php 
      if(isset($_SESSION['email']) && !empty($_SESSION['email'] )) {
           if($_SESSION['type']=="Landlord"){echo 'Rent Your Property @ GatorHousing!';}
           else{echo ' Find Your Home, <b>GATORS!</b>';}           
          }
                else{echo ' Find Your Home, <b>GATORS!</b>';}  
         
    ?>

  
  
  
  </h1>
  </div>
 
</div>
  <!-- display of the recent 6 posts  -->
  <?php include "recent_posts.php" ?>

  <!-- end body -->
  <!-- footer -->
  <!-- connect -->
  <!-- -->
  <!-- footer-end -->

</body>

<br><br>

<footer style="font-size:70%;">
  <div class="container-fluid padding">
    <div class="row text-center">
      <div class="col-md-4">
        <hr class="light">
        <h5>Contact Information</h5>
        <hr class="light">
        <p>support@gatorhousing.com</p>
        <p>Phone: (209)-280-9932</p>
      </div>
      <div class="col-md-4">
        <hr class="light">
        <h5>Our Office Hours</h5>
        <hr class="light">
        <p>Monday-Friday </p>
        <p>9am - 5pm</p>

      </div>
      <div class="col-md-4">
        <hr class="light">
        <h5>Our Office Address</h5>
        <hr class="light">
        <p>GH, 1600 Holloway Ave</p>
        <p>San Francisco, CA 94117</p>
      </div>
      <div class="col-12">
        <hr class="light">
      </div>
    </div>

  </div>

  <a href="admin.php" style="margin-left:99%; color:white" ><b>?</b></a> 



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
</footer>

</html>