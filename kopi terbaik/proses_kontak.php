<?php
include 'koneksi.php';

$nama      = $_POST['nama'];
$instagram = $_POST['instagram'];
$email     = $_POST['email'];
$no_hp     = $_POST['no_hp'];
$catatan   = $_POST['catatan'];

$query = "INSERT INTO kontak (nama, instagram, email, no_hp, catatan, tanggal)
          VALUES ('$nama', '$instagram', '$email', '$no_hp', '$catatan', NOW())";

if (mysqli_query($conn, $query)) {
    echo "<script>alert('Pesan berhasil dikirim'); window.location='index.php';</script>";
} else {
    echo "Gagal menyimpan data";
}
?>

