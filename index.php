<?php
include "database/db.php";

session_start();

// Jika pengguna belum login, redirect ke halaman login.php
if (!isset($_SESSION["username"])) {
    header("Location: /auth/login.php");
    exit();
}

$search_result = [];

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    
    // Query untuk mencari barang berdasarkan nama dengan prepared statements
    $query = "SELECT * FROM barang WHERE nama_barang LIKE :search";
    $stmt = $conn->prepare($query);
    $stmt->execute(['search' => '%' . $search . '%']); // Menggunakan wildcard untuk pencarian

    // Mendapatkan semua hasil sebagai array asosiatif
    $search_result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Findsoed</title>

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-sm bg-warning">
        <div class="container">
            <a class="navbar-brand" href="#">Findsoed</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="btn btn-outline-primary me-3" aria-current="page" href="/auth/regis.php">Daftar</a>
                    <a class="btn btn-primary" aria-current="page" href="/auth/login.php">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- MAIN -->
    <main class="vh-100">
        <div class="container py-5">
            <div class="row justify-content-center mb-4">
                <div class="col-6">
                    <!-- Form pencarian -->
                    <form action="" method="GET" class="d-flex gap-3">
                        <div class="w-100">
                            <input type="text" name="search" class="form-control" placeholder="Cari barang...">
                        </div>
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </form>
                </div>
            </div>            

            <?php
            $sql = "SELECT * FROM barang_hilang";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

            echo '<div class="row mb-3">';

            foreach ($items as $index => $item) {
                // Start a new row for every 3 items
                if ($index % 3 == 0 && $index != 0) {
                    echo '</div><div class="row">';
                }
            ?>
                <div class="col-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="https://avatars.githubusercontent.com/u/184643885?s=200&v=4" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item['nama'] ?></h5>
                            <p class="card-text"><?php echo $item['deskripsi'] ?></p>
                            <a href="/<?php echo $item['id'] ?>" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            // Close the last row
            echo '</div>';

            ?>
        </div>

        <!-- Tampilkan hasil pencarian -->
        <div class="row">
                <?php if (!empty($search_result)) : ?>
                    <?php foreach ($search_result as $barang) : ?>
                        <div class="col-4">
                            <div class="card" style="width: 18rem;">
                                <img src="<?= $barang['gambar'] ?>" class="card-img-top" alt="<?= $barang['nama_barang'] ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $barang['nama_barang'] ?></h5>
                                    <p class="card-text"><?= $barang['deskripsi'] ?></p>
                                    <a href="#" class="btn btn-primary">Lihat detail</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p class="text-center">Barang tidak ditemukan</p>
                <?php endif; ?>
            </div>
        </div>

    </main>

    <!-- FOOTER -->
    <div class="row bg-warning-subtle">
        <div class="cols-12">
            <p class="text-center py-3 m-0">&copy; OSC 2024</p>
        </div>
    </div>
    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>