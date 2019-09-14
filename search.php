<?php
$servername = "localhost";
$username = "root";
$password = "gatorhousing";
$dbname = "gatorhousing";
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} ?>
<?php
        $sql = NULL;
        if (isset($_POST['submit'])) {
            $select = $_POST['select'];
            $search = $_POST['search'];
            $city = $_POST['city'];
            if (empty ($query) && empty($search) && $select == "All") {
                $sql = "SELECT * FROM property";
            } elseif (empty ($query) && empty($search) && $select != "All") {
                $sql = "SELECT * FROM property WHERE type='$select' ";
            } elseif (empty ($query) && !empty($search) && $select == "All") {
                $sql = "SELECT * FROM property WHERE zipCode='$search'";
            } elseif (empty ($query) && !empty($search) && $select != "All") {
                $sql = "SELECT * FROM property WHERE zipCode='$search' AND type='$select'";
            } elseif (!empty($query) ) {
                $sql = "SELECT * FROM property WHERE (`description` LIKE '%".$query."%') OR (`address` LIKE '%".$query."%')";
            }
            $result = $conn->query($sql);
            $counter = 0;
            //display 
            if ($result->num_rows >= 0) {
                while ($row = $result->fetch_assoc()) {
                    $counter++;
                    echo ' 	

                          <div class="list">' . $row["type"] . ' #: ' . $counter . '&emsp; &emsp;<b>   Zipcode: ' . $row["zipCode"] . '</b> </div>
                          <div class="list"> Address : ' . $row["address"] . ' </div>
                          <div class="list"><i class="fas fa-dollar-sign"></i> Price: ' . $row["price"] . ' </div>
                          <div class="list"><i class="fas fa-bed"></i> Bedrooms: ' . $row["nBed"] . '</div>
                          <div class="list"><i class="fas fa-toilet"></i> Bathrooms: ' . $row["nBath"] . ' </div>
                          <br>

                          <div class="list"> ' . $row["description"] . '</div>'
                     
              ;
                    echo '</div></div>';
                }
            } else {
                echo '<h1>NO RESULTS TRY AGAIN</h1>';
            }
        }
        $conn->close();
        ?>