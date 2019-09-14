<?php 
while(($row = mysqli_fetch_array($result, MYSQLI_ASSOC))){
    $counter++;
    if ($counter % 4 == 1) {
     echo '<br>
         <center><table style="width:80%; margin-top:-2rem"><br>
         <tr class="mix"> <td style="width:200px;"> <div class="card" style="width:260px">
         <div class="text-center" style="color:blue";> <b>'.$counter.'-  '.$row["type"].'  </b> </div>
         <img width="257px" height = "200px" src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" alt="Card image cap">
         </div>
          <div class="card-body" style="width:260px">
          <div class="list"><i class="fas fa-dollar-sign"></i> <b> Price: </b> ' . $row["price"] . ' </div>
          <div class="list"><i class="fas fa-bed"></i> <b> Bedrooms: </b> ' . $row["nBed"] . ' </div> 
          <div class="list"><i class="fas fa-bath"></i> <b> Bathrooms: </b> ' . $row["nBath"] . ' </div> 
          <div class="list"> <i class = "fa fa-map-marker"></i> <b> Address : </b> ' . $row["address"] . ' </div>                            
           <br>
           <div class="text-center"><button type="button" class="btn btn-primary  btn-md">Contact Landlord</button></div> 
          </div><br></td> ';
   } elseif ($counter % 4 == 2) {
     echo '
         <td style="width:200px;"> <div class="card" style="width:260px">
         <div class="text-center" style="color:blue";> <b>'.$counter.'-  '.$row["type"].'  </b> </div>
         <img width="257px" height = "200px" src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" alt="Card image cap">
         </div>
          <div class="card-body" style="width:260px">
          <div class="list"><i class="fas fa-dollar-sign"></i> <b> Price: </b> ' . $row["price"] . ' </div>
          <div class="list"><i class="fas fa-bed"></i> <b> Bedrooms: </b> ' . $row["nBed"] . ' </div> 
          <div class="list"><i class="fas fa-bath"></i> <b> Bathrooms: </b> ' . $row["nBath"] . ' </div> 
          <div class="list"> <i class = "fa fa-map-marker"></i> <b> Address : </b> ' . $row["address"] . ' </div>                            
           <br>
           <div class="text-center"><button type="button" class="btn btn-primary  btn-md">Contact Landlord</button></div> 
          </div><br></td>';
   } elseif ($counter % 4 == 3) {
     echo '
         <td style="width:200px;"> <div class="card" style="width:260px">
         <div class="text-center" style="color:blue";> <b>'.$counter.'-  '.$row["type"].'  </b> </div>
         <img width="257px" height = "200px" src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" alt="Card image cap">
         </div>
          <div class="card-body" style="width:260px">
          <div class="list"><i class="fas fa-dollar-sign"></i> <b> Price: </b> ' . $row["price"] . ' </div>
          <div class="list"><i class="fas fa-bed"></i> <b> Bedrooms: </b> ' . $row["nBed"] . ' </div> 
          <div class="list"><i class="fas fa-bath"></i> <b> Bathrooms: </b> ' . $row["nBath"] . ' </div> 
          <div class="list"> <i class = "fa fa-map-marker"></i> <b> Address : </b> ' . $row["address"] . ' </div>                            
           <br>
           <div class="text-center"><button type="button" class="btn btn-primary  btn-md">Contact Landlord</button></div> 
          </div><br></td>';
   }
   elseif ($counter % 4 == 0) {
     echo '
         <td style="width:200px;"> <div class="card" style="width:260px">
         <div class="text-center" style="color:blue";> <b>'.$counter.'-  '.$row["type"].'  </b> </div>
         <img width="257px" height = "200px" src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" alt="Card image cap">
         </div>
          <div class="card-body" style="width:260px">
          <div class="list"><i class="fas fa-dollar-sign"></i> <b> Price: </b> ' . $row["price"] . ' </div>
          <div class="list"><i class="fas fa-bed"></i> <b> Bedrooms: </b> ' . $row["nBed"] . ' </div> 
          <div class="list"><i class="fas fa-bath"></i> <b> Bathrooms: </b> ' . $row["nBath"] . ' </div> 
          <div class="list"> <i class = "fa fa-map-marker"></i> <b> Address : </b> ' . $row["address"] . ' </div>                            
           <br>
           <div class="text-center"><button type="button" class="btn btn-primary  btn-md">Contact Landlord</button></div> 
           <br></div></td></tr>';
   }
  else {
     echo '</table></center><h1>NO RESULTS TRY AGAIN</h1>';
 }}
echo '</table></center>';
