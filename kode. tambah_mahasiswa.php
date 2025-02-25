<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tambah Data Mahasiswa </title>
</head>

<body>
    <h2>Tambah Data Mahasiswa</h2>
    <from action="proses_Tambah.php" method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required><br>

    
        <label>NIM:</label>
        <input type="text" name="nim" required><br>

        <label>Email:</label>
        <input type="email" name="email" required><br>    

<label>Nomor:</label>
<input type="text" name="Nomor" required><br>

        <label>Jurusan:</label>
        <input type="text" name="Jurusan" required><br>
        
        <input type="submit" value="Tambah">

</body>
</html>