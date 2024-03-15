<?php
class Proyek
{
    public $db;

    public function __construct()
    {
        require 'koneksi.php';
        $this->db = $conn;
    }

    public function view()
    {
        $query = $this->db->query("SELECT * FROM proyek");
        $query->execute();
        return $query->fetchAll();
    }

    public function insert($nama_proyek, $deskripsi, $deadline)
    {
        $query = $this->db->prepare("INSERT INTO proyek (nama_proyek, deskripsi, deadline) VALUES (:nama_proyek, :deskripsi, :deadline)");
        $query->bindParam(':nama_proyek', $nama_proyek);
        $query->bindParam(':deskripsi', $deskripsi);
        $query->bindParam(':deadline', $deadline);
        $query->execute();
    }

    public function delete($id)
    {
        $query = $this->db->prepare("DELETE FROM proyek WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
    }

    public function view_update($id)
    {
        $query = $this->db->prepare("SELECT * FROM proyek WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch();
    }

    public function update($id, $nama_proyek, $deskripsi, $deadline)
    {
        $query = $this->db->prepare("UPDATE proyek SET nama_proyek = :nama_proyek, deskripsi = :deskripsi, deadline = :deadline WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->bindParam(':nama_proyek', $nama_proyek);
        $query->bindParam(':deskripsi', $deskripsi);
        $query->bindParam(':deadline', $deadline);
        $query->execute();
    }
}
?>