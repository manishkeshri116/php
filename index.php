<!DOCTYPE html>
<html>
<head>
    
    <title>Document</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet"> 


 
</head>
<body>

<?php include 'menu.php' ?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption text-dark ">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption text-dark">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption text-primary">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
<div class="py-5">
<h2 class="text-center">About-us</h2>
</div>
<div class="container-fluid">
<div class="row"> 
<div class="col-lg-6 col-md-4 col-12">
<img src="images/1.jpg" class="img-fluid about-img">

</div>
<div class="col-lg-6 col-md-4 col-12">
<h2 class="display-4"> I Am Technical Manish</h2>
<p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, ipsam non veritatis officia dolor quos quis obcaecati porro animi deleniti dolores, earum facilis! Iure odit quam ipsa assumenda totam nam.</p>
<a href="about.php" class="btn btn-success">Chech More</a>

</div>
</div>

</div>
</section>

<section class="my-5">
<div class="py-5">
<h2 class="text-center">Our-Services</h2>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-lg-4 col-md-4 col-12"> 
<div class="card">
  <img class="card-img-top" src="images/3.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>


</div>
<div class="col-lg-4 col-md-4 col-12"> 
<div class="card">
  <img class="card-img-top" src="images/3.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>


</div>
<div class="col-lg-4 col-md-4 col-12"> 
<div class="card">
  <img class="card-img-top" src="images/3.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>


</div>


</div>
</div>
</section>

<section class="my-5">
<div class="py-5">
<h2 class="text-center">Our-Gallery</h2>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-lg-4 col-md-4 col-12"> 

<img src="images/2.jpg" class="img-fluid pb-3">



</div>
<div class="col-lg-4 col-md-4 col-12"> 

<img src="images/2.jpg" class="img-fluid pb-3">



</div>
<div class="col-lg-4 col-md-4 col-12"> 

<img src="images/2.jpg" class="img-fluid pb-3">



</div>
<div class="col-lg-4 col-md-4 col-12"> 

<img src="images/2.jpg" class="img-fluid pb-3">



</div>
<div class="col-lg-4 col-md-4 col-12"> 

<img src="images/2.jpg" class="img-fluid pb-3">



</div>
<div class="col-lg-4 col-md-4 col-12"> 

<img src="images/2.jpg" class="img-fluid pb-3">



</div>

<div class="col-lg-4 col-md-4 col-12"> 

<img src="images/2.jpg" class="img-fluid pb-3">



</div>
<div class="col-lg-4 col-md-4 col-12"> 

<img src="images/2.jpg" class="img-fluid pb-3">



</div>
<div class="col-lg-4 col-md-4 col-12"> 

<img src="images/2.jpg" class="img-fluid pb-3">



</div>

</div>
</div>
</section>

<section class="my-5">
<div class="py-5">
<h2 class="text-center">form</h2>
</div>

<div class="w-50 m-auto">
  <form action="userinfo.php" method="post">
  <div class="form-group">
  <labe>username</label>
  <input type="text" name="user" autocomplete="off" class="form-control">
  </div>
  <div class="form-group">
  <labe>Email-id</label>
  <input type="text" name="email" autocomplete="off" class="form-control">
  </div>
  <div class="form-group">
  <labe>mobile</label>
  <input type="text" name="mobile" autocomplete="off" class="form-control">
  </div>
  <div class="form-group">
  <labe>comments</label>
  <textarea class="form-control" name="comments"></textarea>
  
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>

</section>

<footer>
<p class="p-3 bg-dark text-white text-center">@technicalmanishproduction</p>
</footer>












<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>





  
</body>



</html>