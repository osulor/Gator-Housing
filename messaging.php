<!-- Database connection-->
<?php
include('server.php');
session_start();
$_SESSION['owner'] = "";

if (isset($_POST['submit'])) {
  $_SESSION['owner'] = $_POST["owner"];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

  <title>Landlord Messages</title>

  <style type="text/css">
    #jumbo {
      text-align: center;
      background: lightblue;
    }

    #viewMessages {}

    #goback {}

    .alert-message {
      margin: 20px 0;
      padding: 20px;
      border-left: 3px solid #eee;
    }

    .alert-message-success {
      background-color: #f4fdf0;
      border-color: #3c763d;
    }

    #messageList {
      width: 100%;
      height: 100%;
      background-color: lightblue;
      display: none;
    }
  </style>
</head>

<body>
  <div class="jumbotron">
    <center>
      <h1 class="display-4" id="jumbo">Message <?php
                                                echo $_POST['owner'];
                                                $_SESSION['owner'] = $_POST['owner'];
                                                ?>:</h1>
    </center>
    <hr class="my-4" />
    <center>
      <div>

        <?php
        echo"Type your message here";


        ?>
      </div>

      <form method="POST" action="query.php">
        <textarea name="message" rows="10" cols="50" placeholder="Insert your message here (500 chars limit)"></textarea><br><br>
        <button type="submit" name="submit"> Send </button>
      </form>
      <center>
  </div>

</body>

</html>