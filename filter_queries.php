          <!-- if (isset($update_filter)){
                
                switch ($price_range) {
                    case "1":
                        $price_filter_query = " SELECT * FROM property WHERE price=<1000 ";
                        echo($price_filter_query);
                        break;
                    case "2":
                        $price_filter_query = " SELECT * FROM property WHERE price BETWEEN 1000 AND 2000";
                        break;
                    case "3":
                        $price_filter_query = " SELECT * FROM property WHERE price BETWEEN 2000 AND 3000";
                        break;
                    case "4":
                        $price_filter_query = " SELECT * FROM property WHERE price BETWEEN 3000 AND 4000";
                        break;
                    case "5":
                        $price_filter_query = " SELECT * FROM property WHERE price>=4000 ";
                        break;
                    default:
                        $price_filter_query = " SELECT * FROM property";
                }} -->

                <?php
                if(isset($POST['price_range']) && (!empty($POST['price_range']))){
                if (($POST['price_range']) == "1"){
                    $sql .= "INTERSECT SELECT * property WHERE price<=1000";
                }
                elseif (($POST['price_range']) == "2"){
                    $sql .= "AND price BETWEEN 1000 AND 2000 ";
                }
                elseif (($POST['price_range']) == "3"){
                    $sql .= "AND price BETWEEN 2000 AND 3000 ";
                }
                elseif (($POST['price_range']) == "4"){
                    $sql .= "AND price BETWEEN 3000 AND 4000 ";
                }
                elseif (($POST['price_range']) == "5"){
                    $sql .= "AND price >= 5000 ";
                }
            }
?>