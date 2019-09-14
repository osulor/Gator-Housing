<?php
        include ('server.php');
         $sql = "NULL";
         $flag = "";
        //  $price_filter_query = "NULL";
        //  $bed_filter_query = "NULL";
        //  $bath_filter_query = "NULL";
        //  $distance_filter_query = "NULL";
        $submit_filter=$_POST['submit_filter'];
        $price_range = $_POST['price_range'];
        $distance = $_POST['distance'];
        $sql = "SELECT * FROM property";
            if (isset($submit_filter)) {
                if (isset($price_range) && !empty($price_range)){
                    if ($price_range == "Less than $1000"){
                    $sql .=" WHERE `price` <= 1000";
                    }
                elseif($price_range == "Between $1000 and $2000"){
                    $sql .= " WHERE `price` BETWEEN 1000 AND 2000";
                }
                elseif($price_range == "Between $2000 and $3000"){
                    $sql .= " WHERE `price` BETWEEN 2000 AND 3000;";
                }
                elseif($price_range == "Between $3000 and $4000"){
                    $sql .= " WHERE `price` BETWEEN 3000 AND 4000";
                }
                elseif($price_range == "More than $4000"){
                    $sql .= " WHERE `price` >= 4000";
                }
                elseif ($price_range == "Any"){
                    $sql = "SELECT * FROM property";
                }
            }
            if (isset($distance) && !empty($distance)){
                if ($distance == "Less than 1 mi."){
                    if ( $sql != "SELECT * FROM property"){
                        $sql .=" AND `distance` <= 1.00;";
                    } else {
                        $sql .=" WHERE `distance` <= 1.00";
                        
                    }
                }
            elseif ($distance == "Less than 2 mi."){
                if ( $sql != "SELECT * FROM property"){
                    $sql .=" AND `distance` <= 2.00;";
                
                } else {
                    $sql .=" WHERE `distance` <= 2.00";
                }
            }
            elseif ($distance == "Less than 3 mi."){
                if ( $sql != "SELECT * FROM property"){
                    $sql .=" AND `distance` <= 3.00;";
                } else {
              
                    $sql .=" WHERE `distance` <= 3.00";
                }
            }
            elseif($distance == "More than 3 mi."){
                if ( $sql != "SELECT * FROM property"){
                    $sql .=" AND `distance` >= 1.00";
                } else {
                    $sql .=" WHERE `distance` >= 1.00";

                }
            }
            elseif($distance == "Any"){
                if ($sql == "SELECT * FROM property")  { 
                       $sql.=";";}
               else {
                $sql .= ";";
               }
        }
        }
        echo $flag;

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
                if (!$result) {
                    printf("Error: %s\n", mysqli_error($conn));
                    exit();
                }
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
              $counter =0;
              $void = true;
              while(($row = mysqli_fetch_array($result, MYSQLI_ASSOC))>0){
                   if ( in_array($row["pid"], $_SESSION['data'] ,false)){
                  //     echo 'Yes';
                       $void = false;
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
                             <div class="list"> <i class = "fa fa-road"></i> <b> Distance to SFSU : ' . $row["distance"] . '  </b></div>                            
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
                             <div class="list"> <i class = "fa fa-road"></i> <b> Distance to SFSU : ' . $row["distance"] . '  </b></div>                            
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
                             <div class="list"> <i class = "fa fa-road"></i> <b> Distance to SFSU : ' . $row["distance"] . '  </b></div>                            
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
                             <div class="list"> <i class = "fa fa-road"></i> <b> Distance to SFSU : ' . $row["distance"] . '  </b></div>                            
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
                              echo'</td></tr>';
                      }
                     else {
                    }
                   }                   

               }    
            if ($void){
                echo '</table></center><h1>NO RESULTS TRY AGAIN</h1>';

            }
            echo '</table></center>';
          //  echo ' SESSION DATA VALUES <br>' ;
        //    print_r($_SESSION['data']);
              $conn -> close();
        ?>