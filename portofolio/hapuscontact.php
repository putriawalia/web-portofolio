<?php
include 'koneksi.php';
if (isset($_GET['id'])) {
    header('Location: index.php');
}
$id_contact = $_GET['id_contact']; 

$sql    = "DELETE FROM contact WHERE id_contact='$id_contact'";
$query  = mysqli_query($conn, $sql);

if ($query) {
    header('Location: contact.php');

}else {
    header('Location: contact.php?status=gagal');
}
?>