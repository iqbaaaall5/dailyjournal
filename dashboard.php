<!-- Muhammad Iqbal(A11.2024.15747)-->
 <!-- Muhammad Iqbal(A11.2024.15747)-->
  <!-- Muhammad Iqbal(A11.2024.15747)-->
<?php
include "koneksi.php"; 

$username = $_SESSION['username'];
$query_user = $conn->query("SELECT foto FROM user WHERE username = '$username'");
$data_user = $query_user->fetch_assoc();
$foto = $data_user['foto']; 

// Hitung jumlah data article dan gallery
$jumlah_article = $conn->query("SELECT * FROM article")->num_rows;
$jumlah_gallery = $conn->query("SELECT * FROM gallery")->num_rows;
?>
<div class="container text-center mt-5">
    <div class="mb-4">
        <p class="lead mb-0">Selamat Datang,</p>
        <h2 class="text-danger fw-bold"><?= $username ?></h2>
        
        <div class="mt-3">
            <img src="img/<?= $foto ?>" 
                 class="rounded-circle shadow" 
                 style="width: 200px; height: 200px; object-fit: cover;" 
                 alt="Profile Picture">
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-3">
            <div class="card shadow-sm p-3 border-danger">
                <div class="d-flex justify-content-between align-items-center">
                    <span><i class="bi bi-calendar3"></i> Article</span>
                    <span class="badge rounded-circle bg-danger fs-5 p-3"><?= $jumlah_article ?></span>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm p-3 border-danger">
                <div class="d-flex justify-content-between align-items-center">
                    <span><i class="bi bi-camera"></i> Gallery</span>
                    <span class="badge rounded-circle bg-danger fs-5 p-3"><?= $jumlah_gallery ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Muhammad Iqbal(A11.2024.15747)-->
 <!-- Muhammad Iqbal(A11.2024.15747)-->
  <!-- Muhammad Iqbal(A11.2024.15747)-->