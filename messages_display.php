<?php 

include 'server.php';
$user_id = $_SESSION["user_id"];
$sql = "SELECT messaging.sid AS `sender`,
               messaging.lid AS `receiver`,
               student.fname AS `sender_fname`,
               student.lname AS `sender_lname`,
               messaging.date AS `date` ,
               messaging.message AS `message`
FROM messaging
INNER JOIN student ON messaging.sid=student.sid AND messaging.lid='$user_id' ORDER BY messaging.date DESC";
$result = $conn->query($sql);
$counter = 0;
//display 

echo'<div class="container" id="messageList">
 <table class="table">
   <thead class="thead-dark">
     <tr>
       <th scope="col" width="10px">#</th>
       <th scope="col" width="150px">From:</th>
       <th scope="col" width="200px">Date & Time</th>
       <th scope="col">Message</th>
     </tr>
   </thead>
   <tbody>';


if ($result->num_rows >= 0) {
  while ($row = $result->fetch_assoc()) {
    $counter++;
    $_SESSION["sender"]=$row["sender"];
    $_SESSION["message"]=$row["sender_fname"];
    $_SESSION["timestamp"]=$row["date"];
    echo'
   <tr>
       <td> '.$counter.'</td>
       <td> '.$row["sender_fname"].' '.$row["sender_lname"].'</td>
       <td> '.$row["date"].'</td>
       <td> '.$row["message"].'</td>
     </tr>';
  }}
  echo'
  </tbody>
 </table>
 </div>

' ;
?>
