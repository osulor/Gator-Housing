<?php
  $sql = "SELECT * FROM property ORDER BY pid DESC LIMIT 6";

  $result = $conn->query($sql);
  $counter = 0;
  //display 
  if ($result->num_rows >= 0) {
    echo '  <p style="color: #666666; margin-bottom: -2rem; font-size: 1.8rem; margin-left:10%; 
          font-family: -webkit-body;"><b>Most Recent Posts:</b></p>';
    while ($row = $result->fetch_assoc()) {
      $counter++;
      if ($counter % 3 == 1) {
        
        echo '<br>
            <center><table style="width:80%">
            <tr class="mix"> <td style="width:200px;"> <div class="card" style="width:260px">
            <a href="detail.php">
            <img width="257px" height = "200px" src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" alt="Card image cap">
            </a>
            </div> 
             <div class="card-body" style="width:260px">
               <div class="list"> <i class = "fa fa-map-marker"></i> <b> Address : </b> ' . $row["address"] . ' </div>
               <div class="list"><i class="fas fa-dollar-sign"></i> <b> Price: </b> ' . $row["price"] . ' </div> <br>
               <div class="list"> <i class = "fa fa-road"></i> <b> Distance to SFSU : ' . $row["distance"] . '  </b></div>  <br>

               ';

               if(isset($_SESSION['email']) && !empty($_SESSION['email']))
               {
                 $value=$row["owner"];
              echo'  
              <div class="text-center"><a href="messaging.php"/>
              <form method="POST" action="messaging.php">
              <button type="submit" name="owner" value="'.$value.'" class="btn btn-primary  btn-md">
              Contact Landlord
              </button>
              </form>
              </div> ';
              }
              
           ;
           echo'  </div></td>';
      } elseif ($counter % 3 == 2) {
        echo '
            <td style="width:200px;">
             <div class="card" style="width:260px">
            <a href="detail.php">
            <img width="257px" height = "200px" src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" alt="Card image cap">
            </a>           
             </div> 
             <div class="card-body" style="width:260px">
               <div class="list"> <i class = "fa fa-map-marker"></i> <b> Address : </b> ' . $row["address"] . ' </div>
               <div class="list"><i class="fas fa-dollar-sign"></i> <b> Price: </b> ' . $row["price"] . ' </div> <br>
               <div class="list"> <i class = "fa fa-road"></i> <b> Distance to SFSU : ' . $row["distance"] . '  </b></div>  <br>

               ';

               if(isset($_SESSION['email']) && !empty($_SESSION['email']))
               {
                 $value=$row["owner"];
              echo'  
              <div class="text-center"><a href="messaging.php"/>
              <form method="POST" action="messaging.php">
              <button type="submit" name="owner" value="'.$value.'" class="btn btn-primary  btn-md">
              Contact Landlord
              </button>
              </form>
              </div> ';
              }
              
           ;
           echo'
                 </div></td>';
      } else if ($counter % 3 == 0) {
        echo '
            <td style="width:200px;"> <div class="card" style="width:260px">
            <a href="detail.php">
            <img width="257px" height = "200px" src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" alt="Card image cap">
            </a>
                        </div> 
             <div class="card-body" style="width:260px">
               <div class="list"> <i class = "fa fa-map-marker"></i><b> Address : </b> ' . $row["address"] . ' </div>
               <div class="list"><i class="fas fa-dollar-sign"></i> <b> Price: </b> ' . $row["price"] . ' </div> <br>
               <div class="list"> <i class = "fa fa-road"></i> <b> Distance to SFSU : ' . $row["distance"] . '  </b></div>  <br>
               ';

               if(isset($_SESSION['email']))
               {
              echo'  <div class="text-center"><a href="messaging.php"/> <button type="button" class="btn btn-primary  btn-md">Contact Landlord</button></div> ';
              }
              
           ;
           echo'                                               
 
                 </div></td> <br> </tr> </table></center>';
      }
  
  }} else {
    echo '<h1>NO RESULTS TRY AGAIN</h1>';
  }

  $conn->close();
  ?>