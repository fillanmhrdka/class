<?php
  // Ambil data dari form
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Contoh validasi sederhana
  if ($username === "admin" && $password === "1234") {
      echo "<h2>Login berhasil!</h2>";
      echo "<p>Selamat datang, $username.</p>";
  } else {
      echo "<h2>Login gagal!</h2>";
      echo "<p>Username atau password salah.</p>";
      echo "<a href='index.html'>Kembali</a>";
  }
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
  <link rel="stylesheet" href="style05.css">
</head>
<body>

  <div class="container">
    <h1>Daftar Mahasiswa</h1>

    <div class="top-actions">
      <button id="toggleDarkMode">🌙 Toggle Dark Mode</button>
      <a href="form_tambah.php" class="btn-new">➕ New Data</a>
    </div>

    <?php
    include 'koneksi.php';

    $sql = "SELECT a.id_mhs, upper (a.nama_mhs) as nama_mhs , a.jenis_kelamin, a.alamat_mhs, b.nama_jurusan, c.nama_pos, d.nama_kursi 
    FROM tmahasiswa a 
    JOIN tjurusan b ON a.id_jurusan = b.id_jurusan 
    JOIN tkodepos c ON a.id_pos = c.id_pos 
    JOIN tkursi d ON a.id_kursi = d.id_kursi";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "<table>";
      echo "<tr>
	  <th>ID Mhs</th>
	  <th>Nama Mhs</th>
	  <th>Jenis Kelamin</th>
	  <th>Alamat Mhs</th>
	  <th>Nama Jurusan</th>
	  <th>Nama Pos</th>
	  <th>nama Kursi</th>
	  </tr>";

      while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id_mhs"]."</td>
                <td>".$row["nama_mhs"]."</td>
                <td>".$row["jenis_kelamin"]."</td>
				<td>".$row["alamat_mhs"]."</td>
				<td>".$row["nama_jurusan"]."</td>
				<td>".$row["nama_pos"]."</td>
				<td>".$row["nama_kursi"]."</td>
              </tr>";
      }

      echo "</table>";
    } else {
      echo "<p>Tidak ada data mahasiswa.</p>";
    }

    $conn->close();
    ?>
  </div>

  <script>
  // Dark mode toggle
  const toggleBtn = document.getElementById('toggleDarkMode');
  toggleBtn.addEventListener('click', () => {
    document.body.classList.toggle('dark');
  });
  </script>

</body>
</html>
