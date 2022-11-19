<?php
session_start();
if (empty($_SESSION['username'])) {
    header("location:login.php?message=belum login");
}
?>

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
                        <a class="nav-link text-white" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="#produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="keranjang.php">Keranjang</a>
                    </li>
                </ul>
                <a class="d-flex" href="login.php" style="text-decoration: none;">
                    <button type="button" class="btn btn-outline-light">Login</button>
                </a>
            </div>
        </div>
    </nav>
    <section class="vh-100">
        <div class="container text-start pt-5">
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
                            <!-- ganti barang -->
                            <div class="card border-light">
                                <div class="card-body">
                                    <input class="form-check-input" type="checkbox" id="item1">
                                    <label class="form-check-label" for="item1">
                                        <h5>Suntik</h5>
                                    </label>
                                    <div class="ps-3">
                                        <div class="d-flex" style="height:100px;">
                                            <img src="img/blood.jpg" class="img-fluid rounded-3" alt="Shopping item" style="object-fit: contain; width:100px">
                                            <p class="ps-4">Suntik Keren tes tes placeholder placeholder placeholder placeholder placeholder placeholder placeholder placeholder placeholder placeholder placeholder placeholder placeholder placeholder placeholder placeholder placeholder placeholder placeholder</p>
                                        </div>
                                        <h5>Rp67.000</h5>
                                    </div>

                                    <div class="d-flex ps-3 justify-content-between">
                                        <a data-bs-toggle="collapse" href="#catatan2" role="button" aria-expanded="false" aria-controls="catatan2">
                                            Tulis Catatan
                                        </a>

                                        <div class="d-flex justify-content-center">
                                            <!-- <a href=hapus.php?id_jadwal=<?php echo $datatabel['id_jadwal']; ?>> -->
                                            <button class="btn btn-default pt-0 pb-1 px-1">
                                                <img src="img/sampah.svg" width="18px" class="mx-0 my-0">
                                            </button>
                                            <input type="number" class="form-number text-center" min="1" id="customRange3" style="width: 50px;" value="1">

                                        </div>
                                    </div>
                                    <div class="collapse" id="catatan2" style="width: 130px;">
                                        <input class="card card-body" style="height: 5px;" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- ganti barang -->
                            <div class="card border-light">
                                <div class="card-body">
                                    <input class="form-check-input" type="checkbox" id="item1">
                                    <label class="form-check-label" for="item1">
                                        <h5>Suntik</h5>
                                    </label>

                                    <div class="d-flex justify-content-start ps-3" style="height:100px;">
                                        <img src="img/blood.jpg" class="img-fluid rounded-3" alt="Shopping item" style="object-fit: contain; width:100px">
                                        <p class="ps-4">Suntik Keren tes tes placeholder placeholder placeholder</p>
                                        <h5>Rp67.000</h5>
                                    </div>


                                    <div class="d-flex justify-content-between ps-3">
                                        <a data-bs-toggle="collapse" href="#catatan" role="button" aria-expanded="false" aria-controls="catatan">
                                            Tulis Catatan
                                        </a>
                                        tes
                                    </div>
                                    <div class="collapse" id="catatan" style="width: 130px;">
                                        <input class="card card-body" style="height: 5px;" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- ganti barang -->
                            <div class="card border-light">
                                <div class="card-body">
                                    <input class="form-check-input" type="checkbox" id="item1">
                                    <label class="form-check-label" for="item1">
                                        <h5>Suntik</h5>
                                    </label>

                                    <div class="d-flex justify-content-start ps-3" style="height:100px;">
                                        <img src="img/blood.jpg" class="img-fluid rounded-3" alt="Shopping item" style="object-fit: contain; width:100px">
                                        <p class="ps-4">Suntik Keren tes tes placeholder placeholder placeholder</p>
                                        <h5>Rp67.000</h5>
                                    </div>


                                    <div class="d-flex justify-content-between ps-3">
                                        <a data-bs-toggle="collapse" href="#catatan" role="button" aria-expanded="false" aria-controls="catatan">
                                            Tulis Catatan
                                        </a>
                                        tes
                                    </div>
                                    <div class="collapse" id="catatan" style="width: 130px;">
                                        <input class="card card-body" style="height: 5px;" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kolom kanan Berisi total -->
                    <div class="col-4 fixed-top offset-8 my-5 py-5">
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
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>