<?php
$users = [
    ["nama" => "Budi",      "umur" => 20, "status" => "Aktif"],
    ["nama" => "Sinta",     "umur" => 25, "status" => "Nonaktif"],
    ["nama" => "Andi",      "umur" => 30, "status" => "Aktif"],
    ["nama" => "Dewi",      "umur" => 22, "status" => "Aktif"],
    ["nama" => "Agus",      "umur" => 28, "status" => "Nonaktif"],
    ["nama" => "Rina",      "umur" => 26, "status" => "Aktif"],
    ["nama" => "Joko",      "umur" => 32, "status" => "Nonaktif"],
    ["nama" => "Maya",      "umur" => 21, "status" => "Aktif"],
    ["nama" => "Tono",      "umur" => 27, "status" => "Aktif"],
    ["nama" => "Wati",      "umur" => 24, "status" => "Nonaktif"],
    ["nama" => "Dedi",      "umur" => 29, "status" => "Aktif"],
    ["nama" => "Lina",      "umur" => 23, "status" => "Aktif"],
    ["nama" => "Fajar",     "umur" => 31, "status" => "Nonaktif"],
    ["nama" => "Putri",     "umur" => 19, "status" => "Aktif"],
    ["nama" => "Hendra",    "umur" => 33, "status" => "Nonaktif"],
];

?>





<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
            </ul>
        </header>
    </div>
    <div class="container px-4 py-5" id="featured-3">
        <h2 class="pb-2 border-bottom text-center">Daftar Anggota</h2>
        <div class="row g-5 py-5 row-cols-1 row-cols-lg-3">
            <?php foreach ($users as $user) { ?>
                <div class="feature col shadow p-3 bg-body rounded">
                    <h3 class="fs-2 text-body-emphasis"><?= $user["nama"] ?></h3>
                    <p><?= $user['nama'] . " berusia " . $user['umur'] . " tahun, dan status kepegawaiannya " . $user['status'] ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>