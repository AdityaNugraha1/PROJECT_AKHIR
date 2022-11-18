<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <title>Toko Medical</title>
  <link rel="stylesheet" href="style/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg background-primary" style="height:60px;">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php" style="font-weight:bolder; color:#00A445;">
        <img src="asset/logo putih.png" alt="logo" style="height: 25px; margin-top: -7px; padding-left: 4px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size:20px;">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item" style="color: #00A445;">
            <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="#produk">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="keranjang.php">Keranjang</a>
          </li>
        </ul>
        <a class="d-flex" href="login.php" style="text-decoration: none;">
          <button type="button" class="btn btn-outline-light">Login</button>
        </a>
      </div>
    </div>
  </nav>

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/suntikan.png" class="d-block w-100 h-100" alt="..." style="position: absolute; bottom: 0; left: 0; right: 0; padding-bottom: 0px;">
        <div class="carousel-caption d-none d-md-block" style="color: black;">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/oksigen.jpg" class="d-block w-100 h-100" alt="..." style="position: absolute; bottom: 0; left: 0; right: 0; padding-bottom: 0px;">
        <div class="carousel-caption d-none d-md-block" style="color: black;">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/tensi.jpg" class="d-block w-100 h-100" alt="..." style="position: absolute; bottom: 0; left: 0; right: 0; padding-bottom: 0px;">
        <div class="carousel-caption d-none d-md-block" style="color: black;">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<div id="produk">
  <div class="p-3 m-0 border-0">
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <div class="card" style="width: 18rem;">
            <div class="m-2 p-1" style="height:270px;">
              <img src="img/facemask.png" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">Face Mask</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary" style=" background-color: #00A445;">Add To Cart</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <div class="m-2 p-1" style="height:270px;">
              <img src="img/freezer.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">Freezer</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary" style=" background-color: #00A445;">Add To Cart</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <div class="m-2 p-1" style="height:270px;">
              <img src="img/autoclave.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">Auto Clave</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary" style=" background-color: #00A445;">Add To Cart</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <div class="m-2 p-1" style="height:270px;">
              <img src="img/automateddefibrillator.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">Automated Defibrillator.</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary" style=" background-color: #00A445;">Add To Cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="p-3 m-0 border-0">
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <div class="card" style="width: 18rem;">
            <div class="m-2 p-1" style="height:270px;">
              <img src="img/tensi.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">Blood Pressure Monitor</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary" style=" background-color: #00A445;">Add To Cart</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <div class="m-2 p-1" style="height:270px;">
              <img src="img/suntikan.png" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">Syringe</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary" style=" background-color: #00A445;">Add To Cart</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <div class="m-2 p-1" style="height:270px;">
              <img src="img/oksigen.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">Oxygen Tube</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary" style=" background-color: #00A445;">Add To Cart</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem; ">
            <div class="m-2 p-1" style="height:270px;">
              <img src="img/blood.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">Blood Test Kits</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary" style=" background-color: #00A445;">Add To Cart</a>
            </div>
          </div>
        </div>
        <div class="col">
          <br>
          <div class="card" style="width: 18rem; ">
            <div class="m-2 p-1" style="height:270px;">
              <img src="img/blood.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">Blood Test Kits</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary" style=" background-color: #00A445;">Add To Cart</a>
            </div>
          </div>
        </div>
        <div class="col">
          <br>
          <div class="card" style="width: 18rem; ">
            <div class="m-2 p-1" style="height:270px;">
              <img src="img/blood.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">Blood Test Kits</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary" style=" background-color: #00A445;">Add To Cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 mt-5 background-primary">
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2022. All rights reserved.
    </div>
  </div>
</body>


</html>