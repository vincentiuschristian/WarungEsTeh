<?php
// Koneksi ke database
include "database/koneksi_database.php";

// Ambil data dari database
$query = "SELECT * FROM pesanan";
$result = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pesanan</title>
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
                        <a class="nav-link" href="pesan.php">Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Daftar Pemesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container my-5">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Daftar Pesanan</h2>
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Kode Pos</th>
                            <th scope="col">Es Teh Manis</th>
                            <th scope="col">Es Teh Tawar</th>
                            <th scope="col">Es Lemon Tea</th>
                            <th scope="col">Es Teh Jumbo</th>
                            <th scope="col">Total Tagihan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Validasi jika tidak ada data pada tabel
                        if (mysqli_num_rows($result) > 0) {
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                                        <th scope='row'>{$no}</th>
                                        <td>{$row['nama']}</td>
                                        <td>{$row['telepon']}</td>
                                        <td>{$row['kode_pos']}</td>
                                        <td>{$row['jumlah_es_teh_manis']}</td>
                                        <td>{$row['jumlah_es_teh_tawar']}</td>
                                        <td>{$row['jumlah_es_lemon_tea']}</td>
                                        <td>{$row['jumlah_es_teh_jumbo']}</td>
                                        <td class='text-center'>Rp " . number_format($row['total_tagihan'], 0, ',', '.') . "</td>
                                    </tr>";
                                $no++;
                            }
                        } else {
                            echo "<tr><td colspan='9' class='text-center'>Belum ada pesanan</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
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