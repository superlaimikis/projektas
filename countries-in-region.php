<?php
require 'db.php';
include 'header.php';
//is nuorodos pasiimame atsiusta kintamaji
$region = $_GET['Region'];
//suformuojame dinamiska sql uzklausa su kintamuoju
$sql = "SELECT * FROM country WHERE Region = '".$region."'";
//ivykdome sql uzklausa
$countries = $conn->query($sql);
//sukuriame tuscia masyva sudeti visoms salims
$countriesArray = array();
//paleidziame cikla, kad sudetume salis i sukurta masyva
while( $country = $countries->fetch_assoc() ){
  //sudedame po viena saly i masyva
  array_push( $countriesArray, $country );
}
// var_dump($countriesArray);
?>
<main>
  <div class="container">
    <h1>Countries in <?php echo $region ?> <a class="btn btn-primary" href="index.php">Back</a></h1>
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Continent</th>
          <th scope="col">Surface Area</th>
          <th scope="col">Population</th>
          <th scope="col">Life expectancy</th>
          <th scope="col">Government form</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($countriesArray as $i => $country): ?>
        <tr>
          <th scope="row"><?php echo $i +1 ?></th>
          <td><?php echo $country['Name']; ?></td>
          <td><?php echo $country['Continent']; ?></td>
          <td><?php echo $country['SurfaceArea']; ?></td>
          <td><?php echo $country['Population']; ?></td>
          <td><?php echo $country['LifeExpectancy']; ?></td>
          <td><?php echo $country['GovernmentForm']; ?></td>
          <td>
            <form action="edit.php" method="post">
              <input type="hidden" name="Name" value="<?php echo $country['Name']; ?>">
              <input type="hidden" name="Continent" value="<?php echo $country['Continent']; ?>">
              <input type="hidden" name="SurfaceArea" value="<?php echo $country['SurfaceArea']; ?>">
              <input type="hidden" name="Population" value="<?php echo $country['Population']; ?>">
              <input type="hidden" name="LifeExpectancy" value="<?php echo $country['LifeExpectancy']; ?>">
              <input type="hidden" name="GovernmentForm" value="<?php echo $country['GovernmentForm']; ?>">
              <button type="submit" class="btn btn-warning">EDIT</button>
            </form>
          </td>
          <td>
            <form action="delete.php" method="post">
              <input type="hidden" name="ID" value="<?php $country['Code']; ;?>">
              <button type="submit" class="btn btn-danger">DELETE</button>
            </form>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</main>
<?php include 'footer.php'; ?>
