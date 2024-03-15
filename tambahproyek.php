<?php
require 'class/Proyek.php';
$proyek = new Proyek();

if (isset($_POST['tambahproyek']))
{
    $nama_proyek = $_POST['nama_proyek'];
    $deskripsi = $_POST['deskripsi'];
    $deadline = $_POST['deadline'];

    $proyek->insert($nama_proyek, $deskripsi, $deadline);
    header('location: index.php');
}
?>