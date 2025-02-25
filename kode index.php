<?php

include 'koneksi.php';
$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data mahasiswa</title>
</head>

<body>
    <h2>Data mahasiswa</h2>
    <a href="tambah_mahasiswa.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>email</th>
            <th>Nomor</th>
            <th>Jurusan</th>
            <th>Aksi</th>
</tr>
<?php while ($row = $result->Fetch_assoc()){ ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['Nama']; ?></td>
    <td><?php echo $row['Nim']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['Nomor']; ?></td>
    <td><?php echo $row['Jurusan']; ?></td>
    <td>
        <a href="edit_mahasiswa.php?id=<?php echo $row['id']; ?>">Edit</a>
        <a href="hapus_mahasiswa.php?id=<?php echo $row['id']; ?>">Hapus</a>
</td>
</tr>
<?php } ?>
</table>
 
</body>
</html>
<?php $conn->close(); ?>