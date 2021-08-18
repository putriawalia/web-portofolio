<?php 

include 'koneksi.php';

session_start();
// echo "<pre>";
// print_r($_SESSION['keranjang']);
// echo "</pre>";
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
  <!-- link css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- link awesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- link font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Lobster&family=Newsreader:wght@200&family=Roboto:wght@300&display=swap"
    rel="stylesheet">

    
  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">

  <title>Portofolio</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto me-5">
          <a class="nav-link" aria-current="page" href="#">Home</a>
          <a class="nav-link ms-4" href="#">About</a>
          <a class="nav-link ms-4" href="#contact">Contact</a>
          <a class="nav-link ms-4" href="login.php">Admin</a>
          <!-- <a class="navbar-brand" href="#">Putri</a> --> 
        </div>
      </div>
    </div>
  </nav>

  <div class="latar">
    <div class="garis"></div>
    <div class="garis1"></div>
    <div class="text">
      <p>Putri</p>
      <p>Front End Developer</p>
      <!-- <button>Me</button> -->
    </div>
  </div>



  <img src="img/me.jpg" alt="" class="model">

  <section id="about">
  <div class="about">
    <p class="fw-bold">About me</p>
    <p>Halo! nama saya Putri Awalia Septiana dan saya adalah siswa dari SMK Taruna Bhakti di Depok. Saya adalah salah
      satu siswa yang berjurusan rekayasa perangkat lunak di sekolah tersebut.</p>

    <!-- <p class="fw-bold">Skill</p> -->
    <p>Saya masih tahap belajar dalam jurusan itu, mulai dari desain hingga HTML, CSS, Javascript dan php.</p>
  </div>
  </section>


  <!-- <div class="container project mb-5">
    <p class="text fw-bold text-center">Project</p>
    <?php $ambil = $conn->query("SELECT * FROM project")?>
    <?php  while($pr = $ambil->fetch_assoc()):?>
    <div class="row float-start ms-5">
      <div class="col-3">
        <div class="card bg-dark" style="width: 15rem;">
          <a href=""><img src="<?php echo $pr['gambar']?>" class="rounded-circle" alt="..."></a>
          <img src="<?php echo $pr['gambar']?>" class="rounded-circle" alt="...">
          <h5 class="card-title text-center fw-bold"><?php echo $pr['nama_project']?></h5>
          <p class="card-text text-center"><?php echo $pr['deskripsi']?></p>
        </div>
      </div>
    </div>
  </div>
  </div>
  <?php endwhile; ?>
  </div> -->

  <!-- project -->
  <div class="project ms-5">
  <p class="text text-center ms-5 fw-bold">Project</p>
    <?php $ambil = $conn->query("SELECT * FROM project")?>
    <?php  while($pr = $ambil->fetch_assoc()):?>
    <div class="container">
        <div class="row float-start ms-5 text-center">
            <div class="col-3">
                <div class="card bg-dark text-white text-center" style="width: 18rem;">
                <a href=""><img src="<?= $pr['gambar'] ?>" class="" alt="..."></a>
                    <!-- <img src="<?= $pr['gambar'] ?>" class="card-img-top text-center" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title"><?= $pr['nama_project'] ?></h5>
                        <p class="card-text"><?= $pr['deskripsi'] ?></p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php  endwhile; ?>
  </div>
    <!-- project tutup -->
    




<section id="contact">
<div class="contact">
    <p>Contact Me</p>
    <form method="POST" name="forminput">
      <form action="simpan.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
          <input type="text" class="form-control bg-transparent" id="nama" name="nama" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control bg-transparent"" id=" email" name="email"
            aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Pesan</label>
          <input type="text" class="form-control bg-transparent" id="pesan" name="pesan" aria-describedby="emailHelp">
        </div>
        <!-- <a href="" value="simpan" class="btn bg-dark text-white">Kirim</a> -->
        <!-- <button type="submit" value="simpan" class="btn bg-dark text-white">Kirim</button> -->
        <input type="submit" name="simpan" value="Kirim" class="btn mt-2 mb-3 text-white bg-dark">
      </form>
    </form>
  </div>
</section>


  <div class="footer bg-dark">
  <div class="container">
  <div class="row">
    <div class="col-sm-3">
      <p class="me-5 float-left">Contact Us</p><br><br><br><br><br>
      <a href="http://www.putriawalia.septiana01@gmail.com/"><i class="far fa-envelope me-2"></i>putriawalia.septiana01@gmail.com</a><br>
      <a href=""><i class="fas fa-phone mt-3 me-2"></i>+62 882 95529848</a><br>
    </div>
    <div class="col-sm-4">
      <p>Going To Internet</p>
      <div class="icon">
      <a href=""><i class="fab fa-github"></i></a>
      <a href="http://line.me/ti/p/~putriiawal"><i class="fab fa-line"></i></a>
      <a href="https://wa.me/6285778228328"><i class="fab fa-whatsapp"></i></a>
      <a href="https://www.instagram.com/putriiawal/"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </div>
  </div>
    <!-- <p>Going To Internet</p>
    <div class="icon">
      <div><a href="http://line.me/ti/p/~putriiawal"><i class="fab fa-line"></i></a></div>
      <div><a href="https://www.instagram.com/putriiawal/"><i class="fab fa-instagram"></i></a></i></div>
      <div><a href=""><i class="far fa-envelope"></i></a></div>
    </div> -->
    <!-- <div><a href="https://wa.me/6285778228328"><i class="fab fa-whatsapp"></i></a></div> -->
  </div>


  <?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pesan = $_POST['pesan'];
        $sql = "INSERT INTO contact (nama,email,pesan) 
        VALUES ('$nama','$email','$pesan')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo ('location: index.php');
        } else {
            header('location: index.php?status=gagal');
        }
    }
    ?>
















  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>

  <!-- Page Specific JS File -->

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>