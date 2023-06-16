<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");


?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama</title>
    <style>
        .card {
            width: 300px;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }
        .card img {
            width: 100%;
            height: auto;
        }
        .card h3 {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Halaman Utama</h1>

    <?php
    // Data gambar, keranjang, dan wishlist
    $gambar1 = "gambar1.jpg";
    $gambar2 = "gambar2.jpg";
    $gambar3 = "gambar3.jpg";
    $keranjang = 5;
    $wishlist = 10;
    ?>

    <!-- Card Gambar -->
    <div class="card">
        <img src="<?php echo $gambar1; ?>" alt="Gambar 1">
        <h3>Gambar 1</h3>
    </div>

    <!-- Card Keranjang Anda -->
    <div class="card">
        <img src="<?php echo $gambar2; ?>" alt="Gambar 2">
        <h3>Keranjang Anda (<?php echo $keranjang; ?>)</h3>
    </div>

    <!-- Card Wishlist -->
    <div class="card">
        <img src="<?php echo $gambar3; ?>" alt="Gambar 3">
        <h3>Wishlist (<?php echo $wishlist; ?>)</h3>
    </div>
</body>
</html>
