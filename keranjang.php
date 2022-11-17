<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Keranjang - Tokopedia</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <section class="vh-100">
        <div class="container text-start">
            <div class="row pt-5">
                <div class="col-1">
                </div>


                <div class="col-7">
                    <h3>Keranjang</h3>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="cekPilih">
                        <label class="form-check-label" for="cekPilih">
                            Pilih Semua
                        </label>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <input class="form-check-input" type="checkbox" id="item1">
                            <label class="form-check-label" for="item1">
                                <h5>Suntik</h5>
                                <div class="d-flex justify-content-between">
                                    <img src="img/suntikan.png" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                </div>
                            </label>
                        </div>
                    </div>
                    <!-- <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                          <img
                            src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                            class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                        </div>
                        <div class="ms-3">
                          <h5>Iphone 11 pro</h5>
                          <p class="small mb-0">256GB, Navy Blue</p>
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        <div style="width: 50px;">
                          <h5 class="fw-normal mb-0">2</h5>
                        </div>
                        <div style="width: 80px;">
                          <h5 class="mb-0">$900</h5>
                        </div>
                        <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </div>
                  </div>
                </div> -->
                </div>

                <!-- Kolom kanan Berisi total -->
                <div class="col-4 fixed-top offset-sm-8 pt-5">
                    <div class="card w-75">
                        <div class="card-body">
                            <h5 class="card-title">Ringkasan Belanja</h5>
                            <p class="card-text">
                            <div class="d-flex justify-content-between">
                                <div>Total Harga (n barang)</div>
                                <div>Rp67.000</div>
                            </div>
                            </p>
                            <hr>
                            <h5 class="card-text pb-2">
                                <div class="d-flex justify-content-between">
                                    <div>Total Harga</div>
                                    <div>Rp67.000</div>
                                </div>
                            </h5>
                            <a href="#" class="btn btn-primary d-grid gap-2" style="background-color:#00A445;">Beli (n)</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>