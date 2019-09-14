<!DOCTYPE html>
<?php
session_start();
include 'registration.php';
include 'login.php';
 ?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
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

    <title>Landlord Page</title>

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
  <!-- Navigation -->
  <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top py-2">
    <!-- <img src="./img/GatorLogo.PNG" alt="Logo"> -->
    <a class="navbar-brand" href="#">
      <h1>GatorHousing</h1>
    </a>
    <div class="myform" style="margin-left:30px;">
      <form class="form-inline my-2  d-flex">
          <div class="nav-item dropdown updated" style="border-radius:15px; margin: 2px;">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                All
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>

        <input class="form-control" type="search" placeholder="Search" aria-label="Search" style="margin:5px; width:394px;">
        <button class="btn btn-outline-success" type="submit" style="color:white">Search</button>
      </form>
  </div>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarResponsive"
      aria-controls="navbarResponsive"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">

      <ul class="navbar-nav ml-auto">

          <li class="nav-item active">
              <a class="ui inverted violet button d-flex" href="post.php">
                <i class="add user icon" ></i>
                  Post
                </a>
            </a>
          </li>


        <li class="nav-item active">
            <a class="ui inverted violet button d-flex" href="#">
                Messages
              </a>
          </a>
        </li>

      </ul>
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class=" ui inverted purple button d-flex" href="logout.php"> <button type="button" name="logout"> Logout</button></a>
            </li>
      </ul>
    </div>

</nav>

<!-- Modal -->


 <div
  class="modal fade"
  id="exampleModal"
  tabindex="-1"
  role="dialog"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="ui form">
          <div class="field">
            <label>E-Mail Address</label>
            <input type="email" name="email" placeholder="E-Mail Address" />
          </div>
          <div class="field">
            <label>Password</label>
            <input
              type="password"
              name="password"
              placeholder="Enter Password"
            />
          </div>
          <button class="ui blue button" type="submit">Sign In</button>
        </form>
      </div>
      <div class="modal-footer">
        Don't Have an Account ?
        </button>
        <a href="#"  data-toggle="modal"
        data-target="#exampleModal2" data-dismiss="modal" aria-label="Close">Sign Up</a>
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
            <div class="card bg-light">
                <article class="card-body mx-auto" style="max-width: 400px;">
                  <h4 class="card-title mt-3 text-center">Create Account</h4>
                  <p class="text-center">Get started with your free account</p>
                  <p>
                    <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
                    <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
                  </p>
                  <p class="divider-text  tex-center">
                        <span class="bg-light">OR</span>
                    </p>
                  <form>
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                     </div>
                        <input name="" class="form-control" placeholder="Full name" type="text">
                    </div>

                    <div class="form-group input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                     </div>
                        <input name="" class="form-control" placeholder="Email address" type="email">
                    </div>
                    <div class="form-group input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>
                    <select class="custom-select" style="max-width: 120px;">
                        <option selected="">+1</option>
                        <option value="1">+972</option>
                        <option value="2">+198</option>
                        <option value="3">+701</option>
                    </select>
                      <input name="" class="form-control" placeholder="Phone number" type="text">
                    </div>
                    <div class="form-group input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                    </div>
                    <select class="form-control">
                      <option selected=""> Sign up as</option>
                      <option>Home owner</option>
                      <option>Manager</option>
                      <option>Renter</option>
                    </select>
                  </div>
                    <div class="form-group input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                        <input class="form-control" placeholder="Create password" type="password">
                    </div>
                    <div class="form-group input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                        <input class="form-control" placeholder="Repeat password" type="password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
                    </div>
                    <p class="text-center">Have an account? <a href=""  data-toggle="modal"
                      data-target="#exampleModal" data-dismiss="modal" aria-label="Close">Log In</a> </p>
                </form>
                </article>
                </div>
        </div>
      </div>
    </div>
  </div>

  <!-- bodyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navb">
    <h1 id="landlordName">Landlord Name </h1>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="messagesLandlord.php" id="messages">Messages </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ProfilePage_Dhwan copy.html" id="editAccount">Edit Account</a>
        </li>

      </ul>

    </div>
  </nav>


  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Property</th>
        <th scope="col">Date Posted</th>
        <th scope="col">Status</th>
        <th scope="col">Manage</th>
      </tr>
    </thead>

    </table>

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
