<!-- Database connection-->
<?php include 'server.php' ?>
<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


  <link rel="stylesheet" href="css/main.css" />

  <title>GatorHousing - Home Page</title>
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top py-2">
    <a class="navbar-brand" href="index.php">
      <img src="./img/logo.png" height="100px" width="150px" alt="Logo">
    </a>
    <?php
         if(isset($_SESSION['fname']) && !empty($_SESSION['fname']))
               {
              echo'  <a class="navbar-brand"><div class="text-center" style="color:white;">Hello, ' .$_SESSION['fname']. '</div> </a> ';
              }
           ;
    ?>
    <div class="myform" style="margin-left:200px;">
      <form id="search_form" class="form-inline my-2  d-flex" method="POST" action="filter.php">
        <select name="select" class="form-control" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php
          $search = $_POST['search'];
          $select = $_POST['select'];
          echo '<h2> SEARCH RESULTS</h2>';
          ?>
          <option class="dropdown-item" value="All">All</option>
          <option class="dropdown-item" <?php if ($GLOBALS['select'] == "Apartment") echo 'Selected'; ?> value="Apartment">Apartment</option>
          <option class="dropdown-item" <?php if ($GLOBALS['select'] == "Condo") echo 'Selected'; ?> value="Condo">Condo</option>
          <option class="dropdown-item" <?php if ($GLOBALS['select'] == "House") echo 'Selected'; ?> value="House">House</option>
          <option class="dropdown-item" <?php if ($GLOBALS['select'] == "Studio") echo 'Selected'; ?> value="Studio">Studio</option>
        </select>
        <!-- The maxlength='40' should be given as property in input tag of search for all the pages having search -->
        <input class="form-control" name="search" maxlength='40' type="search" placeholder="Search" value="<?php echo $search; ?>" aria-label="Search" style="margin:5px; width:200px;">
        <button class="ui inverted violet button d-flex" name="submit" type="submit" style="color:white">Search</button>
      </form>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">

      <ul class="navbar-nav ml-auto">
