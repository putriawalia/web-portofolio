<?php
include 'koneksi.php';
if (isset($_GET['id'])) {
    header('Location: index.php');
}
$id_project = $_GET['id_project']; 

$sql    = "DELETE FROM project WHERE id_project='$id_project'";
$query  = mysqli_query($conn, $sql);

if ($query) {
    header('Location: project.php');

}else {
    header('Location: project.php?status=gagal');
}
?>