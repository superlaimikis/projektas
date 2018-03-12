<?php
include 'header.php';
// var_dump($_POST);
?>
<main>
  <div class="container">
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $_POST['Name']; ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Continent</label>
        <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $_POST['Continent']; ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Surface Area</label>
        <input type="number" class="form-control" id="exampleInputPassword1" value="<?php echo $_POST['SurfaceArea']; ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Populiation</label>
        <input type="number" class="form-control" id="exampleInputPassword1" value="<?php echo $_POST['Population']; ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Life Expectancy</label>
        <input type="number" class="form-control" id="exampleInputPassword1" value="<?php echo $_POST['LifeExpectancy']; ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Government Form</label>
        <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $_POST['GovernmentForm']; ?>">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</main>
