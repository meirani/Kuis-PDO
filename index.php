<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Proyek</title>
</head>

<body>
    <h1 align="center">Daftar Proyek</h1>
<table border="1" align="center">
    <tr>
        <th>ID</th>
        <th>Nama Proyek</th>
        <th>Deskripsi</th>
        <th>Deadline</th>
        <th>Action</th>
    </tr>

    <?php
    require 'class/Proyek.php';
    $proyek = new Proyek();
    $daftar = $proyek->view();
    $no = 1;
    foreach ($daftar as $row) { 
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nama_proyek'] . "</td>";
        echo "<td>" . $row['deskripsi'] . "</td>";
        echo "<td>" . $row['deadline'] . "</td>";
        echo "<td>
                <a href='updateproyek.php?id=" . $row['id'] . "'>Update</a> | 
                <a href='deleteproyek.php?id=" . $row['id'] . "'>Delete</a>
              </td>";
        echo "</tr>";
    }
    ?>

</table>
    <br><br><br>
    <h2 align="center">Tambah Proyek</h2>

    <form action="tambahproyek.php" method="post" align="center">
        <label for="nama_proyek">Nama Proyek</label><br>
        <input type="text" name="nama_proyek" id="nama_proyek"><br>

        <label for="deskripsi">Deskripsi</label><br>
        <input type="text" name="deskripsi" id="deskripsi"><br>
        
        <label for="deadline">Deadline</label><br>
        <input type="date" name="deadline" id="deadline"><br><br>
        
        <input type="submit" value="submit" name="tambahproyek">
    </form>

</table>
</body>
</html>

