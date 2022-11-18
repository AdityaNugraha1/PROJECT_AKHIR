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
                            <div class="card border-light">
                                <div class="card-body">
                                    <input class="form-check-input" type="checkbox" id="item1">
                                    <label class="form-check-label" for="item1">
                                        <h5>Suntik</h5>
                                        <div class="d-flex justify-content-between" style="width:100px;height:100px;">
                                            <img src="img/blood.jpg" class="img-fluid rounded-3" alt="Shopping item" style="object-fit: contain;">
                                        </div>
                                        <p>
                                            <a data-bs-toggle="collapse" href="#catatan" role="button" aria-expanded="false" aria-controls="catatan">
                                                Tulis Catatan
                                            </a>
                                        </p>
                                        <div class="collapse" id="catatan" style="width: 130px;">
                                            <input class="card card-body" style="height: 5px;" type="text">
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
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
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>