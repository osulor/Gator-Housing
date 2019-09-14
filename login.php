<?php
include 'server.php';

if(isset($_POST['login'])){

    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $user_type = mysqli_real_escape_string($conn,$_POST['user_type']);
    $password = md5($password);

    if($user_type == "Student"){
            $sql = "SELECT * FROM student WHERE email= '$email' AND password = '$password'";
            $run= mysqli_query($conn,$sql);
            if(mysqli_num_rows($run) > 0){
              session_start();
              while ($row = $run->fetch_assoc()) {
              $_SESSION['type']= "Student";
              $_SESSION['user_id']= $row['sid'];
              $_SESSION['email']= $row['email'];
              $_SESSION['fname'] = $row['fname'];
              $_SESSION['lname'] = $row['lname'];
            }
              header("Location: index.php");
                }
                else  {
                  echo "something went wrong";
                }
        
      } else if ($user_type == "Landlord"){
        $sql = "SELECT * FROM landlord WHERE email= '$email' AND password = '$password'";
        $run= mysqli_query($conn,$sql);
        if(mysqli_num_rows($run) > 0){
          session_start();
          while ($row = $run->fetch_assoc()) {
          $_SESSION['type']= "Landlord";
          $_SESSION['user_id']= $row['lid'];
          $_SESSION['email']= $row['email'];
          $_SESSION['fname'] = $row['fname'];
          $_SESSION['lname'] = $row['lname'];
        }
          header("Location: index.php");
            }
            else  {
              echo "something went wrong";
            }
    }
}



?>
