<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlineShop</title>

        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <!--font aswsome link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <!-- css file-->
        <link rel="stylesheet" href="style.css">

</head>
<body>
  <div class="container-fluid">
   <!-- 1st header -->
    <!-- nav bar from bootstrap -->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <img src="./img/logo.jpg" alt="" class="logo">
    <a class="navbar-brand" href="#"><h3>OnlineShop</h3></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=""><i class="fa-solid fa-cart-shopping"></i><sup</sup></a>
        </li>        
        <li class="nav-item">
          <a class="nav-link" href="#">Total Product: </a>
        </li>        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    
<!-- 2nd header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <ul class="navbar-nav me-auto">
    <li class="nav-item">
      <a class="nav-link" href="#" >Welcome</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#" >Login</a>
    </li>
  </ul>
</nav>

<!--3rd header -->
<div class="bg-light">
  <p class="text-center"><Strong>Happy Shopping</Strong></p>
</div>

<!-- 4th header -->
<div class="row">
    <div class="col-md-10">
<!-- Product -->
<div class="row">

    <div class="col-md-4 mb-2">
      <div class="card">
        <img src="./img/watch.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-warning">Add to Cart</a>
          <a href="#" class="btn btn-secondary">View more</a>
      </div>
    </div>
    </div>

        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="./img/lumix.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-warning">Add to Cart</a>
              <a href="#" class="btn btn-secondary">View more</a>
            </div>
          </div>
        </div>


        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="./img/bag.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-warning">Add to Cart</a>
              <a href="#" class="btn btn-secondary">View more</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="./img/canon.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-warning">Add to Cart</a>
              <a href="#" class="btn btn-secondary">View more</a>
            </div>
          </div>
        </div>
</div>
</div>

<!-- sidebar -->
<div class="col-md-2 bg-light p-0">
<ul class="navbar-nav me-auto text-center">
  <!-- brand -->
    <li class="nav-item text-white-50 bg-dark">
      <a class="nav-link" href="#" >Brands</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" >Brands</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" >Brands</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" >Brands</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="#" >Brands</a>
    </li>
        
    <!-- categories -->
    <li class="nav-item text-white-50 bg-dark">
      <a class="nav-link" href="#" >Categories</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="#" >Categories</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="#" >Categories</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" >Categories</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="#" >Categories</a>
    </li>
</ul>
</div>
</div>

<!-- footer -->
<?php
 include("./includes/footer.php");
?>
</div>

<!--bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>