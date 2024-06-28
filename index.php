<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Warung Kita</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
        .content-section {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="py-4 ps-5 bg-primary text-white">
        <div class="container">
            <h1>Warung Kita</h1>
        </div>
    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="https://i.pinimg.com/564x/f3/b0/0d/f3b00d2a6a94e7b405e01c7728d7f839.jpg" alt="Logo" width="50"
                    height="50" class="d-inline-block align-top me-2 rounded-circle" style="object-fit: cover;">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pesan.php">Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="daftar_pesanan.php">Daftar Pemesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container content-section my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2 class="text-center mb-4">Menu Minuman</h2>
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-img-container d-flex align-items-center justify-content-center"
                                style="height: 200px;">
                                <img src="https://nilaigizi.com/assets/images/produk/produk_1578041377.jpg"
                                    class="card-img-top" alt="Es Teh Manis"
                                    style="max-height: 100%; width: auto; object-fit: cover;" />
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Es Teh Manis</h5>
                                <p class="card-text">
                                    Rp 3.000
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-img-container d-flex align-items-center justify-content-center"
                                style="height: 200px;">
                                <img src="https://nilaigizi.com/assets/images/produk/produk_1578041377.jpg"
                                    class="card-img-top" alt="Es Teh Tawar"
                                    style="max-height: 100%; width: auto; object-fit: cover;" />
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Es Teh Tawar</h5>
                                <p class="card-text">
                                    Rp 2.000
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-img-container d-flex align-items-center justify-content-center"
                                style="height: 200px;">
                                <img src="https://image.setoko.co/image_v2/500-1696346775534797844.jpg"
                                    class="card-img-top" alt="Es Lemon Tea"
                                    style="max-height: 100%; width: auto; object-fit: cover;" />
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Es Lemon Tea</h5>
                                <p class="card-text">
                                    Rp 5.000
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-img-container d-flex align-items-center justify-content-center"
                                style="height: 200px;">
                                <img src="https://img.ws.mms.shopee.co.id/id-11134207-7qukx-lioj7a4eo9ee27"
                                    class="card-img-top" alt="Es Teh Jumbo"
                                    style="max-height: 100%; width: auto; object-fit: cover;" />
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Es Teh Jumbo</h5>
                                <p class="card-text">
                                    Rp 4.000
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="modal-footer">
        <div class="container text-center">
            <p class="mb-0">
                &copy; 2024 Warung Kita. All Rights Reserved.
            </p>
        </div>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>