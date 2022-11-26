<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Riwayat Pembelian</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script>
        function toggle(source) {
            checkboxes = document.querySelectorAll('[id$="_item"]');
            for (var i = 0, n = checkboxes.length; i < n; i++) {
                checkboxes[i].checked = source.checked;
            }
        }
    </script>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg background-primary" style="height:60px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="keranjang.php" style="font-weight:bolder; color:#00A445;">
                <img src="asset/logo putih.png" alt="logo" style="height: 25px; margin-top: -7px; padding-left: 4px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size:20px;">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" style="color: #00A445;">
                        <a class="nav-link text-white" href="index_login.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="#produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="keranjang.php">Keranjang</a>
                    </li>
                </ul>
                <a class="d-flex" href="logout.php" style="text-decoration: none;">
                    <button type="button" class="btn btn-outline-light">Logout</button>
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
                        <input class="form-check-input" type="checkbox" id="cekPilih" onClick="toggle(this)">
                        <label class="form-check-label" for="cekPilih">
                            Pilih Semua
                        </label>
                    </div>

                    <div class="card">
                        <div class="card-body">

                            <!-- ganti barang -->
                            <?php
                            include('koneksi.php');
                            $username = $_SESSION['username'];
                            $sql = "SELECT a.keranjangid, a.total_harga, a.productid, a.quantity, a.catatanorder, c.name, c.penjelasan, c.foto, c.price 
                                    FROM keranjang a INNER JOIN product c 
                                    ON a.productid=c.productid where a.username='$username';";

                            $query    = mysqli_query($connect, $sql);
                            $jumlah = 0;
                            $totalharga = 0;

                            while ($data = mysqli_fetch_array($query)) {
                            ?>

                                <div class="card border-light">
                                    <div class="card-body">
                                        <input class="form-check-input" type="checkbox" id="<?= $data['keranjangid'] ?>_item" name="<?= $data['keranjangid'] ?>">
                                        <label class="form-check-label" for="item">
                                            <h5><?= $data['name'] ?></h5>
                                        </label>
                                        <div class="ps-3">
                                            <div class="d-flex" style="height:100px;">
                                                <img src="img/<?= $data['foto'] ?>" class="img-fluid rounded-3" alt="Shopping item" style="object-fit: contain; width:100px">
                                                <p class="ps-4"><?= $data['penjelasan'] ?></p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h5>Rp<?= number_format($data['price'], 0, "", ".") ?> x <?= $data['quantity'] ?></h5>
                                                <h5>Rp<?= number_format($data['total_harga'], 0, "", ".") ?></h5>
                                            </div>
                                            <div class="d-flex mt-3">
                                                <a> Catatan :</a>
                                                <a style="text-decoration:none;"><?= $data['catatanorder'] ?><a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                            <div class="col-4 fixed-top offset-8 my-5 py-5">
                                <div class="card w-75">
                                    <a href="#" class="btn btn-primary d-grid gap-2" style="background-color:#00A445;">HAPUS RIWAYAT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <!-- <script src="js/scripts.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>