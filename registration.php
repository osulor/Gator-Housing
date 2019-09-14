<?php
  include ('server.php');

      $user_type = "";

      if(isset($_POST['register'])){

          $fname = mysqli_real_escape_string($conn,$_POST['fname']);
          $lname = mysqli_real_escape_string($conn,$_POST['lname']);
          $email = mysqli_real_escape_string($conn,$_POST['email']);
          $user_type = mysqli_real_escape_string($conn,$_POST['user_type']);
          $password = mysqli_real_escape_string($conn,$_POST['password1']);
          $password = md5($password);
          $password2 = mysqli_real_escape_string($conn,$_POST['password2']);
          $password2= md5($password2);

          if ($password != $password2){
            echo "Passwords don't macth. try again !";
            
          } else {
          if($user_type == "Student"){

            $query = "SELECT * from student where email = '$email'";
            if($conn->query($query)){
            $return = mysqli_query($conn,$query);
            $result = mysqli_num_rows($return);
            
              if($result > 0){
                echo '<div style = "color:red;"> <b>'.$email.'</b> is not available </div>';
                  } else {
                   $sql = "INSERT INTO student (fname, lname, email, password ) VALUES ('$fname', '$lname', '$email', '$password')";
                    if($conn->query($sql)) {
                      echo '<br><br><br><h3><center><h1>Thank you for sign in up </h1> You will be redirected to the home page in 3 seconds </center><h3> <br>
                      <meta http-equiv="refresh" content="3;url=/updatedversion/csc648-sp19-team03/Team03/index.php" />
              
                      ';
                    }else {
                      echo '<br><br><br><h3><center><h1>ERROR - TRY AGAIN </h1> You will be redirected to the home page in 3 seconds </center><h3> <br>
                      <meta http-equiv="refresh" content="3;url=/updatedversion/csc648-sp19-team03/Team03/index.php" />
              
                      ';
                        }
                    }
              }
            }
            else if ($user_type == "Landlord"){

            $query = "SELECT * FROM landlord WHERE email = '$email' ";

              if($conn->query($query)){
                $return = mysqli_query($conn,$query);
                $result = mysqli_num_rows($return);

                if($result > 0){
                  echo '<div style = "color:red;"> <b>'.$email.'</b> is not available </div>';
                }else{
                  $sql = "INSERT INTO landlord (`fname`,`lname`,`email`,`password`) VALUES ('$fname','$lname','$email','$password')";
                  if($conn->query($sql)) {
                    echo '<br><br><br><h3><center><h1>Thank you for sign in up </h1> You will be redirected to the home page in 3 seconds </center><h3> <br>
                      <meta http-equiv="refresh" content="3;url=/updatedversion/csc648-sp19-team03/Team03/index.php" />
              
                      ';
                  }else{
                    echo '<br><br><br><h3><center><h1>ERROR - TRY AGAIN </h1> You will be redirected to the home page in 3 seconds </center><h3> <br>
                      <meta http-equiv="refresh" content="3;url=/updatedversion/csc648-sp19-team03/Team03/index.php" />
              
                      ';
                      }
                    }
                  }
                }
              }
            }
    $conn->close();
    ?>