<!DOCTYPE html>
<html lang="en">

<?php
include "database/db.php";
?>

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
                    <form action="" class="d-flex gap-3">
                        <div class="w-100">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Cari barang...">
                        </div>
                        <button class="btn btn-primary">Cari</button>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://avatars.githubusercontent.com/u/184643885?s=200&v=4" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://avatars.githubusercontent.com/u/184643885?s=200&v=4" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://avatars.githubusercontent.com/u/184643885?s=200&v=4" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <div class="row bg-warning-subtle">
        <div class="cols-12">
            <p class="text-center py-3 m-0">copyright OSC 2024</p>
        </div>
    </div>
    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>