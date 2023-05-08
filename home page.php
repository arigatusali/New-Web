<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME PAGE</title>

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<script src="https://use.fontawesome.com/d1341f9b7a.js"></script>

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />





<style type="text/css">
  
.btn-primary {
    background-color: #007bff;
    border-radius: 8px;
  }

  .btn-primary:hover {
    background-color: #6cb2eb;
  }

  .btn-primary:active {
    background-color: #87cefa;
  }




.navbar {
    background-color: #2976bb;
}






.card{
  margin: 15px;
}

.items{

 margin-left: 2.5%;
 margin:auto;

}

.hr {
    margin-left: 2%;
    font-family: poppins;
    font-size: 38px;
  }

footer{
  background-color: #2976bb;
  width: 100%;
  height: 50vh;
}

.brands{
  display: inline-flex;
  width: 50%;
  margin-left: 9%;
}

ul{
        margin: 0;
        padding: 0;
      }
      .box li{
        display: inline-block;
        margin: 6px;
        list-style: none;
      }
      .box li a{
        color: white;
        text-decoration: none;
        font-size: 60px;
        transition: all ease-in-out 250ms;
      }
      .box li a:hover{
        color: #b9b9b9;
</style>


  </head>
  <body>
   
<!--FOR nav -->
 <nav class="navbar navbar-expand-lg bg-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="..\New Web\images\0.png" style="width:20%"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home page.html">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Laptops
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">acer</a></li>
            <li><a class="dropdown-item" href="#">hp</a></li>
            <li><a class="dropdown-item" href="#">jumper</a></li>
            <li><a class="dropdown-item" href="#">Lenovo</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">About</a>
        </li>
      </ul>

      <form class="d-flex ms-auto" role="search" style="">
  <div class="input-group">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" >
    <button class="btn btn-primary btn-sm" type="submit" style="margin: 10;">
      <i class="fa fa-search" style="color: black;" style="margin-right: 20px;"></i>
    </button>
  </div>
</form>

      <div class="d-flex" style="display: flex; justify-content: flex-end;">
  <ul class="navbar-nav">
    <li class="nav-item">
       <a class="nav-link" href="#"><i class='fas fa-user-circle' style='font-size:24px'></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
    </li>
  </ul>
</div>

  </div>
    </div>
  </div>
</nav>

<br>
<br>
<br>


  
<!--FOR CAROUSSEL -->

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..\New Web\images\c1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..\New Web\images\c4.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..\New Web\images\c2.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<br>
<br>
<h1 class="hr" style="margin-left:2%; font-family: poppins;">Featured Laptops</h2>
  <hr>
<br>
<br>
<br>

<!--FOR CAROUSSEL -->

<div class="items">

  <div class="row">
    <div class="col-md-3">
      <div class="card mb-3">
        <img src="..\New Web\images\h1.JPG" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">VIEW DETAILS</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card mb-3">
        <img src="..\New Web\images\h2.JPG" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">VIEW DETAILS</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card mb-3">
        <img src="..\New Web\images\h3.JPG" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">VIEW DETAILS</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card mb-3">
        <img src="..\New Web\images\j1.JPG" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">VIEW DETAILS</a>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="items" >

  <div class="row" >
    <div class="col-md-3">
      <div class="card mb-3">
        <img src="..\New Web\images\j2.JPG" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">VIEW DETAILS</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card mb-3">
        <img src="..\New Web\images\j3.JPG" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">VIEW DETAILS</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card mb-3">
        <img src="..\New Web\images\LE1.JPG" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">VIEW DETAILS</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card mb-3">
        <img src="..\New Web\images\LE2.JPG" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">VIEW DETAILS</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!--FOR CAROUSSEL -->

<br>
<br>
<br>
<h1 class="hr" style="margin-left:2%; font-family: poppins;">Accessories</h2>
  <hr>
<br>
<br>
<br>


<div class="items" >

  <div class="row">
    <div class="col-md-3">
      <div class="card mb-3">
        <img src="..\New Web\images\ac1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">VIEW DETAILS</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card mb-3">
        <img src="..\New Web\images\ac2.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">VIEW DETAILS</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card mb-3">
        <img src="..\New Web\images\ac3.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">VIEW DETAILS</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card mb-3">
        <img src="..\New Web\images\ac4.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">VIEW DETAILS</a>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>

<!--FOR services -->

  <h2 style="font-size: 38px;" class="text-center" ><a href="services"> Our Services</a></h2>
<div class="text-center" style="background: skyblue">
 
  <hr>
  <br>
  <br>
  <br>
  <br>


  
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-3">
          <div class="card text-center mb-3">
            <div class="card-body">
              <img src="..\New Web\images\s1.png" class="card-img-top" style="width: 2;">
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center mb-3">
          <div class="card-body">
             <video src="images/s5.mp4" class="card-img-top" alt="..." controls></video>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center mb-3">
          <div class="card-body">
            <img src="..\New Web\images\s2.jpg" class="card-img-top" alt="...">
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<br>
  
<!--FOR CAROUSSEL -->


<!--FOR CAROUSSEL -->

<footer>
  
  <div class="box">
        <img src="profile.jpg" alt="" class="box-img">
      <ul>
        <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
        </ul>
  </div>

</footer>







<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>



  </body>
</html>