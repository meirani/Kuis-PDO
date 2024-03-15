<?php
require 'class/Proyek.php';
$proyek = new Proyek();

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $proyek->delete($id);
    header('location: index.php');
}
?>