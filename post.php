
<?php include 'server.php' ?>
<?php session_start();
include 'navbar.php' ?>
    <!--post-->
    <div class="bg-primary text-center py-5 mb-4" >
  <div class="container">
    <h1 class="font-weight-light text-white">FILL IN YOUR PROPERTY INFORMATION</h1>
  </div>

</div>
<br>     <br>
    <form method="post" action="post_insertion.php" enctype="multipart/form-data">
      <div class="form-group col-md-12" id="type">
        <label>Type:</label>
         <select class="form-control" name="type" style="width: 41%; display:inline; margin-left:1%">
          <option value="Apartment">Apartment</option>
          <option value="Condo">Condo</option>
          <option value="House">House</option>
          <option value="Studio">Studio</option>
        </select>
      </div>

      <fieldset class="form-group col-md-12">
        <label> Address: </label>
        <input class="form-control" type="text" name="address" placeholder="Address" style='width:40%;display:inline;margin-left:3px' />
      </fieldset>

      <fieldset class="form-group col-md-12">
      <label> ZipCode: </label>
        <input class="form-control" type="text" name="zipcode" placeholder="Zip code" style='width:25%;display:inline' />
      </fieldset>

      <fieldset class="form-group col-md-12">
      <div  id="bedroomBathroom" style='display:inline'>
        <label>Bedrooms:</label>
        <select class="form-control" name="nbed" style='display:inline; width : 5%' >
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      &nbsp;       &nbsp; &nbsp;
      


        <label >Bathrooms:</label>
        <select class="form-control" name="nbath" style='display:inline; width : 5%' >
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
            </fieldset>
      <div style='margin-top:7px; display : inline'>
      <fieldset class="form-group col-md-12">
        <label for="c2">Price per Month:</label>
        <input type="text" name="price" placeholder="$$$" style='margin-left:2px; border-radius: 4px;padding: .375rem .75rem;border: 1px solid silver;border-radius: 0.5rem;' />
        <label for="c2">Distance to SFSU:</label>
          <input type="text" name="distance" placeholder="mi." style='width : 13%;margin-left:2px;border-radius: 4px;padding: .375rem .75rem;border: 1px solid silver;border-radius: 0.5rem;' />
           </fieldset>
        <div>
          <br>
          <fieldset>
          <div class="form-group col-md-12">
             <label>Upload image:</label> 
            <input type="file" name="image"/>
            (2 MB MAX)  
          </div>
          </fieldset>
          <br>
          <fieldset class="form-group col-md-12">
          <div class="form-group">
            <textarea class="form-control" name="description" placeholder="Description (Optional)" rows="7" style ="width : 45%"></textarea>
          </div>
          <br>
          
             <button type="reset" name="clear" style='float:left; margin-left:35%'>
                Clear
              </button>
              <button type="submit" name="submit" style='float:left;margin-left:2% '>
                Submit
              </button>
             

            </fieldset>


          
    </form>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>