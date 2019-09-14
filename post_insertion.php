<?php 
include('server.php');
session_start();
$address=$_POST['address'];
$zipcode=$_POST['zipcode'];
$type=$_POST['type'];
$nbed=$_POST['nbed'];
$nbath=$_POST['nbath'];
$price=$_POST['price'];
$desc=$_POST['description'];
$distance=$_POST['distance'];
$owner=$_SESSION['user_id'];
$image = "";
if(isset($_FILES['image']) && !empty($_FILES['image'])){
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
}
//you keep your column name setting for insertion. I keep image type Blob.
$query="";

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
    if(isset($_POST['submit'])){
        $query = "INSERT INTO property (`owner`,`address`,`zipCode`,`type`,`nBed`,`nBath`,
                `price`,`description`,`distance`,`image`) VALUES ('$owner','$address','$zipcode','$type',
                '$nbed','$nbath','$price','$desc','$distance','$image')";
    
    if ($conn->query($query)==true) {
            echo '<br><br><br><h3><center><h1>Thank you '.$_SESSION['fname'].' </h1><br>Your post of ' .$type. ' has been sent to a moderator. It will take few minutes 
            before it becomes public. Thanks for your patience!<br> You will be redirected to the home page in 3 seconds </center><h3> <br>
            <meta http-equiv="refresh" content="3;url=/updatedversion/csc648-sp19-team03/Team03/index.php" />

            ';
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
        
        $conn->close();
    
        
        
    }
}





?>