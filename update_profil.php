<!--Muhammad Iqbal(A11.2024.15747)-->
<!--Muhammad Iqbal(A11.2024.15747)-->
<!--Muhammad Iqbal(A11.2024.15747)-->
<?php
include "koneksi.php";
session_start();

if (isset($_POST['simpan'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    //Update Password jika diisi
    if (!empty($password)) {
        $password_hashed = md5($password); 
        $sql_password = "UPDATE user SET password = '$password_hashed' WHERE username = '$username'";
        $conn->query($sql_password); 
    }
    //Update foto jika ada file baru
    if (!empty($_FILES['foto']['name'])) {
        $nama_file = $_FILES['foto']['name'];
        $tmp_name = $_FILES['foto']['tmp_name'];
        $direktori = "img/";

        if (move_uploaded_file($tmp_name, $direktori . $nama_file)) {
            $sql_foto = "UPDATE user SET foto = '$nama_file' WHERE username = '$username'";
            $conn->query($sql_foto);
        }
    }
    echo "<script>
            alert('Profil berhasil diperbarui!');
            window.location='admin.php?page=profile';
          </script>";
} else {
    header("location:admin.php?page=profile");
}
?>
<!--Muhammad Iqbal(A11.2024.15747)-->
<!--Muhammad Iqbal(A11.2024.15747)-->
<!--Muhammad Iqbal(A11.2024.15747)-->