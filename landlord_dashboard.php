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
  <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <link rel="stylesheet" href="css/main.css" />

    <title><?php echo $_SESSION["fname"]. " 's Dashboard - GATORHOUSING" ; ?></title>

        <style type="text/css">

            #middleSection {
                width: 100%;
                height: 60%;
            }

            #newPropertyButton {
              height: 10%;
              font-weight: bold;
              font-size: 20px;
              margin-left: 5%;
              margin-top: 5%;
            }

            #navb {
              height: 75px;
              margin-bottom: 75px;

            }

            #landlordName {
              margin-right: 180px;
              font-weight: bolder;
              text-decoration: underline;
            }



            #messages {
              margin-right: 180px;
              font-size: 20px;
              font-weight: bolder;

            }

            #editAccount {
              font-size: 20px;
              font-weight: bolder;

            }

        </style>

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

  <body>
  
  <!-- bodyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navb">
    <h1 id="landlordName"><?php echo $_SESSION["fname"]. " ". $_SESSION["lname"] ; ?></h1>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="landlord_messages.php" id="messages">Messages </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ProfilePage_Dhwan.html" id="editAccount">Edit Account</a>
        </li>

      </ul>

    </div>
  </nav>


  <?php include('property_display.php'); ?>
            </div>


  <div id="middleSection">



    <button id = "newPropertyButton">Add Post   <img src="plusSign.png" width="15%"></button>


    <!--
    <input type=button onClick="location.href='landlordPost.html'" value='click here'>
    -->

    <script type="text/javascript">
      document.getElementById("newPropertyButton").onclick = function() {

        location.href='post.php';
      }

      function addWord() {
  document.getElementById("text").innerHTML = document.getElementById("text").innerHTML + "word";
      }



    </script>

   </div>



  <!-- end body -->
  <!-- footer -->
  <!-- connect -->
  <footer>
      <div class ="container-fluid padding">
      <div class="row text-center">
        <div class="col-md-4">
          <hr class = "light">
          <h5>Contact Information</h5>
          <hr class="light">
          <p>email@gmail.com</p>
          <p>Ph: XXX-XXXX</p>
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
            <p>1200 ABC Street</p>
            <p>San Francisco, CA</p>
          </div>
        <div class="col-12">
          <hr class="light">
        </div>
      </div>
      </div>
    </footer>
    <!-- footer-end -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"
    ></script>
  </body>
</html>
