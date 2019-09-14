<?php
include ('server.php');
session_start();
$date = date("Y-m-d H:i:s");
$lid=$_SESSION['owner'];
$sid=$_SESSION['user_id'];
$msg="";

if(isset($_POST['submit'])){
    if (!empty($_POST['message'])){
    $msg = $_POST['message'];
    
    
    
    $query = "INSERT INTO messaging (`lid`,`sid`,`message`,`date`) VALUES ('$lid','$sid','$msg','$date')";
    
    if ($conn->query($query)) {
        echo '<br><br><br><h3><center><h1>Thank you '.$_SESSION['fname'].' </h1><br>Your message has been sent to the landlord. Thanks for your using GatorHousing!<br> You will be redirected to the home page in 3 seconds </center><h3> <br>
        <meta http-equiv="refresh" content="3;url=/updatedversion/csc648-sp19-team03/Team03/index.php" />

        ';
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
    
    $conn->close();

    
    
}}
?>