<?php
//including database connection
require 'db.php';
//forming sql query
$sql = 'SELECT Region, Code FROM country GROUP BY Region';
//fetching all results form database
$regions = $conn->query($sql);
//creating empty array for fetching results from DB
$regionsArray = array();
//loop to put all rows into array
while( $region = $regions->fetch_assoc() ){
  //sudedame visus regionus i masyva
  array_push($regionsArray, $region);
}
include 'header.php'; ?>
  <main>
    <div class="container">
      <div class="slider">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="http://travelhdwallpapers.com/wp-content/uploads/2017/03/Bangkok-Wallpaper-3.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://images5.alphacoders.com/439/thumb-1920-439361.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://wallscover.com/images/vilnius-8.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="jumbotron">
        <h1 class="display-4">Hello its world database</h1>
        <p class="lead">Here we will have all countries and cities separately</p>
        <hr class="my-4">
        <p>This site uses PHP and MySQL connected with mysqli method</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="#" role="button">Start journey</a>
        </p>
      </div>
      <div class="cities-list">
        <h2>List of all world regions</h2>
        <ul class="list-group">
          <?php foreach($regionsArray as $region): ?>
          <li class="list-group-item text-center">
            <?php echo $region['Region']; ?>
            <a href="countries-in-region.php?Region=<?php echo $region['Region'];?>" class="btn btn-info"> Go To <?php echo $region['Code']; ?> </a>  </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </main>
  <?php include 'footer.php'; ?>
