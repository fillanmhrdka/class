
<?php
include 'koneksi.php'; // pastikan file koneksi sudah ada

$id_mhs       = $_POST['id_mhs'];
$nama_mhs     = $_POST['nama_mhs'];
$alamat_mhs   = $_POST['alamat_mhs'];
$jenis_kelamin= $_POST['jenis_kelamin'];
$id_jurusan   = $_POST['id_jurusan'];
$id_kursi     = $_POST['id_kursi'];
$id_pos       = $_POST['id_pos'];

$query = "INSERT INTO tmahasiswa (id_mhs, nama_mhs, alamat_mhs, jenis_kelamin, id_jurusan, id_kursi, id_pos) VALUES ('$id_mhs', '$nama_mhs', '$alamat_mhs', '$jenis_kelamin', '$id_jurusan', '$id_kursi', '$id_pos')";

if (mysqli_query($conn, $query)) {
    echo "Data berhasil ditambahkan!";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
