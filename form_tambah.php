<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Tambah Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .container {
            width: 400px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0,0,0,0.2);
        }
        h2 {
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], select {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn-container {
            text-align: right;
        }
        button {
            background-color: #007BFF;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Tambah Data Mahasiswa</h2>

    <form action="proses_tambah.php" method="POST">
        <label>ID Mahasiswa:</label>
        <input type="text" name="id_mhs" required>

        <label>Nama Mahasiswa:</label>
        <input type="text" name="nama_mhs" required>

        <label>Alamat Mahasiswa:</label>
        <input type="text" name="alamat_mhs" required>

        <label>Jenis Kelamin:</label>
        <select name="jenis_kelamin" required>
            <option value="">-- Pilih --</option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select>

        <label>ID Jurusan:</label>
        <input type="text" name="id_jurusan" required>

        <label>ID Kursi:</label>
        <input type="text" name="id_kursi" required>

        <label>ID Pos:</label>
        <input type="text" name="id_pos" required>

        <div class="btn-container">
            <button type="submit">Simpan</button>
        </div>
    </form>
</div>
</body>
</html>
