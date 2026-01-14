<!--Muhammad Iqbal(A11.2024.15747)-->
<!--Muhammad Iqbal(A11.2024.15747)-->
<!--Muhammad Iqbal(A11.2024.15747)-->
<?php
$username = $_SESSION['username'];
$sql = "SELECT * FROM user WHERE username = '$username'";
$hasil = $conn->query($sql);
$row = $hasil->fetch_assoc();
?>

<div class="container mt-4">
    <form action="update_profil.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="username" value="<?= $row['username'] ?>" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Ganti Password</label>
            <input type="password" class="form-control" name="password" placeholder="Tuliskan Password Baru Jika Ingin Mengganti Password Saja">
        </div>
        <div class="mb-3">
            <label class="form-label">Ganti Foto Profil</label>
            <input type="file" class="form-control" name="foto">
        </div>
        <div class="mb-3">
            <label class="form-label">Foto Profil Saat Ini</label><br>
            <img src="img/<?= $row['foto'] ?>" width="100">
        </div>
        <button type="submit" name="simpan" class="btn btn-primary">simpan</button>
    </form>
</div>
<!--Muhammad Iqbal(A11.2024.15747)-->
<!--Muhammad Iqbal(A11.2024.15747)-->
<!--Muhammad Iqbal(A11.2024.15747)-->