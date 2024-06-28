<?php
// Koneksi ke database
include "database/koneksi_database.php";

// Saat button simpan disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['pesan'])) {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $kode_pos = $_POST['kode_pos'];
    $jumlah_es_teh_manis = $_POST['jumlah_es_teh_manis'];
    $jumlah_es_teh_tawar = $_POST['jumlah_es_teh_tawar'];
    $jumlah_es_lemon_tea = $_POST['jumlah_es_lemon_tea'];
    $jumlah_es_teh_jumbo = $_POST['jumlah_es_teh_jumbo'];
    $total_tagihan = $_POST['total_tagihan'];

    // Menyimpan data ke database
    $query = "INSERT INTO pesanan (nama, telepon, kode_pos, jumlah_es_teh_manis, jumlah_es_teh_tawar, jumlah_es_lemon_tea, jumlah_es_teh_jumbo, total_tagihan) 
              VALUES ('$nama', '$telepon', '$kode_pos', '$jumlah_es_teh_manis', '$jumlah_es_teh_tawar', '$jumlah_es_lemon_tea', '$jumlah_es_teh_jumbo', '$total_tagihan')";

    if (mysqli_query($db, $query)) {
        echo "<script>alert('Pesanan berhasil disimpan!');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($db) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pemesanan</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
            <a class="navbar-brand" href="index.php">
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
                        <a class="nav-link " href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="daftar_pesanan.php">Daftar Pemesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Form Pemesanan</h2>
                        <form id="booking-form" action="pesan.php" method="POST">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="telepon" class="form-label">Nomor HP</label>
                                <input type="text" class="form-control" id="telepon" name="telepon" required>
                            </div>
                            <div class="mb-3">
                                <label for="kode_pos" class="form-label">Kode Pos</label>
                                <input type="text" class="form-control" id="kode_pos" name="kode_pos" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Minuman yang dipesan:</label>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <input type="checkbox" class="form-check-input mt-0" id="es_teh_manis"
                                                    name="es_teh_manis">
                                            </div>
                                            <label class="input-group-text" for="es_teh_manis">Es Teh Manis Rp
                                                3.000</label>
                                            <input type="number" class="form-control" id="jumlah_es_teh_manis"
                                                name="jumlah_es_teh_manis" value="0" min="0">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <input type="checkbox" class="form-check-input mt-0" id="es_teh_tawar"
                                                    name="es_teh_tawar">
                                            </div>
                                            <label class="input-group-text" for="es_teh_tawar">Es Teh Tawar Rp
                                                2.000</label>
                                            <input type="number" class="form-control" id="jumlah_es_teh_tawar"
                                                name="jumlah_es_teh_tawar" value="0" min="0">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <input type="checkbox" class="form-check-input mt-0" id="es_lemon_tea"
                                                    name="es_lemon_tea">
                                            </div>
                                            <label class="input-group-text" for="es_lemon_tea">Es Lemon Tea Rp
                                                5.000</label>
                                            <input type="number" class="form-control" id="jumlah_es_lemon_tea"
                                                name="jumlah_es_lemon_tea" value="0" min="0">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <input type="checkbox" class="form-check-input mt-0" id="es_teh_jumbo"
                                                    name="es_teh_jumbo">
                                            </div>
                                            <label class="input-group-text" for="es_teh_jumbo">Es Teh Jumbo Rp
                                                4.000</label>
                                            <input type="number" class="form-control" id="jumlah_es_teh_jumbo"
                                                name="jumlah_es_teh_jumbo" value="0" min="0">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4 center">
                                <label for="total_tagihan" class="form-label">Total Tagihan (Rp)</label>
                                <input type="text" class="form-control" id="total_tagihan" name="total_tagihan"
                                    readonly>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="button" class="btn btn-secondary"
                                    onclick="hitungTotalTagihan()">Hitung</button>
                                <button type="submit" name="pesan" class="btn btn-primary">Pesan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // fungsi untuk menghitung total tagihan
        function hitungTotalTagihan() {
            const hargaEsTehManis = 3000;
            const hargaEsTehTawar = 2000;
            const hargaEsLemonTea = 5000;
            const hargaEsTehJumbo = 4000;

            let totalTagihan = 0;

            if (document.getElementById('es_teh_manis').checked) {
                const jumlahEsTehManis = parseInt(document.getElementById('jumlah_es_teh_manis').value) || 0;
                totalTagihan += jumlahEsTehManis * hargaEsTehManis;
            }

            if (document.getElementById('es_teh_tawar').checked) {
                const jumlahEsTehTawar = parseInt(document.getElementById('jumlah_es_teh_tawar').value) || 0;
                totalTagihan += jumlahEsTehTawar * hargaEsTehTawar;
            }

            if (document.getElementById('es_lemon_tea').checked) {
                const jumlahEsLemonTea = parseInt(document.getElementById('jumlah_es_lemon_tea').value) || 0;
                totalTagihan += jumlahEsLemonTea * hargaEsLemonTea;
            }

            if (document.getElementById('es_teh_jumbo').checked) {
                const jumlahEsTehJumbo = parseInt(document.getElementById('jumlah_es_teh_jumbo').value) || 0;
                totalTagihan += jumlahEsTehJumbo * hargaEsTehJumbo;
            }

            document.getElementById('total_tagihan').value = totalTagihan;
        }
    </script>

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