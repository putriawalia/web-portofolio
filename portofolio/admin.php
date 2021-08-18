<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Dashboard</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/components.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .section{
            margin-top: 100px;
            justify-content: center;
        }
        .card img{
            width: 150px;
            height: 150px;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg bg-dark"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>

                    </ul>
                    <div class="search-element">

                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <i class="fas fa-user-circle"></i>
                            <div class="d-sm-none d-lg-inline-block">Hi, Putri</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="features-activities.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.php">PUTRI</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <!-- <a href="index.html">St</a> -->
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="nav-item">
                            <a href="admin.php" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                            <!-- <a href="admin.php" class="nav-link"><i class="fad fa-user-cog"></i><span>Admin</span></a> -->
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                                <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="menu-header">Data</li>
                        <li class="nav-item">
                            <!-- <a href="#" class="nav-link" data-toggle=""><i class="fal fa-address-card"></i>
                                <span>ABOUT</span></a> -->
                        </li>
                        <li class=""><a class="nav-link" href="skill.php"><i class="fal fa-code-branch"></i>
                                <span>SKILL</span></a></li>
                        <li class="nav-item">
                            <a href="project.php" class="nav-link has-"><i class="fas fa-tasks"></i>
                                <span>PROJECT</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link has-"><i class="far fa-file-signature"></i>
                                <span>CONTACT</span></a>
                        </li>

                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="card" style="width: 16rem;">
                                <a href=""><img src="img/skills.png" class="card-img-top m-5" alt="..." ></a>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">SKILLS</h5>
                                        <!-- <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk
                                            of the card's content.</p> -->
                                        <!-- <a href="#" class="btn btn-dark">See...</a> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 16rem;">
                                <a href="project.php"><img src="img/project.png" class="card-img-top m-5" alt="..." ></a>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">PROJECT</h5>
                                        <!-- <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk
                                            of the card's content.</p> -->
                                        <!-- <a href="#" class="btn btn-dark">See...</a> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card " style="width: 16rem;">
                                    <a href="contact.php"><img src="img/contact.png" class="card-img-top m-5" alt="..." ></a>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">CONTACT</h5>
                                        <!-- <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk
                                            of the card's content.</p> -->
                                        <!-- <a href="#" class="btn btn-dark">See...</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="section-body">
                    </div>
                </section>
            </div>
            <!-- <footer class="main-footer"> -->
            <!-- <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div> -->
            <!-- </footer> -->
        </div>
    </div>

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