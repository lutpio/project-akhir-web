<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: ../index.php");
  exit;
} elseif ($_SESSION["role"] !== 'user') {
  header("Location: ../index.php");
  exit;
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>User</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/bd49e73b8b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body class="bg-white">
    <nav class="navbar navbar-expand-lg sticky-top bg-white shadow-sm z-3">
      <div class="container">
        <div class="py-2">
          <a class="navbar-brand fw-light fs-4" href="index.php"
            ><i class="fa-solid fa-leaf fa-xl" style="color: #116530"></i> PasarSegari</a
          >
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="py-2 px-3 w-75">
            <form class="d-flex">
              <div class="input-group">
                <input
                  type="text"
                  class="form-control bg-white border border-success"
                  placeholder="Aku mau belanja..."
                  aria-label="Recipient's username"
                  aria-describedby="button-addon2"
                />
                <button class="btn btn-outline-success" type="button" id="button-addon2">
                  <i class="bi bi-search"></i>
                </button>
              </div>
            </form>
          </div>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown me-1">
              <a
                class="nav-link dropdown-toggle text-dark"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Kategori
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item btn btn-light" href="products.php?c=sayur"
                    ><i class="fa-solid fa-carrot fa-lg" style="color: #ed9121"></i> Sayur Segar</a
                  >
                </li>
                <li>
                  <a class="dropdown-item btn btn-light" href="products.php?c=buah"
                    ><i class="fa-solid fa-apple-whole fa-lg" style="color: #8db600"></i> Buah
                    Segar</a
                  >
                </li>
                <li>
                  <a class="dropdown-item btn btn-light" href="products.php?c=sembako"
                    ><i class="fa-solid fa-egg fa-lg" style="color: #f4bb29"></i> Sembako</a
                  >
                </li>
              </ul>
            </li>
          </ul>
          <div class="py-2 px-4 ms-auto">
            <a href="" class="link-dark position-relative">
              <i class="fa-sharp fa-solid fa-cart-shopping fa-lg"></i>
              <span
                class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle"
              >
                <span class="visually-hidden">New alerts</span>
              </span>
            </a>
          </div>
          <div class="vr"></div>
          <div class="py-2 px-3 d-flex">
            <div class="dropdown">
              <a
                href=""
                class="link-dark dropdown-toggle btn btn-outline-light rounded-1 border-0"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="fa-solid fa-circle-user fa-xl"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item py-2 btn btn-light" href="logout.php"
                    ><i class="fa-solid fa-clock-rotate-left fa-lg"></i> Histori Transaksi</a
                  >
                </li>
                <li>
                  <a class="dropdown-item py-2 btn btn-light" href="logout.php"
                    ><i class="fa-sharp fa-solid fa-right-from-bracket fa-lg"></i> Logout</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="container-floid bg-light">
      <div class="container">
        <div class="row gx-4 py-2 mt-5">
          <div class="col-lg-9">
            <div class="bg-white p-3 rounded-2 shadow">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Pilih Semua
                    </label>
                </div>
            </div>
            <div class="bg-white p-3 rounded-2 shadow mt-3"> 
                <div class="row">
                    <div class="col-lg-1 d-flex align-content-center flex-wrap">
                        <div class="form-check ">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">                            
                        </div>
                    </div>
                    <div class="col-lg-2">
                    <img
                        src="https://i0.wp.com/post.healthline.com/wp-content/uploads/2020/02/raw-potatoes-potato-1296x728-header.jpg?w=1155&h=1528"
                        class="card-img-top object-fit-cover rounded-2"
                        height="100"                        
                        alt="..."
                    />
                    </div>
                    <div class="col-lg-5">
                    <p class="fs-4 lh-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="col-lg-4">
                    <div class="form-floating">
                        <input type="number" id="typeNumber" class="form-control form-control-sm" min="1" max="10" />
                        <label class="form-label" for="typeNumber">Jumlah</label>
                    </div>
                        <p class="fs-4 text-danger fw-bold text-end">Rp.100.000</p>                  
                    </div>                  
                </div>    
            </div>
            <div class="bg-white p-3 rounded-2 shadow mt-3"> 
                <div class="row">
                    <div class="col-lg-1 d-flex align-content-center flex-wrap">
                        <div class="form-check ">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">                            
                        </div>
                    </div>
                    <div class="col-lg-2">
                    <img
                        src="https://i0.wp.com/post.healthline.com/wp-content/uploads/2020/02/raw-potatoes-potato-1296x728-header.jpg?w=1155&h=1528"
                        class="card-img-top object-fit-cover rounded-2"
                        height="100"                        
                        alt="..."
                    />
                    </div>
                    <div class="col-lg-5">
                    <p class="fs-4 lh-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="col-lg-4">
                    <div class="form-floating">
                        <input type="number" id="typeNumber" class="form-control form-control-sm" min="1" max="10" />
                        <label class="form-label" for="typeNumber">Jumlah</label>
                    </div>
                        <p class="fs-4 text-danger fw-bold text-end">Rp.100.000</p>                  
                    </div>                  
                </div>    
            </div>
          </div>
          <div class="col-lg-3 p-2">
            <div class="sticky-top z-2" style="top:12%">
              <div class="bg-white rounded-2 shadow">
                <div class="p-3 d-grid gap-1">                                  
                  <p class="fs-4">Total Pembayaran</p>                                        
                  <p class="fs-4 text-danger fw-bold">Rp.1.000.000</p>                                    
                  <a class="btn py-2 fw-semibold btn-success" href="">Beli Sekarang</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>