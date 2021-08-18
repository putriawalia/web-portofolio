
<?php
include 'koneksi.php';
$id = $_GET['id_project'];
$sql    = "SELECT * FROM project WHERE id_project='$id'";
$query  = mysqli_query($conn, $sql);
$pr = mysqli_fetch_assoc($query);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components.css">

    <title>Edit project</title>
    <style>
        .modal-dialog {
            margin-top: 180px;
        }
        body{
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body>

    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                        </div>

                        <div class="card card-primary mt-5">
                            <div class="card-header bg-dark text-white text-center">
                                <h4 class="fw-bold">Form Edit Project</h4>
                            </div>
                            <form action="simpaneditpr.php" method="post">
                                <input type="text" hidden name="id_project" value="<?= $pr['id_project'] ?>">

                            <div class="card-body">
                                <form method="POST" action="#" class="needs-validation" novalidate="">
                                    <div class="form-group">
                                        <label for="gambar">Gambar</label>
                                        <input id="gambar" type="text" class="form-control" name="gambar" tabindex="1"
                                            required autofocus value="<?= $pr['gambar'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="nama">Nama Project</label>
                                        <input id="nama" type="text" class="form-control" name="nama_project" tabindex="1"
                                            required autofocus value="<?= $pr['nama_project'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <input id="deskripsi" type="text" class="form-control" name="deskripsi" tabindex="1"
                                            required autofocus value="<?= $pr['deskripsi'] ?>">
                                    </div>

                                    
                                    

                                    <div class="form-group">
                                        <!-- <a href="project.php" type="submit"
                                            class="btn bg-dark text-white btn-lg btn-block" tabindex="4" name="sumbit">
                                            Simpan
                                        </a> -->
                                        <button class="btn bg-dark mt-3 mb-5 text-white fw-bold" type="submit" name="submit">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
        </section>
    </div>



    <?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $id = $_POST['id_project'];
    $nama = $_POST['nama_project'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_POST['gambar'];

    $sql = "UPDATE project SET nama_project='$nama', gambar='$gambar', nama_project='$nama', deskripsi='$deskripsi' WHERE id_project='$id'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header('Location: project.php');
    } else {
        header('location: simpaneditpr.php?status=gagal');
    }
}
?>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
</body>

</html>