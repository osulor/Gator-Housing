<?php
         $data[]= array();
         $sql = "NULL";
        //  $price_filter_query = "NULL";
        //  $bed_filter_query = "NULL";
        //  $bath_filter_query = "NULL";
        //  $distance_filter_query = "NULL";
         $submit = $_POST['submit'];
         $search = $_POST['search'];
         $select = $_POST['select'];

            if (isset($submit)) {
                if ($select=="All"){
                    if (!isset($search)){
                    $sql = "SELECT * FROM property ORDER BY PRICE";
                    }
                    else {$sql = "SELECT * FROM property WHERE (`description` LIKE '%".$search."%') OR (`address` LIKE '%".$search."%') ORDER BY PRICE" ; }
                }
                else if ($select!="All"){
                if (empty($search)){
                    $sql = "SELECT * FROM property WHERE type='$select' ORDER BY PRICE";
                    }
                    else {$sql = "SELECT * FROM property WHERE (type='$select' AND (`description` LIKE '%".$search."%' OR `address` LIKE '%".$search."%')) ORDER BY PRICE" ; }            
                
                   }  
                else if (!is_null($select) && isset($search)){
                $sql = "SELECT * FROM property WHERE (type='$select' AND `description` LIKE '%".$search."%') OR (`address` LIKE '%".$search."%')"; 
                  
            }
                else { echo ' NOTHING';}
}
                
            // if (empty($search) && $select == "All") {
 
            // } elseif ( empty($search) && $select != "All") {
                
            // } elseif (!empty($search) && $select == "All") {
            //     $sql = "SELECT * FROM property WHERE zipCode='$search'";
            // } elseif (!empty($search) && $select != "All") {
            //     $sql = "SELECT * FROM property WHERE zipCode='$search' AND type='$select'";
            // }

            try {
                $result = $conn->query($sql);
              }

              //THIS IS THE COSE TO SAVE PID IN ARRAY
              // $data = array();
              // while(($row = mysqli_fetch_array($result, MYSQLI_ASSOC))){
              //    $data[] = $row["pid"];
              //   }
              // print_r($data);
              //catch exception
              catch(Exception $e) {
                echo 'Error Message: ' .$e->getMessage();
              }
            $counter = 0;
            //display 

            
            while(($row = mysqli_fetch_array($result, MYSQLI_ASSOC))){
              $data[]=$row["pid"];               
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
              }
             else {
                echo '</table></center><h1>NO RESULTS TRY AGAIN</h1>';
            }}
        echo '</table></center>';
        $_SESSION['data']=$data;

        $conn->close();
    //    print_r($_SESSION['data']);