<?php 
      if(isset($_SESSION['email']) && !empty($_SESSION['email'] )) {
        echo'
        <li class="nav-item active">
          <a class="ui inverted violet button d-flex" ';
           if($_SESSION['type']=="Landlord"){echo ' href="landlord_dashboard.php"';}
                elseif($_SESSION['type']=="Student"){echo ' href="student_dashboard.php"';}  
                echo'
          >
            <i class=""></i>
            Dashboard
          </a>
          </a>
        </li>
      
      
        <li class="nav-item active">
          <a class="ui inverted violet button d-flex" href="about.php">
            <i class="fa fa-sticky-note-o"></i>
            About
          </a>
          </a>
        </li>
      ';}?>
<?php 
      if(isset($_SESSION['email']) && !empty($_SESSION['email'] )) {
        if($_SESSION['type']=="Landlord"){
          echo'        
          <li class="nav-item active">
          <a class="ui inverted violet button d-flex" href="post.php">
            <i class="fa fa-sticky-note-o"></i>
            Post
          </a>
          </a>
        </li>';
        }
      }
      ?>

            </ul>

      <?php
    if(isset($_SESSION['email']) && !empty($_SESSION['email']))
               {
              echo'        <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class=" ui inverted purple button d-flex" href="logout.php">
                  
                  LOG OUT</a>
              </li>
            </ul>
          </div>
       ';
              }
              else {
                echo'        <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class=" ui inverted purple button d-flex" href="registration.html" data-toggle="modal" data-target="#exampleModal">
                  <i class="add user icon"></i>
                  SIGN IN</a>
              </li>
            </ul>
          </div>
       ';

              }
              
           ;
?>





  </nav>


  <!-- Modal -->


  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
       <center> <a class="navbar-brand">
      <img src="./img/logo.png" height="50px" width="75px"  alt="Logo">
        </a> 
        </center>

         
     
          <h4 class="card-title mt-3 text-center"><b>SIGN IN</b></h4>
          <form class="ui form" method="POST" action="login.php">
            <div class="field">
              <label>E-Mail Address</label>
              <input type="email" name="email" placeholder="E-Mail Address" />
            </div>
            <div class="field">
              <label>Password</label>
              <input type="password" name="password" placeholder="Enter Password" />
            </div>
            <div>
            <div class="form-group input-group">
            <div class="field">
              <label>  You are a : &nbsp; <input type="radio" name="user_type" value="Student" required>&nbsp; Student &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="radio" name="user_type" value="Landlord" required>&nbsp; Landlord</label>
                     
                </div>
                </div>
            </div>
            <center>
            <button name="login" class="ui blue button" type="submit">Sign In</button>
            <button class="ui blue button" type="reset">Clear</button>
            </center>
          </form>
        </div>
        <div class="modal-footer">
          Don't Have an Account ?
          </button>
          <a href="#" data-toggle="modal" data-target="#exampleModal2" data-dismiss="modal" aria-label="Close">Sign Up</a>
        </div>
      </div>
    </div>
  </div>


 <!-- sign up modal  -->

 <div class="modal fade " id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <center> <a class="navbar-brand">
      <img src="./img/logo.png" height="50px" width="75px"  alt="Logo">
        </a> 
         </center>

       
          <div class="card bg-light">
        
            <article class="card-body mx-auto" style="max-width: 400px;">
              <h4 class="card-title mt-3 text-center"><b>SIGN UP</b></h4>

              <form method="post" action="registration.php">

                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                  </div>
                  <input name="fname" class="form-control" placeholder="First Name" type="text"  required>
                </div>
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                  </div>
                  <input name="lname" class="form-control" placeholder="Last Name" type="text"  required>
                </div>

                <div class="form-group input-group">
                      <input type="radio" name="user_type" value="Student" required>&nbsp; Student &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="radio" name="user_type" value="Landlord" required>&nbsp; Landlord
                </div>
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                  </div>
                  <input name="email" class="form-control" placeholder="Email address" type="email"  required>
                </div>

                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                  </div>
                  <input name="password1" class="form-control" placeholder="Create password" type="password" required>
                </div>
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                  </div>
                  <input name="password2" class="form-control" placeholder="Repeat password" type="password" required>
                </div>
                <div class="form-group">
                  <button name="register" type="submit" class="btn btn-primary btn-block"> Create Account </button>
                  <button name="reset" type="reset" class="btn btn-primary btn-block"> Clear </button>

                </div>
                <p class="text-center">Have an account? <a href="" data-toggle="modal" data-target="#exampleModal" data-dismiss="modal" aria-label="Close">Log In</a> </p>
              </form>
            </article>
          </div>
        </div>
      </div>
    </div>
  </div>


    <div class="container " >
      <div class="row  justify-content-center align-items-center mt-3 mb-3">
        
          <img class="img-fluid" src="img/bg_1.jpg" alt="" style="max-height:500px;">

        
      </div>

      <br>
  
    <div class="row padding">
      <div class="col-md-12 col-lg-4 ml-5 mr-100">
        <h2>Properties</h2>
        <p> <b>Price:</b> 2500
        <br> <b>Bedrooms:</b> 1 
        <br> <b>Bathrooms:</b> 1 
        <br> <b>Address :</b> 750, Malcom St, San Francisco CA
        <br> <b>Zip Code:</b> 94116 
        <br> <b>Distance to SFSU :</b> 6  </p>
        <h2>Description</h2>
        <p>This tiny house packs it all in 110 square feet!
           A tiny bath, tiny kitchenette and a full-sized comfy loft-bed.
            Perfect for a single traveler and good for a very intimate couple.
             This clever space is super close to downtown! 
           </p>

      </div>
      <div class="col-md-12  col-lg-4 mr-0">

        <div class="responsive-map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2822.7806761080233!2d-93.29138368446431!3d44.96844997909819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b32b6ee2c87c91%3A0xc20dff2748d2bd92!2sWalker+Art+Center!5e0!3m2!1sen!2sus!4v1514524647889"
            width="600" height="300" frameborder="0" style="border:3" allowfullscreen></iframe>
        </div>

      </div>
    </div>
<div>
            </body>

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




  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
</footer>

</html>
  <!-- footer-end -->
  <script src="js/detail.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>


</html>