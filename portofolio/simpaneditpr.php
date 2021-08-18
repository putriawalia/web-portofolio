<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $id = $_POST['id_project'];
    $gambar = $_POST['gambar'];
    $nama = $_POST['nama_project'];
    $deskripsi = $_POST['deskripsi'];

    $sql = "UPDATE project SET gambar='$gambar',nama_project='$nama', deskripsi='$deskripsi' WHERE id_project='$id'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header('Location: project.php');
    } else {
        header('location: simpaneditpr.php?status=gagal');
    }
}