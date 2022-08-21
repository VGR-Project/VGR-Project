<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Javascript Template Section -->
    <script src="js/template.js"></script>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/override.css">

</head>

<body id="page-top">
    <?php
    
    require_once "php/db_connect.php";
    $sqlQueryTable = "SELECT * FROM gameLists";
    $showDataQuery = $connectDatabase->query($sqlQueryTable);

    if(!$showDataQuery){
    die("error found" . mysqli_error($connect_db));
    }
    
    ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <navbar-template class="navbar-template"></navbar-template>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid col-lg-8">

                    <!-- Content Row -->
                    <div class="row card-custom mb-4">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7 h-100">
                            <div class="card shadow h-100">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="example-wrap m-lg-0">
                                        <div class="example">
                                          <div class="carousel slide" id="game-header" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                              <div class="carousel-item carousel-item-next carousel-item-left">
                                                <img class="w-100" src="img/header_game/omori.jpg" alt="...">
                                              </div>
                                              <div class="carousel-item">
                                                <img class="w-100" src="img/header_game/omori.jpg" alt="...">
                                              </div>
                                              <div class="carousel-item active carousel-item-left">
                                                <img class="w-100" src="img/header_game/omori.jpg" alt="...">
                                              </div>
                                            </div>
                                            <a class="carousel-control-prev carousel-control" href="#game-header" role="button" data-slide="prev">
                                              <span class="carousel-control-prev-icon wb-chevron-left" aria-hidden="true"></span>
                                              <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next carousel-control" href="#game-header" role="button" data-slide="next">
                                              <span class="carousel-control-next-icon wb-chevron-right" aria-hidden="true"></span>
                                              <span class="sr-only">Next</span>
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5 h-100">
                            <div class="card shadow h-100">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">New Added</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body aside">
                                    <div class="list-game overflow-auto scrollbar-none">
                                        <?php
                                        while($row = mysqli_fetch_array($showDataQuery)){
                                            echo "
                                                <div class='card bg-danger text-white shadow'>
                                                    <div class='card-body'>
                                                        <img src='img/game-image/omori_cover.jpg' alt='' class='game-image'>
                                                        <div>
                                                            <h4 class='m-0 font-weight-bold'>".$row["title"]."</h4>
                                                            <h5>".$row["directors"]."</h5>
                                                            <h6>".$row['imdb-rating']."</h6>
                                                            <div class='text-white-50 small'>".$row["genres"]."</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            ";
                                        }
                                        ?>
                                        <div class="card bg-danger text-white shadow">
                                            <div class="card-body">
                                                <img src="img/game-image/omori_cover.jpg" alt="" class="game-image">
                                                <div>
                                                    <h6 class="m-0 font-weight-bold">Omori</h6>
                                                    <div class="text-white-50 small">Masterpiece</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card bg-danger text-white shadow">
                                            <div class="card-body">
                                                <img src="img/game-image/omori_cover.jpg" alt="" class="game-image">
                                                <div>
                                                    <h6 class="m-0 font-weight-bold">Omori</h6>
                                                    <div class="text-white-50 small">Masterpiece</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card bg-danger text-white shadow">
                                            <div class="card-body">
                                                <img src="img/game-image/omori_cover.jpg" alt="" class="game-image">
                                                <div>
                                                    <h6 class="m-0 font-weight-bold">Omori</h6>
                                                    <div class="text-white-50 small">Masterpiece</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Pie Chart -->
                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Recomended</h6>
                                </div>
                                <div class="card-body">
                                    <div class="example-wrap m-lg-0">
                                        <div class="example">
                                          <div class="carousel slide" id="recomended" data-interval="false">
                                            <div class="carousel-inner" role="listbox">
                                              <div class="carousel-item carousel-item-next carousel-item-left">
                                                <div class="d-flex flex-row justify-content-between w-100 container-item">
                                                    <div class="card-body bg-danger col-md-3">
                                                        <img src="img/game-image/omori_cover.jpg" alt="" class="w-100">
                                                        <div>
                                                            <h6 class="m-0 font-weight-bold">Omori</h6>
                                                            <div class="text-white-50 small">Masterpiece</div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body bg-danger col-md-3">
                                                        <img src="img/game-image/omori_cover.jpg" alt="" class="w-100">
                                                        <div>
                                                            <h6 class="m-0 font-weight-bold">Omori</h6>
                                                            <div class="text-white-50 small">Masterpiece</div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body bg-danger col-md-3">
                                                        <img src="img/game-image/omori_cover.jpg" alt="" class="w-100">
                                                        <div>
                                                            <h6 class="m-0 font-weight-bold">Omori</h6>
                                                            <div class="text-white-50 small">Masterpiece</div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body bg-danger col-md-3">
                                                        <img src="img/game-image/omori_cover.jpg" alt="" class="w-100">
                                                        <div>
                                                            <h6 class="m-0 font-weight-bold">Omori</h6>
                                                            <div class="text-white-50 small">Masterpiece</div>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="carousel-item">
                                                <div class="d-flex flex-row justify-content-between w-100 container-item">
                                                    <div class="card-body bg-danger col-md-3">
                                                        <img src="img/game-image/omori_cover.jpg" alt="" class="w-100">
                                                        <div>
                                                            <h6 class="m-0 font-weight-bold">Omori</h6>
                                                            <div class="text-white-50 small">Masterpiece</div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body bg-danger col-md-3">
                                                        <img src="img/game-image/omori_cover.jpg" alt="" class="w-100">
                                                        <div>
                                                            <h6 class="m-0 font-weight-bold">Omori</h6>
                                                            <div class="text-white-50 small">Masterpiece</div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body bg-danger col-md-3">
                                                        <img src="img/game-image/omori_cover.jpg" alt="" class="w-100">
                                                        <div>
                                                            <h6 class="m-0 font-weight-bold">Omori</h6>
                                                            <div class="text-white-50 small">Masterpiece</div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body bg-danger col-md-3">
                                                        <img src="img/game-image/omori_cover.jpg" alt="" class="w-100">
                                                        <div>
                                                            <h6 class="m-0 font-weight-bold">Omori</h6>
                                                            <div class="text-white-50 small">Masterpiece</div>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="carousel-item active carousel-item-left">
                                                <div class="d-flex flex-row justify-content-between w-100 container-item">
                                                    <div class="card-body bg-danger col-md-3">
                                                        <img src="img/game-image/omori_cover.jpg" alt="" class="w-100">
                                                        <div>
                                                            <h6 class="m-0 font-weight-bold">Omori</h6>
                                                            <div class="text-white-50 small">Masterpiece</div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body bg-danger col-md-3">
                                                        <img src="img/game-image/omori_cover.jpg" alt="" class="w-100">
                                                        <div>
                                                            <h6 class="m-0 font-weight-bold">Omori</h6>
                                                            <div class="text-white-50 small">Masterpiece</div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body bg-danger col-md-3">
                                                        <img src="img/game-image/omori_cover.jpg" alt="" class="w-100">
                                                        <div>
                                                            <h6 class="m-0 font-weight-bold">Omori</h6>
                                                            <div class="text-white-50 small">Masterpiece</div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body bg-danger col-md-3">
                                                        <img src="img/game-image/omori_cover.jpg" alt="" class="w-100">
                                                        <div>
                                                            <h6 class="m-0 font-weight-bold">Omori</h6>
                                                            <div class="text-white-50 small">Masterpiece</div>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>
                                            <a class="carousel-control-prev carousel-control" href="#recomended" role="button" data-slide="prev">
                                              <span class="carousel-control-prev-icon wb-chevron-left" aria-hidden="true"></span>
                                              <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next carousel-control" href="#recomended" role="button" data-slide="next">
                                              <span class="carousel-control-next-icon wb-chevron-right" aria-hidden="true"></span>
                                              <span class="sr-only">Next</span>
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Pie Chart -->
                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">information</h6>
                                </div>
                                <div class="card-body">
                                    <div class="example-wrap m-lg-0">
                                        <div class="example">
                                          <div class="carousel slide" id="information" data-interval="false">
                                            <div class="carousel-inner" role="listbox">
                                              <div class="carousel-item carousel-item-next carousel-item-left">
                                                <div class="d-flex flex-row justify-content-between w-100 container-item">
                                                    <div class="card-body bg-danger col-md-6">
                                                        <img src="img/header_game/omori.jpg" alt="" class="w-100">
                                                    </div>
                                                    <div class="card-body bg-danger col-md-6">
                                                        <img src="img/header_game/omori.jpg" alt="" class="w-100">
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="carousel-item">
                                                <div class="d-flex flex-row justify-content-between w-100 container-item">
                                                    <div class="d-flex flex-row justify-content-between w-100 container-item">
                                                        <div class="card-body bg-danger col-md-6">
                                                            <img src="img/header_game/omori.jpg" alt="" class="w-100">
                                                        </div>
                                                        <div class="card-body bg-danger col-md-6">
                                                            <img src="img/header_game/omori.jpg" alt="" class="w-100">
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="carousel-item active carousel-item-left">
                                                <div class="d-flex flex-row justify-content-between w-100 container-item">
                                                    <div class="d-flex flex-row justify-content-between w-100 container-item">
                                                        <div class="card-body bg-danger col-md-6">
                                                            <img src="img/header_game/omori.jpg" alt="" class="w-100">
                                                        </div>
                                                        <div class="card-body bg-danger col-md-6">
                                                            <img src="img/header_game/omori.jpg" alt="" class="w-100">
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>
                                            <a class="carousel-control-prev carousel-control" href="#information" role="button" data-slide="prev">
                                              <span class="carousel-control-prev-icon wb-chevron-left" aria-hidden="true"></span>
                                              <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next carousel-control" href="#information" role="button" data-slide="next">
                                              <span class="carousel-control-next-icon wb-chevron-right" aria-hidden="true"></span>
                                              <span class="sr-only">Next</span>
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row card-custom">
                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5 h-100">
                            <div class="card shadow h-100">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Popular Games</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body aside">
                                    <div class="list-game overflow-auto scrollbar-none">
                                        <div class="card bg-danger text-white shadow">
                                            <div class="card-body">
                                                <img src="img/game-image/omori_cover.jpg" alt="" class="game-image">
                                                <div>
                                                    <h6 class="m-0 font-weight-bold">Omori</h6>
                                                    <div class="text-white-50 small">Masterpiece</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card bg-danger text-white shadow">
                                            <div class="card-body">
                                                <img src="img/game-image/omori_cover.jpg" alt="" class="game-image">
                                                <div>
                                                    <h6 class="m-0 font-weight-bold">Omori</h6>
                                                    <div class="text-white-50 small">Masterpiece</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card bg-danger text-white shadow">
                                            <div class="card-body">
                                                <img src="img/game-image/omori_cover.jpg" alt="" class="game-image">
                                                <div>
                                                    <h6 class="m-0 font-weight-bold">Omori</h6>
                                                    <div class="text-white-50 small">Masterpiece</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card bg-danger text-white shadow">
                                            <div class="card-body">
                                                <img src="img/game-image/omori_cover.jpg" alt="" class="game-image">
                                                <div>
                                                    <h6 class="m-0 font-weight-bold">Omori</h6>
                                                    <div class="text-white-50 small">Masterpiece</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5 h-100">
                            <div class="card shadow h-100">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Top Upcoming Games</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body aside">
                                    <div class="list-game overflow-auto scrollbar-none">
                                        <div class="card bg-danger text-white shadow">
                                            <div class="card-body">
                                                <img src="img/game-image/omori_cover.jpg" alt="" class="game-image">
                                                <div>
                                                    <h6 class="m-0 font-weight-bold">Omori</h6>
                                                    <div class="text-white-50 small">Masterpiece</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card bg-danger text-white shadow">
                                            <div class="card-body">
                                                <img src="img/game-image/omori_cover.jpg" alt="" class="game-image">
                                                <div>
                                                    <h6 class="m-0 font-weight-bold">Omori</h6>
                                                    <div class="text-white-50 small">Masterpiece</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card bg-danger text-white shadow">
                                            <div class="card-body">
                                                <img src="img/game-image/omori_cover.jpg" alt="" class="game-image">
                                                <div>
                                                    <h6 class="m-0 font-weight-bold">Omori</h6>
                                                    <div class="text-white-50 small">Masterpiece</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card bg-danger text-white shadow">
                                            <div class="card-body">
                                                <img src="img/game-image/omori_cover.jpg" alt="" class="game-image">
                                                <div>
                                                    <h6 class="m-0 font-weight-bold">Omori</h6>
                                                    <div class="text-white-50 small">Masterpiece</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5 h-100">
                            <div class="card shadow h-100">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">New Update</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body aside">
                                    <div class="list-game overflow-auto scrollbar-none">
                                        <div class="card bg-danger text-white shadow">
                                            <div class="card-body">
                                                <img src="img/game-image/omori_cover.jpg" alt="" class="game-image">
                                                <div>
                                                    <h6 class="m-0 font-weight-bold">Omori</h6>
                                                    <div class="text-white-50 small">Masterpiece</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card bg-danger text-white shadow">
                                            <div class="card-body">
                                                <img src="img/game-image/omori_cover.jpg" alt="" class="game-image">
                                                <div>
                                                    <h6 class="m-0 font-weight-bold">Omori</h6>
                                                    <div class="text-white-50 small">Masterpiece</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card bg-danger text-white shadow">
                                            <div class="card-body">
                                                <img src="img/game-image/omori_cover.jpg" alt="" class="game-image">
                                                <div>
                                                    <h6 class="m-0 font-weight-bold">Omori</h6>
                                                    <div class="text-white-50 small">Masterpiece</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card bg-danger text-white shadow">
                                            <div class="card-body">
                                                <img src="img/game-image/omori_cover.jpg" alt="" class="game-image">
                                                <div>
                                                    <h6 class="m-0 font-weight-bold">Omori</h6>
                                                    <div class="text-white-50 small">Masterpiece</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>