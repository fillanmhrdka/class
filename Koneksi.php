<?php
// konfigurasi database
$host = "localhost"; // server database
$username = "root"; // username MySQL
$password = ""; // password MySQL
$database = "pemograman_1"; // nama database
// membuat koneksi ke database
$conn = mysqli_connect($host,$username, $password, $database);
// cek koneksi
if ($conn) {
echo "✅ Koneksi ke database BERHASIL!<br>";
} else {
die("❌ Koneksi ke database GAGAL: " . mysqli_connect_error());
}
?>