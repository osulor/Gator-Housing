<?php
include('server.php');
session_start();
include ('navbar.php');
?>

  <h5 name="filter" style="width: fit-content; margin-top: 1%;
     margin-left: 45%;"><u>Filter by: </u></h5>

<div name="filter" style="width: fit-content; margin-top: 1%;
     margin-left: 30%;">
    <form id="filter_form" class="form-inline ml-3" method="POST" action="filtered_results.php">
      <div class="d-inline">
        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Price</label>
        <select name="price_range" class="custom-select my-1 mr-sm-2 text-center" id="inlineFormCustomSelectPref">
          <?php
          $price_range = $_POST['price_range'];
          echo '<h2> SEARCH RESULTS</h2>';
          ?>
          <option <?php if ($price_range == "Any") echo 'Selected'; ?> value="Any">Any</option>
          <option <?php if ($price_range == "Less than $1000") echo 'Selected'; ?> value="Less than $1000"> Less than $1000</option>
          <option <?php if ($price_range == "Between $1000 and $2000") echo 'Selected'; ?> value="Between $1000 and $2000"> Between $1000 and $2000</option>
          <option <?php if ($price_range == "Between $2000 and $3000") echo 'Selected'; ?> value="Between $2000 and $3000">Between $2000 and $3000</option>
          <option <?php if ($price_range == "Between $3000 and $4000") echo 'Selected'; ?> value="Between $3000 and $4000"> Between $3000 and $4000</option>
          <option <?php if ($price_range == "More than $4000") echo 'Selected'; ?> value="More than $4000"> More than $4000</option>
</select>
</div>
<div class="d-inline">
<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Distance to SFSU</label>
        <select name="distance" class="custom-select my-1 mr-sm-2 text-center" id="inlineFormCustomSelectPref">
          <?php
          $distance = $_POST['distance'];
          echo '<h2> SEARCH RESULTS</h2>';
          ?>
          <option <?php if ($distance == "Any") echo 'Selected'; ?> value="Any">Any</option>
          <option <?php if ($distance == "Less than 1 mi.") echo 'Selected'; ?> value="Less than 1 mi.">Less than 1 mi.</option>
          <option <?php if ($distance == "Less than 2 mi.") echo 'Selected'; ?> value="Less than 2 mi.">Less than 2 mi.</option>
          <option <?php if ($distance == "Less than 3 mi.") echo 'Selected'; ?> value="Less than 3 mi.">Less than 3 mi.</option>
          <option <?php if ($price_range == "More than 3 mi.") echo 'Selected'; ?> value="More than 3 mi.">More than 3 mi.</option>
        </select>
</div>
<div class="d-inline"><br>&nbsp;&nbsp;
<button type="submit" name="submit_filter" class="btn btn-primary my-1 mx-auto">Update</button>
</div>
</form>
</div>
  <hr>
  <div>

  <br>

<?php include 'filter_query.php' ?>
</div>
</body>


<!-- end body -->
<!-- footer -->
<!-- connect -->
<!-- -->
<!-- footer-end -->


<br><br>

<footer style="font-size:70%;">
  <div class="container-fluid padding">
    <div class="row text-center">
      <div class="col-md-4">
        <hr class="light">
        <h5>Contact Information</h5>
        <hr class="light">
        <p>support@gatorhousing.com</p>
        <p>Phone: (209)-280-9932</p>
      </div>
      <div class="col-md-4">
        <hr class="light">
        <h5>Our Office Hours</h5>
        <hr class="light">
        <p>Monday-Friday </p>
        <p>9am - 5pm</p>
      </div>
      <div class="col-md-4">
        <hr class="light">
        <h5>Our Office Address</h5>
        <hr class="light">
        <p>GH, 1600 Holloway Ave</p>
        <p>San Francisco, CA 94117</p>
      </div>
      <div class="col-12">
        <hr class="light">
      </div>
    </div>
  </div>




  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
</footer>

</html>
